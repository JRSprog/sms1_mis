<?php
 include ('connect.php');

    if(isset($_POST['submit'])) {
        $file = $_FILES['img']['name'];
        $date = $_POST['date'];
        $time = $_POST['time'];

        $temname = $_FILES['img']['tmp_name'];
        $folder = 'Images/'.$file;

        $insert = mysqli_query($con, "Insert into ann (img,date,time) values ('$file','$date','$time')");

        if(move_uploaded_file($temname,$folder)) {
        }
        else {
            echo "<h2>file have not uploaded</h2>";
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
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="shortcut icon" href="blogo.png" type="x-icon">
    <title>Dashboard</title>
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
        <p style="font-size: 13px; margin-left: 15px; color: blue; font-weight: bold; background-color: rgba(0,0,0,0);">STUDENT DASHBOARD</p>
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
<button href="javascript:void(0)" class="openbtn" onclick="openNav()" style="border-radius: 0%; position: sticky; top: 0;">☰</button>
     <div type="container" style="margin-top: 3px; background-color: white; width: 1500px; font-size: 35px; padding: 10px; margin-left: -23px;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1); border: none; font-weight: bold;"><p style="font-size: 15px; color: blue; margin-top: 25px;">&nbsp;Dashboard</p>Announcements<br><br></bdir></div>
      
      <div style="padding: auto; width:auto; border: 0; background-color: white; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      border-radius: 10px; margin-top: 100px;">

      <button id="myBtn" style="padding: 10px; width: 100px;
      border: none; border-radius: 25px; margin-left: 15px; 
      margin-top: 15px; ">+ New</button>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <form action="dashboard.php" method="POST" enctype="multipart/form-data" >
            <input type="file" id="" name="img"><br><br>
            <input type="date" id="date" name="date"><br><br>
            <input type="time" id="time" name="time"><br><br>
            <button name="submit">Add New Announcement</button>
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
      <p style="font-size: 18px; font-weight: bold; margin-left: 35px; margin-top: 8px; color: black;"><br>Announcements</p>
      <table>
        
      <?php
            $select = mysqli_query($con, "select * from ann");
            while($row = mysqli_fetch_assoc($select)) {
                echo "<tr>";
                ?>
               <td><img src="Images/<?php echo $row['img']?>" alt="" style="width: 50%; margin-top: 20px; object-fit: cover; border-radius: 10px;">
               <?php
                   echo "<h3>Date :&nbsp".$row['date']."</h3>";
                   echo '<h4>Time :&nbsp'.$row['time']."</h4>";
                   echo '<a href="imgdelete.php?id='.$row['id'].'" role="button"><button style="width: 100px; border: none; border-radius: 7px; color: white;
              background-color: crimson; margin-left: 15px; margin-top: -3px; margin-bottom: 15px;">Delete</button></a>';
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
            border: 1px solid #ddd;
            border-top: 0;
            border-right: 0;
            border-left: 0;
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