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
$conn = mysqli_connect($servername, $username, $password,'reg');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";

$name=($_POST['uname']);
$pass=($_POST['pw']);
$pass1=($_POST['pw2']);
if ($pass==$pass1) {
    $s="SELECT * FROM `users` WHERE username='$name' ";
    $result=mysqli_query($conn,$s);
    $num= mysqli_num_rows($result);
    if ($num==0){
         $reg="INSERT INTO `users`(`username`, `pass`) VALUES ('$name','$pass')";
    mysqli_query($conn, $reg);
    echo"Registration Succesful";
    echo'<div>
            <a href="index2.php"><button>Log In</button></a>
        </div>';
        header('location:index2.php');


    }else{
        echo"<script>alert('Username already taken')</script>";
        header('Refresh: 0.1; URL=index.php');

    }
   
}else{
    echo"<script>alert('Password Confirmation failed')</script>";
    header('Refresh: 0.5; URL=index.php');
}
?>