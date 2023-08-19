<?php

    define('DB_HOST', 'containers-us-west-205.railway.app');
    define('DB_USER', 'root');
    define('DB_PASS', 'tbCKNGlBvhk6CLXSXeoS');
    define('DB_NAME', 'railway');

    //create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //check connection
    if($conn->connect_error) {
        die('Connection Failed ' . $conn->connect_error);
    }

    