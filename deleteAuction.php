<?php

include("./include/conn.php");
$pid = $_POST['id'];
$sql = "Delete FROM bids where aid= $pid";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
if ($result) {
    $sql = "Delete FROM auction where aid= $pid";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if ($result) {
        echo "<meta http-equiv='refresh' content='0'>";
    }
} else {
    echo "<meta http-equiv='refresh' content='0'>";
}
