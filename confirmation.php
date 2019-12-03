<html>
<body style="color:black">
<?php
session_start();
//$uname = $_GET["txtname"];
//$uname = $_POST["txtname"];
$uname = $_REQUEST["txtname"];
$upass = $_REQUEST["txtpass"];
$uemail = $_REQUEST["email"];
$uaddress = $_REQUEST["txaaddr"];
$umobile =   $_REQUEST["mobile"];

$ugender = $_REQUEST["rdogender"];
if($ugender == "m")
	$gender = "Male";
elseif($ugender == "f")
	$gender = "Female";
elseif($ugender == "t")
	$gender = "Transgender";	
else
	$gender="No Gender Selected";

/*------to store the value of signup page in variable------*/

setcookie("cname",$uname,time()+3600);
setcookie("cemail",$uemail,time()+3600);

$_SESSION["spass"] = $upass;
$_SESSION["smobile"] = $umobile;
$_SESSION ["saddress"] = $uaddress;
$_SESSION ["sgender"] = $gender;

/*------to those value in session------*/
?>

<form action="success1.php">
<table align="center" border="1" width="30%" bgcolor="pink">
<tr>
<th colspan="2"> Registration Form </th>
</tr>

<tr> 
<td> Username </td>
<td> <?php echo $uname ; ?> </td>
</tr>
<tr> 
<td> Password </td>
<td> <?php echo $upass ; ?> </td>
</tr>
<tr> 
<td> email </td>
<td> <?php echo $uemail ; ?> </td>
</tr>
<tr> 
<td> Address </td>
<td> <?php echo $uaddress ; ?> </td>
</tr>
<tr> 
<td> gender </td>
<td> <?php echo $gender ; ?> </td>
</tr>

<tr> 
<td> mobile </td>
<td nowrap> <?php echo $umobile ; ?> </td>
</tr>
<tr>
<td align="right" nowrap> 
<button type="button" onclick="window.history.back()"> Back to Signup </button></td>
<td>
<button type="submit"> Confirm </button>
</td>
</tr>
</table>
</form>
</body>
</html>