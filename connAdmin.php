<?php

$connect = mysqli_connect("localhost","root","","responseform");

if($connect)
{ 
echo "connection done";
}
else
{
	echo "no connection".mysqli_connect_error();
}
?>