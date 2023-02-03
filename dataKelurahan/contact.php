<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Data Kelurahan</title>
  </head>
<body>
<div class="containerr d-flex flex-column h-100 align-items-center">
  <div class="w-100 border warna_background">
    <div class="header d-flex flex-row justify-content-between w-75 mx-auto">
      <h3 class="  d-flex align-items-center">Firda Karlinda</h3>
      <div class=""></div>
      <div class="   d-flex d-row">
        <div class="d-flex align-items-center mx-3"><a class="link" href="home.php">Home</a></div>
        <div class="d-flex align-items-center mx-3"><a class="link" href="data.php">Data Masyarakat</a></div>
        <div class="d-flex align-items-center mx-3"><a class="link" href="about.php">About</a></div>
        <div class="d-flex align-items-center mx-3"><a class="link" href="contact.php">Contact</a></div>
        <div class="d-flex align-items-center mx-3"><a class="link bg-primary text-white fw-bold rounded p-2" href="logout.php">Logout</a></div>
      </div>
    </div>
  </div>

    <div class="content d-flex flex-column w-75 justify-content-around align-items-center my-5">
        <div class="mx-auto my-5">
            <img class="rounded-5" src="assets/about.jpg" alt="about">
        </div>
        <div class="w-100 d-flex flex-row justify-content-around align-items-center my-5">
            <div class="shadow-sm p-3 mb-5 bg-body rounded cardd d-flex justify-content-center align-items-center">
                <p class="p-3">Address Kp. Baru Rt 02 / Rw 16 Desa Kertamukti Kec. Cipatat Kab. Bandung Barat Prov. Jawa Barat</p>
            </div>
            <div class="shadow-sm p-3 mb-5 bg-body rounded cardd d-flex justify-content-center align-items-center">
                <p class="p-3"> Email karlindaf22@gmail.com</p>
            </div>
            <div class="shadow-sm p-3 mb-5 bg-body rounded cardd d-flex justify-content-center align-items-center">
                <p class="p-3">Telp (021) 12345678</p>
            </div>
        </div>
    </div>

    <div class="warna_background w-100 p-3">
      <div class="d-flex flex-row w-75 justify-content-between">
        <div class="d-flex flex-row">
          <img class="gambar mx-3" src="assets/google.png" alt="google">
          <img class="gambar mx-3" src="assets/facebook.png" alt="facebook">
          <img class="gambar mx-3" src="assets/tweeter.png" alt="tweeter">
        </div>
        <div class=""></div>
         <h5 class="my-auto fw-bold">@Copyright by 20552011192_Firda Karlinda_TIF K 20_UAS_WEB1</h5>
        </div>
      </div>
    </div>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>