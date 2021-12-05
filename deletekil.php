<?php
include 'connection.php';
?>
<?php
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $SQL="DELETE FROM `pes_kilo` WHERE `id`='$id'";
    $result=mysqli_query($conn,$SQL);
    if($result){
        // echo "DELETED SUCCES";
        header('location:disp.php');
    }
}

?>