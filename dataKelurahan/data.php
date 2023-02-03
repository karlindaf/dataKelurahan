<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
 <?php
include_once("koneksi.php");
$result = mysqli_query($conn, "SELECT * FROM data_ms ORDER BY  id DESC"); 

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

    <div class="content d-flex flex-column w-75 align-items-center my-3 min-vh-100">
    <table class="table table-striped border">
      <thead class="table-light">
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">TTL</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Agama</th>
        <th scope="col"><a class="btn btn-light border fw-bold rounded-pill " href="tambah.php">Tambah Data</a></th>
        </tr>
      </thead>
      <tbody>
          <?php 
              while($res = mysqli_fetch_array($result)) { 		
                      echo "<tr>";
                      echo "<td>".$res['id']."</td>";
                      echo "<td>".$res['nama']."</td>";
                      echo "<td>".$res['alamat']."</td>";
                      echo "<td>".$res['ttl']."</td>";	
                      echo "<td>".$res['jenis']."</td>";	
                      echo "<td>".$res['agama']."</td>";	
                      echo "<td><a class=\"btn btn-light border fw-bold rounded-pill\" href=\"edit.php?id=$res[id]\">Update</a>  <a class=\"btn btn-light border fw-bold rounded-pill\" href=\"delete.php?id=$res[id]\">Delete</a></td>";		
                  }
              ?>
          </tbody>
      </table>
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