
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
</head>
</html>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(0);
error_reporting(E_ALL);
?>
<?php
$servername = "localhost:3307";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'reg');

// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// } else {
//     echo "Connected successfully <br>";
// }


$name = ($_POST['usn']);
$pass = ($_POST['pw']);
if($name=="root" && $pass=="root"){
    header('location:disp.php');
}else{
$s = "SELECT * FROM `users` WHERE username='$name' AND pass='$pass'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "Login Succes";
    header('location:h1.php');
}
else if ($num == 0) {
    echo "<script>alert('Password or Username False')</script>";
    header('Refresh: 0.01; URL=index2.php');
} else{
    echo "<script>alert('Login failed')</script>";
    header('Refresh: 0.5; URL=index.php');
}
}
?>