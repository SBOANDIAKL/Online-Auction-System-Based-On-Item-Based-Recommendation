<?php
if (isset($_POST["register"])) {

    extract($_POST);
    $error = array();
    $extension = array("jpeg", "jpg", "png", "gif");
    $fileNames = implode(': ', $_FILES["files"]["name"]);
    include("./include/conn.php");

    $title = $_POST["title"];
    $category = $_POST["category"];
    $district = $_POST["district"];
    $location = $_POST["location"];
    $number = $_POST["number"];
    $iPrice = $_POST["iPrice"];
    $delivery = $_POST["delivery"];
    $desc = $_POST["desc"];
    $uid = $_POST["uid"];
    $date = $_POST['date'];
    $tme = $_POST['time'];
    $tags = $_POST['tags'];

    $datetime = date('Y-m-d', strtotime($date)) . " " . $time;
    $sanitized_desc = mysqli_real_escape_string($conn, $desc);

    $sql = "INSERT INTO auction(uid, cid, title, pictures, district, location, number, iPrice, delivery, description, eDate, tags) VALUES('$uid','$category','$title','$fileNames','$district','$location','$number', '$iPrice','$delivery', '$sanitized_desc', '$datetime', '$tags')";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($result) {
        foreach ($_FILES["files"]["tmp_name"] as $key => $tmp_name) {
            $file_name = $_FILES["files"]["name"][$key];
            $file_tmp = $_FILES["files"]["tmp_name"][$key];
            $ext = pathinfo($file_name, PATHINFO_EXTENSION);


            if (in_array($ext, $extension)) {

                if (!file_exists("product/" . $file_name)) {
                    move_uploaded_file($file_tmp = $_FILES["files"]["tmp_name"][$key], "product/"  . $file_name);
                } else {
                    $filename = basename($file_name, $ext);
                    $newFileName = $filename . time() . "." . $ext;
                    move_uploaded_file($file_tmp = $_FILES["files"]["tmp_name"][$key], "product/" . $newFileName);
                }
            } else {
                array_push($error, "$file_name, ");
            }
        }
        echo '<script>
                alert("Auction started");
                window.location = "./index.php";
                </script>';
    } else {
        echo '<script>
                alert("error, please try again");
                </script>';
    }
}
