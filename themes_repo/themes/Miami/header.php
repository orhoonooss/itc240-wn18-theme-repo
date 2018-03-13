<!doctype html>
<!--
Designed by: http://www.cssing.org
Released for free under a Creative Commons Attribution 3.0 License: http://creativecommons.org/licenses/by/3.0/
Name: Miami
Description:  A two-columns, responsive design template.
Template number: 15
Version: 1.0
Released: 4.3.13
-->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=$config->title?></title>
<link href='<?=$config->theme_virtual?>http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
<link href="<?=$config->theme_virtual?>css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
	<div class="headerWrapper">
        <div class="logo"><a href=""><img src="images/logo.png" alt="logo"></a></div>
        <div class="logo2"><a href=""><img src="images/logo2.png" alt="logo2"></a></div>
        <div class="headerPic"><img src="images/headerPic.jpg" alt="" class="picStyle"></div>
        <div class="clearfloat"></div>
    </div>
</header>
<section>
	<nav>
      <ul id="navlist">
            <?=dynamic_content($config->nav1)?>
            <!--
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
            -->
        </ul>
    </nav>
    <h2><?=$config->pageid?></h2>
<!-- header ends here -->
    
<?php

function dynamic_content($nav1){
    
    global $config;
    $myReturn = '';
    foreach($nav1 as $url => $text){
    //echo '<li><a href="' . $url . '">' . $text . '</a></li>';
    $url = $config->virtual_path . $url; //add virtual path
    if(THIS_PAGE == $url)
    {//current page - add highlight
        $myReturn .= '
        <li><a href="' . $url . '" id="current">' . $text . '</a></li>
        ';
    }else{//no highlight
        $myReturn .= '
        <li><a href="' . $url . '">' . $text . '</a></li>
        ';
    }
    }
    return $myReturn; 
}    
    
?>