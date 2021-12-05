<?php
include 'connection.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM `pes_kilo` WHERE `id`='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$did = $row['id'];
$dname = $row['nama'];
$dkilo = $row['kilo'];
$dtglmsk = $row['tgl_masuk'];
$dtglkl = $row['tgl_mbil'];
$dstatus = $row['status'];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kilo = $_POST['kilo'];
    $tgl_msk = $_POST['tgl_msk'];
    $tgl_kel = $_POST['tgl_kel'];
    $status = $_POST['status'];

    $SQL = "UPDATE `pes_kilo` SET `id`='$id',`nama`='$nama',`kilo`='$kilo',`tgl_masuk`='$tgl_msk',`tgl_mbil`='$tgl_kel',`status`='$status' WHERE `id`='$id'";
    $sresult = mysqli_query($conn, $SQL);
    if ($sresult) {
        header('location:disp.php');
    } else {
        echo "<script>alert('Hello! I am an alert box!!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
        th {
            text-align: left;
        }
    </style>

</head>

<body>
    <form action="" method="POST">
        <table border="1">
            <tr>
                <th>Id</th>
                <td><?= ":" . $did ?></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>
                    <input type="text" name="nama" value="<?= $dname ?>">
                </td>
            </tr>
            <tr>
                <th>Kilo</th>
                <td>
                    <input type="number" name="kilo" id="" value="<?= $dkilo ?>">
                </td>
            </tr>
            <tr>
                <th>Tanggal Masuk</th>
                <td>
                    <input type="text" name="tgl_msk" id="" value="<?= $dtglmsk ?>">
                </td>
            </tr>
            <tr>
                <th>Tanggal Keluar</th>
                <td>
                    <input type="text" name="tgl_kel" id="" value="<?= $dtglkl ?>">
                </td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    <!--<input type="text" name="status" id="" value="">-->
                    <select name="status" id="">
                    <?php
                        if($dstatus=="Belum Dikirim"){
                        echo'<option value="Belum Dikirim">Belum Dikirim</option>
                        <option value="Dikirim">Dikirim</option>
                        <option value="Selesai">Selesai</option>';}
                        elseif($dstatus=="Dikirim"){
                            echo'<option value="Dikirim">Dikirim</option>
                            <option value="Belum Dikirim">Belum Dikirim</option>
                            <option value="Selesai">Selesai</option>';
                        }
                        elseif($dstatus=="Selesai"){
                            echo'<option value="Selesai">Selesai</option>
                        <option value="Belum Dikirim">Belum Dikirim</option>
                        <option value="Dikirim">Dikirim</option>';
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;" colspan="2">
                    <button type="submit" name="submit">Update</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>