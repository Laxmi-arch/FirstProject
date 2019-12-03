<?php include "dbconnect1.php"?>

<?php
$uname = $_REQUEST["txtname"];
$upass = $_REQUEST["txtpass"];

$sql = "select count(*) as cnt from signup where 
Username = '$uname' and Password = '$upass'";

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
		echo "Welcome " . $uname;
}


else
{
	echo "invalid data";
	/*$url = 
	header('Location: http://localhost/mywebsite/homepage.php?flag='.$flag);*/
}


?>