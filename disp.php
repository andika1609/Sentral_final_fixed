<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .nav {
            background-color: black;
        }

        #nav {
            text-align: center;
            color: white;
            text-decoration: none;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="nav">
        <h1 id="nav"><a href="index2.php">Home</a></h1>
    </div>
</body>

</html>
<style>
    a {
        text-decoration: none;
        color: white;
    }
</style>

<?php
$conn = mysqli_connect('localhost:3307', 'root', '', 'reg');
// if (!$conn) {
//     echo "Invalid";
// } else {
//     echo "valid";
// }

$sql = "SELECT * FROM `pes_kilo`";
$run = mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<div style='margin-left: auto; margin-right: auto;'>";
    echo "<table border='1' style='text-align: center; margin-left: auto; margin-right: auto;'>
        <tr>
        <th colspan='7'>
            Pesanan kiloan
        </th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Berat(Kg)</th>
            <th>Tanggal masuk</th>
            <th>Tanggal ambil</th>
            <th>Status</th>
            <th>Operation</th>
        </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        // echo '<table>';
        $id = $row['id'];
        $name = $row['nama'];
        $kilo = $row['kilo'];
        $tglmsk = $row['tgl_masuk'];
        $tglkl = $row['tgl_mbil'];
        $status = $row['status'];
        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $name . "</td>";
        echo "<td>" . $kilo   . "</td>";
        echo "<td>" . $tglmsk  . "</td>";
        echo "<td>" . $tglkl . "</td>";
        echo "<td>" . $status . "</td>";
        echo "<td>
                <button style='background-color: blue; color: white;''>
                    <a href='updatekil.php?updateid=" . $id . "'>Update</a>
                </button>
                <button style='background-color: red; color: white;'>
                    <a href='deletekil.php?deleteid=" . $id . "'>Delete</a>
                </button>
            </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Failed";
}
echo "</div>";
echo "<br><br><br>";

$ssql = "SELECT * FROM `pesanan_satuan`";
$srun = mysqli_query($conn, $ssql);
$sresult = mysqli_query($conn, $ssql);

if ($sresult) {
    echo "<table border='1' style='text-align: center; margin-left: auto; margin-right: auto;'>
        <tr>
        <th colspan='10'>
            Pesanan Satuan
        </th>
        </tr>
        <tr>
        <th>id</th>
        <th>Nama</th>
        <th>Tanggal Masuk</th>
        <th>Tanggal Keluar</th>
        <th>Bed Cover 1</th>
        <th>Bed Cover 2</th>
        <th>Pakaian Biasa</th>
        <th>Jeans</th>
        <th>Status</th>
        <th cellpadding='2'>Operation</th>
        </tr>";
    while ($row = mysqli_fetch_assoc($sresult)) {
        // echo '<table>';
        $id = $row['id'];
        $name = $row['nama'];
        $tglmsk = $row['tgl_msk'];
        $tglkl = $row['tgl_kel'];
        $b1 = $row['bvr_1'];
        $b2 = $row['bvr_2'];
        $pb = $row['pb'];
        $pj = $row['pj'];
        $status = $row['Status'];
        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $name . "</td>";
        echo "<td>" . $tglmsk  . "</td>";
        echo "<td>" . $tglkl . "</td>";
        echo "<td>" . $b1   . "</td>";
        echo "<td>" . $b2   . "</td>";
        echo "<td>" . $pb   . "</td>";
        echo "<td>" . $pj   . "</td>";
        echo "<td>" . $status . "</td>";
        echo "<td>
        <button style='background-color: blue; color: white;''>
                    <a href='updatesat.php?updateid=" . $id . "'>Update</a>
                </button>
                <button style='background-color: red; color: white;'>
                    <a href='deletesat.php?deleteid=" . $id . "'>Delete</a>
                </button>
        </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Failed";
}
