<?php

session_start();


/**
 * this code is executed before all other script
 */

# constants definition
define('HTTP_GET', 		'GET');
define('HTTP_POST', 	'POST');
define('HTTP_PUT', 		'PUT');
define('HTTP_DELETE', 	'DELETE');
define('HTTP_HEAD', 	'HEAD');

# all error
error_reporting(E_ALL);

# xdebug custom error reporting
if (function_exists("xdebug_enable"))  {
	xdebug_enable();
}

require_once 	dirname(__FILE__). "/config.php";
require_once 	dirname(__FILE__). "/constants.php";



/**
 * @function tao_autoload
 * permits to include classes automatically using the ARGOUML class naming convention
 * @param 	string		$pClassName		Name of the class
 */
function tao_autoload($pClassName) {

	$split = split("_",$pClassName);
	$path = GENERIS_BASE_PATH.'/';
	for ( $i = 0 ; $i<sizeof($split)-1 ; $i++){
		$path .= $split[$i].'/';
	}

	$filePath = $path . 'class.'.$split[sizeof($split)-1] . '.php';
	if (file_exists($filePath)){
		require_once $filePath;
	}

}


spl_autoload_register("tao_autoload");


set_include_path(get_include_path() . PATH_SEPARATOR . GENERIS_BASE_PATH);

core_control_FrontController::connect(API_LOGIN, API_PASS, API_MODULE);
core_kernel_classes_Session::singleton()->setLg($GLOBALS['lang']);
core_kernel_classes_Session::singleton()->defaultLg = 'en';

?>