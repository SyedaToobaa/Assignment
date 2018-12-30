<?php
include('process.php');
if(isset($_GET['Submit']))
{
$name=$_GET['UserName'];
$phone=$_GET['Phone No'];
$pro="INSERT INTO `user`(`UserName`,`Phone No`) VALUES ('$name','$phone')";
if(mysqli_query($pro,$db))
{
	echo "Coonected";
}
else{
	echo "Fail";
}
}
?>
<!DOCTYPE HTML>
<html>
	<title>Phone Diretory</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<body>
		<form action="" method="GET">
   UserName:<br>
  <input type="text" name="UserName" <br><br>
  Phone No:<br>
  <input type="Phone No" name="Phone No"> <br><br>
  <input type="Submit" value="Submit">
</form>
	</body>