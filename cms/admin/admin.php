<?php
    //require('config/config.php');
    require('../config/connection.php');

    // Check for submit
    if(isset($_POST['delete'])){
        //Get form data
        $delete_id = mysql_real_escape_string($conn, $_POST['delete_id']);

        $query = "DELETE FROM articles WHERE id = {$delete_id}";
        
        if(mysqli_query($conn, $query)){
            header('location: ' .admin.php. '');
        }else{
            echo 'ERROR: '. mysqli_error($conn);
        }
    }
    