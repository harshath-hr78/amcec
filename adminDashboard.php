<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="images/amclogo.png">
    <link rel="stylesheet" href="css/dashboard.css">

	<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"amcec");
	?>
</head>
<body id="body">
	<div id="header"><br>
		<center>AMCEC ADMIN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin email : <?php echo $_SESSION['admin_email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin name : <?php echo $_SESSION['admin_name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a class="logout" href="logout.php">LOGOUT</a>
		</center>
	</div>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
			<table >



				<tr>
					<td id="td">
						<input id="input" type="submit" name="add_new_student" value="Add New Student">
					</td>
				</tr>
				<tr>
					<td id="td">
						<input id="input" type="submit" name="delete_student" value="Delete Student">
					</td>
				</tr>
				<tr>
					<td id="td">
						<input id="input" type="submit" name="add_new_teacher" value="Add New Teacher">
					</td>
				</tr>
				<tr>
					<td id="td">
						<input id="input" type="submit" name="delete_teacher" value="Delete Teacher">
					</td>
				</tr>
				<tr>
					<td id="td">
						<input id="input" type="submit" name="add_new_subject" value="Add New Subject">
					</td>
				</tr>
				<tr>
					<td id="td">
						<input id="input" type="submit" name="show_subject" value="Show Subject">
					</td>
				</tr>
				<tr>
					<td id="td">
						<input id="input" type="submit" name="delete_subject" value="Delete Subject">
					</td>
				</tr>
				<tr>
					<td id="td">
						<input id="input" type="submit" name="show_teacher" value="Show Teachers">
					</td>
				</tr>
				<tr>
					<td id="td">
						<input id="input" type="submit" name="show_student" value="Show Students">
					</td>
				</tr>


			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
				if(isset($_POST['add_new_student'])){
					?>

					<form action="adminAddStudent.php" method="post">
					<table>
						<th><strong><u>ENTER NEW STUDENT:</u></strong></th>
						<tr>
							<td>
								<b>Student USN:</b>
							</td>
							<td>
								<input id="input" type="text" name="student_usn"  required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Student Name:</b>
							</td>
							<td>
								<input id="input" type="text" name="student_name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Student email:</b>
							</td>
							<td>
								<input id="input" type="text" name="student_email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Student password:</b>
							</td>
							<td>
								<input id="input" type="text" name="student_password" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>student mobile:</b>
							</td>
							<td>
								<input id="input" type="text" name="student_mobile" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>gender:</b>
							</td>
							<td>
								<input id="input" type="text" name="gender" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Student Semester:</b>
							</td>
							<td>
								<input id="input" type="text" name="ssd_semester" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Student Section:</b>
							</td>
							<td>
								<input id="input" type="text" name="ssd_section" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Student Dept:</b>
							</td>
							<td>
								<input id="input" type="text" name="ssd_dept" required>
							</td>
						</tr>
                        <tr>
							<td>
								<b>Teacher ID:</b>
							</td>
							<td>
								<input id="input" type="text" name="teacher_id" required>
							</td>
						</tr>


						<br>
						<tr>
							<td></td>
							<td>
								<input id="buttons" type="submit" value="Save">
							</td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>

			<?php
			if(isset($_POST['delete_student']))
			{
				?>

				<form action="adminDEleteStudent.php" method="post">
				&nbsp;&nbsp;<b>Enter USN:</b>&nbsp;&nbsp; <input id="input" type="text" name="delete_student">
				<input id="buttons"type="submit" name="search_by_USN_for_delete" value="Delete">
				</form><br><br>

				<?php
			}
			?>

			<?php
				if(isset($_POST['add_new_teacher'])){
					?>

					<form action="adminAddTeacher.php" method="post">
					<table>
						<th><strong><u>ENTER NEW TEACHER:</u></strong></th>
						<tr>
							<td>
								<b>Teacher ID:</b>
							</td>
							<td>
								<input id="input" type="text" name="teacher_id"  required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Teacher Name:</b>
							</td>
							<td>
								<input id="input" type="text" name="teacher_name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Teacher Email:</b>
							</td>
							<td>
								<input id="input" type="text" name="teacher_email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Teacher Password:</b>
							</td>
							<td>
								<input id="input" type="text" name="teacher_password" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Teacher Dept:</b>
							</td>
							<td>
								<input id="input" type="text" name="teacher_dept" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Teacher Mobile:</b>
							</td>
							<td>
								<input id="input" type="text" name="teacher_mobile" required>
							</td>
						</tr>

						<br>
						<tr>
							<td></td>
							<td>
								<input id="buttons" type="submit" value="Save">
							</td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>

			<?php
			if(isset($_POST['delete_teacher']))
			{
				?>

				<form action="adminDeleteTeacher.php" method="post">
				&nbsp;&nbsp;<b>Enter Teacher ID:</b>&nbsp;&nbsp; <input id="input" type="text" name="delete_teacher">
				<input id="buttons"type="submit" name="search_by_USN_for_delete_teacher" value="Delete">
				</form><br><br>

				<?php
			}
			?>

			<?php
				if(isset($_POST['add_new_subject'])){
					?>

					<form action="adminAddSubject.php" method="post">
					<table>
						<th><strong><u>ADD NEW SUBJECT:</u></strong></th>
						<tr>
							<td>
								<b>Subject code:</b>
							</td>
							<td>
								<input id="input" type="text" name="subject_code" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Subject Name:</b>
							</td>
							<td>
								<input id="input" type="text" name="subject_name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>subject Semester:</b>
							</td>
							<td>
								<input id="input" type="text" name="subject_semester" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Subject Credits:</b>
							</td>
							<td>
								<input id="input" type="text" name="subject_credits" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Subject_dept:</b>
							</td>
							<td>
								<input id="input" type="text" name="subject_dept" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Teacher ID:</b>
							</td>
							<td>
								<input id="input" type="text" name="teacher_id" required>
							</td>
						</tr>

						<br>
						<tr>
							<td></td>
							<td>
								<input id="buttons" type="submit" value="Save">
							</td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>

			<?php
				if(isset($_POST['show_subject']))
				{
					?>
					<center>
						<h2>SUBJECT DETAILS</h2>
						<table style="border: 3px solid white;">
							<tr>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo 'SUBJECT CODE'?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo 'SUBJECT NAME'?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo 'SUBJECT SEMESTER'?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo 'SUBJECT CREDITS'?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo 'SUBJECT COURSE'?>" disabled></td>


							</tr>
						</table>
					</center>
					<?php
					$query = "select * from subjects";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run))
					{
						?>
						<center>
						<table style="border: 3px solid white;">
							<tr>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['subject_code']?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['subject_name']?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['subject_semester']?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['subject_credits']?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['subject_dept']?>" disabled></td>
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>

			<?php
			if(isset($_POST['delete_subject']))
			{
				?>

				<form action="adminDeleteSubject.php" method="post">
				&nbsp;&nbsp;<b>Enter subject code:</b>&nbsp;&nbsp; <input id="input" type="text" name="delete_subject">
				<input id="buttons"type="submit" name="search_by_USN_for_delete_subject" value="Delete">
				</form><br><br>

				<?php
			}
			?>

			<?php
				if(isset($_POST['show_teacher']))
				{
					?>
					<center>
						<h2>TEACHERS DETAILS</h2>
						<table style="border: 3px solid white;">
							<tr>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo 'TEACHER ID'?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo 'TEACHER NAME'?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo 'TEACHER EMAIL'?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo 'TEACHER PASSWORD'?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo 'TEACHER DEPT'?>" disabled></td>
                                <td id="td"><input id="input" type="text"  name="total" value="<?php echo 'TEACHER MOBILE'?>" disabled></td>

							</tr>
						</table>
					</center>
					<?php
					$query = "select * from teachers";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run))
					{
						?>
						<center>
						<table style="border: 3px solid white;">
							<tr>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['teacher_id']?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['teacher_name']?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['teacher_email']?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['teacher_password']?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['teacher_dept']?>" disabled></td>
                                <td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['teacher_mobile']?>" disabled></td>


							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>





			<?php
				if(isset($_POST['show_student']))
				{
					?>
					<center>
						<h2>STUDENT DETAILS</h2>
						<table style="border: 3px solid white;">
							<tr>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo 'STUDENT USN'?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo 'STUDENT NAME'?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo 'STUDENT EMAIL'?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo 'STUDENT PASSWORD'?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo 'STUDENT MOBILE'?>" disabled></td>
                                <td id="td"><input id="input" type="text"  name="total" value="<?php echo 'STUDENT GENDER'?>" disabled></td>
                                <td id="td"><input id="input" type="text"  name="total" value="<?php echo 'STUDENT SEMESTER'?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo 'STUDENT SECTION'?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo 'STUDENT DEPT'?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo 'PROCTOR ID'?>" disabled></td>
							</tr>
						</table>
					</center>
					<?php
					$query = "select student_usn,student_name,student_email,student_password,student_mobile,gender,ssd_semester,ssd_section,ssd_dept,teach_id from students S,semsec SS,sss_combine SSS where S.student_usn=SSS.sss_usn AND SS.ssd_id=SSS.sss_id ";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run))
					{
						?>
						<center>
						<table style="border: 3px solid white;">
							<tr>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['student_usn']?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['student_name']?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['student_email']?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['student_password']?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['student_mobile']?>" disabled></td>
                                <td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['gender']?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['ssd_semester']?>" disabled></td>
                                <td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['ssd_section']?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['ssd_dept']?>" disabled></td>
								<td id="td"><input id="input" type="text"  name="total" value="<?php echo $row['teach_id']?>" disabled></td>
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>

		</div>
	</div>
</body>
</html>
