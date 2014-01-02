<?php
	//if it's going to need the database, then it's probably smart to require it before we start
	require_once(MODEL_PATH.DS.'database.php');

	class DatabaseObject{

		protected static $table_name;
		protected static $table_primaryKey;

		public static function find_all(){
			return static::find_by_sql("SELECT * FROM ".static::$table_name);
		}

		public static function find_by_id($id=0){
			global $database;

			$query = "SELECT * ";
			$query .="FROM ".static::$table_name." ";
			$query .="WHERE ".static::$table_primaryKey."=".$database->escape_value($id)." ";
			$query .="LIMIT 1";

			$result_array = static::find_by_sql($query);

			return !empty($result_array) ? array_shift($result_array) : false;
		}

		//find the user information by attribute

		public static function find_by_attribute($value,$attr) {
			global $connection;
			
			$safe_value = mysqli_real_escape_string($connection, $value);
			
			$query  = "SELECT ".$attr." ";
			$query .= "FROM ".static::$table_name." ";
			$query .= "WHERE ".$attr." = '".$safe_value."' ";
			$query .= "LIMIT 1";
			
			return $result = static::find_by_sql($query);
		}

		public static function find_by_sql($sql=""){
			global $database;

			$result_set = $database->query($sql);

			$object_array =array();

			while($row = $database->fetch_array($result_set)){
				$object_array[] = static::instantiate($row);
			}


			return $object_array;

		}

		

		
		private static function instantiate($record){
			//could check that $record exists and is an array
			$class_name = get_called_class();//Gets the name of the class the static method is called in.

			
			$object = new $class_name;
			//$object->id 		= $record['id'];
			//$object->username 	= $record['username'];
			//$object->password 	= $record['password'];
			//$object->first_name = $record['first_name'];
			//$object->last_name 	= $record['last_name'];


			//more dynamic, short-form approach:
			foreach($record as $attribute => $value){
				if($object->has_attribute($attribute)){
					$object->$attribute = $value;
					
				}
			
			}
			return $object;

		}

		private function has_attribute($attribute){
		
			//get_object_vars returns an associative array with all attributes
			//(include private ones) as the keys and their current values as the value
			//we don't care about the value, we just want to know if the key exists;
			//will return true or false;
			return array_key_exists($attribute,$this->attributes());
			//array_key_exists()=does the $attribute key exists in the array $object_vars
		
		}

		protected function attributes(){
			
			//return an array of attribute names and their values
			$attributes = array();
			
			foreach(static::$db_fields as $field){
			
				if(property_exists($this, $field)){
			    	$attributes[$field] = $this->$field;
				}
			
			}
			
			return $attributes;
		}

		protected function sanitized_attributes(){
			
			global $database;
			
			$clean_attributes = array();
			//sanitize the values before submitting
			//note: does not alter the actual value of each attribute
			foreach($this->attributes() as $key => $value){
				if(!empty($value) || !is_null($value)){
					$clean_attributes[$key] = $database->escape_value($value);
				}
			}

			return $clean_attributes;
		}

		public function save(){
			$class_name = get_called_class();
			$id = $class_name::table_primaryKey;
			return isset($this->$id)? $this -> update() : $this -> create();

		}

		public function destroy(){
			//first remove the databaseentry
			if($this->delete()){
				//then remove the file
				//Not that even though the database entry is gone, this object 
				//is still around (which lets us use $this-> image_path()).
				$target_path=SITE_ROOT.DS.'public'.DS.$this->image_path();
				return unlink($target_path) ? true:false;
			}else{
				//database delete failed
				return false;
			}
			

		}

		protected function create(){
			global $database;
			// Don't forget your SQL syntax and good habits:
			// - INSERT INTO table (key, key) VALUES ('value', 'value')
			// - single-quotes around all values
			// - escape all values to prevent SQL injection
			
			$attributes = $this->sanitized_attributes();
		  	$sql = "INSERT INTO ".static::$table_name." (";
			$sql .= join(", ", array_keys($attributes));
		  	$sql .= ") VALUES ('";
			$sql .= join("', '", array_values($attributes));
			$sql .= "')";

		  	if($database->query($sql)) {
		    	$this->table_primaryKey = $database->insert_id();
			    return true;
		  	} else {
		    	return false;
		  	}
		}

		public function update() {
	  		global $database;
			// Don't forget your SQL syntax and good habits:
			// - UPDATE table SET key='value', key='value' WHERE condition
			// - single-quotes around all values
			// - escape all values to prevent SQL injection
			$attributes = $this->sanitized_attributes();
			$attribute_pairs = array();
			foreach($attributes as $key => $value) {
			  $attribute_pairs[] = "{$key}='{$value}'";
			}
			$sql = "UPDATE ".static::$table_name." SET ";
			$sql .= join(", ", $attribute_pairs);
			$sql .= " WHERE id=". $database->escape_value($this->table_primaryKey);
			  $database->query($sql);
			  return ($database->affected_rows() == 1) ? true : false;
		}

		public function delete() {
			global $database;
			// Don't forget your SQL syntax and good habits:
			// - DELETE FROM table WHERE condition LIMIT 1
			// - escape all values to prevent SQL injection
			// - use LIMIT 1
			$sql = "DELETE FROM ".static::$table_name;
			$sql .= " WHERE id=". $database->escape_value($this->table_primaryKey);
			$sql .= " LIMIT 1";
			$database->query($sql);
			return ($database->affected_rows() == 1) ? true : false;
		
			// NB: After deleting, the instance of User still 
			// exists, even though the database entry does not.
			// This can be useful, as in:
			//   echo $user->first_name . " was deleted";
			// but, for example, we can't call $user->update() 
			// after calling $user->delete().
		}

		public static function count_all(){
			global $database;
			$sql = "SELECT COUNT(*) FROM ".static::$table_name;
			$result_set = $database->query($sql);
			$row = $database->fetch_array($result_set);
			return array_shift($row);
		}

	}

?>