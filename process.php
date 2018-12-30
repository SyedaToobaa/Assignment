<?php
$Name=$_POST['Name'];
$Phone No=$_POST['Phone No'];

//connect to the server and select database
$db=mysqli_connect("localhost","root", "","Login");
mysql_select_db(Login);

//query the database for user
$result=mysql_query("Select * from user Where  name ='$name' and PhoneNo='$PhoneNo'")
 or die ("Failed to query database".mysql_error());
if(mysql_query($db,$result))
{
	echo "connected";
}
else {
	echo "connection failed";
}
?>