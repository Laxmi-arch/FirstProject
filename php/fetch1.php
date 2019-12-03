<?php
include "db1.php";
$sql="select * from user";
$stmt=$con->prepare($sql);
$stmt->execute();
$result=$stmt->fetchAll(PDO::FETCH_OBJ);
?>
   <table border>
    <tr>
    <td>ID</td>
    <td>username</td>
    <td>password</td>
    <td>Image</td>
    <td>Action</td>
    </tr>

    <?php
foreach($result as $r){
   ?>
    <tr>
    <td><?= $r->ID;?> </td>
    <td><?= $r->username;?> </td>
    <td><?= $r->password;?> </td>
    <td><img src='<?= $r->image;?>' height="50px" width="100px"> </td>
    <td><a href="edit.php?EID=<?= base64_encode($r->ID)  ?>">Edit</a>
    <a href="delete.php?DID=<?=$r->ID  ?>"">Delete</a> </td>
    </tr>

  <?php 
}
?>
    </table>