<html>
<head>
	<title>Display</title>
	<style>
		body
		{
		  background: lightblue;	
		}
		table
		{
			background: white;
		}
	</style>
</head>
</html>
<?php
include("conn.php");

$query = "SELECT * FROM form" ;
$data=mysqli_query($a,$query);

$n = mysqli_num_rows($data);

echo $n;


if($n !=0)
{
	?>
	
	<h2 align="center"><mark>The Records</mark></h2>
	<center>
	<table border="4" cellspacing="5">
		<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>USN</th>
		<th>Semister</th>
		<th>Gender</th>
		<th>Area Of interst</th>
		<th>Email</th>
		<th>Backlogs</th>
	    </tr>

	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
		      <td>".$result['fn']."</td>
			  <td>".$result['ln']."</td>
			  <td>".$result['usn']."</td>
			  <td>".$result['sem']."</td>
			  <td>".$result['gender']."</td>
			  <td>".$result['area']."</td>
			  <td>".$result['email']."</td>
			  <td>".$result['backlog']."</td>
	         </tr>
	    ";
	}
}

else
{
	echo "<script>alert('no records')</script>";
}
?>
</table>
</center>
<a href="/cwkeerthan/MinorProject/phpMailer/mail1.php"> Automated Email Generation </a>
<br>
<a href="adminpage.php"> To get info </a>








