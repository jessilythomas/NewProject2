<?php
date_default_timezone_set('Etc/UTC');
include 'PHPMailer_5.2.0/PHPMailerAutoload.php';
/*$status = array(
    'type'=>'success',
    'message'=>'Thank you for contact us. As early as possible  we will contact you '
);
$error = array(
    'type'=>'Failed',
    'message'=>'Please try again!!'
);*/
$email = @trim(stripslashes($_POST['email'])); 
$name = @trim(stripslashes($_POST['name'])); 
$message = @trim(stripslashes($_POST['message']));
if($message=='')
{
echo "<script type='text/javascript'>alert('plz enter valid message');</script>";
}
else
{
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
//$mail->Port = 25;
$mail->Port = 465;
//$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//$mail->SMTPSecure = "tls";
$mail->SMTPSecure = "ssl";
//Username to use for SMTP authentication
$mail->Username = "jessily.xtapps@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "jessica620";
//Set who the message is to be sent from
$mail->setFrom('jessily.xtapps@gmail.com', 'Feedback');
$mail->IsHTML(true);
//Set who the message is to be sent to
//Set an alternative reply-to address
$mail->addReplyTo($email,$name);
//$mail->AddCC('amalkshaji1@gmail.com','Amal');
//$mail->addAddress($email, $name);
$mail->addAddress('jessily.xtapps@gmail.com','Xtapps');
//$mail->addAddress('syamilykrishna.xtapps@gmail.com','Info');
//Set the subject line
$mail->Subject = 'Feedback.';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//$body = 'Name: ' . $name . "\r\n" . 'Email: ' . $email. "\r\n" . 'Message: ' . $message;
$mail->Body = "<p>Name: $name</p><p>Email: $email</p><p>message: $message</p>";
//$mail->Body="<h3>Thank you for applying your interested course at xtapps.</br><p>We will contact you soon!!</p></h3>";
//$mail->Body = $body;
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//$mail->addAttachment('images/logo.png');
//send the message, check for errors

/*if (!$mail->send()) {
    if($_POST['pass']=='ajax'){
        //echo "Mailer Error: " . $mail->ErrorInfo;
        //echo json_encode($error);
        die;
    }else{
        //header("Location: http://xtapps.com/xtapps-site/training/index.html");
        //die();
    }
    
}else {
    if($_POST['pass']=='ajax'){
        //echo "Mailer Error: " . $mail->ErrorInfo;
        echo 'Thank you for contact us. As early as possible  we will contact you';
         //echo json_encode($status);
         die;
    }else{
       // header("Location: http://xtapps.com/xtapps-site/training/index.html");
        //die();
    }
}*/
if(!$mail->send()){
    
    // echo "<script type='text/javascript'>alert('Message could not be sent.');</script>";
    //echo "<script> window.location.assign('ProfileFull.php'); </script>";
}
else
{
     //echo "<script type='text/javascript'>alert('Message  sent.');</script>";
    //echo "<script> window.location.assign('ProfileFull.php'); </script>";
}


$mail1 = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail1->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail1->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail1->Debugoutput = 'html';
//Set the hostname of the mail server
$mail1->Host = "smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
//$mail->Port = 25;
$mail1->Port = 465;
//$mail->Port = 587;
//Whether to use SMTP authentication
$mail1->SMTPAuth = true;
//$mail->SMTPSecure = "tls";
$mail1->SMTPSecure = "ssl";
//Username to use for SMTP authentication
$mail1->Username = "jessily.xtapps@gmail.com";
//Password to use for SMTP authentication
$mail1->Password = "jessica620";
//Set who the message is to be sent from
$mail1->setFrom('jessily.xtapps@gmail.com', 'Feedback');

$mail1->IsHTML(true);
//Set who the message is to be sent to
$email = @trim(stripslashes($_POST['email'])); 
/*$name = @trim(stripslashes($_POST['name'])); 
$phone = @trim(stripslashes($_POST['phone']));
$course = @trim(stripslashes($_POST['course']));*/
//Set an alternative reply-to address
$mail1->addReplyTo($email,$name);
//$mail->AddCC('amalkshaji1@gmail.com','Amal');
$mail1->addAddress($email, $name);
//$mail1->addAddress('syamilykrishna.xtapps@gmail.com','XTAPPS');
//$mail1->addAddress($email,'Info');
//Set the subject line
$mail1->Subject = 'Thanks for the Feedback.';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//$body = 'Name: ' . $name . "\r\n" . 'Email: ' . $email. "\r\n" . 'Message: ' . $message;
//$mail->Body = "<h3>Contact Us Enquiry!!</h3></br><p>Name: $name</p><p>Email: $email</p><p>Phone: $phone</p><p>Course interested: $course</p>";
//HTML content
$body="Thanks for the Feedback,As early as possible  we will contact you ";
//end HTML content
$mail1->Body=$body;
//$mail->Body = $body;
//Replace the plain text body with one created manually
//$mail1->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//$mail->addAttachment('images/logo.png');
//send the message, check for errors

/*
if (!$mail1->send()) {
    if($_POST['pass']=='ajax'){
        //echo "Mailer Error: " . $mail->ErrorInfo;
        //echo json_encode($error);
        die;
    }else{
        header("Location: http://xtapps.com/xtapps-site/training/index.html");
        die();
    }
}else {
    if($_POST['pass']=='ajax'){
        //echo "Mailer Error: " . $mail->ErrorInfo;
        echo 'Thank you for contact us. As early as possible  we will contact you';
         //echo json_encode($status);
         die;
    }else{
        header("Location: http://xtapps.com/xtapps-site/training/index.html");
        die();
    }
  }

  */
  if(!$mail1->send()){
    // echo "Message could not be sent.";
     echo "<script type='text/javascript'>alert('Message could not be sent.');</script>";
    echo "<script> window.location.assign('ProfileFull.php'); </script>";
}
else
{
     echo "<script type='text/javascript'>alert('Message  sent.');</script>";
    echo "<script> window.location.assign('ProfileFull.php'); </script>";
}

}