<?php
session_start ();
ini_set ( "display_errors", "1" );
include_once ($_SERVER ['DOCUMENT_ROOT'] . '/library/common.php');

//processing controller
if (isset ( $_GET ['controller'] ) && ! empty ( $_GET ['controller'] )) {
	$controller = $_GET ['controller'];
} else {
	//changing default controller
	$controller = 'Product'; // default controller
}

//processing controller function
if (isset ( $_GET ['function'] ) && ! empty ( $_GET ['function'] )) {
	$function = $_GET ['function'];
} else {
	//changing default function
	$function = 'add'; // default function
}

$controller = strtolower ( $controller );
$fn = SITE_ROOT . 'controller/' . $controller . 'Controller.php';

if (file_exists ( $fn )) {
	require_once ($fn);
	$controllerClass = $controller . 'Controller';
	if (! method_exists ( $controllerClass, $function )) {
		die ( $function . ' function not found' );
	}
	$obj = new $controllerClass ();
	$obj->$function ();
} else {
	die ( $controller . ' controller not found' );
}

