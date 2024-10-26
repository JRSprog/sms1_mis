<?php
include 'admin/connect.php';

if(isset($_POST['submit']))
    {

        $stid=$_POST['stid'];
        $pass=$_POST['pass'];
        $sql="select * from stlogin where admin='$stid' and password='$pass'";
        $result=mysqli_query($con,$sql);
        

           if(mysqli_num_rows($result) == 1){
	          header("Location:admin/dashboard.php");
           }

           else {
	             echo ("<SCRIPT LANGUAGE='JavaScript'>
                   window.alert('Invalid Email or Password')
                  window.location.href='javascript:history.go(-1)';
                  </SCRIPT>");
               }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogs.css">
    <link rel="shortcut icon" href="admin/blogo.png" type="x-icon">
    <title>login</title>
</head>
<body>
    <div class="wave-border">
        <h1>School Management System</h1>
        <img src="bcpko.jpg" alt="">
        <h1 style="margin-left: 50px;">Bestlink College of the Philippines</h1>
    </div>
    <div class="container1">
        <form method="post"><br>
            <img src="student/blogo.png" alt="">
            <h2>LOGIN</h2>
            <input type="text" name="stid" placeholder="ENTER YOUR USERNAME" style=" margin: 10px;
    padding: 15px;
    width: 350px;
    border-radius: 25px;" required><br><br>
            <input type="password" name="pass" onclick="togglePassword()" style=" margin: 10px;
    padding: 15px;
    width: 350px;
    border-radius: 25px;" Show Password placeholder="ENTER YOUR PASSWORD" required><br>
           <button name="submit">Sign In</button>
        </form>
    </div>
    <script>
    function togglePassword() {
        var passwordInput = document.getElementById("password");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
    </script>
</body>
</html>