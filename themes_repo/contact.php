<?php include 'includes/config.php'?>
<?php get_header()?>
<h2>Contact Us</h2>
<?php
//contact.php

if(isset($_POST['Submit']))
{//send email?
    /*
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    */
    
    $to = "orhoonooss@gmail.com";
    
    $subject = "My WebSite Feedback " . date("m/d/y, G:i:s");
    
    //collect and clean post data
    $FirstName = miami_post('FirstName');
    $LastName = miami_post('LastName');
    $Email = miami_post('Email');
    $Comments = miami_post('Comments');
    
    //build body of email
    $text = '';//initialize variable
    $text .= 'First Name: ' .  $FirstName . PHP_EOL . PHP_EOL;
    $text .= 'Last Name: ' . $LastName . PHP_EOL . PHP_EOL;
    $text .= 'Email: ' . $Email . PHP_EOL . PHP_EOL;
    $text .= 'Comments: ' . $Comments . PHP_EOL . PHP_EOL;
    
    
    $headers = 'From: noreply@ssorkhon.com' . PHP_EOL .
    'Reply-To: ' . $Email . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
    
    
    mail($to,$subject,$text,$headers);
    
    echo '<div class="row">
        <div class="col-lg-12">
            <h3>Message Sent</h3>
            <p>We will contact you within 24 hours!</p>
        </div>
    </div>
    ';

}else{//show form!
    echo '
    <form action="" method="post">
    
    <div class="row">
        <div class="form-group col-lg-4">
            <label class="text-heading first" for="FirstName">First Name</label>
            <input class="form-control" type="text" name="FirstName" id="FirstName" autofocus required />
        </div>
        
       <div class="form-group col-lg-4">
            <label class="text-heading last" for="LastName">Last Name</label>
            <input class="form-control" type="text" name="LastName" id="LastName" required />
        </div>
        
        <div class="form-group col-lg-4">
            <label class="text-heading email" for="Email">Email</label>
            <input class="form-control" type="email" name="Email" id="Email" required />
        </div>
        
        <div class="form-group col-lg-4">
            <label class="text-heading gender" for="gender">Please select your gender</label>
            <fieldset>
                      <input type="radio" name="gender" id="male" />
                      <label for="male">Male</label>
                      <input type="radio" name="gender" id="female" />
                      <label for="female">Female</label>
            </fieldset>
        </div>
        
        <div class="form-group col-lg-4">
            <label class="text-heading option" for="option">Where did you hear about us?</label>
            <fieldset>
                      <input type="checkbox" name="option" id="website" />
                      <label for="website">Website</label>
                      <input type="checkbox" name="option" id="socialmedia" />
                      <label for="socialmedia">Social Media</label>
                      <input type="checkbox" name="option" id="other" />
                      <label for="other">Other</label>
            </fieldset>
        </div>
        
        <div class="clearfix"></div>
        
        
        <div class="form-group col-lg-12">
            <label class="text-heading comments" for="Comments">Comments</label>
            <textarea class="form-control" name="Comments" id="Comments"></textarea>
        </div>
        
        <div class="form-group col-lg-12">
            <button type="submit" class="btn btn-secondary" name="Submit">Submit</button>
        </div>
    </div>
    </form>
    ';
}    
?>
</section>
<?php get_footer();
function miami_post($key)
{
    if(isset($_POST[$key])){
        return strip_tags(trim($_POST[$key]));
    }else{
        return '';
    }
}
?> 