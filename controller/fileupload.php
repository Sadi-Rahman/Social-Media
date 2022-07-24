<?php 
	$src = $_FILES['myfile']['tmp_name'];
	$des = 'asset/'.$_FILES['myfile']['name'];

	if(move_uploaded_file($src, $des)){
		header('location:../view/profile.php');
	}else{
		echo "Error";
	}
?>