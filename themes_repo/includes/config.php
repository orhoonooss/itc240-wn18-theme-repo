<?php
//config.php

define('DEBUG',TRUE); #we want to see all errors

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$nav1['template.php'] = "HOME";
$nav1['customers.php'] = "CUSTOMERS";
$nav1['daily.php'] = "DAILY";
$nav1['contact.php'] = "CONTACT";

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

//other include files referenced here
include 'credentials.php';

function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
        echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
        die();
    }
}

function dynamic_content($nav1){
    foreach($nav1 as $url => $text){
    //echo '<li><a href="' . $url . '">' . $text . '</a></li>';
    
    if(THIS_PAGE == $url)
    {//current page - add highlight
        echo '
        <li><a href="' . $url . '" id="current">' . $text . '</a></li>
        ';
    }else{//no highlight
        echo '
        <li><a href="' . $url . '">' . $text . '</a></li>
        ';
    }
}
}

?>