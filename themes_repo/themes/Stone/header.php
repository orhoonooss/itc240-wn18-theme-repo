<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title><?=$config->title?></title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link href='<?=$config->theme_virtual?>http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'/>  
  <link rel="stylesheet" type="text/css" href="<?=$config->theme_virtual?>css/style.css" />
</head>

<body>
  <div id="main">
	
	<div id="header">  
	  
	  <div id="welcome">
	    <h1><a href="#">Welcome To Stone</a></h1>
	  </div><!--close welcome-->
	  
	  <div id="menubar_container">
		
		<div id="menubar">
		
          <div id="menu_items">
	        <ul id="menu">
              <?=stone_content($config->nav1)?>
              <!--
              <li id="current"><a href="index.html">Home</a></li>
              <li><a href="ourwork.html">Our Work</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
              <li><a href="projects.html">Projects</a></li>
              <li><a href="contact.html">Contact Us</a></li>
              -->
            </ul>
          </div><!--close menu-->
		
        </div><!--close menubar-->	
		
      </div><!--close menubar_container-->	

    <div id="header_image"></div>		  	  
	
	</div>
<!-- header ends here -->
      
<?php

function stone_content($nav1){
    
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