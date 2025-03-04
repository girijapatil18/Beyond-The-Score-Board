<?php include("conn.php"); ?>     
<!-- conn.php to conn1.php -->
<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
<body>

<div class="container">
	
	<form action="#" method="POST">
	<div class="title">
		Sports form
	</div>

	<div class="form">
		<div class="inputform">
			
			<label>First Name</label>
			<input type="text" class="input" name="fn" required>

		</div>

		<div class="inputform">
			<label>Last Name</label>
			<input type="text" class="input" name="ln" required>

		</div>

		<div class="inputform">
			<label>USN</label>
			<input type="text" class="input" name="usn" required>

		</div>

		<div class="inputform">
			<label>Semister</label>
			<input type="text" class="input" name="sem" required>

		</div>

		<div class="inputform">
			<label>Gender</label>
			<select name="gender" required>
				<option>Male</option>
				<option>Female</option>
                <option>Others</option>
			</select>
			

		</div>

		<div class="inputform">
			<label>Area of interest</label>
			<select name="area" required>
				<option>Basketball</option>
				<option>Softball</option>
				<option>Football</option>
				<option>Cricket</option>
				<option>Hockey</option>
				<option>Singing</option>
				<option>Dancing</option>
				<option>Debate</option>
			</select>

		</div>

		<div class="inputform">
			<label>Email</label>
			<input type="text" class="input" name="email" required>

		</div>

		<div class="inputform">
			<label>Number of backlogs</label>
			<select name="backlog" required>
				<option>none</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
                <option>more</option>
			</select>

		</div>

		

		<div class="inputform">
			<input type="submit" value="Register" class="button" name="register">

		</div>

	</div>
</form>

</div>


</body>
</html> -->


<!DOCTYPE html>
<html>
<head>
<title> SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style20.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Sports Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
					<input class="text" type="text" name="fn" placeholder="First Name" required="">
					<input class="text" type="text" name="ln" placeholder="Last Name" required="">
					<input class="text" type="text" name="usn" placeholder="USN" required="">
					<input class="text" type="text" name="sem" placeholder="Semister" required="">
					<input class="text" type="text" name="branch" placeholder="Enter branch" required="">
					<input class="text" type="text" name="year" placeholder="Enter year of joining" required="">
					<input type="text" class="input" name="email" placeholder="Enter email" required="">
					
					<br>
					
					<label>Gender</label>
				<div class="gender">			
					<select name="gender" required>
				<option>Male</option>
				<option>Female</option>
                <option>Others</option>
				</select>
				</div>
				<br>
				
				<div class="inputform">
			<label>Area of interest</label>
			<br>
			<select name="area" required>
				<option>Basketball</option>
				<option>Softball</option>
				<option>Football</option>
				<option>Cricket</option>
				<option>Hockey</option>
				<option>Singing</option>
				<option>Dancing</option>
				<option>Debate</option>
			</select>

		</div> 
		<br>
		
		<!-- <div class="inputform">
			 <label>Email</label> -->
			<!-- <input type="text" class="input" name="email" placeholder="Enter email" required>

		</div>  -->

		<div class="inputform">
			<label>Number of backlogs</label>
			<br>
			<select name="backlog" required>
				<option>none</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
                <option>more</option>
			</select>

		</div>
		<input class="text" type="text" name="achievements" placeholder="Achievements" required="">

			
					<!-- <div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label> -->
						<div class="clear"> </div>
					</div>
					<input type="submit" value="REGISTER" name="register">
				</form>
				<!-- <p>Don't have an Account? <a href="#"> Login Now!</a></p> -->
			</div>
		</div>
		
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>



<?php

if($_POST['register'])
{ 
$fn = $_POST['fn'];	
$ln = $_POST['ln'];	
$usn = $_POST['usn'];	
$sem = $_POST['sem'];
$branch = $_POST['branch'];	
$year = $_POST['year'];
$gender = $_POST['gender'];	
$area = $_POST['area'];	
$backlog = $_POST['backlog'];
$email = $_POST['email'];	
$achievements = $_POST['achievements'];


$q = "INSERT INTO form values('$fn','$ln','$usn','$sem','$branch','$year','$gender','$area','$backlog','$email','$achievements')";
$data = mysqli_query($a,$q);

if($data)
{
	echo " <script>alert('data inserted');</script>";
}
else
{
	echo "<script>alert('failed')</script>";
}

}

?>