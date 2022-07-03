<?php

$Post = $_REQUEST['Post'];

$data=$Post."\r\n";
$file = fopen('comment.txt', 'a');
fwrite($file, $data);
header('location: home.php');

?>