<?php
include "create.php";

$id=$_POST['uid'];

$sql="select * from student where id=$id";


    $res=$cn->query($sql);
    echo "<br>";
    while($result=mysqli_fetch_array($res))
    {
        echo "name\t\t\t       city\t\t\t      email"."<br>";
        echo "".$result['name1']."\t";
        echo "".$result['city']."\t";
        echo "".$result['email']."\t";

    }
    

$cn->close();


?>