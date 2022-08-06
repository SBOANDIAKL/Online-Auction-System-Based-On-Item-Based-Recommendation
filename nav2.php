<?php
session_start();


//for unique views
if (!isset($_SESSION["items"])) $_SESSION["items"] = "";

 
if (empty($_SESSION) || !isset($_SESSION["User_ID"])) {
    $uid = 0;
} else $uid = $_SESSION["User_ID"];

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

    <script src="./js/index.js"></script>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./bts4/js/bootstrap.js"></script>
    <script src="./bts4/js/bootstrap.min.js"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100"> <a class="navbar-brand" href="./index.php" data-abc="true">Online Auction System</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto pl-3">
                <li class="nav-item active"> <a class="nav-link" href="./index.php" data-abc="true">Home <span class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="#" data-abc="true">Contact</a> </li>
            </ul>
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item">
                    <?php
                    if ($uid == 0) {
                        echo '<a href="./login.php" class="nav-link d-flex align-items-center" data-abc="true">
                        <span data-toggle="modal" data-target="#exampleModal">Create Auction</span>
                        <i class="bx bxs-chevron-down"></i>
                    </a>';
                    } else {
                        echo '<a href="#" class="nav-link d-flex align-items-center" data-abc="true">
                        <span data-toggle="modal" data-target="#exampleModal">Create Auction</span>
                        <i class="bx bxs-chevron-down"></i>
                    </a>';
                    }
                    ?>
                    <?php
                    include "./pProduct.php"; ?>
                </li>

                <?php
                if ($uid == 0) {

                    echo '<li class="nav-item"> <a href="./login.php" class="nav-link d-flex align-items-center" data-abc="true"><span>Log-in</span><i class="bx bxs-chevron-down"></i></a> </li>';
                } else { ?>
                    <li class="nav-item"> <a href="./dashboard.php" class="nav-link d-flex align-items-center" data-abc="true"><span>My Account</span><i class="bx bxs-chevron-down"></i></a> </li>
                    <li class="nav-item"> <a href="./logout.php" class="nav-link d-flex align-items-center" data-abc="true"><span>Log-out</span><i class="bx bxs-chevron-down"></i></a> </li>
                <?php } ?>

            </ul>
        </div>
    </nav>

</body>

</html>
<!-- <script>
    $(function() {
        $(document).on('click', '.btn-add', function(e) {
            e.preventDefault();
            var controlForm = $('.controls:first'),
                currentEntry = $(this).parents('.entry:first'),
                newEntry = $(currentEntry.clone()).appendTo(controlForm);
            newEntry.find('input').val('');
            controlForm.find('.entry:not(:last) .btn-add')
                .removeClass('btn-add').addClass('btn-remove')
                .removeClass('btn-success').addClass('btn-danger')
                .html('<span class="fa fa-trash"> </span>');
        }).on('click', '.btn-remove', function(e) {
            $(this).parents('.entry:first').remove();
            e.preventDefault();
            return false;
        });
    });
</script> -->