<?php include "./dhome.php"; ?>

<div class="col-sm-9 mt-5 mx-auto">
    <div class="row mx-auto">

        <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card shadow border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Bids </span> <span class="h3 font-bold mb-0">
                                <?php
                                $sql1 = "select count(uid) from bids where uid= {$uid}";
                                $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                                while ($row = mysqli_fetch_assoc($res1)) {
                                    $totalBids = $row['count(uid)'];
                                } ?>
                                <?php echo $totalBids; ?>
                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-primary text-white text-lg rounded-circle text-center size"> <i class="bi bi-clock-history fa-2x"></i> </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card shadow border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">Current Bids</span> <span class="h3 font-bold mb-0">
                                <?php
                                $sql1 = "select count(bids.uid) from bids join auction on auction.aid = bids.aid where bids.uid= {$uid} && auction.status=0";
                                $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                                while ($row = mysqli_fetch_assoc($res1)) {
                                    $currentBids = $row['count(bids.uid)'];
                                } ?>
                                <?php echo $currentBids; ?>
                            </span> </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-primary text-white text-lg rounded-circle text-center size"> <i class="bi bi-briefcase-fill fa-2x"></i> </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card shadow border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">My Auction</span> <span class="h3 font-bold mb-0">
                                <?php
                                $sql1 = "select count(status) from auction where uid= {$uid} && status=0";
                                $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                                while ($row = mysqli_fetch_assoc($res1)) {
                                    $myAuction = $row['count(status)'];
                                } ?>
                                <?php echo $myAuction; ?>
                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-info text-white text-lg rounded-circle text-center size"> <i class="bi bi-people-fill fa-2x"></i> </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card shadow border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">Bids won</span> <span class="h3 font-bold mb-0">
                                <?php
                                $sql1 = "select count(wid) from auction where wid= {$uid} && status=1";
                                $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                                while ($row = mysqli_fetch_assoc($res1)) {
                                    $won = $row['count(wid)'];
                                }
                                if ($totalBids > 0) {
                                    $wonPercent = ($won / $totalBids) * 100;
                                } else $wonPercent = 0;

                                ?>
                                <?php echo $won . '<span class="h5 font-semibold text-muted text-sm mb-2"> (' . $wonPercent . "%)</span>"; ?>

                            </span> </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-warning text-white text-lg rounded-circle text-center size"> <i class="bi bi-emoji-heart-eyes fa-2x"></i> </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="card shadow border-0 mb-7 mt-4">
        <div class="card-header">
            <h5 class="mb-0">Auctions Participated:</h5>
        </div>
        <div class="table-responsive tableFixHead">
            <table class="table table-hover table-nowrap">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Seller</th>
                        <th scope="col">Highest Bid</th>
                        <th scope="col">My Bid</th>
                        <th scope="col">Edate</th>
                        <th scope="col">status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql1 = "select auction.aid,auction.wid, auction.title, user.name,bids.bAmount, auction.eDate, auction.status from auction join user on auction.uid = user.uid join bids on bids.aid = auction.aid where bids.uid = {$uid} order by auction.status;";
                    $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                    while ($row = mysqli_fetch_assoc($res1)) {
                        $aid = $row['aid'];

                    ?>
                        <tr>
                            <td>
                                <a class="product-name h6 align-middle" href="./product.php?id=<?php echo $aid; ?>">
                                    <?php echo (strlen($row['title']) > 50) ? substr($row['title'], 0, 50) . '...' : $row['title']; ?>
                                </a>
                            </td>
                            <td><?php echo $row['name']; ?></td>
                            <td> <?php
                                    $sql2 = "select max(bAmount) from bids where aid= {$aid}";
                                    $res2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
                                    while ($row2 = mysqli_fetch_assoc($res2)) {
                                        $highest = $row2['max(bAmount)'];
                                    }
                                    ?>
                                <?php echo $highest; ?>

                            </td>
                            <td> <?php $myBid = $row['bAmount'];
                                    echo $myBid;
                                    if ($myBid < $highest) {
                                        echo '<span>🔴</span>';
                                    }

                                    ?></td>
                            <td><?php echo $row['eDate']; ?> </td>
                            <td><?php
                                if ($row['status'] == 0) {
                                    echo 'Running';
                                } elseif ($row['status'] == 1) {

                                    if ($row['wid'] == $uid) {
                                        echo 'won';
                                    } else {
                                        echo 'lost';
                                    }
                                }
                            }


                                ?></td>
                            <!-- <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td> -->
                        </tr>
                        <?php  ?>
                </tbody>
            </table>
        </div>
        <!-- <div class="card-footer border-0 py-5"> <span class="text-muted text-sm">Showing 10 items out of 250 results found</span> </div> -->
    </div>
</div>