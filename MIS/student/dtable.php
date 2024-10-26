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
    <link rel="shortcut icon" href="blogo.png" type="x-icon">
    <title>Responsive Table</title>
    <style>
        body {
            font-family: "Lato", sans-serif;
            margin: 20px;
        }
        p {
            font-size: 25px;
            text-align: center;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
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

        button {
            width: 150px; 
            padding: 7px; 
            background-color: blue;
            border-radius: 25px; 
            color: white;  
            font-weight: bold;   
            font-size: 15px;
            text-align: center;
            border: none;
            margin: 5px;
        }
    </style>
</head>
    <table id="dataTable">
        <thead>
            <tr>
                <th colspan="7" style="padding: 30px; font-size: 25px; text-align: center;">Personal Ledger</th>
            </tr>
            <tr>
                <th>Student number</th>
                <th>Student Name</th>
                <th> Details</th>
                <th>Amount Paid</th>
                <th>Date</th>
                <th>Type of Payment</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>st101</td>
                <td>jeffrey salabao</td>
                <td>Miscelennious</td>
                <td>10m</td>
                <td>09/23/2024</td>
                <td>cashier</td>
                
            </tr>
            <tr>
                <td>s101</td>
                <td>jeffrey salabao</td>
                <td>Research Forum</td>
                <td>2500</td>
                <td>2500</td>
                <td>08/08/2024</td>
                <td>HMA</td>
                
            </tr>
        </tbody>
    </table>
       <br>
    <button id="downloadBtn">Download</button>
    <a href="fees.php?id=<?php echo $id?>"><button>Back</button></a>

    <script>
        document.getElementById('downloadBtn').addEventListener('click', function() {
            let table = document.getElementById('dataTable');
            let docx = [];
            for (let row of table.rows) {
                let cols = Array.from(row.querySelectorAll('td, th'));
                docx.push(cols.map(col => col.innerText).join(','));
            }
            let csvString = docx.join('\n');
            let blob = new Blob([csvString], { type: 'text/csv' });
            let url = URL.createObjectURL(blob);
            let a = document.createElement('a');
            a.href = url;
            a.download = 'table.docx';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        });
    </script>
</body>
</html>
