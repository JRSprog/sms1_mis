<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $stnom = $_POST['username'];
        $password = $_POST['password'];

        $insert = mysqli_query($con, "insert into stlogin (admin,password) values ('$stnom','$password')");
}   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="shortcut icon" href="blogo.png" type="x-icon">
    <title>profile</title>
</head>
<body>
    <!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div id="mySidebar" class="sidebar">
      <img src="blogo.png" style="width: 40%; margin-left: 25%; background-color: rgba(0,0,0,0);"><br><br>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="background: none; text-align: right; font-size: 30px;color: white; font-weight:bold;">x</a>
        <br>
        <p style="font-size: 13px; margin-left: 15px; color: blue; font-weight: bold; background-color: rgba(0,0,0,0);">DASHBOARD</p>
        <p style="font-size: 12px; margin-left: 15px; color: grey; margin-top: -7px; font-weight: bold;  background-color: rgba(0,0,0,0);">SMS Account fundamentals</p>
        <a href="dashboard.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Dashboard</a>
        <a href="addprofile.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;&nbsp;Add User Profile</a><br>
         
        <p style="font-size: 13px; margin-left: 15px; color: blue; font-weight: bold; background-color: rgba(0,0,0,0);">WALLET AND PAYMENTS</p>
        <p style="font-size: 12px; margin-left: 15px; color: grey; margin-top: -7px; font-weight: bold;  background-color: rgba(0,0,0,0);">Billing and Wallet</p>
        <a href="adaccstate.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;&nbsp;Students Account Statement</a>
          <a href="adfees.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><i class="fa fa-pie-chart" aria-hidden="true"></i>&nbsp;&nbsp;Outgoing Fees Report</a>
          <a href="adledger.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp;Student Ledger</a>
          <a href="studentinfo.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><i class="fa fa-file-text-o"></i>&nbsp;&nbsp;Students information</a>
          
          <br><br><br><br>
          <a href="logout.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;">Logout</a>
    </div>
<div id="main">
  <button href="javascript:void(0)" class="openbtn" onclick="openNav()" style="border-radius: 0; position: sticky; top: 0; width: 1580px">☰</button> 
     <div type="container" style="margin-top: 3px; background-color: white; width: 1550px; font-size: 35px; padding: 15px; margin-left: -23px;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1); border: none; font-weight: bold;"><p style="font-size: 13px; color: blue; margin-top: -1px;">
      &nbsp;Dashboard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add User Profile</p>
      <p style="font-size: 35px; margin-top: 5px; margin-left: 15px;">Add User Profile</p>
    </div><br><br>

    <div class="login-container">
    <h2>Add user</h2>
    <form action="#" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Login">
    </form>
</div>
<style>
  .login-container {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            width: 400px;
            margin-left: 200px;
            height: 50vh;
        }
        h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
</style>
    <br><br><br><br>

    
</div>
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "280px";
  document.getElementById("main").style.marginLeft = "280px";
}
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 

</body>
</html>