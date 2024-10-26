<?php
  include 'connect.php';
  session_start();
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
    <title>accountstatment</title>
</head>
<body>
    <!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="blogo.png" type="x-icon">
</head>
<body>
    <div id="mySidebar" class="sidebar">
      <img src="blogo.png" style="width: 40%; margin-left: 25%; background-color: rgba(0,0,0,0);"><br><br>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="background: none; text-align: right; font-size: 30px;color: white; font-weight: bold;">x</a>
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
     <div type="container" style="margin-top: 3px; background-color: white; width: 1515px; font-size: 35px; padding: 7px; margin-left: -23px;
      box-shadow: 0 4px 8px 0 #0000001a; border: none; font-weight: bold;"><p style="font-size: 13px; color: blue; margin-top: 4px;">
      &nbsp;Dashboard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Students Account Statement</p>
    <p style="font-size: 35px; margin-top: 5px; margin-left: 15px;">Students Account Statement</p>
    </div>
    
    <div style="
    width: auto;
    background-color: white;
    border-radius: 25px;
    box-shadow: 0 4p 8px 1 rgba(0, 0, 0, 5);
    margin-left: 15px;
    margin-top: 50px;
    padding: auto;
    "><br><br>
          
          <?php
          include 'connect.php';
             if (isset($_POST['search'])) {
                $searchTerm = $con->real_escape_string($_POST['search']);
                $sql = "SELECT * FROM stbalance WHERE stid LIKE '%$searchTerm%'";
                $result = $con->query($sql);
            }
          ?>

          <form action="" method="post">
          <button type="submit" style="padding: 12px; width: 80px; margin-left: 55px; border-radius: 5px; position:relative;">Search</button>
          <input type="text" name="search" placeholder=" search...." style="padding: 11px; width: 350px; margin-left:-13px;
          margin-bottom: 20px; border-radius:5px; border: 1px solid #aaa;">
          </form>

           <table>
              <?php if (isset($result)): ?>
                    <h2 style="margin-left: 20px; font-size: 15px;">Results :</h2>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <?php echo "<thead>";
                                    echo "<tr>";
                                      echo "<th>Student ID</th>";
                                      echo "<th>Student name</th>";
                                      echo "<th>Balance</th>";
                                      echo "<th>Current Balance</th>";
                                      echo "<th>Date Updated</th>";
                                      echo "<th>Action</th>";
                                    echo "</tr>";
                                  echo "</thead>";
                                  echo "<tbody>";
                                    echo "<tr>";
                                      echo "<td>".$row['stid']."</td>";
                                      echo "<td>".$row['stname']."</td>";
                                      echo "<td>".$row['balance']."</td>";
                                      echo "<td>".$row['cbalance']."</td>";
                                      echo "<td>".$row['udate']."</td>";
                                      echo '<td><a href="upbalance.php?id='.$row['id'].'"><button id="myBtn" style="width: 100px; border: none; border-radius: 10px; color: white;
              background-color: skyline; margin-left: 15px; margin-top: -3px;">Edit</button></a>';
                                    echo "</tr>";
                                  echo "</tbody>";
                            ?>
                        <?php endwhile; ?>
                <?php endif; ?>
                </table><br><br><br>

          <table style="margin-top: -40px;">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Student name</th>
                    <th>Course</th>
                    <th>Year Level</th>
                    <th>Balanace</th>
                    <th>Current Balance</th>
                    <th>Date Updated</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
        $add = "SELECT * FROM stinfo";
        $sql = mysqli_query($con,$add);
        while($row = mysqli_fetch_assoc($sql)) {
            echo "<tr>";
              echo "<td>".$row['stid']."</td>";
              echo "<td>".$row['stname']."</td>";
              echo "<td>".$row['course']."</td>";
              echo "<td>".$row['level']."</td>";
              echo "<td>".$row['balance']."</td>";
              echo "<td>".$row['cbalance']."</td>";
              echo "<td>".$row['dates']."</td>";
              echo '<td><a href="upbalance.php?id='.$row['id'].'"><button id="myBtn" style="width: 100px; border: none; border-radius: 10px; color: white;
              background-color: skyline; margin-left: 15px; margin-top: -3px;">Edit</button></a>';
        }    
        ?>
        <script>
        
        document.querySelector('form').addEventListener('submit', function() {
    alert('Searching...');
});
          </script>
           </tbody>
          </table><br><br>
          <style>
        table {
        width: 90%;
        border-collapse: collapse;
        margin: 20px 0;
        margin-left: 53px;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px 16px;
        text-align: left;
        position: sticky;
        top: 0;
    }
    th {
        background-color: #f2f2f2;
    }
    @media (max-width: 600px) {
        table, thead, tbody, th, td, tr {
            display: block;
        }
        th {
            position: sticky;
            top: 0;
        }
        tr {
            margin-bottom: 15px;
        }
        td {
            text-align: right;
            padding-left: 20%;
        }
        td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            width: 20%;
            padding-left: 10px;
            text-align: left;
            font-weight: bold;
        }
    }
    input {
      width: 60px;
      border: none;
      background: none;
    }
    .zoom-image {
    width: 50px; 
    cursor: pointer;
}

.overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
}

.overlay-image {
    max-width: 80%;
    max-height: 80%;
}

.close {
    position: absolute;
    top: 20px;
    right: 40px;
    color: white;
    font-size: 40px;
    cursor: pointer;
}
       </style>
 </div><br>
 
      <div style="
         width: min-content(1000px) 1390px;
background-color: white;
border-radius: 25px;
box-shadow: 0 4p 8px 1 rgba(0, 0, 0, 5);
margin-left: 15px;  
margin-top: 10px;
padding: 25px;">
          <h2 style="text-align: center;">AUB/HMA APPROVAL</h2><br>
          <?php
          include 'connect.php';

          if(isset($_POST['submit'])) {
            $stid = $_POST['stid'];
            $stname = $_POST['name'];
            $detail = $_POST['detail'];
            $paid = $_POST['paid'];
            $date = $_POST['date'];
            $type = $_POST['type'];

            $insert = mysqli_query($con, "insert into ledger (stid,stname,detail,amout,date,type) values ('$stid','$stname','$detail','$paid','$date','$type')");
          }
          ?>
      <form method="post">
      <table id="dataTable">
        <thead>
          <tr>
              <th>Student number</th>
              <th>Student name</th>
              <th>Image aub/hma</th>
              <th>OR nom.</th>
              <th>Details</th>
              <th>Amount paid</th>
              <th>Date</th>
              <th>type</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
        <tr>
           <td><input type="text" name="stid" value="st1001" style="border: none; font-size: 16px;"></td>
           <td><input type="text" name="name" value="jeffrey romero salabao" style="border: none; width: 159px; font-size: 16px;"></td>
           <td><img src="Images/r.jpg" alt="Item 1" class="zoom-image"/><br>click image</td>
           <td>HMBP241003002491125</td>
           <td><input type="text" name="detail" value="miscellenious" style="border: none; width: 100px; font-size: 16px;"></td>
           <td><input type="number" name="paid" value="1500" style="border: none; width: 50px; font-size: 16px;"></td>
           <td><input type="date" name="date" value="09/24/2024" style="border: none; width: auto; font-size: 16px;"></td>
           <td><input type="text" name="type" value="hma" style="border: none; width: 50px; font-size: 16px;"></td>
           <td><a href="">approved</a>, 
           <a href="">reject</a>,
           <button name="submit" style="background-color: rgba(0,0,0,0); width: auto; color: black; font-size: 15px;">submit</button></td>
        </tr>
      </tbody> 
       </table>
      </form>
       <div class="overlay" id="overlay">
        <span class="close" id="close">&times;</span>
        <img class="overlay-image" id="overlay-image" />
    </div>
     <script>
      const images = document.querySelectorAll('.zoom-image');
const overlay = document.getElementById('overlay');
const overlayImage = document.getElementById('overlay-image');
const closeButton = document.getElementById('close');

images.forEach(image => {
    image.addEventListener('click', () => {
        overlay.style.display = 'flex';
        overlayImage.src = image.src; // Set the overlay image source
    });
});

closeButton.addEventListener('click', () => {
    overlay.style.display = 'none';
});

     </script>

</div><br>

   
<div style="
width: min-content(1000px) 1390px;
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