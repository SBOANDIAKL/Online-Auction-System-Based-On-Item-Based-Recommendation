<?php include "./adminHome.php"; ?>

<script>
    document.getElementById('dashboard').classList.remove('active');
    document.getElementById('auctions').classList.add('active');
</script>

<div class="col-sm-9 mt-2 mx-auto">

    <div class="input-group mt-5 mb-3 mx-auto w-50">
        <input type="text" class="form-control rounded pb-2" id="search" onkeyup="searchFunction()" placeholder="Enter Title" />
        <br>
    </div>

    <div class="card shadow border-0 mb-7 mt-4">
        <div class="card-header">
            <h5 class="mb-0">Auctions:</h5>
        </div>
        <div class="table-responsive tableFixHead">
            <table id="myTable" class="table table-hover table-nowrap">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Started Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Highest Bid</th>
                        <th scope="col">status</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql1 = "select * from auction order by status;";
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
                            <td><?php echo $row['pDate']; ?></td>
                            <td><?php echo substr($row['eDate'], 0, 16); ?></td>
                            <td>
                                <?php
                                $sql2 = "select max(bAmount) from bids where aid= {$aid}";
                                $res2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
                                if (mysqli_num_rows($res2) > 0) {
                                    while ($row2 = mysqli_fetch_assoc($res2)) {
                                        echo ($row2['max(bAmount)'] > $row['iPrice']) ? $row2['max(bAmount)'] : $row['iPrice'];
                                    }
                                } else;
                                ?>
                            </td>
                            <td><?php echo ($row['status'] == 0) ? "Running" : "Ended"; ?> </td>
                            <td class="text-end">
                                <!-- <a href="#" class="btn btn-sm btn-neutral">View</a> -->

                                <button type="button" id="<?php echo $row['aid']; ?>" name="delete" class="delete btn btn-sm btn-square btn-neutral text-danger-hover" <?php echo ($row['status'] == 1) ? "disabled" : ""; ?>> <i class="bi bi-trash"></i> </button>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- <div class="card-footer border-0 py-5"> <span class="text-muted text-sm">Showing 10 items out of 250 results found</span> </div> -->
    </div>
</div>

<?php

if (isset($_POST['delete'])) {

    $sql = "Delete FROM bids where aid= $aid";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if ($result) {
        $sql = "Delete FROM auction where aid= $aid";
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

<script>
    $('.delete').click(function() {
        var id = this.id;
        if (confirm("Are you sure?")) {

            $.ajax({
                url: "deleteAuction.php",
                method: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    location.reload(true);

                }
            });
        }
    });
</script>