<?php 

$nameOfServer = "localhost";
$username = "root";
$password = "";
$dbname = "responseform";

$a=mysqli_connect($nameOfServer,$username,$password,$dbname);

if($a)
{ 
// echo "connection done";
}
else
{
	echo "no connection".mysqli_connect_error();
}

?>