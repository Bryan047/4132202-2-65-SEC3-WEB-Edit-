<?php

    $sname= "mysql";
    $uname= "root";
    $password ="1234";

    $db_name = "test_db3";

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn){
        // echo "Connection failed!";
    }

?>

