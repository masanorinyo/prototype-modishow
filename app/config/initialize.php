<?php
	//Define the core paths;
	//Define them as absolute paths to make sure that require_once works as expected
	//Directory_separator is a PHP pre-defined constant
	//{\for windows, /for unix}
	//DS = directory separator = / or \ 
	defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

	defined('SITE_ROOT') ? null : define('SITE_ROOT',$_SERVER['DOCUMENT_ROOT'].DS.'ModiShow');

	//Asset path
	defined('ROOT_PATH') ? null : define('ROOT_PATH',"http://".$_SERVER['SERVER_NAME']."/~Masanori/ModiShow/");	

	defined('RESOURCE_PATH') ? null : define('RESOURCE_PATH',"http://".$_SERVER['SERVER_NAME']."/~Masanori/ModiShow/resources");	

	//class path 
	defined('CONT_PATH') ? null : define('CONT_PATH',SITE_ROOT.DS.'app'.DS."class".DS."controller");

	//app path 
	defined('LAYOUT_PATH') ? null : define('LAYOUT_PATH',SITE_ROOT.DS.'app'.DS."class".DS."layout");

	//app path 
	defined('LIB_PATH') ? null : define('LIB_PATH',SITE_ROOT.DS.'app'.DS."class".DS."lib");

	//app path 
	defined('MODEL_PATH') ? null : define('MODEL_PATH',SITE_ROOT.DS.'app'.DS."class".DS."model");

	//view path 
	defined('VIEW_PATH') ? null : define('VIEW_PATH',SITE_ROOT.DS.'app'.DS."class".DS."view");

	//config path 
	defined('CONF_PATH') ? null : define('CONF_PATH',SITE_ROOT.DS.'app'.DS."config");

	
	//load config file first
	require_once(CONF_PATH.DS."db_connection.php");

	//load basic functions next so that everything after can use them
	require_once(LIB_PATH.DS."function.php");

	//load controllers
	require_once(CONT_PATH.DS."header_info_modifier.php");
	require_once(CONT_PATH.DS."session.php");

	// require_once(CONT_PATH.DS."infinite.php");
	// require_once(CONT_PATH.DS."phpMailer".DS."class.phpmailer.php");
	// require_once(CONT_PATH.DS."phpMailer".DS."class.smtp.php");
	

	//load database-related classes
	require_once(MODEL_PATH.DS."database.php");
	require_once(MODEL_PATH.DS."database_object.php");
	require_once(MODEL_PATH.DS."user.php");
	require_once(MODEL_PATH.DS."comment.php");
	require_once(CONT_PATH.DS."image_processing.php");
	// require_once(MODEL_PATH.DS."style.php");
	// require_once(MODEL_PATH.DS."uploaded_items.php");
	


?>