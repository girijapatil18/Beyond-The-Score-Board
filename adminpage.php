
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>search</title>
</head>
<body>

<div class="container">
	
	<form  action="#" method="post">
		
		<input type="text" placeholder="event type" name="search">

		<button class="btn" name="submit">Host</button>

	</form>

	<div class="container">

		<table class="table">
			
			<?php
 
$nameOfServer = "localhost";
$username = "root";
$password = "";
$dbname = "responseform";

$connect=mysqli_connect($nameOfServer,$username,$password,$dbname);

if($connect)
{ 
echo "connection done";
}
else
{
	echo "no connection".mysqli_connect_error();
}

if(isset($_POST['submit']))
{
	$search=$_POST['search'];

	$sql1 = "Select * from `form` where area='$search'";
	// $sql1 = "Select '$fn','$ln','$usn' from form where area='$search'";

	$result=mysqli_query($connect,$sql1);

	if($result)
	{
		$num = mysqli_num_rows($result);
		echo $num;

		if($num>0)
		{
			echo '<thead>
			<tr>
			<th>First Name	</th>
		<th>Last Name	</th>
		<th>USN		</th>
		<th>Semister	</th>
		<th>Gender	</th>
		<th>Branch	</th>
		<th>Year of joining	  </th>
		<th>Area Of interst	  </th>
		<th>Backlogs	</th>
		<th>Email	</th>
		<th>Achievements</th>
		</tr>
		</thead>
		';

		while($row = mysqli_fetch_assoc($result)){

		echo '<tbody>
		<tr>

		<td>'.$row['fn'].'</td>
		<td>'.$row['ln'].'</td>
		<td>'.$row['usn'].'</td>
		<td>'.$row['sem'].'</td>
		<td>'.$row['gender'].'</td>
		<td>'.$row['branch'].'</td>
		<td>'.$row['year'].'</td>
		<td>'.$row['area'].'</td>
		<td>'.$row['backlog'].'</td>
		<td>'.$row['email'].'</td>
		<td>'.$row['achievements'].'</td>

		</tr>
		</tbody>
		';
	}

		}
		else
		{
			echo "No data";
		}
	}
}


			?>

		</table>

	</div>

</div>
<br>
<!-- <div class="signup-link">
              Invitation to players  <a href="phpMailer/mail1.php">Send email</a>
            </div> -->
</body>
</html>