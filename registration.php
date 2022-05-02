<?php
include("config1.php");
    $name=$last=$person_gender=$bDate=$mobNo=$eId=$uId=$password=$confirmpassword='';
    if(isset($_POST['submit']))
    {
        $name= $_POST['fname'];
        $last= $_POST['lname'];
        $person_gender= $_POST['gender'];
        $bDate=$_POST['birthdate'];
        $mobNo=$_POST['mobileno'];
        $eId=$_POST['email'];
        $uId=$_POST['username'];
        $password=$_POST['password'];
        $confirmpassword=$_POST['confirmpassword'];

        $result=mysqli_query($conn,"INSERT into registration_info (name,last,person_gender,bDate,mobNo,eId,uId,password,confirmpassword)values('$name','$last','$person_gender','$bDate','$mobNo','$eId','$uId','$password','$confirmpassword')");
		
			if($result)
			{
				echo "sucess";
				header('Location:./login.php');
			}
			else{
				echo "failed";
			} 
        }
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>registration | movie recommandation</title>
	<link rel="stylesheet" type="text/css" href="css/registration.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

	<style>
		body{
			background-image: url(images/background.jpeg);
			background-size: cover;
	      background-repeat: no-repeat;
	       height: 100%;

		}
		.button {
			width: 20vh;
			height: 38px;
			background-color: rgb(233, 85, 183);
			border: 1px solid gray;
			border-radius: 8px;
			font-size: 20px;
			font-weight: bold;
			}
			.button:hover {
			background-color: rgb(231, 68, 177);
			}
		
	</style>

</head>
<body>
 <h1 style="text-align: center;font-family: 'Averia Serif Libre', cursive;font-size: 40px;color: gray;">Registration Form</h1>		
	<div class="log" >
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
		
		<div class="myInfo">
			<label>First Name:</label>
			<input type="text" name="fname" id="fname" autocomplete="off"required><br>
			<label>Last Name:</label>
			<input type="text" name="lname" id="lname"autocomplete="off"required><br>
			
			<div class="genderAlign">
				<label>Gender:</label>
				<input type="radio" name="gender" id="gender" value="Male"required>
				<label>Male</label>
				<input type="radio" name="gender" id="gender" value="Female"required>
				<label>Female</label><br>
			</div>
		     <label for="birthdate">Birth-date:</label>
			<input type="date" name="birthdate" id="birthdate"required><br>
			<label>Mobile Number:</label>
			<input type="text" name="mobileno" id="mobileno"autocomplete="off"required><br>
			<label>Email ID:</label>
			<input type="text" name="email" id="email"autocomplete="off"required><br>
			<label>Username:</label>
			<input type="text" name="username" id="username" autocomplete="off"><span id="user" style="text-colour=red" required></span><br>
			<label>Password:</label>
			<input type="password" name="password" id="password"autocomplete="off"required><br>
			<label>Confirm Password:</label>
			<input type="password" name="confirmpassword" id="confirmpassword"autocomplete="off" required><br>
		</div>

		<div class="buttonRoot" style="text-align: center;padding-top : 20px;">
			<button class="button" 
			type="submit" name="submit">Submit</button>
			<!--<button class="buttonClear">Clear</button> -->
	    </div>	
	</form>
	
</body>
</html>
