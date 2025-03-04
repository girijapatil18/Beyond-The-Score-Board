
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="css/style40.css">
</head>
<body>
    


<form action="#" method="post">
<!-- Search <input type="search" name="search"><br> -->
<!-- 
Column: <select name="column">
	<option value="name">Name</option>
	<option value="age">Age</option>
	<option value="gender">Gender</option>
    <option value="branch">Branch</option>
    <option value="year">Year</option>

	</select><br>
<input type ="submit"> -->

<div class="wrap">
   <div class="search">
         <!-- <div class="searchTerm"> -->

          <select name="column">
	        <option value="name">Name</option>
	        <option value="age">Age</option>
	        <option value="gender">Gender</option>
          <option value="branch">Branch</option>
          <option value="year">Year</option>
          <option value="area">Area of interests</option>
        

          </select>

     <!-- <input type="text" class="searchTerm" placeholder="Categories"> -->
      <input type="text" class="searchTerm" name=search placeholder="What are you looking for?">
     
     
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
            
   </div>
</div>
</form>

</body>
</html>





<?php

$search = $_POST['search'];
$column = $_POST['column'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "responseform";

$conn = new mysqli($servername, $username, $password, $db);
if($conn)
{ 
// echo "connection done";
}

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from form where $column = '$search'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["fn"]."  ".$row["ln"]."  ".$row["usn"]."<br>";
}
} else {
	// echo "0 records";
}

$conn->close();

?>