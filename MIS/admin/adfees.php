<?php
     include 'connect.php';

     if(isset($_POST['submit'])) {
        $detail = $_POST['detail'];
        $amount = $_POST['amount'];
        $date = $_POST['date'];
        $description = $_POST['description'];

        $insert = mysqli_query($con, "insert into report (detail,amount,date,description) values ('$detail','$amount','$date','$description')");

        if(!$insert) {
            echo "mali ka!!";
        }
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
  <button href="javascript:void(0)" class="openbtn" onclick="openNav()" style="border-radius: 0; position: sticky; top: 0;">☰</button> 
     <div type="container" style="margin-top: 3px; background-color: white; width: 1500px; font-size: 35px; padding: 15px; margin-left: -23px;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1); border: none; font-weight: bold;"><p style="font-size: 13px; color: blue; margin-top: -1px;">
      &nbsp;Dashboard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Outgoing Fees Report</p>
      <p style="font-size: 35px; margin-top: 5px; margin-left: 15px;">Outgoing Fees Report</p>
    </div>
    <br><br><br><br>
    <div style="
    width: auto;
    background-color: white;
    border-radius: 25px;
    box-shadow: 0 4p 8px 0 rgba(0, 0, 0, 0.3);
    margin-left: 35px;
    padding: auto;
    ">
       <button id="myBtn" style="font-size: 20px; padding: 13px; 
       border-radius: 25px; color: white; width: 50px; background-color: mediumblue;
       border:none; margin-top: 20px; margin-left: 15px;">+</button>

<div id="myModal" class="modal">    
    <div class="modal-content">
        <span class="close">&times;</span>
        <form action="adfees.php" method="POST" enctype="multipart/form-data" >
            <input type="text" id="" name="detail" placeholder="enter the detail"><br><br>
            <input type="text" id="" name="description" placeholder="enter the description"><br><br>
            <input type="text" id="" name="amount" placeholder="enter the amount"><br><br>
            <input type="date" id="" name="date" placeholder="enter the deadline"><br><br>
            <button name="submit">Add</button>
        </form>
    </div>
</div>
<script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


       <p style="font-size: 25px; font-weight: bold; text-align: center; margin-top: -15px;">Ongoing Payment Report</p>
       <style>
        table {
        width: 90%;
        border-collapse: collapse;
        margin: 20px 0;
        margin-left: 53px;
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
       <table>
        <thead>
          <tr>
              <th>Details</th>
              <th>Description</th>
              <th>Amount</th>
              <th>Deadline</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
        <?php
        $add = "SELECT * FROM report";
        $sql = mysqli_query($con,$add);
        while($row = mysqli_fetch_assoc($sql)) {
              echo "<tr>";
              echo "<td>".$row['detail']."</td>";
              echo "<td>".$row['description']."</td>";
              echo "<td>".$row['amount']."</td>";
              echo "<td>".$row['date']."</td>";
              echo '<td><a href="updatetb.php?id='.$row['id'].'"><button id="myBtn" style="width: 100px; border: none; border-radius: 10px; color: white;
              background-color: skyline; margin-left: 15px; margin-top: -3px;">Edit</button></a>
               
              <a href="feesdelete.php?id='.$row['id'].'" role="button"><button id="myBtn" style="width: 100px; border: none; border-radius: 10px; color: white;
              background-color: crimson; margin-left: 15px; margin-top: -3px;">Delete</button></a></td>';
        }    
        ?>
      </tr>
      </tbody>
       </table><br>
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

</body>
</html>