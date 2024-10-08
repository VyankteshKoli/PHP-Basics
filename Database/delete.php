<?php
include "create.php";

$id=$_POST['uid'];
    $sql="delete from  student where id=$id";

    $res=$cn->query($sql);
    if($res==true)
    {
        echo "Delete record";
    }
    else
    {
        echo "Error".$sql."<br>".$cn->error;
    }
    $cn->close();
    
    
?>
<html>
    <body>
        <fieldset>
        <form action="delete.php" method="post">
            Enter the id<input type="text" name="uid">
            <br>
            <input type="submit" value="submit" >
            <a href="home.html"><input type="button" value="Home"></a>
            
        </form>
        </fieldset>
    </body>
</html>
