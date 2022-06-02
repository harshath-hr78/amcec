<!DOCTYPE html>
<html>
  <head>
  	<title>Teacher Login</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="images/amclogo.png">
    <link rel="stylesheet" href="css/teacherLogin.css">

  </head>
  <body >
  		<h3 class="heading">Teacher LogIn Page</h3><br>
  		<form action="" method="post">
  			email ID : <input class="buttons" type="text" name="email" required><br><br>
  			Password : <input class="buttons" type="password" name="password" required><br><br>
  			<input class="buttons" type="submit" name="submit" value="LOGIN">
  		</form><br>
  		<?php
  			session_start();
  			if(isset($_POST['submit']))
  			{
  				$connection = mysqli_connect("localhost","root","");
  				$db = mysqli_select_db($connection,"amcec");
  				$query = "select * from teachers where teacher_email = '$_POST[email]'";
  				$query_run = mysqli_query($connection,$query);
  				while ($row = mysqli_fetch_assoc($query_run))
  				{
  					if($row['teacher_email'] == $_POST['email'])
  					{
  						if($row['teacher_password'] == $_POST['password'])
  						{

  							$_SESSION['teacher_name'] =  $row['teacher_name'];
  							$_SESSION['teacher_email'] =  $row['teacher_email'];
  							$_SESSION['teacher_id'] = $row['teacher_id'];


  							header("Location: teacherDashboard.php");
  						}
  						else{
  							?>
  							<span>Wrong Password !!</span>
  							<?php
  						}
  					}
  					else
  					{
  						?>
  						<span>Wrong email ID !!</span>
  						<?php
  					}
  				}
  			}
  		?>

  </body>
</html>
