<?php
//let's get all form values
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];

if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $receiver = "rajegaonkarsamadhan123@gmail.com";//email receiver email address
        $subject = "From: $name <$email>";//subject of the email. It's all looks like from samadhan <abc gmail>
        //merging concating all user values inside body variable.
        $body = "Name: $name \nEmail: $email \nPhone: $phone \nWebsite: $website \nMessage: $message Regards,\n$name";
        $sender = "From: $email";//sender email
        if(mail($receiver, $subject, $body, $sender)){//mail() is a inbuilt php funtion to send mail
            echo "Your message has been sent";
        }else{
            echo "Sorry, failed to send your message!";
        }
    }else{
        echo "Enter a valid email address!";
    }
}else{
    echo "Email and password field is required!";
}
?>