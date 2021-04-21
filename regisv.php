<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Simon Ahsan">
	<meta http-equiv="A-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Volunteer Registration</title>
	<php>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Asap');
		*{
			margin: 0;
			padding: 0;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			font-family: 'Asap', sans-serif; 
		}
		body{
			background: #00838f;
		}
		.main{
			width: 500px;
			height: 500px;
			background: #eceff1;
			margin: 100px auto;
			position: 70px;
			border-radius: 5px;
			box-shadow: 1px 1px 1px #555;
		}
	
		.new{
			baseline-shift: 5px;
			border-radius: 5px;
			padding: 0;
			margin: 0;
			
		}
		header{
			text-align: center;
		}
		img{
			width: 100px;
			height: 100px;
		}
		.company{
			font-size: 40px;
			font-family: 'Asap', sans-serif;
			font-weight: bold;
			color: #009688;
		}
		.heading{
			font-weight: bold;
			color: #777;
		}
		#form-box{
			padding: 20px;
			height: 100px;
		}
	</style>

</head>
<body>
	
	<?php
	include 'dbcon.php';
	  if(isset($_POST['submit'])){
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$email =  mysqli_real_escape_string($con, $_POST['email']);
		$mobile =  mysqli_real_escape_string($con, $_POST['mobile']);
		$division =  mysqli_real_escape_string($con, $_POST['division']);
		$postcode =  mysqli_real_escape_string($con, $_POST['postcode']);
		$password =  mysqli_real_escape_string($con, $_POST['password']);
		$cpassword =  mysqli_real_escape_string($con, $_POST['cpassword']);

		$pass = password_hash($password, PASSWORD_BCRYPT);
		$cpass = password_hash($cpassword, PASSWORD_BCRYPT);
		$emailquery = " select * from registration where email = '$email'";
		$query = mysqli_query($con, $emailquery);
		$emailcount = mysqli_num_rows($query);

		if($emailcount>0){
			?>
	            <script >
		          alert("Email already exist");
	            </script>
	        <?php  
		}else{
			if($password === $cpassword){

				$insertquery = "insert into volunteer(username, email, mobile, division, postcode, password, cpassword) values('$username', '$email', '$mobile', '$division', '$postcode', '$pass', '$cpass')";
				$iquery = mysqli_query($con, $insertquery);
				  if ($iquery) {
	               ?>
	               <script >
		             alert("Inserted Successfully");
	               </script>
	               <?php  
                  }else{
	              ?>
	              <script >
		          alert("Not Inserted");
	              </script>

	              <?php
                  }

			      }else{
				  ?>
				  <script >
		          alert("Password are not matching");
	              </script>

	             <?php
			}
		}
	}
	?>

	<div class="main">
		<header>
			<div class="image"><img src="img/animal3.jpg"></div>
			<div class="company">ProtectPets</div>
			<div class="heading">Participate with our community</div>
		</header>
		<div class="new">
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" id="form-box">

			
			<div class="input">
				<input type="text" name="username" placeholder="Username" class="inp" required>
			</div>

			<div class="input">
				<input type="email" name="email" placeholder="E-mail" class="inp" required>
			</div>
			
			<div class="input">
				<input type="text" name="mobile" placeholder="Phone" class="inp" required>
			</div>
			
			<div class="input">
				<input type="text" name="division" placeholder="Division" class="inp" required>
			</div>
		   
			</div>
			<div class="input">
				<input type="number" name="postcode" placeholder="Post Code" class="inp" required>
			</div>
			
			<div class="input">
				<input type="password" name="password" placeholder="Password" class="inp" required>
			</div>
			
			<div class="input">
				<input type="password" name="cpassword" placeholder="Re-type Password" class="inp" required>
			</div>

			<input type="submit" name="submit" value="Register Now" class="sub-btn">
		</form><br><br>
		<div class="footer">
			<p>Already have an account?&nbsp;<a href="login.php">Login</a></p>
		</div>
	    </div>
	</div>


	<?php include 'footer.php'; ?>
	
</body>
</html>