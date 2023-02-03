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
  <div class="w-100 warna_background">
    <div class="header d-flex flex-row justify-content-between w-75 mx-auto">
      <h3 class="  d-flex align-items-center">Firda Karlinda</h3>
      <div class=""></div>
      <div class="   d-flex d-row">
       <div class="d-flex align-items-center mx-3"><a class="link" href="home.php">Home</a></div>
        <div class="d-flex align-items-center mx-3"><a class="link" href="about.php">About</a></div>
        <div class="d-flex align-items-center mx-3"><a class="link" href="contact.php">Contact</a></div>
      </div>
    </div>
  </div>

    <div class="content d-flex flex-row w-75  justify-content-between my-5">
      <div class="">
        <img class="gambar_login rounded-5" src="assets/pp.jpg" alt="login ">
      </div>
      <div class=""></div>
      <div class="border border-primary rounded-5 d-flex flex-column align-items-center justify-content-center w-50">
        <h1 class="fw-bold text-primary">Login</h1>
          <form method="post" action="login.php" class="w-75 d-flex flex-column align-items-center">
            <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="form-group w-75 my-3">
                <label>Username</label>
                <input type="text" name="name" placeholder="User Name"class="form-control">
            </div> 

            <div class="form-group w-75 my-3">
                <label>Password</label>
                <input type="password" name="pass" placeholder="Password" class="form-control">
            </div> 

           <div class="d-flex flex-row w-75 justify-content-between my-4">
            <div class="">
              <input type="radio" id="" name="" value="remember">
              <label for="remember">Remember me</label>
            </div>
              <a class ="link" href="register.php">Register Account</a>
           </div>

            <div class="form-group w-75 d-flex justify-content-center my-4">
                <button type="submit" class="btn btn-primary btn-block w-50 "> Login  
                </button>
            </div> 
            </form>
           <p class="fw-bold text-primary my-4">or signin using</p>
           <div class="">
              <img class="gambar mx-3" src="assets/google.png" alt="google">
              <img class="gambar mx-3" src="assets/facebook.png" alt="facebook">
              <img class="gambar mx-3" src="assets/tweeter.png" alt="tweeter">
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