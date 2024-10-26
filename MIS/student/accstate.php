<?php
include 'connect.php';
session_start();

$id = (isset($_GET['id']) ? $_GET['id'] : '');
$sql = "SELECT * from `stinfo` WHERE id=$id";
$result = mysqli_query($con, $sql);
if($result) {
  while($res = mysqli_fetch_assoc($result)) {

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
    <title>account statement</title>
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
      &nbsp;Dashboard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Account Statement</p>
    <p style="font-size: 35px; margin-top: 5px; margin-left: 15px;">Account Statement</p>
    </div>
    
    <div style="
    width: 350px;
    background-color: white;
    border-radius: 25px;
    box-shadow: 0 4p 8px 1 rgba(0, 0, 0, 5);
    margin-left: 15px;
    margin-top: 50px;
    padding: 25px;
    ">
        <p style="font-size: 18px; text-align: center; font-weight: bold; margin-top: -5px;">Current Balance Semester</p>
        <p style="color: gray; margin-left: 5px; font-size: 13px; margin-top: 30px;">Current Balance</p>
        <p style="font-size: 25px; font-weight: bold; margin-top: -10px; margin-left: 7px;">₱</p>
        <p style="font-size: 25px; font-weight: bold; margin-top: -52px; margin-left: 28px;"><?php echo $res['cbalance'];}}?></p>
      
        
</div>
   
<div style="
width: min-content(1000px) 1360px;
background-color: white;
border-radius: 25px;
box-shadow: 0 4p 8px 1 rgba(0, 0, 0, 5);
margin-left: 15px;
margin-top: 10px;
padding: 25px;">
        <p style="font-family: Arial Rounded MT Bold; font-size: 18px; font-weight: bold;">HMA Transaction Reminder</p>
        <p style="font-family: Elephant, sans-serif; font-size: 12px; font-weight: bold; margin-top: 30px;">FRIENDLY REMINDER:</p>
        <p style="font-size: 14px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">1. Please verify your student ID number to ensure a seamless process and avoid any potential inconveniences.
            <br>2. Ensure accurate completion of the "Payment For" field for proper payment allocation.
           <br> 3. Regardless of the name associated with the transaction, the Student ID number serves as the primary reference. Incorrect ID numbers may lead to payment allocation discrepancies.
           <br> 4. In the event that your transaction is not reflected within three (2) working days, kindly promptly visit the Management Information Systems (MIS) office at BCP Main campus. Your prompt attention to this matter is appreciated</p>
</div>
<br><br><br><br><br>
<footer>&nbsp;&nbsp;eLearning Commons © 2024</footer>
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