<?php include "./nav2.php";
if (isset($_SESSION["User_ID"])) {
  if ($_SESSION["User_ID"] != 0) {
    echo '<script>window.location = "./index.php";</script>';
  }
}
?>

<link rel="stylesheet" href="./css/login.css">

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-50">
    <div class="row d-flex justify-content-center align-items-center h-100  mt-5">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <h4 class="mt-1 mb-5 pb-1">Welcome back!</h4>
                </div>

                <form action="login.php" method="POST">
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Email</label>
                    <input type="email" id="form2Example11" class="form-control" name="email" placeholder="Email address 📧 " required />
                  </div>

                  <div class="form-outline mb-4">

                    <label class="form-label" for="form2Example22">Password</label>
                    <input type="password" id="form2Example22" name="password" class="form-control" placeholder="Shhh... it's a secret😶 " required />
                  </div>


                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-dark btn-block fa-lg mb-3 pb-2" type="submit" name="login" type="button">Log in</button>
                    <!-- <a class="text-muted" href="#!" id="hide" onclick="show()">Forgot password?</a> -->
                  </div>

                  <!-- <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="button" class="btn btn-outline-danger ml-2">Create new</button>
                  </div> -->

                </form>

              </div>
            </div>


            <!-- -----------------------------Register--------------------- -->


            <div class="col-lg-6 d-flex align-items-center bg-dark text-white">
              <div class=" px-1 py-1 p-md-1 mx-md-1">
                <form action="login.php" method="POST" class="pt-3" id="forgot" role="document" enctype="multipart/form-data">
                  <h3 class="fw-normal align-center">Sign in</h3>

                  <div class="mb-1 pb-1">
                    <div class="form-outline form-white">

                      <label class="form-label" for="form3Examplea2">Name</label>
                      <input type="text" id="form3Examplea2" name="name" class="form-control form-control-lg" placeholder="Enter Your Name" required />
                    </div>
                  </div>

                  <div class="mb-1 pb-1">
                    <div class="form-outline form-white">
                      <label class="form-label" for="form3Examplea3">Email</label>
                      <input type="text" id="form3Examplea3" name="email" class="form-control form-control-lg" placeholder="Enter Your Email" required />
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
                        <input type="text" id="form3Examplea5" name="location" class="form-control form-control-lg" placeholder="Enter Your Address" required />
                      </div>

                    </div>
                  </div>

                  <div class="mb-1 pb-1">
                    <div class="form-outline form-white">
                      <label class="form-label" for="form3Examplea6">Phone Number</label>
                      <input type="number" id="form3Examplea6" name="number" class="form-control form-control-lg" placeholder="Enter Your Phone Number" required />
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-1 pb-2">
                      <div class="form-outline form-white">
                        <label class="form-label" for="form3Examplea7">Password</label>
                        <input type="password" name="password" id="txtNewPassword" class="form-control form-control-lg" placeholder="🤔 " required />
                      </div>

                    </div>
                    <div class="col-md-7 mb-1 pb-1">

                      <div class="form-outline form-white">
                        <label class="form-label" for="form3Examplea8">Confirm Password</label>
                        <input type="password" id="txtConfirmPassword" class="form-control form-control-lg" placeholder="😕 " required />
                        <div class="form_label mx-auto" id="divCheckPasswordMatch"></div>
                      </div>
                    </div>

                  </div>

                  <div class="mb-1 pb-1">
                    <div class="form-outline form-white">
                      <label class="form-label" for="form3Examplea6">Document</label>
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

                  <div class="form-check d-flex justify-content-start mb-1 pb-1">
                    <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" required />
                    <label class="form-check-label text-white" for="form2Example3">
                      I do accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your site.
                    </label>
                  </div>

                  <button type="submit" name="register" class="btn btn-light btn-lg mb-4 text-center" data-mdb-ripple-color="dark">Register</button>

                </form>

              </div>

              <!------------------------------------------ Forgot Password------------------------------ -->

              <!-- <form action="login.php" method="POST" class="pt-1" id="gotIt" style="display: none;">
                <h3 class="fw-normal align-center ">Forgot Password?😠 </h3>

                <div class="mb-1 pb-1">
                  <div class="form-outline form-white">

                    <label class="form-label" for="form3Examplea2">Name</label>
                    <input type="text" name="name" id="form3Examplea2" class="form-control form-control-lg" required />
                  </div>
                </div>

                <div class="mb-1 pb-1">
                  <div class="form-outline form-white">
                    <label class="form-label" for="form3Examplea3">Email</label>
                    <input type="text" name="email" id="form3Examplea3" class="form-control form-control-lg" required />
                  </div>
                </div>

                <div class="form-check d-flex justify-content-start mb-1 pb-1">
                  <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" required />
                  <label class="form-check-label text-white" for="form2Example3">
                    I do accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your site.
                  </label>
                </div>

                <button type="submit" name="fpassword" class="btn btn-light btn-lg mb-4 mt-3 text-center" data-mdb-ripple-color="dark">Send Password</button>

                <div class="text-center pt-1 mb-5 pb-1">
                  <a class="text-white" href="#!" id="show" onclick="hide()">Sign In?</a>
                </div>
              </form> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
