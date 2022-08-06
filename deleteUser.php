<?php
include("./include/conn.php");
$pid = $_POST['id'];
$pending = $_POST['pending'];

if ($pending == 0) {
    $sql = "update user set isHidden=1 where uid= $pid";
} else {
    $sql = "delete from user where uid= $pid";
}
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
if ($result) {

    echo "<meta http-equiv='refresh' content='0'>";
} else {
    echo "<meta http-equiv='refresh' content='0'>";
}
