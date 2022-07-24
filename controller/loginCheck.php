<?php
session_start();

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($username == null || $password == null) {
    echo "Invalid Username/Password !!!";
}
else {
    $file = fopen('../model/user.txt','r');
    while (!feof($file)) {
        $line = fgets($file);
        $user = explode('|', $line);
        echo "<br>";

        if ($username == trim($user[1]) && $password ==trim($user[2])) {
            setcookie('status', 'true', time()+3600,'/');
            header('location:../view/profile.php');
        }
    }

    echo "Invalid User !!!";
}

?>