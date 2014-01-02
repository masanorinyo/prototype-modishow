<?php
	//if it's going to need the database, then it's probably smart to require it before we start
	require_once(MODEL_PATH.DS.'database.php');

	class User extends DatabaseObject{
		
		public $errors = array();
		public $user_id;
		public $model_id=1;
		public $facebook_loggin=0;
		public $username;
		public $email;
		public $password;
		public $gender;
		public $country;
		public $age;
		public $user_type;
		public $homepage;
		public $twitter;
		public $facebook;
		public $pinterest;
		public $thumbnail;
		public $introduction;
		public $default_img;
		public $city;
		public $bodyshape;
		public $inseam;
		public $waist;
		public $size;
		public $height;
		public $chest_bust;
		public $hip;
		public $joined_time;
		const primaryKey="user_id";
		protected static $table_primaryKey="user_id";
		protected static $table_name = "user";
		protected static $db_fields = array(
			'user_id',
			'model_id',
			'facebook_loggin',
			'username',
			'email',
			'password',
			'introduction',
			'thumbnail',
			'default_img',
			'homepage',
			'twitter',
			'pinterest',
			'facebook',
			'skin_color',
			'country',
			'city',
			'age',
			'bodyshape',
			'inseam',
			'size',
			'waist',
			'height',
			'chest_bust',
			'hip',
			'gender',
			'user_type',
			'joined_time',
		);


		//******************Account Creation******************//
		public static function make($username,$email,$password,$thumbnail="default_thumb.png",$country,$gender,$age=0,$bodyshape=0,$size=0,$height=0,$skin_color=0,$default_img="default_img.png",$introduction="",$homepage=Null,$facebook=Null,$pinterest=Null,$twitter=Null){

			if(!empty($username) && !empty($email) && !empty($password)){
				$new_user = new User();				
				$new_user->username = $username;
				$new_user->email = $email;
				$new_user->password = $password;
				$new_user->thumbnail = $thumbnail;
				$new_user->country = $country;
				$new_user->gender = $gender;
				$new_user->age = (int) $age;
				$new_user->bodyshape = $bodyshape;
				$new_user->size = (int) $size;
				$new_user->height= (int) $height;
				$new_user->default_img= $default_img;
				$new_user->introduction= $introduction;
				$new_user->homepage= $homepage;
				$new_user->twitter= $twitter;
				$new_user->facebook= $facebook;
				$new_user->pinterest= $pinterest;
				return $new_user;
			}else{
				return false;
			}
		}

		//******************Password check******************//
		public static function authenticate($email="",$password=""){
			global $database;
			$email = $database->escape_value($email);
			$password = $database->escape_value($password);

			$user = User::find_by_attribute($email,"email");

			if($user){
				// found admin, now check password
				if (User::password_check($password,$user->password)){
					// password matches
					return $user;
				} else {
					// password does not match
					return false;
				}
			}else{
				return false;
			}
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

		

		//************************Password Creation*************************//
		public static function password_encrypt($password) {
	  	$hash_format = "$2y$10$";   // Tells PHP to use Blowfish with a "cost" of 10
		  $salt_length = 22; 					// Blowfish salts should be 22-characters or more
		  $salt = self::generate_salt($salt_length);
		  $format_and_salt = $hash_format . $salt;
		  $hash = crypt($password, $format_and_salt);
			return $hash;
		}
		
		public static function generate_salt($length) {
		  // Not 100% unique, not 100% random, but good enough for a salt
		  // MD5 returns 32 characters
		  $unique_random_string = md5(uniqid(self::randomBytes($length), true));
		  
			// Valid characters for a salt are [a-zA-Z0-9./]
		  $base64_string = base64_encode($unique_random_string);
		  
			// But not '+' which is valid in base64 encoding
		  $modified_base64_string = str_replace('+', '.', $base64_string);
		  
			// Truncate string to the correct length
		  $salt = substr($modified_base64_string, 0, $length);
		  
			return $salt;
		}

		static function randomBytes($length, $strong = true){
		    if (function_exists('openssl_random_pseudo_bytes')) {
		        $secure = false;
		        $bytes = openssl_random_pseudo_bytes($length, $secure);
		        if ($secure === true) {
		            return $bytes;
		        }
		    }

		    if (function_exists('mcrypt_create_iv')) {
		        $bytes = mcrypt_create_iv($length, MCRYPT_DEV_URANDOM);
		        return (binary) $bytes;
		    }

		    if (!$strong) {
		        $url = sprintf('https://www.random.org/cgi-bin/randbyte?format=f&nbytes=%s', $length);
		        if (false !== ($bytes = file_get_contents($url))) {
		            return (binary) $bytes;
		        }

		        $sha =''; $rnd ='';

		        for ($i=0; $i<$length; $i++) {
		            $sha = hash('sha256',$sha.mt_rand());
		            $char = mt_rand(0,62);
		            $rnd .= chr(hexdec($sha[$char].$sha[$char+1]));
		        }

		        return (binary) $bytes;
		    }
		    return false;
		}
		
		

		//creating a thumbnail for user profile image
		public function make_thumbnail(){




		}
		


		//*************************validation checks*************************//

		public static function fieldname_as_text($fieldname){
		  $fieldname = str_replace("_", " ", $fieldname);
		  $fieldname = ucfirst($fieldname);
		  return $fieldname;
		}

		// * presence
		// use trim() so empty spaces don't count
		// use === to avoid false positives
		// empty() would consider "0" to be empty
		public static function has_presence($value) {
			return isset($value) && $value !== "";
		}

		public static function validate_presences($required_fields) {
		  
		  foreach($required_fields as $field) {
		    $value = trim($_POST[$field]);
		  	if (!self::has_presence($value)) {
		  		return $errors[$field] = self::fieldname_as_text($field);
		  	}
		  }
		}

		// * string length
		// max length
		public static function has_max_length($value, $max) {
			return strlen($value) <= $max;
		}

		public static function validate_max_lengths($fields_with_max_lengths) {
			// Expects an assoc. array
			foreach($fields_with_max_lengths as $field => $max) {
				$value = trim($_POST[$field]);
				if (!self::has_max_length($value, $max)) {
					return $errors[$field] = self::fieldname_as_text($field);
				}
			}
		}

		// * inclusion in a set
		public static function has_inclusion_in($value, $set) {
			return in_array($value, $set);
		}



		
	}

?>