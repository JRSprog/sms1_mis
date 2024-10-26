<?php
include 'connect.php';
session_start();

$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * FROM `stinfo` where id = '$id'";
	$result = mysqli_query($con, $sql);
	$employee = mysqli_fetch_array($result);
	$empName = ($employee['stname']);

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
    <link rel="shortcut icon" href="blogo.png" type="x-icon">
    <title>profile</title>
</head>
<body>
    <div id="mySidebar" class="sidebar">
      <img src="blogo.png" style="width: 40%; margin-left: 25%; background-color: rgba(0,0,0,0);"><br><br>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="background: none; text-align: right; font-size: 30px;color: white; font-weight: bold;">x</a>
        <br>
        
        <p style="font-size: 13px; margin-left: 15px; color: blue; font-weight: bold; background-color: rgba(0,0,0,0);">STUDENT DASHBOARD</p>
          <p style="font-size: 12px; margin-left: 15px; color: grey; margin-top: -7px; font-weight: bold; background-color: rgba(0,0,0,0);">SMS Account Fundamentals</p>
          
          <a href="dashboard.php?id=<?php echo $id?>" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Dashboard</a>
          <a href="stprofile.php?id=<?php echo $id?>" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;&nbsp;SMS Profile </a><br>
           
          <p style="font-size: 13px; margin-left: 15px; color: blue; font-weight: bold; background-color: rgba(0,0,0,0);">WALLET AND PAYMENTS</p>
          <p style="font-size: 12px; margin-left: 15px; color: grey; margin-top: -7px; font-weight: bold;  background-color: rgba(0,0,0,0);">Billing and Wallet</p>
          <a href="accstate.php?id=<?php echo $id?>" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;&nbsp;Account Statement</a>
          <a href="fees.php?id=<?php echo $id?>" style="font-size: 15px; color: whitesmoke; margin-left: 5px;"><i class="fa fa-pie-chart" aria-hidden="true"></i>&nbsp;&nbsp;Outgoing Fees Report</a><br>

          <br><br><br><br>
          <a href="logout.php" style="font-size: 15px; color: whitesmoke; margin-left: 5px;">Logout</a>
    </div>
<div id="main">
  <button href="javascript:void(0)" class="openbtn" onclick="openNav()" style="position: sticky; top: 0;">☰</button> 
     <div type="container" style="margin-top: 3px; background-color: white; width: 1515px; font-size: 35px; padding: 7px; margin-left: -23px;
      box-shadow: 0 4px 8px 0 #0000001a; border: none; font-weight: bold;"><p style="font-size: 13px; color: blue; margin-top: 4px;">
      &nbsp;Dashboard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SMS Profile</p>
    <p style="font-size: 35px; margin-top: 5px; margin-left: 15px;">SMS Profile</p>
    </div>

    <div style="width:700px; background: white; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 60px; margin-left: 200px;"><br><br>
        <h1 style="text-align: center;">Student Profile</h1><br>
        <form id="studentProfileForm">
            <div style="width: 200px; border:none; border-bottom: 2px solid #ccc; margin-bottom: 20px; margin-left: 90px;">
            <label style="font-size: 20px;">Name :</label>
            <p style="margin-bottom: -.1px; margin-left: 5px; font-size: 18px;">jeffrey romero salabao</p>
            </div>

            <div style="width: 200px; border:none; border-bottom: 2px solid #ccc; margin-bottom: 5px; margin-left: 370px;
            margin-top: -84px;">
            <label style="font-size: 20px;">Address :</label>
            <p style="margin-bottom: -.1px; font-size: 18px; margin-left: 5px;">valenzuela city</p>
            </div><br>

            <div style="width: 200px; border:none; border-bottom: 2px solid #ccc; margin-bottom: 5px; margin-left: 90px;">
            <label style="font-size: 20px;">Phone nom. :</label>
            <p style="margin-bottom: -.1px; font-size: 18px; margin-left: 5px;">09304312347</p>
            </div>

            <div style="width: 200px; border:none; border-bottom: 2px solid #ccc; margin-bottom: 5px; margin-left: 370px;
            margin-top: -70px; ">
            <label style="font-size: 20px;">Gender :</label>
            <p style="margin-bottom: -.1px; font-size: 18px; margin-left: 5px;">male</p>
            </div><br>

            <div style="width: 200px; border:none; border-bottom: 2px solid #ccc; margin-bottom: 5px; margin-left: 90px;">
            <label style="font-size: 20px;">Email :</label>
            <p style="margin-bottom: -.1px; font-size: 18px; margin-left: 5px;">fdfdd</p>
            </div>

            <div style="width: 200px; border:none; border-bottom: 2px solid #ccc; margin-bottom: 5px; margin-left: 370px;
            margin-top: -68px; ">
            <label style="font-size: 20px;">Brthday :</label>
            <p style="margin-bottom: -.1px; font-size: 18px; margin-left: 5px;">05/20/2002</p>
            </div><br>

            <div style="width: 200px; border:none; border-bottom: 2px solid #ccc; margin-bottom: 5px; margin-left: 90px;">
            <label style="font-size: 20px;">Course :</label>
            <p style="margin-bottom: -.1px; font-size: 18px; margin-left: 5px;">BIST</p>
            </div>
             
            <div style="width: 200px; border:none; border-bottom: 2px solid #ccc; margin-bottom: 5px; margin-left: 370px;
            margin-top: -69px; ">
            <label style="font-size: 20px;">Year Level :</label>
            <p style="margin-bottom: -.1px; font-size: 18px; margin-left: 5px;">4th year</p>
            </div><br>
            </div><br><br>
        </form>
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