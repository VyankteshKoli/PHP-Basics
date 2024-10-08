<?php
include "create.php";
$id=$_POST['uid'];
$n=$_POST['user'];
$c=$_POST['city1'];
$e=$_POST['email1'];
$sql="update student set name1='$n' ,city='$c',email='$e' where id=$id ";
    

    $res=$cn->query($sql);
    if($res==true)
    {
        echo "update";
    }
    else
    {
        echo "Error".$sql."<br>".$cn->error;
    }
    

$cn->close();
?>