</body>

</html>

<script>
  // const show = () => {
  //   document.getElementById("gotIt").style.display = 'block';
  //   document.getElementById("forgot").style.display = 'none';
  // }
  // const hide = () => {
  //   document.getElementById("gotIt").style.display = 'none';
  //   document.getElementById("forgot").style.display = 'block';
  // }

  // $(document).ready(function() {
  //   $("#gotIt").hide();
  //   $('#hide').on('click', function() {
  //     $("#forgot").hide();
  //     $("#gotIt").show();
  //   });
  //   $('#show').on('click', function() {
  //     $("#forgot").show();
  //     $("#gotIt").hide();
  //   });


  // });

  //Live check
  $(document).ready(function() {
    $("#txtNewPassword, #txtConfirmPassword").keyup(checkPasswordMatch);
  });


  // Password match check garna
  function checkPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword)
      $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
      $("#divCheckPasswordMatch").html("Passwords match.");
  }
</script>

<!-- Login ko lagi -->

<?php

if (isset($_POST['login'])) {
  function check_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $usr = $psw = "";
  $usr = check_input($_POST['email']);
  $psw = check_input($_POST['password']);
  $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

  if (!preg_match($pattern, $usr) || !preg_match('/[A-Za-z0-9A-Za-z!@#$%]+$/', $psw)) {
    echo '<span style="color:red;">Enter Valid Details</span>';
  } else {
    // setcookie("id", $usr, time() + (24 * 24 * 60 * 60 * 60));
    // setcookie("pass", $psw, time() + (24 * 24 * 60 * 60 * 60));

    $sql = "SELECT * FROM user WHERE email='{$usr}' AND password= '{$psw}' AND isHidden = 0";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        if ($row['pending'] == 1) {
          echo "<Script> alert('Waiting admin approval');</script>";
        } else {
          // session_start();
          $_SESSION["name"] = $row['name'];
          $_SESSION["User_ID"] = $row['uid'];
          $_SESSION["User_Password"] = $row['password'];
          $_SESSION["UserType"] = $row['userType'];
        }
        echo ' <Script>
      window.location = "./index.php";
      </script>';
      }
    } else
      echo "<Script> alert('Enter Valid Details');</script>";
  }
}

//register
if (isset($_POST['register'])) {
  extract($_POST);
  $error = array();
  $extension = array("jpeg", "jpg", "png", "gif");
  $fileNames = implode(': ', $_FILES["files"]["name"]);
  include("./include/conn.php");

  $name = $_POST["name"];
  $email = $_POST["email"];
  $number = $_POST["number"];
  $district = $_POST["district"];
  $location = $_POST["location"];
  $password = $_POST["password"];

  foreach ($_FILES["files"]["tmp_name"] as $key => $tmp_name) {
    $file_name = $_FILES["files"]["name"][$key];
    $file_tmp = $_FILES["files"]["tmp_name"][$key];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);

    if (in_array($ext, $extension)) {

      if (!file_exists("product/" . $file_name)) {
        move_uploaded_file($file_tmp = $_FILES["files"]["tmp_name"][$key], "document/" . $file_name);
      } else {
        $filename = basename($file_name, $ext);
        $newFileName = $filename . time() . "." . $ext;
        move_uploaded_file($file_tmp = $_FILES["files"]["tmp_name"][$key], "document/" . $newFileName);
      }
    } else {
      echo '<script>
  alert("Select valid Documents");
  window.location = "./login.php";
</script>';
      exit();
    }
  }
  $sql = "Insert into user(name,email,number,district,location,password, document, userType, pending) values('$name','$email','$number','$district','$location','$password','$fileNames', 'User', 1)";
  $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  // echo $result;
  if ($result) {
    echo '<script>
  window.location = "./index.php";
  alert("Waiting admin approval");
</script>';
  } else {
    echo '<script>
  alert("error, please try again");
</script>';
  }
}
