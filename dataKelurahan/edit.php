<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    ?>

    <?php
    include_once("koneksi.php");
    if(isset($_POST['update']))
    {	
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $nama = mysqli_real_escape_string($conn, $_POST['nama']);
        $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
        $ttl = mysqli_real_escape_string($conn, $_POST['ttl']);	
        $jenis = mysqli_real_escape_string($conn, $_POST['jenis']);	
        $agama = mysqli_real_escape_string($conn, $_POST['agama']);	
        
        if(empty($nama && $alamat && $ttl && $jenis && $agama)) {	
            echo "<font color='red'>kolom masih ada yang kosong</font><br/>";
        } else {	
            $result = mysqli_query($conn, "UPDATE data_ms SET nama='$nama',  alamat='$alamat', ttl='$ttl', jenis='$jenis', agama='$agama' WHERE id=$id");
            header("Location: data.php");
        }
    }
    ?>
    <?php
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM data_ms WHERE id=$id");
    while($res = mysqli_fetch_array($result))
    {
        $nama = $res['nama'];
        $alamat = $res['alamat'];
        $ttl = $res['ttl'];
        $jenis = $res['jenis'];
        $agama = $res['agama'];
    }
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

    <div class="content d-flex flex-column w-75 align-items-center my-5 py-5  min-vh-100">
        <div class="h2 text-primary fw-bold">Tambah Data Masyarakat</div>
      <form action="edit.php" method="post" name="form1" class="border border-primary rounded-5 d-flex flex-column  w-75 my-4 py-5">
        <div class=" d-flex flex-row w-75 justify-content-between mx-auto p-2">
            <h6 class="my-auto">Nama  </h6>
            <input type="text" name="nama" placeholder="Nama"  class="w-75 form-control" value="<?php echo $nama;?>"/>
        </div>
        <div class=" d-flex flex-row w-75 justify-content-between mx-auto p-2">
            <h6 class="my-auto">Alamat </h6>
            <input type="text" name="alamat" placeholder="Alamat" class="w-75 form-control"value="<?php echo $alamat;?>"/>
        </div>
        <div class=" d-flex flex-row w-75 justify-content-between mx-auto p-2">
            <h6 class="my-auto">Tempat Tanggal Lahir </h6>
            <input type="text" name="ttl" placeholder="Tempat Tanggal Lahir"  class="w-75 form-control "value="<?php echo $ttl;?>"/>
        </div>
        <div class=" d-flex flex-row w-75 justify-content-between mx-auto p-2">
            <h6 class="my-auto">Jenis Kelamin </h6>
            <input type="text" name="jenis" placeholder="Jenis Kelamin"  class="w-75 form-control"value="<?php echo $jenis;?>"/>
        </div>
        <div class=" d-flex flex-row w-75 justify-content-between mx-auto p-2">
            <h6 class="my-auto">Agama </h6>
            <input type="text" name="agama" placeholder="Agama"  class="w-75 form-control"value="<?php echo $agama;?>"/>
        </div>
        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            <button type="submit" name="update" class="btn btn-primary w-25 mx-auto my-4">Perbarui</button>
        </form>
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