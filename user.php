<?php

if (isset($_GET['id'])) {
    include "./adminHome.php";
    $uid = $_GET['id'];
} else {
    include "./dhome.php";
    $uid = $_SESSION['User_ID'];
}





?>


<div class="col-sm-9 mt-5 mx-auto">
    <div class="mx-auto w-50">

        <div class=" px-1 py-1 p-md-1 mx-md-1">
            <?php
            $sql = "select * from user where uid = '{$uid}'";
            $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            while ($row = mysqli_fetch_assoc($res)) {
            ?>
                <form action="user.php<?php echo ($_SESSION["UserType"] == "Admin") ? "?id=" . $uid : ""; ?>" method="POST" class="pt-3" id="forgot" role="document" enctype="multipart/form-data">
                    <h3 class="fw-normal align-center">User info:</h3>


                    <div class="mb-1 pb-1">
                        <div class="form-outline form-white">

                            <label class="form-label" for="form3Examplea2">Name</label>
                            <input type="text" id="name" disabled name="name" class="form-control form-control-lg" placeholder="Name" required value="<?php echo $row['name']; ?>" />
                        </div>
                    </div>

                    <div class="mb-1 pb-1">
                        <div class="form-outline form-white">
                            <label class="form-label" for="form3Examplea3">Email</label>
                            <input type="text" id="email" disabled name="email" class="form-control form-control-lg" placeholder="Email" required value="<?php echo $row['email']; ?>" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-1 pb-1">
                            <div class="form-outline form-white">
                                <label class="form-label" for="form3Examplea4">District</label>
                                <select id="district" disabled name="district" class="form-control form-control-lg" required>
                                    <option name="" value="" selected> Choose</option>
                                    <option id="Dadeldhura" name="Dadeldhura" value="Dadeldhura">Dadeldhura</option>
                                    <option id="Nuwakot" name="Nuwakot" value="Nuwakot">Nuwakot</option>
                                    <option id="Dhanusa" name="Dhanusa" value="Dhanusa">Dhanusa</option>
                                    <option id="Gorkha" name="Gorkha" value="Gorkha">Gorkha</option>
                                    <option id="Syangja" name="Syangja" value="Syangja">Syangja</option>
                                    <option id="Darchula" name="Darchula" value="Darchula">Darchula</option>
                                    <option id="Terhathum" name="Terhathum" value="Terhathum">Terhathum</option>
                                    <option id="Sankhuwasabha" name="Sankhuwasabha" value="Sankhuwasabha">Sankhuwasabha</option>
                                    <option id="Dolakha" name="Dolakha" value="Dolakha">Dolakha</option>
                                    <option id="Dang" name="Dang" value="Dang">Dang</option>
                                    <option id="Rolpa" name="Rolpa" value="Rolpa">Rolpa</option>
                                    <option id="Baglung" name="Baglung" value="Baglung">Baglung</option>
                                    <option id="Dailekh" name="Dailekh" value="Dailekh">Dailekh</option>
                                    <option id="Eastern Rukum" name="Eastern Rukum" value="Eastern Rukum">Eastern Rukum</option>
                                    <option id="Western Rukum" name="Western Rukum" value="Western Rukum">Western Rukum</option>
                                    <option id="Manang" name="Manang" value="Manang">Manang</option>
                                    <option id="Lalitpur" name="Lalitpur" value="Lalitpur">Lalitpur</option>
                                    <option id="Kavrepalanchok" name="Kavrepalanchok" value="Kavrepalanchok">Kavrepalanchok</option>
                                    <option id="Mahottari" name="Mahottari" value="Mahottari">Mahottari</option>
                                    <option id="Bhojpur" name="Bhojpur" value="Bhojpur">Bhojpur</option>
                                    <option id="Palpa" name="Palpa" value="Palpa">Palpa</option>
                                    <option id="Lamjung" name="Lamjung" value="Lamjung">Lamjung</option>
                                    <option id="Banke" name="Banke" value="Banke">Banke</option>
                                    <option id="Humla" name="Humla" value="Humla">Humla</option>
                                    <option id="Dhading" name="Dhading" value="Dhading">Dhading</option>
                                    <option id="Salyan" name="Salyan" value="Salyan">Salyan</option>
                                    <option id="Solukhumbu" name="Solukhumbu" value="Solukhumbu">Solukhumbu</option>
                                    <option id="Surkhet" name="Surkhet" value="Surkhet">Surkhet</option>
                                    <option id="Bajhang" name="Bajhang" value="Bajhang">Bajhang</option>
                                    <option id="Pyuthan" name="Pyuthan" value="Pyuthan">Pyuthan</option>
                                    <option id="Kalikot" name="Kalikot" value="Kalikot">Kalikot</option>
                                    <option id="Parasi" name="Parasi" value="Parasi">Parasi</option>
                                    <option id="Sarlahi" name="Sarlahi" value="Sarlahi">Sarlahi</option>
                                    <option id="Bardiya" name="Bardiya" value="Bardiya">Bardiya</option>
                                    <option id="Parsa" name="Parsa" value="Parsa">Parsa</option>
                                    <option id="Baitadi" name="Baitadi" value="Baitadi">Baitadi</option>
                                    <option id="Morang" name="Morang" value="Morang">Morang</option>
                                    <option id="Kailali" name="Kailali" value="Kailali">Kailali</option>
                                    <option id="Kathmandu" name="Kathmandu" value="Kathmandu">Kathmandu</option>
                                    <option id="Jumla" name="Jumla" value="Jumla">Jumla</option>
                                    <option id="Tanahun" name="Tanahun" value="Tanahun">Tanahun</option>
                                    <option id="Rautahat" name="Rautahat" value="Rautahat">Rautahat</option>
                                    <option id="Nawalpur" name="Nawalpur" value="Nawalpur">Nawalpur</option>
                                    <option id="Makwanpur" name="Makwanpur" value="Makwanpur">Makwanpur</option>
                                    <option id="Taplejung" name="Taplejung" value="Taplejung">Taplejung</option>
                                    <option id="Ilam" name="Ilam" value="Ilam">Ilam</option>
                                    <option id="Saptari" name="Saptari" value="Saptari">Saptari</option>
                                    <option id="Jajarkot" name="Jajarkot" value="Jajarkot">Jajarkot</option>
                                    <option id="Rasuwa" name="Rasuwa" value="Rasuwa">Rasuwa</option>
                                    <option id="Dhankuta" name="Dhankuta" value="Dhankuta">Dhankuta</option>
                                    <option id="Mustang" name="Mustang" value="Mustang">Mustang</option>
                                    <option id="Achham" name="Achham" value="Achham">Achham</option>
                                    <option id="Bara" name="Bara" value="Bara">Bara</option>
                                    <option id="Bhaktapur" name="Bhaktapur" value="Bhaktapur">Bhaktapur</option>
                                    <option id="Chitwan" name="Chitwan" value="Chitwan">Chitwan</option>
                                    <option id="Kapilvastu" name="Kapilvastu" value="Kapilvastu">Kapilvastu</option>
                                    <option id="Siraha" name="Siraha" value="Siraha">Siraha</option>
                                    <option id="Arghakhanchi" name="Arghakhanchi" value="Arghakhanchi">Arghakhanchi</option>
                                    <option id="Kanchanpur" name="Kanchanpur" value="Kanchanpur">Kanchanpur</option>
                                    <option id="Sindhuli" name="Sindhuli" value="Sindhuli">Sindhuli</option>
                                    <option id="Mugu" name="Mugu" value="Mugu">Mugu</option>
                                    <option id="Sunsari" name="Sunsari" value="Sunsari">Sunsari</option>
                                    <option id="Doti" name="Doti" value="Doti">Doti</option>
                                    <option id="Khotang" name="Khotang" value="Khotang">Khotang</option>
                                    <option id="Gulmi" name="Gulmi" value="Gulmi">Gulmi</option>
                                    <option id="Myagdi" name="Myagdi" value="Myagdi">Myagdi</option>
                                    <option id="Sindhupalchok" name="Sindhupalchok" value="Sindhupalchok">Sindhupalchok</option>
                                    <option id="Kaski" name="Kaski" value="Kaski">Kaski</option>
                                    <option id="Ramechhap" name="Ramechhap" value="Ramechhap">Ramechhap</option>
                                    <option id="Udayapur" name="Udayapur" value="Udayapur">Udayapur</option>
                                    <option id="Dolpa" name="Dolpa" value="Dolpa">Dolpa</option>
                                    <option id="Bajura" name="Bajura" value="Bajura">Bajura</option>
                                    <option id="Panchthar" name="Panchthar" value="Panchthar">Panchthar</option>
                                    <option id="Parbat" name="Parbat" value="Parbat">Parbat</option>
                                    <option id="Rupandehi" name="Rupandehi" value="Rupandehi">Rupandehi</option>
                                    <option id="Okhaldhunga" name="Okhaldhunga" value="Okhaldhunga">Okhaldhunga</option>
                                    <option id="Jhapa" name="Jhapa" value="Jhapa">Jhapa</option>
                                </select>
                                <?php echo '
                                <script>
                                    document.getElementById("' . $row["district"] . '").selected = true;
                                </script>'; ?>

                            </div>

                        </div>
                        <div class="col-md-7 mb-1 pb-1">

                            <div class="form-outline form-white">
                                <label class="form-label" for="form3Examplea5">Location</label>
                                <input type="text" id="location" disabled name="location" class="form-control form-control-lg" placeholder="Address" required value="<?php echo $row['location']; ?>" />
                            </div>

                        </div>
                    </div>

                    <div class="mb-1 pb-1">
                        <div class="form-outline form-white">
                            <label class="form-label" for="form3Examplea6">Phone Number</label>
                            <input type="number" id="number" disabled name="number" class="form-control form-control-lg" placeholder="Phone Number" required value="<?php echo $row['number']; ?>" />
                        </div>
                    </div>


                    <div class="mb-1 pb-1">
                        <div class="form-outline form-white">
                            <label class="form-label" for="form3Examplea6">Document</label>
                            <div class="carousel-inner  bg-white">
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
                        </div>
                    </div>
                    <div class="form-check" id="spwd" style="display:none">
                        <input class="form-check-input" name="c1" type="checkbox" value="epass" id="g">
                        <label class="form-check-label" for="flexCheckDefault">
                            Edit Password
                        </label>
                    </div>
                    <div class="mb-1 pb-1">
                        <div class="form-outline form-white">
                            <div class="form-group pb-3">
                                <div id="pwd" class="row" style="display:none">
                                    <div class="col-11">
                                        <input name="password" type="password" class="form-control" value="<?php echo $row["password"]; ?>" disabled id="pswd" placeholder="Password">
                                    </div>


                                    <div class="col-1">
                                        <input type="button" value="Show" onclick="selectFunction()" class="btn btn-danger" id="showPassword">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="form-check d-flex justify-content-start mb-1 pb-1">
                    <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" required />
                    <label class="form-check-label text-black" for="form2Example3">
                        I do accept the <a href="#!" class="text-info"><u>Terms and Conditions</u></a> of your site.
                    </label>
                </div> -->

                    <button type="submit" class="btn btn-outline-primary">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="edit" name="edit">Edit</button>

                </form>
            <?php } ?>

        </div>
    </div>

    <div class="card shadow border-0 mb-7 mt-4" <?php echo ($_SESSION["UserType"] == "Admin") ? "" : "hidden"; ?>>
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
                    $sql1 = "select * from auction where uid = '$uid' order by status;";
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

    // Show/ hide password



    var selectFunction = function() {
        let a = document.getElementById("showPassword").value;
        if (a == "Show") {
            $('#pswd').attr('type', 'text');
            document.getElementById("showPassword").value = "Hide";
        }

        if (a == "Hide") {
            $('#pswd').attr('type', 'Password');
            document.getElementById("showPassword").value = "Show";
        }

    };




    //Dropdown
    $(document).ready(function() {

        $('#g').on('change', function() {
            if ($(this).prop("checked")) {
                $("#pwd").show();
            } else {
                $("#pwd").hide();
            }
        });





    });
