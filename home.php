<?php 
	if(!isset($_COOKIE['status'])){
		header('location: login.html');
	}
?>

<html>
  <head>
    <title>Homepage</title>
  </head>

  <body>
    <h1>Welcome to the Homepage</h1>
    <a href="profile.php">Profile</a><br />
    <a href="about.html">About Us</a><br />
    <a href="logout.html">Logout</a><br />

<?php 
				$file = fopen('post.txt', 'r');
				while(!feof($file)){
					$post = fgets($file);
					$post = ($post);
					//print_r($user);
					
			?>
    <tr>
				<th><?=$post	?></th>
				
			
	 
				</th>
			</tr>
			<?php
					}
				
			?>


  </body>
</html>
