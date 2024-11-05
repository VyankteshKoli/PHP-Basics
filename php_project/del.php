<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "vyanktesh";
$tableName = "college";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving values from the form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    $sql = "delete from college where firstname=$first_name";

    if (mysqli_query($conn, $sql)) {
        echo "<h3>delete from database. Please browse your localhost php my admin to view the updated data.</h3>";
    } else {
        echo "ERROR: Oops! Something went wrong. " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
