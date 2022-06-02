<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="images/amclogo.png">
	  <link rel="stylesheet" href="css/studentLogin.css">
</head>
<body >
		<h3 class="heading">Student LogIn Page</h3><br>
		<form action="" method="post">
			Stud USN : <input class="buttons" type="text" name="usn" required><br><br>
			Password : <input class="buttons" type="password" name="password" required><br><br>
			<input class="buttons" type="submit" name="submit" value="LOGIN">
		</form><br>
		<?php
			session_start();
			if(isset($_POST['submit']))
			{
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"amcec");
				$query = "select * from students where student_usn = '$_POST[usn]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run))
				{
					if($row['student_usn'] == $_POST['usn'])
					{
						if($row['student_password'] == $_POST['password'])
						{
							$_SESSION['student_name'] =  $row['student_name'];
							$_SESSION['student_email'] =  $row['student_email'];
							$_SESSION['student_usn'] =  $row['student_usn'];
							header("Location: studentDashboard.php");
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
						<span>Wrong UserName !!</span>
						<?php
					}
				}
			}
		?>

</body>
</html>
