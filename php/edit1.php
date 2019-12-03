<?php
include "db1.php";
$error='';
// echo base64_decode($_GET['EID']);
$id=base64_decode($_GET['EID']);
$sql="select * from user where ID=:ID";
$stmt=$con->prepare($sql);
$stmt->bindparam(':ID',$id);
$stmt->execute();
$result=$stmt->FetchAll(PDO::FETCH_ASSOC);
foreach($result as $r){?>
<form method="post" enctype="multipart/form-data">
<input type="text" name="uname" value="<?= $r['username']  ?>"><br>
<input type="password" name="pwd" value="<?= $r['password']  ?>"><br>
<input type="file" name="image"><span><?= $error;?></span><br>
<input type="submit" name="login">
</form>
<?php

}