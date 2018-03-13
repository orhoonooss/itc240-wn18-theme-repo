<?php include 'includes/config.php'?>
<?php //daily logic goes here:
    
if(isset($_GET['day']))
{//data in querystring, use it!
    $day = $_GET['day'];
    
}else{//use current date
    $day = date('l');
}

?>
<?php get_header()?>
<h2>Daily Page</h2>
<p>Today is <?=$day?>.</p>
<p><a href="daily_view.php?day=Monday">Monday</a></p>
<p><a href="daily_view.php?day=Tuesday">Tuesday</a></p>
<p><a href="daily_view.php?day=Wednesday">Wednesday</a></p>
<p><a href="daily_view.php?day=Thursday">Thursday</a></p>
<p><a href="daily_view.php?day=Friday">Friday</a></p>
<p><a href="daily_view.php?day=Saturday">Saturday</a></p>
<p><a href="daily_view.php?day=Sunday">Sunday</a></p>
</section> 
<?php get_footer()?>