<?php 
session_start(); 
include "koneksi.php";

if (isset($_POST['name']) && isset($_POST['pass'])) {

	function validate($data){
      $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['name']);
	$password = validate($_POST['pass']);

	if (empty($username)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{ 

		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect User name or password1");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password2");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
// <!-- <!DOCTYPE html>
// <html lang="en">
//   <head>
//     <meta charset="UTF-8" />
//     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
//     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
//     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
//     <title>Data Kelurahan</title>
//   </head>
// <body class="bg-info border-primay">
//   <div class="container">
//     <div class="d-flow flex-column">
//       <div class="bg-light border border-primay " style="height:50px" >
//         <div class="row">
//           <div class="border border-primay col">
//             <h3>Firda Karlinda</h3>
//           </div>
//           <div class="border border-primay col">
//             <div class="row">
//               <div class="col">Home</div>
//               <div class="col">About</div>
//               <div class="col">Contact</div>
//             </div>
//           </div>
//         </div>
//           </div>
//             <div class="border border-primay" style="height:700px">
//             <div class="row">
//               <div class="col border border-primary">
//                 <img src="assets/pp.jpg" alt="login" style="width:900px">
//               </div>
//               <div class="col border border-primary">
//                 <div class="d-plex plex-column">
//                   <div class="border border-primary">Login</div>
//                   <div class="border border-primary">
//                     <img src="assets/email.png" alt="email" style="width:50px">
//                   Email</div>
//                   <div class="border border-primary">
//                   <img src="assets/pass.png" alt="pass" style="width:50px">  
//                   Password</div>
//                   <div class="border border-primary">remember me , forget pass</div>
//                   <div class="border border-primary">button login</div>
//                   <div class="border border-primary">or sign up</div>
//                   <div class="border border-primary">
//                     <img src="assets/facebook.png" alt="facebook" style="width:50px">
//                      <img src="assets/tweeter.png" alt="tweeter" style="width:50px">
//                       <img src="assets/google.png" alt="google" style="width:50px">
//                   </div>
//                 </div>
//               </div>
//             </div>
//           </div>
//             <div class="bg-light border border-primay" style="height: 80px">
//             <div class="row">
//               <div class="col">
//                  <img src="assets/google.png" alt="google" style="width:70px">
//               </div>
//               <div class="col">
//                  <img src="assets/facebook.png" alt="facebook" style="width:70px">
//               </div>
//               <div class="col">
//                  <img src="assets/tweeter.png" alt="tweeter" style="width:70px">
//               </div>
//             </div>
//           </div>
//             <div class="bg-secondary border border-primay" style="height:35px">
//             <div class="row">
//               <div class="col">@Copy Right by 20552011193_Firda Karlinda_TIF K 20_UASWEB1</div>
//             </div>
//           </div>
//         </div>
//     </div>
//   <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
//   </body>
// </html> -->