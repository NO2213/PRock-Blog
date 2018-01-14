<?php

if(session_id() == '') {
session_start();
}

if (!defined('TAIL'))
define('TAIL','');

require_once(TAIL.'config/db.php');
date_default_timezone_set('Asia/Kolkata');
$total_defined_constants_offest = count(get_defined_constants());

##########################################################################################
#							CONFIG SETTINGS FROM DATABASE STARTS
##########################################################################################
$config_set_qry = "SELECT * FROM ".PR_DATABASE.".settings_config WHERE status='active'";
$config_set_qr 	= mysqli_query($mysqli, $config_set_qry);

if (mysqli_num_rows($config_set_qr) > 0)
{
	while ($config_set_res   = mysqli_fetch_object($config_set_qr))
	{
	define($config_set_res->title, $config_set_res->value);
	}
}
##########################################################################################
#							CONFIG SETTINGS FROM DATABASE ENDS
##########################################################################################

define('MANDATORY', '<label class="clr_error">*</label>');
define('HEADER_PATH', TAIL.'');
define('FOOTER_PATH', TAIL.'');

define('INCLUDES_PATH', TAIL.'includes/');
define('PLUGINS_PATH', TAIL.'plugins/');
define('UPLOADS_PATH', TAIL.'uploads/');
define('SCRIPTS_PATH', TAIL.'scripts/');

define('IMAGE_ON_FLY_SECRET_KEY', 'abcd_perertgze_is_the_secret_key'); // 8-32 characters without spaces
define('IMAGE_ON_FLY_PLUGGIN', PLUGINS_PATH.'image_on_fly/image_mod.php');

define('THEME_ROOT_FOLDER', 'themes/');
define('THEME_FOLDER', 'web/');
define('ACTIVATED_THEME', TAIL.THEME_ROOT_FOLDER.THEME_FOLDER);
define('ADMIN_ACTIVATED_THEME', TAIL.THEME_ROOT_FOLDER.'admin/');

define('COPYRIGHT_YEAR', date('Y', time()));
$COPYRIGHT_START_YEAR =  (COPYRIGHT_YEAR == '2018') ? '' : '2018-';
define('WEBSITE_COPYRIGHT', 'Copyright © '.$COPYRIGHT_START_YEAR.COPYRIGHT_YEAR.' '.WEBSITE_COPYRIGHT_TAIL);
define('WEBSITE_DEVELOPED_BY', '<a href="http://www.smarthosting.com.sg/" target="_blank">Singapore Web Design by Smart Hosting</a>');

define('SOFTWARE_NAME', 'Blog');
define('SOFTWARE_VERSION', 'v1');
define('COPYRIGHT', ' © '.$COPYRIGHT_START_YEAR.COPYRIGHT_YEAR.'  '.COMPANY_NAME);
$total_defined_constants_end = count(get_defined_constants());

# Image Settings	STARTS
	// Maximum allowed file size, Kb
	// Set to zero to allow any size
	$MAX_PROFILE_FILE_SIZE = 1024;
	$AllowedImages  = array('.jpg', '.jpeg', '.gif', '.png');
	$AllowedMimes   = array('image/jpeg', 'image/gif', 'image/pjpeg', 'image/png');
	define ("MAX_SIZE", $MAX_PROFILE_FILE_SIZE);
# Image Settings	ENDS

# Store all defined constats to variables	STARTS
$defined_variables_array = (array_slice(get_defined_constants(), $total_defined_constants_offest, $total_defined_constants_end));	// $total_defined_constants_offest + 1
if (count($defined_variables_array) > 0)
{
	foreach($defined_variables_array as $dva_k=>$dva_v)
	{
	$$dva_k = $dva_v;
	}
}
# Store all defined constats to variables	ENDS

?>