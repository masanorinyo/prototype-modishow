<?php
	require_once(CONF_PATH.DS."db_connection.php");

	//convenient when you change the database itself
	class MySQLDatabase{

		private $connection;
		public $last_query;
		public $magic_quotes_active;
		public $real_escape_string_exists;

		function __construct(){
			$this->open_connection();
			$this->magic_quotes_active = get_magic_quotes_gpc();
			$this->real_escape_string_exists = function_exists("mysqli_real_escape_string");
		}

		public function open_connection(){
			$this->connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
			
			if(!$this->connection){
				die("Database connection failed: ".mysqli_connect_error()." (".mysqli_connect_errno().")");
			}else{
				$db_select = mysqli_select_db($this->connection,DB_NAME);
				if(!$db_select){
					die("Database selection failed: ".mysqli_error($this->connection));
				}
			}
		}

		public function close_connection(){
			if(isset($this->connection)){
				mysqli_close($this->connection);
				unset($this->connection);
			}
		}

		private function confirm_query($result){
			if(!$result){
				$output = "Database query failed: ".mysqli_error($this->connection)."<br /><br />";
				//$output .="Last SQL query: ".$this->last_query;
				die($output);
			}
		}

		public function query($sql){
			
			$result = mysqli_query($this->connection,$sql);		

			$this->confirm_query($result);
			return $result;

		}

		public function escape_value($value){
			if($this->real_escape_string_exists){//PHP v4.3.0 or higher
				if($this->magic_quotes_active){//undo any magic quote effects so mysqli_real_escape_string can do the work
					$value=stripcslashes($value);
				}
				$value = mysqli_real_escape_string($this->connection,$value);
			}else{
				if(!$this->magic_quotes_active){
					$value = addslashes($value);
				}
			}
			return $value;
			
		}
		

		//Database neutral methods

		public function num_rows($result_set){
			return mysqli_num_rows($result_set);

		}

		public function insert_id(){
			//get the last id inserted over the current db connection
			return mysqli_insert_id($this->connection);
		}

		public function affected_rows(){
			return mysqli_affected_rows($this->connection);
		}

		public function fetch_array($result_set){
			return mysqli_fetch_array($result_set);

		}

		
	}

	$database = new MySQLDatabase();
	$db =& $database;


?>