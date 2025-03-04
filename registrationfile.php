<?php include("conn1.php"); ?>
<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>register</title>
</head>
<body>

	<div class="container">
		
		<form action="#" method="POST">
			
			<div class="title">
				Registration Form
			</div>

			<div class="form">
		<div class="inputform">
			
			<label>USN</label>
			<input type="text" class="input" name="usn" required>

		</div>

		<div class="inputform">
			
			<label>Name</label>
			<input type="text" class="input" name="username" required>

		</div>

		<div class="inputform">
			
			<label>Password</label>
			<input type="password" class="input" name="password" required>

		</div>

		<div class="inputform">
			<label>UserType</label>

			<select name="usertype">
				<option>user</option>
				<option>admin</option>
			</select>
		</div>

		<div class="inputform">
			<input type="submit" value="Register" class="button" name="register">


	</div>



		</form>


	</div>

</body>
</html> -->

<?php

if($_POST['register'])
{ 
$usn = $_POST['usn'];	
$username = $_POST['username'];	
$password = $_POST['password'];	
$usertype = $_POST['usertype'];

$que1 = "INSERT INTO login values('$usn','$username','$password','$usertype')";

$data1=mysqli_query($b,$que1);

if($data1)
{
	echo "<script>alert('data inserted');</script>";
}
else
{
	echo "<script>alert('failed')</script>";
}
}

?>


<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration Form</title> 
    <link rel="stylesheet" href="css/style30.css">
   </head>
<body>
  <div class="wrapper">
  
    <h2>Registration</h2>
    <form action="#" method="POST">
      <div class="input-box">
        <input type="text" placeholder="Enter your USN" name="usn" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your Username" name="username" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Enter your Password" name="password" required>
      </div>
      <div class="input-box">
        <!-- <input type="password" placeholder="User Type" name="usertype" required> -->
		<select name="usertype" >
		<!-- <input name="usertype" placeholder="User Type" type="text" required> -->
		<option>user</option>
		<!-- <option>admin</option> -->
		</select>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now" name="register">
      </div>
      <!-- <div class="text">
        <h3>Already have an account? <a href="#">Login now</a></h3> -->
      </div>
    </form>
  </div>
</body>
</html>