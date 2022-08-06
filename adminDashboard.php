<?php include "./adminHome.php"; ?>

<div class="col-sm-9 mt-5 mx-auto">
    <div class="row mx-auto">

        <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card shadow border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Auction </span> <span class="h3 font-bold mb-0">
                                <?php
                                $sql1 = "select count(aid) from auction";
                                $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                                while ($row = mysqli_fetch_assoc($res1)) {
                                    echo $row['count(aid)'];
                                } ?>
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
                        <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">Current Auction</span> <span class="h3 font-bold mb-0">
                                <?php
                                $sql1 = "select count(aid) from auction where status=0";
                                $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                                while ($row = mysqli_fetch_assoc($res1)) {
                                    echo $row['count(aid)'];
                                } ?>
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
                        <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Bids</span> <span class="h3 font-bold mb-0">
                                <?php
                                $sql1 = "select count(bid) from bids";
                                $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                                while ($row = mysqli_fetch_assoc($res1)) {
                                    echo $row['count(bid)'];
                                } ?>

                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-info text-white text-lg rounded-circle text-center size"> <i class="bi bi-emoji-heart-eyes fa-2x"></i> </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card shadow border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">Users</span> <span class="h3 font-bold mb-0">
                                <?php
                                $sql1 = "select count(uid) from user where isHidden=0";
                                $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                                while ($row = mysqli_fetch_assoc($res1)) {
                                    echo $row['count(uid)'];
                                }

                                ?>

                            </span> </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-warning text-white text-lg rounded-circle text-center size"> <i class="bi bi-people-fill fa-2x"></i> </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="card shadow border-0 mb-7 mt-4">
        <div class="card-header">
            <h5 class="mb-0">Pedning Users:</h5>
        </div>
        <div class="table-responsive tableFixHead">
            <table id="myTable" class="table table-hover table-nowrap">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Number</th>
                        <th scope="col">Location</th>
                        <th scope="col">User Type</th>
                        <th scope="col">Document</th>
                        <th scope="col">status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql1 = "select * from user where isHidden=0 && pending = 1;";
                    $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                    while ($row = mysqli_fetch_assoc($res1)) {

                    ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td> <?php echo $row['number']; ?></td>
                            <td><?php echo $row['district'] . ", " . $row['location']; ?></td>
                            <td><?php echo $row['userType']; ?> </td>
                            <td class="w-25">
                                <div class="carousel-inner">
                                    <?php
                                    $images = $row['document'];
                                    $image = explode(": ", $images);
                                    $active = true;
                                    foreach ($image as $img) { ?>
                                        <img data-enlargeable width="100" style="cursor: zoom-in" class="w-25 h-25" src="./document/<?php echo $img; ?>" alt=<?php echo $img; ?>>

                                    <?php
                                        $active = false;
                                    } ?>
                                </div>
                            </td>
                            <form action="adminDashboard.php" method="POST">

                                <input type="text" name="uid" value="<?php echo $row['uid']; ?>" hidden>
                                <td class="text-end"> <button type="submit" name="accept" class="btn btn-sm btn-success">Accept<buttton>
                                            <button type="button" id="<?php echo $row['uid']; ?>" class="delete btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button>
                                </td>
                            </form>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- <div class="card-footer border-0 py-5"> <span class="text-muted text-sm">Showing 10 items out of 250 results found</span> </div> -->
    </div>
</div>

<script>
    //image
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

    //delete
    $('.delete').click(function() {
        var id = this.id;
        if (confirm("Are you sure?")) {

            $.ajax({
                url: "deleteUser.php",
                method: "POST",
                data: {
                    id: id,
                    pending: 1
                },
                success: function(data) {
                    location.reload(true);

                }
            });
        }
    });
</script>

<?php
if (isset($_POST['accept'])) {
    $uuid = $_POST['uid'];
    $sql = "update user set pending = 0 where uid = '$uuid'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if ($result) {
        echo "<meta http-equiv='refresh' content='0'>";
    } else {
        echo '<script>
    alert("error, please try again");
    </script>';
    }
}


?>