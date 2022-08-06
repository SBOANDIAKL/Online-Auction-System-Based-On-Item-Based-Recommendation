<?php include "./nav2.php"; ?>


<?php
if (isset($_GET['id'])) {
    $aid = $_GET['id'];
}
?>




<link rel="stylesheet" href="./css/test.css">
<link rel="stylesheet" href="./css/index.css">

<div class="container mx-auto bg-white mx-auto my-4 py-2">

    <div class="container w-100">
        <?php
        $sql1 = "select * from auction where aid= {$aid}";
        $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
        while ($row = mysqli_fetch_assoc($res1)) {
            if ($row['uid'] != $uid) {
                echo '<script>
                window.location = "./index.php";
                </script>';
            }

        ?>

            <div class="row pb-4 align-items-center">
                <div class="col-sm">
                    <div class="align-items-center">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <?php
                                $images = $row['pictures'];
                                $image = explode(": ", $images);
                                $active = true;
                                foreach ($image as $img) { ?>
                                    <div class="carousel-item <?php echo ($active == true) ? "active" : ""; ?>">
                                        <img class="d-block w-100" src="./product/<?php echo $img; ?>" alt=<?php echo $img; ?>>
                                    </div>
                                <?php
                                    $active = false;
                                } ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <h3><b><?php echo $row['title']; ?></b></h3>

                    <div class="text-muted py-0"><?php echo $row['district'] . ', ' . $row['location']; ?></div>
                    <hr class="my-1">
                    <p class="text-muted my-1"><?php echo nl2br($row['description']); ?> </p>
                    <hr class="my-1">
                    <p class="text-muted my-1">Phone Number: <?php echo nl2br($row['number']); ?> </p>
                    <hr class="my-1">
                    <p class="text-muted my-1">Highest Bid:
                        <?php
                        $sql2 = "select MAX(bAmount) from bids where aid = '$aid'";
                        $res2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
                        if (mysqli_num_rows($res2) > 0) {
                            $status = $row['status'];
                            while ($row2 = mysqli_fetch_assoc($res2)) {
                                $lprice = (int) $row2['MAX(bAmount)']; ?>

                            <?php
                            }
                        } else {
                            $lprice = $row['iPrice']; ?>
                        <?php } ?>
                        <?php echo $lprice; ?>
                    </p>
                    <hr class="my-1">
                    <p class="text-muted my-1">Expiry Date: <?php echo $row['eDate']; ?> </p>
                    <hr class="mt-1">
                    <form action="myProduct.php?id=<?php echo $aid; ?>" method="POST">
                        <div class="input-group-append">
                            <input type="text" value="<?php echo $aid; ?>" name="pid" hidden>
                            <button class="btn btn-danger" type="submit" name="delete" <?php echo ($row['status'] == 1) ? "hidden" : ""; ?>>Delete</button>
                        </div>
                </div>
                </form>
            </div>
    </div>
<?php } ?>
<hr>

</div>

</div>

<?php

if (isset($_POST['delete'])) {
    $pid = $_POST['pid'];
    $sql = "Delete FROM bids where aid= $pid";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if ($result) {
        $sql = "Delete FROM auction where aid= $pid";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if ($result) {

            echo '<script>
        alert("Sucessfully Deleted");
        window.location = "./myAuction.php";
        </script>';
        }
    }
}
?>