</script>

<?php
if (isset($_POST['edit'])) {

    echo '<script>
            
            document.getElementById("edit").innerHTML = "Save";
                document.getElementById("edit").setAttribute("name","save");
                document.getElementById("name").disabled = false;
                document.getElementById("email").disabled = false;
                document.getElementById("district").disabled = false;
                document.getElementById("location").disabled = false;
                document.getElementById("number").disabled = false;
                document.getElementById("pswd").disabled = false;
                document.getElementById("spwd").style.display = "block";

            </script>';
    if ($_SESSION["UserType"] == "Admin") {
        //     echo '<script>
        //             document.getElementById("d").disabled = false;
        //         </script>';
    }
}
if (isset($_POST['save'])) {

    echo '<script>
            
            document.getElementById("edit").innerHTML = "Edit";
                document.getElementById("edit").setAttribute("name","edit");
                document.getElementById("name").disabled = true;
                document.getElementById("email").disabled = true;
                document.getElementById("district").disabled = true;
                document.getElementById("location").disabled = true;
                document.getElementById("number").disabled = true;
                document.getElementById("pswd").disabled = true;
                

            
            </script>';

    //Php for storing altered data

    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $district = $_POST["district"];
    $location = $_POST["location"];
    $password = $_POST["password"];

    $sql = "update user set name = '$name', email = '$email', number = '$number', district= '$district', location = '$location', password=  '$password' where uid = '$uid'";
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