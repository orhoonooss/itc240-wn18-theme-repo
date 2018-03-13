<?php include 'includes/config.php'?>
<?php include 'includes/header.php'?>
<?php
//daily_view.php
    
$myDay = ($_GET['day']);

switch($myDay) {
    case 'Monday';
         $mySpecial = 'Ricotta and Sausage Pasta';
         $myPic = 'images/pasta.jpg';
         $myAlt = 'Ricotta and Sausage Pasta';
         $myText = 'Combination of pasta, sausage, a white wine and butter sauce and some sort of cheese it’s basically a guaranteed success that it’s just a bowl of everything you ever wanted in life.';
         $myColor = '#FFCC00';
    break; 
        
    case 'Tuesday';
         $mySpecial = 'Bacon Blue Burger';
         $myPic = 'images/burger.jpg';
         $myAlt = 'Bacon Blue Burger';
         $myText = "Rich, robust taste doesn't always have to come at a high price. Try our new Bacon & Blue on Brioche with savory Wisconsin blue cheese and Applewood-smoked bacon on a toasted brioche bun - rich, robust taste at The Kitchen's price!";
         $myColor = '#FF0000';
    break;    
    
    case 'Wednesday';
         $mySpecial = 'Sweet Potato Gnocchi with Sage Cream Sauce';
         $myPic = 'images/gnocchi.jpg';
         $myAlt = 'Sweet Potato Gnocchi with Sage Cream Sauce';
         $myText = "Sweet Potato Gnocchi with Sage Cream Sauce is one of our customers' all-time favorite comfort foods.  This is the perfect winter dish!";
         $myColor = '#336600';
    break;
        
    case 'Thursday';
         $mySpecial = 'Paleo Hawaiian Loco Moco';
         $myPic = 'images/loco.jpg';
         $myAlt = 'Paleo Hawaiian Loco Moco';
         $myText = 'A classic Hawaiian dish, Loco Moco consists of steamed rice topped with juicy hamburger steak, fried egg and smothered in a flavorful mushroom gravy. You must give this a try!';
         $myColor = 'darkred';
    break;    
    
    case 'Friday';
         $mySpecial = 'Brown Sugar Glazed Pork Meatballs';
         $myPic = 'images/meatballs.jpg';
         $myAlt = 'Brown Sugar Glazed Pork Meatballs';
         $myText = 'Brown Sugar Glazed Pork Meatballs serve as a party appetizer recipe or main course served over rice or potatoes. With the sweet brown sugar BBQ glaze these will disappear in no time at all!';
         $myColor = '#0099FF';
    break;    
    
    case 'Saturday';
         $mySpecial = 'Lemon Garlic Butter Grilled Salmon';
         $myPic = 'images/salmon1.jpg';
         $myAlt = 'Lemon Garlic Butter Grilled Salmon';
         $myText = 'Lemon Garlic Butter grilled Salmon are delish and healthy. Cubed salmon is marinated with a tangy sweet honey lemon garlic butter sauce and threaded onto skewers before jumping right on the grill. It just feels like the most quintessential winter dish!';
         $myColor = '#003366';
    break;    
    
    case 'Sunday';
         $mySpecial = 'Creamy Chicken and Herb Skillet';
         $myPic = 'images/chicken.jpg';
         $myAlt = 'Creamy Chicken and Herb Skillet';
         $myText = 'Chicken breasts are simply seasoned and sauteed then drizzled with a pan sauce made from spreadable herb cheese, chicken broth, lemon juice, and fresh herbs. This is a an awesome meal for wintertime, or any season really, but the bright, herby flavors taste especially delicious around this time of year.';
         $myColor = '#660066';
    break;
}

?>
        <h2><?=$myDay?>'s Specials</h2>
        <h3 class="slogan">One cannot think well, love well, sleep well, if one has not dined well.</h3>
        
        <p class="daily"><strong class="feature" style="color: <?=$myColor?>;"><?=$myDay?>'s Special:</strong> <?=$myDay?>'s daily special is <strong class="feature" style="color: <?=$myColor?>;"><?=$mySpecial?></strong>, as this is one of our top sellers!
        </p>
        <img src="<?=$myPic?>" alt="<?=$myAlt?>" id="special" />
        <p class="daily"><?=$myText?></p>    
   <?php echo '<p><a href="daily.php">Go Back</a></p>'; ?>
</section>
<?php include 'includes/footer.php'?> 