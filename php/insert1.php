<?php
include "db1.php";
$error='';
    if(isset($_POST['login'])){
        extract($_POST);
        $fname=$_FILES['image']['name'];
        $ftype=$_FILES['image']['type'];
        $fsize=$_FILES['image']['size'];
        $ftmp=$_FILES['image']['tmp_name'];
        //echo $fname.' '.$ftype.' '.$fsize.' '.$ftmp;
        $farr=array('docx','pptx','jpg','png');
        $ext=explode('.',$_FILES['image']['name']);
        $fext=strtolower(end($ext));
        if(!in_array($fext,$farr)){
            $error="Extension not allowed";
        }
        else if($fsize>60048123){
            $error="File size exceeds";
        }
        else{
           move_uploaded_file($ftmp,"images/".$fname);
           $filepath="images/".$fname;

        //    $sql="insert into user(username,password,image)values('$uname','$pwd','$filepath')";
        //   echo $sql;
        //    $stmt=$con->query($sql);
        $sql="insert into user(username,password,image)values(:uname,:pwd,:file)";
        $stmt=$con->prepare($sql);
        $stmt->bindParam(':uname',$uname);
        $stmt->bindParam(':pwd',$pwd);
        $stmt->bindParam(':file',$filepath);
        if($stmt->execute()){
            echo "data inserted";
            header('location:fetch1.php');
        }
        else{
            echo "not inserted";
        }
        }


    }
   ?>




<form method="post" enctype="multipart/form-data">
<input type="text" name="uname"><br>
<input type="password" name="pwd"><br>
<input type="file" name="image"><span><?= $error;?></span><br>
<input type="submit" name="login">
</form>