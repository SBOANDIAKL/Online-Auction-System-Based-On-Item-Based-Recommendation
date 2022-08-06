<?php
session_start();
if (empty($_SESSION) || !isset($_SESSION["User_ID"])) {
    $uid = 0;
} else $uid = $_SESSION["User_ID"];
if ($uid == 0) {
    echo '<script>window.location = "./index.php";</script>';
}
if ($_SESSION["UserType"] == "User") {
    echo '<script>window.location = "./login.php";</script>';
}

include("./include/conn.php");
date_default_timezone_set('Asia/Kathmandu');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="./bts4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>

    <script src="./js/search.js"></script>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./bts4/js/bootstrap.js"></script>
    <script src="./bts4/js/bootstrap.min.js"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100"> <a class="navbar-brand" href="./index.php" data-abc="true">Online Auction System</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto pl-3">
                <li class="nav-item active"> <a class="nav-link" href="./index.php" data-abc="true">Home <span class="sr-only">(current)</span></a> </li>
                <!-- <li class="nav-item"> <a class="nav-link" href="#" data-abc="true">Contact</a> </li> -->
            </ul>
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item"> <a href="./logout.php" class="nav-link d-flex align-items-center" data-abc="true"><span>Log-out</span><i class="bx bxs-chevron-down"></i></a> </li>


            </ul>
        </div>
    </nav>
    <link rel="stylesheet" href="./css/regi.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <div class="row">
        <div class="col-sm-2">
            <div class="d-flex flex-column vh-100 flex-shrink-0 p-3 text-white bg-dark" style="width: 250px;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"> </svg> <span class="fs-4">Hi <?php echo $_SESSION['name']; ?>!</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item"> <a href="./adminDashboard.php" class="nav-link text-white active" id="dashboard" aria-current="page"> <i class="fa fa-home"></i><span class="ms-2"> Dashboard</span> </a> </li>
                    <li> <a href="./users.php" class="nav-link text-white" id="users"> <i class="fa fa-hourglass-start "></i><span class="ms-2"> Users</span> </a> </li>
                    <li> <a href="./auctions.php" class="nav-link text-white" id="auctions"> <i class="fa fa-hourglass-start "></i><span class="ms-2"> Auctions</span> </a> </li>
                    <!-- <li> <a href="#" class="nav-link text-white"> <i class="fa fa-credit-card "></i><span class="ms-2"> Balance</span> </a> </li> -->
                </ul>
            </div>
        </div>