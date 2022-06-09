 <?php
include 'includes/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  	.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}

.custom {
	background-color: #fd8200;
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.custom {
height: 100%;
}
}
.img
{
  background-image: url('assets/images/where.jpg');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.login{
  padding: 15px 100px !important;
  margin: 0px 20px;
  font-variant: small-caps; 
  font-size: 25px !important; 
}
.create{
  padding: 15px 100px !important;
  margin: 0px 20px;
  font-variant: small-caps; 
  font-size: 25px !important;  
}
  </style>

</head>
<body>
<?php
  include 'includes/header.php';
?>
<section class="vh-100">
  <div class="container-fluid custom">
    <div class="row img d-flex justify-content-center align-items-center h-100">
     <a href="sign_in.php" class="login btn btn-danger btn-lg text-light  ">Login Account</a>
     <a href="sign_up.php" class="create btn btn-danger btn-lg text-light ">Create Account</a>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-secondary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2022. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#" class="text-white me-4 mx-2">
        <i class="fa fa-facebook-f"></i>
      </a>
      <a href="#" class="text-white me-4 mx-2">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="#" class="text-white me-4 mx-2">
        <i class="fa fa-google"></i>
      </a>
      <a href="#" class="text-white">
        <i class="fa fa-linkedin-in"></i>
      </a>
    </div>
  </div>
</section>


</body>
</html>