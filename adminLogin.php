<!DOCTYPE html>
<html>
  <head>
  <title>Admin Login</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="images/amclogo.png">
      <link rel="stylesheet" href="css/adminLogin.css">

  </head>
  <body>

  		<h3 class="heading">Admin LogIn Page</h3><br>
  		<form action="" method="post">
  			Email ID: <input class="buttons" type="text" name="email"  required><br><br>
  			Password: <input class="buttons" type="password" name="password" placeholder: required><br><br>
  			<input class="buttons" type="submit" name="submit" value="LOGIN">
  		</form><br>

  		<?php
  			session_start();
  			if(isset($_POST['submit'])){
  				$connection = mysqli_connect("localhost","root","");
  				$db = mysqli_select_db($connection,"amcec");
  				$query = "select * from admin where admin_email='$_POST[email]'";
  				$query_run = mysqli_query($connection,$query);
  				while ($row = mysqli_fetch_assoc($query_run)) {
  					if($row['admin_email'] == $_POST['email']){
  						if($row['admin_password'] == $_POST['password']){
  							$_SESSION['admin_name'] =  $row['admin_name'];
  							$_SESSION['admin_email'] =  $row['admin_email'];
  							header("Location: adminDashboard.php");
  						}
  						else{
  							?>
  							<span>Wrong Password !!</span>
  							<?php
  						}

  					}
  					else{
  						?>
  						<span>Wrong email !</span>
  						<?php
  					}
  				}

  			}
  		?>

  </body>
</html>
