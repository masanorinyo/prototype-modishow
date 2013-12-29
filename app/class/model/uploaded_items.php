<?php

	require_once(MODEL_PATH.DS.'database.php');

	class uploaded_items extends DatabaseObject{

		protected static $table_name = "uploaded_items";
		protected static $db_fields = array('uploadedItems_id','name','main_category','sub_category','filename');

		public $uploadedItems_id;
		public $name;
		public $main_category;
		public $sub_category;
		public $filename;
		public $type;
		public $size;

		private $temp_path;//once a file is uploaded, it will be stored in a temprary location
		protected $upload_dir = SITE_ROOT.DS."resources/uploads";
		public $errors = array();//we can add more errors if any in addition to the upload_erros.
		protected $upload_error = array(
			UPLOAD_ERR_OK		=> "No errors.",
			UPLOAD_ERR_INI_SIZE => "Larger than upload_max_filesize.",
			UPLOAD_ERR_FORM_SIZE=> "Larger than form MAX_FILE_SIZE.",
			UPLOAD_ERR_PARTIAL  => "Partial upload.",
			UPLOAD_ERR_NO_FILE  => "No file.",
			UPLOAD_ERR_NO_TMP_DIR=> "NO temporary directory.",
			UPLOAD_ERR_CANT_WRITE => "Can't write to disk.",
			UPLOAD_ERR_EXTENSION => "File upload stopped by extension."
		);


		//pass in $_FILE(['uploaded_file']) as an argument
		public function attach_file($file){
			//perform error checking on the form parameters
			//set object attributes to the form parameters.
			//don't worry about savinganything to the database yet.
			if(!$file || empty($file) || !is_array($file)){
				//error:nothing uploaded or wrong argument usage
				$this->errors[] = "No file was uploaded";
				return false;
			}elseif($file['error']!=0){
				//error:report what PHP says went wrong
				$this->errors[] = $this->upload_error[$file['error']];
				return false;
			}else{
				//set object attribute sto the form parameters
				$this->temp_path = $file['tmp_name'];
				$this->filename = basename($file['name']);
				$this->type 	= $file['type'];
				$this ->size 	= $file['size'];
				return true;
			}
		}

		public function save(){
			// A new record won't have an id yet.
			if(isset($this->uploadedItems_id)){
				//really just to update the caption
				$this->update();
			}else{
				//make sure there are no errors

				//can't save if there are pre-existing errors;
				if(!empty($this->errors)){return false;}

				//make sure  the caption is not too long for the DB
				if(strlen($this->name) > 100){
					$this->errors[]="The caption can only be 100 characters long.";
						return false;
				}

				//can't save without filename and temp location
				if(empty($this->filename) || empty($this->temp_path)){
					$this -> errors[] = "The file location was not available.";
					return false;
				}

				//Determine the target_path
				$target_path = $this->upload_dir.DS.$this->filename;

				//Make sure a file does not already exist in the target location
				if(file_exists($target_path)){
					$this->errors[] = "The file {$this->filename} already exists.";
					return false;
				}

				//Attempt to move the file
				if(move_uploaded_file($this->temp_path,$target_path)){
					//success
					//save a corresponding entry to the database
					if($this->create()){
						//we are done with temp_path, the file is not there anymore
						unset($this->temp_path);
						return true;
					}
				}else{
					//file was not moved
					$this->errors[] = "The file upload failed, possibly due to incorrect permissions on the upload folder.";
					return false;
				}
			}

		}

		public function image_path(){
			return $this->upload_dir.DS.$this->filename;
		}

		public function size_as_text(){
			if($this->size < 1024){
				return "{$this->size} bytes";
			}elseif($this->size < 1048576){
				$size_kb = round($this->size/1024);
				return "{$size_kb} KB";
			}else{
				$size_mb=round($this->size/1048576, 1);
				return "{$size_mb} MB";
			}
		}

	}

?>