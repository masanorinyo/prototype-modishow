<?php
	//if it's going to need the database, then it's probably smart to require it before we start
	require_once(MODEL_PATH.DS.'database.php');

	class User extends DatabaseObject{

		protected static $table_name = "users";
		protected static $db_fields = array(
			'user_id',
			'model_id',
			'facebook_loggin',
			'username',
			'email',
			'password',
			'thumbnail',
			'user_type',
			'skin_color',
			'age',
			'country',
			'city',
			'bodyshape',
			'inseam',
			'waist',
			'height',
			'chest_bust',
			'hip',
			'sex'
		);

		public $user_id;
		public $model_id;
		public $facebook_loggin;
		public $username;
		public $password;
		public $thumbnail;
		public $user_type;
		public $age;
		public $country;
		public $city;
		public $bodyshape;
		public $inseam;
		public $waist;
		public $height;
		public $chest_bust;
		public $hip;
		public $sex;


		public static function authenticate($username="",$password=""){
			global $database;
			$username = $database->escape_value($username);
			$password = $database->escape_value($password);

			$sql =  "SELECT * FROM user ";
			$sql .= "WHERE username ='{$username}' ";
			$sql .= "&& password='{$password}' ";
			$result_array = self::find_by_sql($sql);

		
			return !empty($result_array) ? array_shift($result_array) : false;
		}


		public static function password_encrypt($password) {
	  	$hash_format = "$2y$10$";   // Tells PHP to use Blowfish with a "cost" of 10
		  $salt_length = 22; 					// Blowfish salts should be 22-characters or more
		  $salt = generate_salt($salt_length);
		  $format_and_salt = $hash_format . $salt;
		  $hash = crypt($password, $format_and_salt);
			return $hash;
		}
		
		public static  function generate_salt($length) {
		  // Not 100% unique, not 100% random, but good enough for a salt
		  // MD5 returns 32 characters
		  $unique_random_string = md5(uniqid(mt_rand(), true));
		  
			// Valid characters for a salt are [a-zA-Z0-9./]
		  $base64_string = base64_encode($unique_random_string);
		  
			// But not '+' which is valid in base64 encoding
		  $modified_base64_string = str_replace('+', '.', $base64_string);
		  
			// Truncate string to the correct length
		  $salt = substr($modified_base64_string, 0, $length);
		  
			return $salt;
		}
		
		public static function password_check($password, $existing_hash) {
			// existing hash contains format and salt at start
		  $hash = crypt($password, $existing_hash);
		  if ($hash === $existing_hash) {
		    return true;
		  } else {
		    return false;
		  }
		}

		public static function find_admin_by_username($username) {
			global $connection;
			
			$safe_username = mysqli_real_escape_string($connection, $username);
			
			$query  = "SELECT password ";
			$query .= "FROM user ";
			$query .= "WHERE username = '{$safe_username}' ";
			$query .= "LIMIT 1";
			$user_password = mysqli_query($connection, $query);
			confirm_query($user_password);
			if($admin = mysqli_fetch_assoc($admin_set)) {
				return $admin;
			} else {
				return null;
			}
		}

		public function signup($username,$password){
			// validations
			$required_fields = array("username", "password");
			validate_presences($required_fields);
			  
			$fields_with_max_lengths = array("username" => 30);
			validate_max_lengths($fields_with_max_lengths);
			  
			if (empty($errors)) {
				// Perform Create

			    $username = mysql_prep($_POST["username"]);
			    $hashed_password = password_encrypt($_POST["password"]);
			    
			    $query  = "INSERT INTO admins (";
			    $query .= "  username, hashed_password";
			    $query .= ") VALUES (";
			    $query .= "  '{$username}', '{$hashed_password}'";
			    $query .= ")";
			    $result = mysqli_query($connection, $query);

			    if ($result) {
			      // Success
			      $_SESSION["message"] = "Admin created.";
			      redirect_to("manage_admins.php");
			    } else {
			      // Failure
			      $_SESSION["message"] = "Admin creation failed.";
			    }
			}
		}


		//creating a thumbnail for user profile image
		public function make_thumbnail(){




		}
		
	}

?>