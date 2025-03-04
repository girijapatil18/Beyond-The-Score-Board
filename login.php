<?php
 
$nameOfServer= "localhost";
$user = "root";
$pass = "";
$nameofdb="user";

$data=mysqli_connect($nameOfServer,$user,$pass,$nameofdb);

if($data===false)
{
	echo "<script>alert('Error')</script>";
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	 $username =$_POST['username'];
	 $password =$_POST['password'];


	 $sql ="SELECT * FROM login where username= '".$username."' AND password= '".$password."' ";

	 $result = mysqli_query($data,$sql);
	 

	 $row = mysqli_fetch_array($result);

	 if($row["usertype"]=="user")
	 {
	 	header("location:index.html");
	 }

	 else if($row["usertype"]=="admin")
	 {
	 	header("location:disp.php");
	 }

	 else
	 {
	 	echo "Incorrect";
	 }

}

?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form </title>
      <link rel="stylesheet" href="css/style10.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form action="#" method="POST">
            <div class="field">
               <input type="text" placeholder="Enter Username" name="username" required>
               <!-- <label>Email Address</label> -->
            </div>
            <div class="field">
               <input type="password" placeholder= "Enter Password" name="password" required>
               <!-- <label>Password</label> -->
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <!-- <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div> -->
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="registrationfile.php">Signup now</a>
            </div>
         </form>
      </div>
   </body>
</html>


<!-- 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
</head>
<body>

<center>
	<h1><mark>Login Form</mark></h1>
<br>
<br>
<div style="background: lightblue;width: 500px;">

	<form action="#" method="POST">
	<div>
		<label>Username</label>
		<input type="text" name="username" required>
	</div>
	<br>
	<br>

	<div>
		<label>Password</label>
		<input type="password" name="password" required>
	</div>
	<br>
	<br>

		<div>
		<input type="submit" value="login" required>
	</div>
	<br>
</div>

</center>
</body>
</html> -->