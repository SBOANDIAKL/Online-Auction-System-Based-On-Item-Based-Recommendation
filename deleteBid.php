<?php
include("./include/conn.php");
$uid = $_POST['id'];
$aid = $_POST['pid'];


$sql1 = "delete from bids where aid ='$aid' && uid ='$uid'";
$res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
if ($res1) {

    echo "<meta http-equiv='refresh' content='0'>";
} else {
    echo "<meta http-equiv='refresh' content='0'>";
}
