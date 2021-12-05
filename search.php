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

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #Putih {
            background-color: white;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */
        li a:hover {
            background-color: #111;
        }
    </style>
</head>

<body>
    <div class="nav">
        <ul>
            <li><a href="h1.php">Home</a></li>
            <li id="Putih">Tracking</li>
        </ul>
        <div style="margin-bottom: 20px;"></div>
    </div>
    <div>
        <form action="" method="post">
            <select name="kilsat" id="">
                <option value="Kiloan">Kiloan</option>
                <option value="Satuan">Satuan</option>
            </select>
            <br>
            <label for="">Nama</label><br>
            <input type="text" name="nama" id=""><br>
            <input type="submit" value="Submit">
            <br>
            <input type="reset" value="Reset">
        </form>
    </div>
    <div>
        <?php
        error_reporting(0);        
        $opt = $_POST['kilsat'];
        $nm = $_POST['nama'];
        if ($opt == "Kiloan") {
            $sql = "SELECT * FROM `pes_kilo` WHERE `nama`='$nm'";
            $run = mysqli_query($conn, $sql);
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<table border='1' style='text-align: center;'>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Berat(Kg)</th>
            <th>Tanggal masuk</th>
            <th>Tanggal ambil</th>
            <th>Status</th>
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
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "Failed";
            }
        } elseif ($opt="Satuan") {
    
        $ssql = "SELECT * FROM `pesanan_satuan` WHERE `nama`='$nm'";
        $srun = mysqli_query($conn, $ssql);
        $sresult = mysqli_query($conn, $ssql);
        
        if ($sresult) {
            echo "<table border='1' style='text-align: center;'>
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
                echo "</tr>";
            }
            echo "</table>";
        
        } else if ($resultCheck == 0) {
                echo "Data not found";
            }
        }
        ?>
    </div>
</body>

</html>