<?php
$servername="localhost";
$username="root";
$password="";
$dbname="php";
$cn=mysqli_connect($servername,$username,$password,$dbname);

if(!$cn)
{
    echo "connect failed";

}
else
{
    echo "";
}


?>