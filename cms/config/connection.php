<?php
    //Create Connection
    $conn = mysqli_connect('localhost', 'root', '', 'cms');

    //Check Connection
    if (mysqli_connect_errno()){
        //Connection Failed
        echo "Failed to connect to database ". mysqli_connect_errno();
    }