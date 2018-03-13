<?php
//config.php

//removes header already sent errors
ob_start();

define('SECURE',false); #force secure, https, for all site pages

define('PREFIX', 'widgets_wn18_'); #Adds uniqueness to your DB table names.  Limits hackability, naming collisions

header("Cache-Control: no-cache");header("Expires: -1");#Helps stop browser & proxy caching

define('DEBUG',true); #we want to see all errors

include 'credentials.php';//stores database info
include 'common.php';//stores favorite functions

//prevents date errors
date_default_timezone_set('America/Los_Angeles');

//create config object
$config = new stdClass;

$config->nav1['template.php'] = "HOME";
$config->nav1['customers.php'] = "CUSTOMERS";
$config->nav1['daily.php'] = "DAILY";
$config->nav1['contact.php'] = "CONTACT";

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//START NEW THEME STUFF - be sure to add trailing slash!
$sub_folder = 'themes_repo/';//change to 'widgets' or 'sprockets' etc.
$config->theme = 'Stone';//sub folder to themes

//will add sub-folder if not loaded to root:
$config->physical_path = $_SERVER["DOCUMENT_ROOT"] . '/' . $sub_folder;
//force secure website
if (SECURE && $_SERVER['SERVER_PORT'] != 443) {#force HTTPS
	header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
}else{
    //adjust protocol
    $protocol = (SECURE==true ? 'https://' : 'http://'); // returns true
    
}
$config->virtual_path = $protocol . $_SERVER["HTTP_HOST"] . '/' . $sub_folder;

define('ADMIN_PATH', $config->virtual_path . '/admin/'); # Could change to sub folder
define('INCLUDE_PATH', $config->physical_path . '/includes/');

//END NEW THEME STUFF

switch(THIS_PAGE){
    
    case 'template.php';
        $title = 'Home Page';
        $pageid = 'Welcome';
    break;  
    
    case 'customers.php';
        $title = 'Customers Page';
        $pageid = 'Customers';
    break;  
    
    case 'daily.php';
        $title = 'Dialy Page';
        $pageid = 'Dialy Page';
    break; 
    
    case 'contact.php';
        $title = 'Contact Page';
        $pageid = 'Contact Us';
    break;

    default:
        $title = THIS_PAGE;
        $pageid = '';
}

//START NEW THEME STUFF
//creates theme virtual path for theme assets, JS, CSS, images
$config->theme_virtual = $config->virtual_path . 'themes/' . $config->theme . '/';
//END NEW THEME STUFF

?>