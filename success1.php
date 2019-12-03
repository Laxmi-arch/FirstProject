
<body>
<?php include "dbconnect1.php"?>
<?php
session_start();
$upass ="";
$umobile = "000000";

if (isset($_COOKIE["cname"]))
	$uname = $_COOKIE["cname"];
else
	$uname = "Guest";
if (isset($_COOKIE["cemail"]))
	$uemail = $_COOKIE["cemail"];
else
	$uemail = "abc@abc.com";

if (isset($_SESSION["saddress"]))
	$uaddress = $_SESSION["saddress"];


if (isset($_SESSION["spass"]))
	$upass = $_SESSION["spass"];

if (isset($_SESSION["smobile"]))
	$umobile = $_SESSION["smobile"];

if (isset($_SESSION["sgender"]))
	$ugender = $_SESSION["sgender"];


//echo "<br/> connection successfull  <br/>";

$sql = "Insert into signup (Username,Password,Email,Address,Mobile,Gender)
values ('$uname','$upass','$uemail','$uaddress','$umobile','$$ugender')";

//echo $sql . "<br/>";

if(!mysqli_query($con,$sql))
{
	echo "Error : " . $sql . "  " . mysqli_error($con);	
}
else
{
?>

<h3>
Dear <?php echo $uname ;?> you are successfully registered with our website , you will
soon get an email on your registered <?php echo $uemail;?> and password will be sent on given mobile 
<?php echo $umobile;
}
mysqli_close($con);
?>
</h3>
</body>