<?php
    require('connection.php');

    //Create Query
    $query = 'SELECT * FROM articles';
   // var_dump($query);
    
    //Get Result
    $result = mysqli_query($conn, $query);

    //Fetch Data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //var_dump($posts);//(Error Checking)
    
    //Free Result
    mysqli_free_result($result);

    //Close Connection
    mysqli_close($conn);