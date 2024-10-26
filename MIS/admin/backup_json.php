<?php
include 'connect.php'; 

if (isset($_POST['backup'])) {
    $data = [];
    
    
    $query = "SELECT * FROM stinfo";
    $result = mysqli_query($con, $query);
    
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

   
    $backupFile = 'backup_' . date('Y-m-d_H-i-s') . '.json';

   
    file_put_contents($backupFile, json_encode($data, JSON_PRETTY_PRINT));

    echo "Backup created successfully: $backupFile";
}
?>
