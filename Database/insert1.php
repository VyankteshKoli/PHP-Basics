<?php
include "create.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['user'];
    $c = $_POST['city1'];
    $e = $_POST['email1'];

    $sql = "INSERT INTO student (name1, city, email) VALUES ('$n','$c','$e')";

    $res = $cn->query($sql);
    if ($res === true) {
        echo "Inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $cn->error;
    }

    $cn->close();
}
?>
