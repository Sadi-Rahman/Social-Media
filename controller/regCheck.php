<<?php

session_start();

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];

if ($username == null || $password == null || $email == null) {
    echo "Invalid Username/Password/Email !!!";
}
else {
   $data = $username."|".$password."|".$email."\r\n";
   $file =fopen ('../model/user.txt','a');
   fwrite($file,$data);

   if ($name == "create") {
    header(location:index.html);
   }
   else{
   header(location:login.html);
    
   }
    
   }


?>