<?php
include 'connect.php';

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
    <link rel="shortcut icon" href="blogo.png" type="x-icon">
    <title>Dasboard</title>
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
     <div type="container" style="margin-top: 3px; background-color: white; width: 1490px; font-size: 35px; padding: 10px; margin-left: -23px;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1); border: none; font-weight: bold;"><p style="font-size: 15px; color: blue; margin-top: 25px;">&nbsp;Dashboard</p>Announcements<br><br></bdir></div>
      
      <div class="container-1" style="padding: auto;
      width: auto;
      background-color: white;
      border-radius: 25px;
      box-shadow: 0 4px 8px rgba(0.3,0.3,0.3,0.4);
      margin-left: 15px; border-top: rgba(0,0,0,0.1); align-items: center; margin-top: 100px;"
      >
      <p style="font-size: 18px; font-weight: bold; margin-left: 35px; margin-top: 25px;"><br>Announcements</p>
      <table>
        
        <?php  
               $select = mysqli_query($con, "select * from ann ");
                   while($row = mysqli_fetch_assoc($select)) {
                  echo "<tr>";
                  ?>
                 <td><img src="Images/<?php echo $row['img']?>" alt="" style="width: 40%; margin-top: 20px; border-radius: 10px;">
                 <?php
                     echo "<h3>Date :&nbsp".$row['date']."</h3>";
                     echo '<h4>Time :&nbsp'.$row['time']."</h4>";
                echo "</tr>";
                 }?>
        </table><br>
          <style>
              table {
              width: 90%;
              border-collapse: collapse;
              margin: 20px 0;
              align-items: center;
              justify-content: center;
              margin-left: 50px;
              }
              td {
              
              padding: auto;
              text-align: center;
              border-bottom: 1px solid #ddd;
              }
              h3 {
                  font-size: 14px;
                  color: #aaa;
                  margin-top: 10px;
                  margin-left: -80px;
  
              }
              h4 {
                  font-size: 14px;
                  color: #aaa;
                  margin-top: -32px;
                  margin-left: 170px;
  
              }
          </style>

      </div>
      <br><br><br><br><br>
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