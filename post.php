<?php

$ques = $_REQUEST['ques'];
//$password = $_REQUEST['password'];
//$email = $_REQUEST['email'];
//$tel = $_REQUEST['tel'];
//$address = $_REQUEST['address']; 

if ($ques == null ) {
    echo "Invalid Post !!!";
}
else {
   $data = $ques."\r\n";
   $file =fopen ('post.txt','a');
   fwrite($file,$data);
   header('location: home.php');
  
   
    
   }


?>