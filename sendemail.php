<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Thanks for contacting</title>
    <link rel="stylesheet" href="assets/css/feedback.css">
</head>
<body>

            
    <div class="feedback-page">
        <?php
            if(isset($_POST['contact'])) {
            $name = @trim(stripslashes($_POST['name'])); 
            $_SESSION['name'] = $name;
            $email = @trim(stripslashes($_POST['email'])); 
            $_SESSION['email'] = $email;
            $phone = @trim(stripslashes($_POST['phone'])); 
            $_SESSION['phone'] = $phone;
            $message = @trim(stripslashes($_POST['message'])); 
            $_SESSION['message'] = $message;
                
            if($_POST['captcha'] != $_SESSION['digit']) { 
                die('Sorry, the CAPTCHA code entered was incorrect! <a href="http://themeitems.com/maxmed/#map_location">Go back to the site</a> and fill the captcha correctly!');
                
            }

            $status = 'Thanks for Contacting Us!';
            $feedback = 'We will get back to you as quickly as possible.';

            // $name = @trim(stripslashes($_POST['name'])); 
            // $email = @trim(stripslashes($_POST['email'])); 
            // $phone = @trim(stripslashes($_POST['phone'])); 
            // $message = @trim(stripslashes($_POST['message'])); 
            $notes = 'This Email was sent using MaxMed HealthCare Website contact form';

            $email_from = $email;
            $email_to = 'aktarzaman31@gmail.com';//replace with your email

            $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Phone: ' . $phone . "\n\n" . 'Message: ' ."\n". $message . "\n\n\n\n" . $notes;
            $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>'); ?>

            <h2><?php  echo $status; ?></h2>
            <h3><?php  echo $feedback; ?></h3>
            <a href="http://themeitems.com/maxmed/" class="feedback-btn">Back to the site</a>
            <?php

            if($_POST['captcha'] == $_SESSION['digit']) { 
                session_destroy();
                
            } ?>

            <?php } else {
                echo '<p>Something Went Wrong! Please fill all the required information and submit again!</p>';
            }

        ?> 

    </div>
            

</body>
</html>
<?php  die; ?>