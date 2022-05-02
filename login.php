<?php
include("config1.php");

$eId = $password = '';
if(isset($_POST['submit']))
{
     $eId=$_POST['email'];
     $uId=$_POST['username'];
     $password=$_POST['password'];

    {
        $sql="select * from registration_info where uId='$uId' or eId = '$eId' and password='$password'";
        //$stmt=$conn->prepare("select * from registration_info where email = ?");

        $result=$conn->query($sql);
        if($row=$result->fetch_assoc())
        {
            header('Location:./mainpageview.php');
        }
        else
        {
           /*  alert('Invalid Credentiails');  */
            header('location:./login.php?status=false');
        }
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page!</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<style>
        body{
            background-image: url(images/page13.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;

        }
    </style>

<body>
    <div class="container vh-100">
        <div class="row justify-content-center h-100">
            <div class="card w-25 my-auto shadow ">
                <div class="card-header bg-primary text-white" style="text-align: center; font-size: 40px;">
                Login page
            </div>
            <div class="card-body">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="email">Email :</label><br>
                        <input type="email" class="form-control"  id="email" name="email" required>
                         <label for="password">Password:</label><br>
                        <input type="password" class="form-control"  id="password" name="password" required>
                    </div>
                  
                    <input type="submit" class="btn btn-primary w-100" style="margin-top: 20px;"  value="submit" name="submit">
                    <a href="registration.php" style="padding-top: 20px; text-align: center;">Don't have an Account?</a>
                </form>
                </div>
            </div>
        </div>
     
    </div>
     
    <!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
</body>

</html>
