<?php include "./adminHome.php"; ?>

<script>
    document.getElementById('dashboard').classList.remove('active');
    document.getElementById('users').classList.add('active');
</script>

<div class="col-sm-9 mt-2 mx-auto">
    <div class="input-group mt-5 mb-3 mx-auto w-50">
        <input type="text" class="form-control rounded pb-2" id="search" onkeyup="searchFunction()" placeholder="Enter user's name" />
        <br>
    </div>
    <div class="card shadow border-0 mb-7 mt-4">
        <div class="card-header">
            <h5 class="mb-0">All Users:</h5>
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
                    $sql1 = "select * from user where isHidden=0;";
                    $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                    while ($row = mysqli_fetch_assoc($res1)) {

                    ?>
                        <tr>
                            <td>
                                <a class="product-name h6 align-middle" href="./user.php?id=<?php echo $row['uid']; ?>">
                                    <?php echo $row['name']; ?>
                                </a>
                            </td>
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

                            <td class="text-end">
                                <!-- <a href="#" class="btn btn-sm btn-neutral">View</a>  -->
                                <button type="button" id="<?php echo $row['uid']; ?>" <?php echo ($row['userType'] == 'Admin') ? "disabled" : ""; ?> class="delete btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button>
                            </td>
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


    $('.delete').click(function() {
        var id = this.id;
        if (confirm("Are you sure?")) {

            $.ajax({
                url: "deleteUser.php",
                method: "POST",
                data: {
                    id: id,
                    pending: 0
                },
                success: function(data) {
                    location.reload(true);

                }
            });
        }
    });
</script>