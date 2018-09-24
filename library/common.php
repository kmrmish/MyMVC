<?php


define ( 'DOC_ROOT', $_SERVER ['DOCUMENT_ROOT'].'/');
define ( 'CSV_PATH', DOC_ROOT .'uploads');
define ( 'SITE_ROOT', DOC_ROOT );

define ( 'SITE_PATH', 'http://' . $_SERVER ['HTTP_HOST'] .'/');

define ( 'IMAGE_PATH', SITE_PATH . '/images/' );
define ( 'CSS_PATH', SITE_PATH . '/css/' );
define ( 'JS_PATH', SITE_PATH . '/js/' );
define ( 'LIBRARY_ROOT', SITE_ROOT . 'library/' );
define ( 'VIEW_PATH', SITE_ROOT . 'view/' );
define ( 'MODEL_PATH', SITE_ROOT . 'model/' );
define ( 'SERVICE_PATH', SITE_ROOT . 'library/services/' );

define ( 'DB_HOST', 'localhost' );
define ( 'DB_USER', 'root' );
define ( 'DB_PASSWORD', '' );
define ( 'DB_NAME', 'test' );

modestreet_autoload(array(MODEL_PATH,SERVICE_PATH));

function modestreet_autoload($autoload){
	foreach($autoload as $dir){
		if (is_dir($dir)) {
		    if ($dh = opendir($dir)) {
		        while (($file = readdir($dh)) !== false) {
		            if(get_file_extension($file) == 'php'){
		            	include_once ($dir.$file);
		            }
		        }
		        closedir($dh);
		    }
		}
	}
}

function get_file_extension($file_name) {
	return substr(strrchr($file_name,'.'),1);
}

function get_db_connection(){ 
	$db = new DbService(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);
	return $db;
}

//loading view..........................................................
function loadView($templateName, $arrPassValue = '') 
{
	$viewPath = VIEW_PATH . $templateName;
	if (file_exists ( $viewPath )) {
		if (isset ( $arrPassValue )) {
			$viewData = $arrPassValue;
		}
		include_once ($viewPath);
	} else {
		die ( $templateName . ' Template Not Found under View Folder' );
	}
}
