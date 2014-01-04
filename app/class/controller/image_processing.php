<?php 

	require_once(MODEL_PATH.DS.'database.php');
	
	class photo extends DatabaseObject{
	//once a file is uploaded, it will be stored in a temprary location
		public $temp_path;
		public $thumbnail;
		public $upload_dir = "resources/users";
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


		public function get_ext($filename){
			return pathinfo($filename, PATHINFO_EXTENSION);
		}
		//pass in $_FILE(['uploaded_file']) as an argument
		public function attach_file($file,$username){
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
				$ext = $this->get_ext(basename($file['name']));
				$name = $username."_default".".".$ext;
				$this->filename = $name;
				$this->type 	= $file['type'];
				$this->size 	= $file['size'];
				return true;
			}
		}

		public function save_photo(){
			
		
			//make sure there are no errors

			//can't save if there are pre-existing errors;
			if(!empty($this->errors)){return false;}

		

			//can't save without filename and temp location
			if(empty($this->filename) || empty($this->temp_path)){
				$this -> errors[] = "The file location was not available.";
				return false;
			}

			//Determine the target_path
			$target_path = SITE_ROOT.DS.$this->upload_dir.DS.$this->filename;


			//Attempt to move the file
			if(move_uploaded_file($this->temp_path,$target_path)){
				//success
				unset($this->temp_path);
				return true;
				
			}else{
				//file was not moved
				$this->errors[] = "The file upload failed, possibly due to incorrect permissions on the upload folder.";
				return false;
			}
		}

		public function adjust_image_size($image,$username){
			header('Content-type: image/jpg');
			$target_path = SITE_ROOT.DS.$this->upload_dir.DS;
			
			$target_image = $target_path.$image;
			
			$image = new Imagick($target_image);
			
			$image->cropThumbnailImage(250,250);

			$image->setImageFormat('jpg');
			
			$image->writeImage();
			file_put_contents($target_path, $image);

			$image->destroy();
		}

		public function thumbnail($image,$username){
			header('Content-type: image/gif');
			$target_path = SITE_ROOT.DS.$this->upload_dir.DS;
			$target_image = $target_path.$image;
			
			$image = new Imagick($target_image);
			
			$image->cropThumbnailImage(100,100);

			$image->setImageFormat('gif');
			
			
			
			$image->writeImage();
			file_put_contents($target_path, $image);

			$image->destroy();
		}

	}
?>