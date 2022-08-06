<?php include "./nav2.php"; ?>

<?php

$uid = $_SESSION["User_ID"];
$userType = $_SESSION["UserType"];
if ($uid == 0) {
    echo '<script>window.location = "./index.php";;</script>';
}

?>
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
                <li class="nav-item"> <a href="./dashboard.php" class="nav-link active" aria-current="page"> <i class="fa fa-home"></i><span class="ms-2"> Dashboard</span> </a> </li>
                <li> <a href="./myAuction.php" class="nav-link text-white"> <i class="fa fa-hourglass-start "></i><span class="ms-2"> My Auction</span> </a> </li>
                <li> <a href="./user.php" class="nav-link text-white"> <i class="fa fa-credit-card "></i><span class="ms-2"> Profile</span> </a> </li>
            </ul>
        </div>
    </div>