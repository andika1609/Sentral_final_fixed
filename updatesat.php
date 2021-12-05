<?php
include 'connection.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM `pesanan_satuan` WHERE `id`='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$dname = $row['nama'];
$dtglmsk = $row['tgl_msk'];
$dtglkl = $row['tgl_kel'];
$db1 = $row['bvr_1'];
$db2 = $row['bvr_2'];
$dpb = $row['pb'];
$dpj = $row['pj'];
$dstatus = $row['Status'];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tglmsk = $_POST['tgl_msk'];
    $tglkl = $_POST['tgl_kel'];
    $b1 = $_POST['bvr_1'];
    $b2 = $_POST['bvr_2'];
    $pb = $_POST['pb'];
    $pj = $_POST['pj'];
    $status = $_POST['status'];

    $SQL = "UPDATE `pesanan_satuan` SET `id`='$id',`nama`='$nama',`tgl_msk`='$tglmsk',`tgl_kel`='$tglkl',`bvr_1`='$b1',`bvr_2`='$b2',`pb`='$pb',`pj`='$pj',`Status`='$status' WHERE `id`='$id'";
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
                <td><?= ":" . $id ?></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>
                    <input type="text" name="nama" value="<?= $dname ?>">
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
                <th>Bed Cover 1</th>
                <td>
                    <input type="number" min="0" name="bvr_1" id="" value="<?= $db1 ?>">
                </td>
            </tr>
            <tr>
                <th>Bed Cover 2</th>
                <td>
                    <input type="number" min="0" name="bvr_2" id="" value="<?= $db2 ?>">
                </td>
            </tr>
            <tr>
                <th>Pakaian biasa</th>
                <td>
                    <input type="number" min="0" name="pb" id="" value="<?= $dpb ?>">
                </td>
            </tr>
            <tr>
                <th>Pakaian Jeans</th>
                <td>
                    <input type="number" min="0" name="pj" id="" value="<?= $dpj ?>">
                </td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    <!-- <input type="text" name="status" id="" value=""> -->
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