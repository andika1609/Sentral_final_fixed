<?php
include 'connection.php';
$sql = "SELECT * FROM `users`";
$run = mysqli_query($conn, $sql);

echo '<table border="1" style="margin-left: auto; margin-right: auto; width: 250px;">';
echo "<th>User</th>";
echo "<th>Password</th>";
    while ($row = mysqli_fetch_assoc($run)) {
        echo '<tr>';
        echo '<td>' . $row['username'] . '</td>';
        echo '<td>' . $row['pass'] . '</td>';
        // echo $row['pass']."<br>";
    }
echo '</tr>';
?>
