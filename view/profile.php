<?php 
	if(!isset($_COOKIE['status'])){
		header('location: login.html');
	}
?>

<html>
  <head>
    <title>Profile Page</title>
  </head>

  <body background="../back2.jpg">
    <h1>Welcome to the Profile Page</h1>
    <br />
    <a href="home.php">Homepage</a> | <a href="about.html">About Us</a> |
    <a href="../controller/logout.php">Logout</a> <br />
    <br />

    <form method="post" action="fileupload.php" enctype="multipart/form-data">
      <tr>
        <td>Upload Profile Picture</td>
        <br /><br />
        <input type="file" name="myfile" value=""><br /><br />
        <input type="submit" value="Upload" /><br>

      <?php 
				$file = fopen('../model/user.txt', 'r');
				while(!feof($file)){
					$user = fgets($file);
					$user = explode("|", $user);
					//print_r($user);
					if(count($user) > 1){
			?>
				
      <?php

          }
        }
          ?>

        <hr />
        <br /><br />
      </tr>
    </form>
    <form action="../controller/post.php" method="post" enctype="">
      <tr>
        <td>
          <textarea
            name="ques"
            placeholder="Write Questions or your thoughts"
            id=""
            cols="50"
            rows="7"
          ></textarea
          ><br /><br />
        </td>
        <td><input type="submit" name="Post" value="Post" /></td>
        <hr />
      </tr>
    </form>
  </body>
</html>
