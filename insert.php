
<?php 
include ("includes/connection.php");
include ("includes/header.php");

if(isset($_POST['submit']))
{
	if (!empty($_POST['email']) && !empty($_POST['password']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password = md5('password');
		$sql = $conn->prepare("INSERT INTO login_data(email,password) VALUES('$email','$password')");
	
		$run = $sql->execute() or die(mysqli_error());

		if ($run)
		{
			# echo "Form Submitted Successfully";
		}
		else
		{
			echo "Form not submitted";
		}
	}
else
{
	echo "All fields required";
}

}


if(isset($_POST['create']))
{
	if (!empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['Password']) && !empty($_POST['CPassword']))
	{
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$password = $_POST['Password'];
		$cpassword = $_POST['CPassword'];
		$sql2 = $conn->prepare("INSERT INTO sign_in(email,password,cpassword) VALUES('$email','$password','$cpassword')");
		$sql1 = $conn->prepare("INSERT INTO sign_up(Name,Email,Password,CPassword) VALUES('$name','$email','$password','$cpassword')");
			
		$run2 = $sql1->execute() && $sql2->execute() or die(mysqli_error());

		if ($run2 and ($password == $cpassword))
		{		
			$_SESSION['is_login'] = "Successfully Created";
			$_SESSION['message'] = "Login Now";
			$_SESSION['status'] = "success";
			
		  //   echo '<div class="alert alert-success  w-25 text-center mx-auto p-5 mt-5" role="alert">
			 // 	 <h4 class="alert-heading">Well done!</h4>
			 // 	 <p>You have successfully created Account....!!</p>
			 //  	<hr>
			 //  	<a href="sign_in.php" class="btn btn-success"> Login Now</a>
				// </div>';
		}
		else
		{
			$_SESSION['is_login'] = "Account not created";
			$_SESSION['message'] = "Check Your data";
			$_SESSION['status'] = "warning";
			#echo "Form not submitted";

		}
	}
else
{
	echo "All fields required";
}

}

 ?>
 
 	<?php

    if (isset($_POST['submit'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      
      $query =$conn->prepare("SELECT * FROM sign_in WHERE email='$email' AND password = '$password'");
      $query->execute();
      $result = $query->fetchALL();
 	 if ($result)
      {
       if (count($result) == 1 )
       {
       		session_start();
       		$_SESSION['is_login'] = "Data is correct";
       		$_SESSION['email'] = $email;
       		$_SESSION['message'] = "Successfully Login";
       		$_SESSION['status'] = "success";
       		$_SESSION['password'] = $password; 

// echo '<div class="alert alert-success w-25 text-center mx-auto p-5 mt-5" role="alert">
//   <h4 class="alert-heading">Well done!</h4>
//   <p>Your details are correct ....!!</p>
//   <hr>
//   <h4>Go to <a href="logged.php" class="btn btn-success"> Dashboard</a></h4>
  
// </div>';
}
else
{
	$_SESSION['is_login'] = "Data is Not correct";
	$_SESSION['message'] = "Check Your data";
	$_SESSION['status'] = "warning";
// echo '<div class="alert alert-danger w-25 text-center mx-auto p-5 mt-5" role="alert">
//   <h4 class="alert-heading">Oops....!</h4>
//   <p>You have enterted wrong email and password</p>
//   <hr>
//   <a href="sign_in.php" class="btn btn-danger">Login Again</a>
//   <a href="sign_up.php" class="btn btn-danger">Create Account</a>
// </div>';	
}
}
}
?>
 </body>
 </html>
 <?php 
 	include ("includes/script.php");
  ?>