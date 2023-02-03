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

    <div class="content d-flex flex-column w-75 align-items-center my-3">
      <div class="d-flex flex-row w-100">
        <a class="kotak shadow-sm p-2 mb-5 fs-6 rounded m-auto " href="pelayanan.php"><button type="button" class="fw-bold h-100 w-100 btn btn-primary">Pelayanan Masyarakat</button></a>
        <a class="kotak shadow-sm p-2 mb-5 fs-6 rounded m-auto " href="blt.php"><button type="button" class="fw-bold  h-100 w-100 btn btn-outline-primary">Info BLT</button></a>
        <a class="kotak shadow-sm p-2 mb-5 fs-6 rounded m-auto " href="e-ktp.php"><button type="button" class="fw-bold h-100 w-100 btn btn-outline-primary">E-KTP</button></a>
      </div>
      <h4 class="w-100 my-2">Membangun kepercayaan masyarakat atas pelayanan publik yang dilakukan penyelenggara pelayanan publik merupakan kegiatan yang harus dilaksanakan seiring dengan harapan dan tuntutan seluruh warga negara dan penduduk Indonesia tentang peningkatan pelayanan publik yang akhir akhir ini semangkin menjadi perhatian umum.</h4>
      <div class="mt-4 d-flex flex-row">
        <img class="mx-5 mt-5 gambar_pm" src="assets/pm1.png" alt="masyarakat">
        <img class="mx-5 mt-5 gambar_pm" src="assets/pm2.png" alt="masyarakat">
        <img class="mx-5 mt-5 gambar_pm" src="assets/pm3.png" alt="masyarakat">
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