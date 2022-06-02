<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Welcome to AMCEC</title>
	    <link rel="shortcut icon" type="image/png" href="images/amclogo.png">
	    <link rel="stylesheet" href="css/login.css">
	</head>
	<body>
		<h1 class="heading">AMCEC Login</h1><br>
		<form action="" method="POST">
			<input class="buttons" type="submit" name="admin_login" value="ADMIN LOGIN" required>
			<input class="buttons" type="submit" name="teacher_login" value="TEACHER LOGIN" required>
			<input class="buttons" type="submit" name="student_login" value="STUDENT LOGIN" required>
		</form>
		<?php
			if(isset($_POST['admin_login'])){
				header("Location: adminLogin.php");
			}
			if(isset($_POST['student_login'])){
				header("Location: studentLogin.php");
			}
			if(isset($_POST['teacher_login'])){
				header("Location: teacherLogin.php");
			}
		?>

	</body>
</html>
