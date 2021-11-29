<?php

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	$base_folder_name = "acrobat/ustutor/";//LEAVE IT EMPTY FOR THE ROOT
	define('_DB_USER', "root");
	define('_DB_PASS', "");
	define('_DB_NAME', "tutor_hiring");
	define('_DB_HOST', "localhost");
}
else
{
	$base_folder_name = ""; 
	define('_DB_USER', "stellarpreporg_admin");
	define('_DB_PASS', '8]g*qIZk;q$R');
	define('_DB_NAME', "stellarpreporg_site");
	define('_DB_HOST', "localhost");
}

error_on();
error_off();

define('APP_TITLE', "Boxing", true);
define('DEFAULT_CONTROLLER', "hildes", true);

//Whether or use the session
define('_SESSION', true);


//dont edit these

define('BASEURL',trim("/$base_folder_name"), true);

define('_EXT', ".php");
define('_PS', "/");

define('CSS', "/".$base_folder_name."resources/css/", true);
define('IMG', "/".$base_folder_name."resources/images/", true);
define('JS', "/".$base_folder_name."resources/js/", true);
define('FONTS', "/".$base_folder_name."resources/fonts/", true);
define('AJAX', "/".$base_folder_name."resources/ajax/", true);

define('ADMINCSS', "/".$base_folder_name."resources/admin/css/", true);
define('ADMINIMG', "/".$base_folder_name."resources/admin/img/", true);
define('ADMINJS', "/".$base_folder_name."resources/admin/js/", true);
define('ADMINVENDOR', "/".$base_folder_name."resources/admin/vendor/", true);
define('ADMINSCSS', "/".$base_folder_name."resources/admin/scss/", true);
define('ADMINAJAX', "/".$base_folder_name."resources/admin/ajax/", true);
define('CHAT', "/".$base_folder_name."resources/chat/", true);

if(_SESSION){if(!session_id()){session_start();$_SESSION['uniq']="\x4D\x20\x41\x62\x75\x20\x42\x61\x6b\x61\x72\x20\x4B\x68\x61\x6E";}ob_start();}else{ob_start();}
?>