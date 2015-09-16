<?php
$to="jabran93@gmail.com";
echo "page is accurate";
$name=$_POST['name'];
$email=$_POST['email'];
$phone_no=$_POST['phone'];
$message=$_POST['message'];
if(mail($to,$name,$message,$email))
    echo "mail sent";
echo $name;
echo $email;
echo $phone_no;
echo $message;
echo get_template_directory_uri();
echo get_template_directory();
