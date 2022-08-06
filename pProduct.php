<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js" integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg==" crossorigin="anonymous"></script>
<style type="text/css">
    .bootstrap-tagsinput {
        width: 100%;
    }

    .label-info {
        background-color: #17a2b8;

    }

    .label {
        display: inline-block;
        padding: .25em .4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out,
            border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }
</style>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="POST" action="postProduct.php" class="modal-dialog" role="document" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Auction</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" id="form3Examplea2" name="uid" class="form-control form-control-lg" value="<?php echo $uid; ?>" style="display:none" />
                <div class="pt-1">
                    <div class="mb-1 pb-1">
                        <div class="form-outline form-white">

                            <label class="form-label" for="form3Examplea2">Title</label>
                            <input type="text" id="form3Examplea2" name="title" class="form-control form-control-lg" required />
                        </div>
                    </div>
                    <div class="mb-1 pb-1">
                        <div class="form-outline form-white">
                            <label class="control-label" for="field1">
                                Upload Photo
                            </label>
                            <div class="controls">
                                <div class="entry input-group upload-input-group mb-1">
                                    <input class="form-control" name="files[]" type="file" required multiple>
                                    <!-- <button class="btn btn-upload btn-success btn-add" type="button">
                                        <i class="fa fa-plus"> </i> -->
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-1 pb-2">
                            <div class="form-outline form-white">
                                <label class="form-label" for="form3Examplea4">Category</label>
                                <select id="form3Examplea4" name="category" class="form-control form-control-lg" required>
                                    <option name="" value="" selected> Choose</option>
                                    <?php
                                    $sql = "select * from category";
                                    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                    while ($row = mysqli_fetch_assoc($res)) { ?>
                                        <option name="<?php echo $row['cName']; ?>" value="<?php echo $row['cid']; ?>"> <?php echo $row['cName']; ?> </option>
                                    <?php } ?>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-7 mb-1 pb-2">
                            <div class="form-outline form-white">
                                <label class="form-label" for="form3Examplea6">Phone Number</label>
                                <input type="text" id="form3Examplea6" name="number" class="form-control form-control-lg" required />
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-1 pb-1">
                            <div class="form-outline form-white">
                                <label class="form-label" for="form3Examplea4">District</label>
                                <select id="form3Examplea4" name="district" class="form-control form-control-lg" required>
                                    <option name="" value="" selected> Choose</option>
                                    <option name="Dadeldhura" value="Dadeldhura">Dadeldhura</option>
                                    <option name="Nuwakot" value="Nuwakot">Nuwakot</option>
                                    <option name="Dhanusa" value="Dhanusa">Dhanusa</option>
                                    <option name="Gorkha" value="Gorkha">Gorkha</option>
                                    <option name="Syangja" value="Syangja">Syangja</option>
                                    <option name="Darchula" value="Darchula">Darchula</option>
                                    <option name="Terhathum" value="Terhathum">Terhathum</option>
                                    <option name="Sankhuwasabha" value="Sankhuwasabha">Sankhuwasabha</option>
                                    <option name="Dolakha" value="Dolakha">Dolakha</option>
                                    <option name="Dang" value="Dang">Dang</option>
                                    <option name="Rolpa" value="Rolpa">Rolpa</option>
                                    <option name="Baglung" value="Baglung">Baglung</option>
                                    <option name="Dailekh" value="Dailekh">Dailekh</option>
                                    <option name="Eastern Rukum" value="Eastern Rukum">Eastern Rukum</option>
                                    <option name="Western Rukum" value="Western Rukum">Western Rukum</option>
                                    <option name="Manang" value="Manang">Manang</option>
                                    <option name="Lalitpur" value="Lalitpur">Lalitpur</option>
                                    <option name="Kavrepalanchok" value="Kavrepalanchok">Kavrepalanchok</option>
                                    <option name="Mahottari" value="Mahottari">Mahottari</option>
                                    <option name="Bhojpur" value="Bhojpur">Bhojpur</option>
                                    <option name="Palpa" value="Palpa">Palpa</option>
                                    <option name="Lamjung" value="Lamjung">Lamjung</option>
                                    <option name="Banke" value="Banke">Banke</option>
                                    <option name="Humla" value="Humla">Humla</option>
                                    <option name="Dhading" value="Dhading">Dhading</option>
                                    <option name="Salyan" value="Salyan">Salyan</option>
                                    <option name="Solukhumbu" value="Solukhumbu">Solukhumbu</option>
                                    <option name="Surkhet" value="Surkhet">Surkhet</option>
                                    <option name="Bajhang" value="Bajhang">Bajhang</option>
                                    <option name="Pyuthan" value="Pyuthan">Pyuthan</option>
                                    <option name="Kalikot" value="Kalikot">Kalikot</option>
                                    <option name="Parasi" value="Parasi">Parasi</option>
                                    <option name="Sarlahi" value="Sarlahi">Sarlahi</option>
                                    <option name="Bardiya" value="Bardiya">Bardiya</option>
                                    <option name="Parsa" value="Parsa">Parsa</option>
                                    <option name="Baitadi" value="Baitadi">Baitadi</option>
                                    <option name="Morang" value="Morang">Morang</option>
                                    <option name="Kailali" value="Kailali">Kailali</option>
                                    <option name="Kathmandu" value="Kathmandu">Kathmandu</option>
                                    <option name="Jumla" value="Jumla">Jumla</option>
                                    <option name="Tanahun" value="Tanahun">Tanahun</option>
                                    <option name="Rautahat" value="Rautahat">Rautahat</option>
                                    <option name=" + Nawalpur" value="Nawalpur">Nawalpur</option>
                                    <option name="Makwanpur" value="Makwanpur">Makwanpur</option>
                                    <option name="Taplejung" value="Taplejung">Taplejung</option>
                                    <option name="Ilam" value="Ilam">Ilam</option>
                                    <option name="Saptari" value="Saptari">Saptari</option>
                                    <option name="Jajarkot" value="Jajarkot">Jajarkot</option>
                                    <option name="Rasuwa" value="Rasuwa">Rasuwa</option>
                                    <option name="Dhankuta" value="Dhankuta">Dhankuta</option>
                                    <option name="Mustang" value="Mustang">Mustang</option>
                                    <option name="Achham" value="Achham">Achham</option>
                                    <option name="Bara" value="Bara">Bara</option>
                                    <option name="Bhaktapur" value="Bhaktapur">Bhaktapur</option>
                                    <option name="Chitwan" value="Chitwan">Chitwan</option>
                                    <option name="Kapilvastu" value="Kapilvastu">Kapilvastu</option>
                                    <option name="Siraha" value="Siraha">Siraha</option>
                                    <option name="Arghakhanchi" value="Arghakhanchi">Arghakhanchi</option>
                                    <option name="Kanchanpur" value="Kanchanpur">Kanchanpur</option>
                                    <option name="Sindhuli" value="Sindhuli">Sindhuli</option>
                                    <option name="Mugu" value="Mugu">Mugu</option>
                                    <option name="Sunsari" value="Sunsari">Sunsari</option>
                                    <option name="Doti" value="Doti">Doti</option>
                                    <option name="Khotang" value="Khotang">Khotang</option>
                                    <option name="Gulmi" value="Gulmi">Gulmi</option>
                                    <option name="Myagdi" value="Myagdi">Myagdi</option>
                                    <option name="Sindhupalchok" value="Sindhupalchok">Sindhupalchok</option>
                                    <option name="Kaski" value="Kaski">Kaski</option>
                                    <option name="Ramechhap" value="Ramechhap">Ramechhap</option>
                                    <option name="Udayapur" value="Udayapur">Udayapur</option>
                                    <option name="Dolpa" value="Dolpa">Dolpa</option>
                                    <option name="Bajura" value="Bajura">Bajura</option>
                                    <option name="Panchthar" value="Panchthar">Panchthar</option>
                                    <option name="Parbat" value="Parbat">Parbat</option>
                                    <option name="Rupandehi" value="Rupandehi">Rupandehi</option>
                                    <option name="Okhaldhunga" value="Okhaldhunga">Okhaldhunga</option>
                                    <option name="Jhapa" value="Jhapa">Jhapa</option>
                                </select>

                            </div>

                        </div>
                        <div class="col-md-7 mb-1 pb-1">

                            <div class="form-outline form-white">
                                <label class="form-label" for="form3Examplea5">Location</label>
                                <input type="text" id="form3Examplea5" name="location" class="form-control form-control-lg" required />
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 mb-1 pb-1">
                            <div class="form-outline form-white">
                                <label class="form-label" for="form3Examplea8">End Date</label>
                                <input type="date" id="form3Examplea6" name="date" class="form-control form-control-lg" min="<?php echo date("Y-m-d", strtotime('tomorrow')); ?>" required />
                            </div>
                        </div>
                        <div class="col-md-7 mb-1 pb-1">
                            <div class="form-outline form-white">
                                <label class="form-label" for="form3Examplea8">End Time</label>
                                <input type="time" id="form3Examplea6" name="time" value="24:00" class="form-control form-control-lg" required />

                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-5 mb-1 pb-2">
                            <div class="form-outline form-white">
                                <label class="form-label" for="form3Examplea7">Initial Price</label>
                                <input type="text" id="form3Examplea7" name="iPrice" class="form-control form-control-lg " required />
                            </div>

                        </div>
                        <div class="col-md-7 mb-1 pb-1">
                            <div class="form-outline form-white">
                                <label class="form-label" for="form3Examplea8">Delivery</label>
                                <select id="delivery" name="delivery" class="form-control form-control-lg" required>
                                    <option name="" value="" selected> - - -</option>
                                    <option name="Free: All Over Nepal" value="Free: All Over Nepal">Free: All Over Nepal</option>
                                    <option name="Free: Same District" value="Free: Same District">Free: Same District</option>
                                    <option name="Not Available" value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="mb-1 pb-1">
                        <div class="form-outline form-white">
                            <label class="form-label" for="form3Examplea6">Description</label>
                            <textarea required id="form3Examplea6" rows="4" name="desc" class="form-control form-control-lg"></textarea>
                        </div>
                    </div>
                    <div class="mb-1 pb-1">
                        <div class="form-outline form-white">

                            <label class="form-label" for="form3Examplea2">Tags</label>
                            <input type="text" data-role="tagsinput" name="tags" class="form-control" required>
                        </div>
                    </div>



                    <div class="form-check d-flex justify-content-start mb-1 pb-1">
                        <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" required />
                        <label class="form-check-label text-muted" name="verify" for="form2Example3">
                            I do accept the <a href="#!" class="text-muted"><u>Terms and Conditions</u></a> of your site.
                        </label>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="register">Post</button>
            </div>
        </div>
    </form>
</div>

<script>
    // $('[name=tags]').tagify();



    // Vanilla JavaScript

    // var input = document.querySelector('input[name=tags]'),

    // tagify =new Tagify( input );
</script>