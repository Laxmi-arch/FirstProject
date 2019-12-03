<?php include "dbconnect1.php" ?>
<?php
$uname = $_REQUEST["txtname"];

$sql = "select Username from signup where Username='$uname'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result))
{
	echo "Username exists, Please choose another";
}
else
{
	echo "Username available";
}

mysqli_close($con);
?>