<?php
    /*
    $host_name  = "db620007943.db.1and1.com";
    $database   = "db620007943";
    $user_name  = "dbo620007943";
    $password   = "aco258!";
    */
$host_name  = "localhost";
    $database   = "db_aco";
    $user_name  = "root";
    $password   = "";

    $con = mysqli_connect($host_name, $user_name, $password, $database);
    
    if(mysqli_connect_errno())
    {
    echo '<h2>Error: '.mysqli_connect_error().'</h2>';
    }
    else
    {
    //echo '<p>Conexión Ok</p>';
    }
?>