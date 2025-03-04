<?php 

$nameOfServer = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$b=mysqli_connect($nameOfServer,$username,$password,$dbname);

if($b)
{ 
// echo "connection done";
}
else
{
	echo "no connection".mysqli_connect_error();
}

?>