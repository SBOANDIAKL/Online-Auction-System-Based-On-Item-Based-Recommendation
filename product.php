<?php include "./nav2.php"; ?>


<?php



if (isset($_GET['id'])) {
    $aid = $_GET['id'];
}
$owner = false;
$user = "out";
if (isset($_SESSION['UserType'])) {
    if ($_SESSION['UserType'] == "Admin")
        $user = "Admin";
}

$tags;
$cid;
$status = 0;
$hid = 0;
$myMax = 0;


//Unique Views

if (isset($_SESSION["items"])) {
    $lists = (array) $_SESSION["items"];
    // echo print_r($lists) . "<br>";
    // echo $aid;
    // print_r($_SESSION["items"]);

    // echo in_array($aid, $lists) ? "True" : "false";

    if (!in_array($aid, $lists)) {
        array_push($lists, $aid);
        $_SESSION["items"] = $lists;

        $sql = "UPDATE auction SET views = views + 1 WHERE aid = '$aid'";
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }
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
            if ($row['uid'] == $uid)
                $owner = true;

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
                                        <img data-enlargeable class="d-block w-100" src="./product/<?php echo $img; ?>" alt=<?php echo $img; ?>>
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
                        $sql2 = "select uid, bAmount from bids where bAmount in (select max(bAmount) from bids where aid = '$aid');";
                        $res2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
                        if (mysqli_num_rows($res2) > 0) {
                            $status = $row['status'];
                            while ($row2 = mysqli_fetch_assoc($res2)) {
                                $hprice = (int) $row2['bAmount'];
                                $hprice = ($hprice > $row['iPrice']) ? $hprice : $row['iPrice'];
                            }
                        } else {
                            $hprice = $row['iPrice']; ?>
                        <?php } ?>
                        <?php echo $hprice;
                        $tags = $row["tags"];
                        $cid = $row["cid"];

                        ?>
                    </p>
                    <hr class="my-1">
                    <p class="text-muted my-1">Expiry Date: <?php echo $row['eDate']; ?> </p>
                    <hr class="mt-1">
                    <form action="product.php?id=<?php echo $aid; ?>" method="POST">
                        <div class="input-group w-50" <?php echo ($status == 1 || $owner || $user == "Admin") ? 'hidden' : ""; ?>>

                            <input type="number" name="price" class="form-control" min="<?php echo $hprice; ?>" value="<?php echo ($hprice + 50); ?>">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="submit" name="bid">Bid</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    $sql2 = "select uid, bAmount from bids where uid = '$uid' && aid = '$aid';";
                    $res2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
                    if (mysqli_num_rows($res2) > 0) {
                        while ($row2 = mysqli_fetch_assoc($res2)) {
                            $hid = (int) $row2['uid'];
                            $myMax = (int) $row2['bAmount'];
                        }
                    }
                    if (($uid == $hid) && !$owner && $user != "Admin" && $status == 0) {
                    ?><div class="previous pt-3">

                            <div class="input-group-append">
                                <p class="ppid text-muted my-1">My Previos Bid: <?php echo $myMax; ?>
                                    <button class="deleteBid btn btn-sm btn-danger mx-3" id="<?php echo $hid; ?>" name="bid">Delete</button>
                            </div>


                            </p>
                        </div><?php
                            } ?>






                </div>
            </div>
        <?php } ?>
        <hr>

        <!-- Algorithm Implementation -->


        <?php
        $count = 0;
        $ids = array();
        if ($tags != "") {
            $tagss = explode(",", $tags);
            //Getting similar items within same category
            foreach ($tagss as $a) {
                $sql1 = "SELECT * FROM auction WHERE cid = '$cid' && auction.tags LIKE '%$a%' order by views desc";
                $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                while ($row = mysqli_fetch_assoc($res1)) {
                    if ($row["aid"] != $aid) {
                        if (!in_array($row["aid"], $ids)) {
                            array_push($ids, $row["aid"]);
                            $count++;
                        }
                    }
                    if (count($ids) == 4) break;
                }
            }
            //Getting similar items outside of similar category
            if (count($ids) != 4) {
                foreach ($tagss as $a) {
                    $sql1 = "SELECT * FROM auction WHERE cid != '$cid' && auction.tags LIKE '%$a%' order by views desc";
                    $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                    while ($row = mysqli_fetch_assoc($res1)) {
                        if (!in_array($row["aid"], $ids)) {
                            array_push($ids, $row["aid"]);
                            $count++;
                        }
                        if (count($ids) == 4) break;
                    }
                }
            }
        }

        //Getting highest views items within same category
        if (count($ids) != 4) {
            $sql1 = "SELECT * FROM auction WHERE cid = '$cid' order by views desc";
            $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
            while ($row = mysqli_fetch_assoc($res1)) {
                if ($row["aid"] != $aid) {
                    if (!in_array($row["aid"], $ids)) {
                        array_push($ids, $row["aid"]);
                        $count++;
                    }
                }
                if (count($ids) == 4) break;
            }
        }
        //if recommening items are less than 4
        if (count($ids) != 4) {
            $sql1 = "SELECT * FROM auction WHERE cid != '$cid' order by views desc";
            $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
            while ($row = mysqli_fetch_assoc($res1)) {
                if (!in_array($row["aid"], $ids)) {
                    array_push($ids, $row["aid"]);
                    $count++;
                }
                if (count($ids) == 4) break;
            }
        }


        // echo print_r($ids);

        ?>





        <div <?php echo ($owner || $user == "Admin") ? 'hidden' : ""; ?> class="mt-5">
            <h3 class="py-3">You may also like</h3>
            <div id="products">
                <div class="row mx-0">
                    <?php

                    //Showing similar items


                    $sql1 = "select * from auction where aid=$ids[3] || aid=$ids[2] || aid=$ids[1] || aid=$ids[0] order by views desc";
                    // echo $sql1;
                    $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                    while ($row = mysqli_fetch_assoc($res1)) { ?>
                        <div class="col-lg-3 col-md-6">

                            <div class="card d-flex flex-column align-items-center">
                                <div class="product-name px-2">
                                    <?php echo (strlen($row['title']) > 45) ? substr($row['title'], 0, 45) . '...' : $row['title']; ?>
                                </div>
                                <div class="card-img">
                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
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
                                    </div>
                                </div>


                                <div class="card-body p-0 my-0">
                                    <div class="text-muted text-center my-0 pb-0 pt-2">Highest Bid:
                                        <?php
                                        $aaid = $row['aid'];

                                        $lprice = $row['iPrice'];
                                        $sql2 = "select MAX(bAmount) from bids where aid = '$aaid'";
                                        $res2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
                                        if (mysqli_num_rows($res2) > 0) {
                                            while ($row2 = mysqli_fetch_assoc($res2)) {
                                                $lprice = (int) $row2['MAX(bAmount)'];
                                                $lprice = ($lprice > $row['iPrice']) ? $lprice : $row['iPrice'];
                                            }
                                        }
                                        echo $lprice;

                                        ?>
                                        <hr class="my-1 py-0">
                                    </div>
                                    <div class="text-muted py-0 desc">

                                        <?php echo (strlen($row['description']) > 110) ? substr($row['description'], 0, 110) . '...' : $row['description']; ?>
                                    </div>
                                    <hr class="my-1 py-0">
                                    <div class="text-muted py-0"><?php echo $row['district'] . ', ' . $row['location']; ?></div>
                                </div>
                                <a href="./product.php?id=<?php echo $row['aid']; ?>" class="btn align-bottom btn-primary-outline stretched-link"></a>


                            </div>

                        </div>
                    <?php
                    } ?>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="card shadow border-0 mb-7 mt-1 w-75 mx-auto" <?php echo ($owner || $user == "Admin") ? "" : "hidden"; ?>>
    <div class=" card-header">
        <h5 class="mb-0">Bids Placed:</h5>
    </div>
    <div class="table-responsive tableFixHead">
        <table class="table table-hover table-nowrap">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date,Time</th>
                    <th scope="col">Bid</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql1 = "select user.name, user.number,user.email, user.district, user.location, bids.bTime, bids.bAmount from bids
                 join user on user.uid= bids.uid where bids.aid = {$aid} order by bTime;";
                $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                while ($row = mysqli_fetch_assoc($res1)) {
                    // $aid = $row['aid'];

                ?>
                    <tr>
                        <td>

                            <b><?php echo $row['name']; ?></b>

                        </td>
                        <td><?php echo $row['number']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo substr($row['bTime'], 0, 16); ?></td>
                        <td>

                            <?php echo $row['bAmount']; ?>

                        </td>
                        <td class="text-end">
                            <?php
                            if ($hprice == $row['bAmount'] && $status == 1) {
                                echo 'Winner';
                            } ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- <div class="card-footer border-0 py-5"> <span class="text-muted text-sm">Showing 10 items out of 250 results found</span> </div> -->
</div>




<?php
if (isset($_POST["bid"])) {
    if ($_POST['price'] > $hprice) {
        if ($uid == 0) {
            echo '<Script> alert("Login to Bid."); </script>';
        } else {
            $amount = $_POST['price'];
            $sql1 = "delete from bids where aid ='$aid' && uid ='$uid'";
            $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
            $sql1 = "Insert into bids(aid,uid,bAmount) values('.$aid.', '.$uid.', '.$amount.')";
            $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
            if ($res1) {
                echo '<Script> alert("Bid placed Sucessfully"); 
                window.location = "./index.php";
                </script>';
            } else {
                echo '<Script> alert("Error, please try again!");
                window.location = "./index.php"; </script>';
            }
        }
    } else {
        echo '<Script> alert("Bid amount must be greater than highest bid"); </script>';
    }
}
// -----------------------------------------------Delete ko lagi------------------------
// if (isset($_POST['delete'])) {
//     $pid = $_POST['pid'];
//     $sql = "Delete FROM bids where aid= $pid";
//     $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
//     if ($result) {
//         $sql = "Delete FROM auction where aid= $pid";
//         $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
//         if ($result) {

//             echo '<script>
//         alert("Sucessfully Deleted");
//         window.location = "./myAuction.php";
//         </script>';
//         }
//     }
// }
?>

<script>
    //Enlarge image
    $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
        var src = $(this).attr('src');
        var modal;

        function removeModal() {
            modal.remove();
            $('body').off('keyup.modal-close');
        }
        modal = $('<div>').css({
            background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
            backgroundSize: 'contain',
            width: '100%',
            height: '100%',
            position: 'fixed',
            zIndex: '10000',
            top: '0',
            left: '0',
            cursor: 'zoom-out'
        }).click(function() {
            removeModal();
        }).appendTo('body');
        //handling ESC
        $('body').on('keyup.modal-close', function(e) {
            if (e.key === 'Escape') {
                removeModal();
            }
        });
    });
    //Delete bid

    $('.deleteBid').click(function() {
        var id = this.id;
        var pid = "<?php print($aid); ?>";
        if (confirm("Are you sure?" + id + pid)) {

            $.ajax({
                url: "deleteBid.php",
                method: "POST",
                data: {
                    id: id,
                    pid: pid

                },
                success: function(data) {
                    location.reload(true);
                }
            });
        }
    });
</script>