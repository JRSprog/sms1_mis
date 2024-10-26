<?php
include 'connect.php';

$id = (isset($_GET['id']) ? $_GET['id'] : '');
$data = "SELECT * from stinfo where id='$id'";
$query = mysqli_query($con,$data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="blogo.png" type="x-icon">
    <title>fees</title>
</head>
<body>
    <!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div id="mySidebar" class="sidebar">
      <img src="blogo.png" style="width: 40%; margin-left: 25%; background-color: rgba(0,0,0,0);"><br><br>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="background: none; text-align: right; font-size: 30px;color: white; font-weight: bold;">x</a>
        <br>
        
        <p style="font-size: 13px; margin-left: 15px; color: blue; font-weight: bold; background-color: rgba(0,0,0,0);">WALLET AND PAYMENTS</p>
        <p style="font-size: 12px; margin-left: 15px; color: grey; margin-top: -7px; font-weight: bold; background-color: rgba(0,0,0,0);">Billing and Wallet</p>
        
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
  <button href="javascript:void(0)" class="openbtn" onclick="openNav()" style="position: sticky; top: 0; border-radius: 0;">☰</button> 
     <div type="container" style="margin-top: 3px; background-color: white; width: 1490px; font-size: 35px; padding: 15px; margin-left: -23px;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1); border: none; font-weight: bold;"><p style="font-size: 13px; color: blue; margin-top: -1px;">
      &nbsp;Dashboard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Outgoing Fees Report</p>
      <p style="font-size: 35px; margin-top: 5px; margin-left: 15px;">Outgoing Fees Report</p>
    </div>
    <div type="container-2" class="container-2" style="background-color: white;
    margin-left: 15px;
    margin-top: 70px;
    border-radius: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
    width: 600px; text-align: center;"><br>
    
    <form action="dtable.php?id=<?php echo $id?>" method="post">
    <label style="font-size: 25px; font-weight: bold;">Transaction History</label><br><br><br>
      <label for="year" style="font-size: 15px; font-weight: bold; margin-left: -20px;">Enter your Student id :</label>
      <input type="number" name="stid" placeholder="Please Enter here" style="width: 300px; margin-left:5px; padding: 10px; border: 0; border-bottom: 1px solid #ddd;"
      required>
  <br><br><br>
  <button id="myBtn" name="view" style="width: 250px; padding: 8px; margin-bottom: 15px; background-color: blue; font-size: 13px;
  font-weight: bold; color: white; border: none; border-radius: 7px;">View</button>
    </form>
    
    </div><br><br><br><br>
    <div style="
    width: min-content(1000px) 1200px;
    background-color: white;
    border-radius: 25px;
    box-shadow: 0 4p 8px 0 rgba(0, 0, 0, 0.3);
    margin-left: 15px;
    padding: 50px;
    ">
       <p style="font-size: 25px; font-weight: bold; text-align: center; margin-top: -15px;">Ongoing Fees Report</p>
       <style>
        table {
        width: 90%;
        border-collapse: collapse;
        margin: 20px 0;
        margin-left: 1%;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    @media (max-width: 600px) {
        table, thead, tbody, th, td, tr {
            display: block;
        }
        th {
            display: none;
        }
        tr {
            margin-bottom: 15px;
        }
        td {
            text-align: right;
            position: relative;
            padding-left: 50%;
        }
        td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            width: 50%;
            padding-left: 10px;
            text-align: left;
            font-weight: bold;
        }
    }
       </style>
       <table style="margin-left: 53px;">
        <thead>
          <tr>
              <th>Details</th>
              <th>Amount</th>
              <th>Dealine</th>
          </tr>
      </thead>
      <tbody>
        <?php 
        $add = "SELECT * FROM report";
        $sql = mysqli_query($con,$add);
        while($row = mysqli_fetch_assoc($sql)) {
              echo "<tr>";
              echo "<td>".$row['detail']."</td>";
              echo "<td>".$row['amount']."</td>";
              echo "<td>".$row['date']."</td>";
              }
        ?>
      </tr>
      </tbody>
       </table>

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
