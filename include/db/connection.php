<?php
<<<<<<< HEAD
=======
    
>>>>>>> 75fd9d88017730f574deffd8886455eb898f73f0
    $host_name  = "db620007943.db.1and1.com";
    $database   = "db620007943";
    $user_name  = "dbo620007943";
    $password   = "aco258!";

<<<<<<< HEAD

    $connect = mysqli_connect($host_name, $user_name, $password, $database);
=======
    $con = mysqli_connect($host_name, $user_name, $password, $database);
>>>>>>> 75fd9d88017730f574deffd8886455eb898f73f0
    
    if(mysqli_connect_errno())
    {
    echo '<h2>Error: '.mysqli_connect_error().'</h2>';
    }
    else
    {
<<<<<<< HEAD
    echo '<p>Conexión Ok</p>';
    }
?>
=======
    //echo '<p>Conexión Ok</p>';
    }
?>
>>>>>>> 75fd9d88017730f574deffd8886455eb898f73f0
