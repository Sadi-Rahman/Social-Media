
<html>
  <head>
    <title>Homepage</title>
  </head>

  <body>
    <h1>Welcome to the Homepage</h1>
    <a href="profile.php">Profile</a><br />
    <a href="about.html">About Us</a><br />
    <a href="logout.html">Logout</a><br /><br><br>

			<?php 
				$file = fopen('post.txt', 'r');
				while(!feof($file)){
					$post = fgets($file);
					$post = ($post);
					//print_r($user);
					
			?>
			<table  border="1px" style="border-collapse: collapse">
    		<tr>
			<td><?=$post	?></td><br>
			</tr>
			<form action="comment.php" method="post" enctype="">
			<tr>
			<td>
			<textarea placeholder="Comment" name="comment" id="" cols="30" rows="1"></textarea>
			<input type="submit" name="Post" value="Post" id="">
			</td></tr>
			</form>
			<?php
					}
				
			?>

			<tr>
				
			</tr>
</table>

  </body>
</html>
