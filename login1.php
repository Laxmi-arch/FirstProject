<?php include "dbconnect.php"?>

<?php
$uname = $_REQUEST["username"];
$upass = $_REQUEST["userpassword"];

$sql = "select count(*) as cnt from Signup where 
username = '$uname' and userpass = '$upass'";

//echo $sql;

//mysqli_close($con);
$flag = 0;

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($result))
{
		$flag = $row["cnt"];
}

if($flag)
{
		echo "Welcom " . $uname;
}


else
{/*
	$url = 
	header('Location: http://localhost/mywebsite/homepage.php?flag='.$flag);*/
}


?>