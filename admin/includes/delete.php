<?php
include "db_conn.php";
    $ID = $_GET['ID'];
    $sql = "DELETE FROM `brgyoffice` WHERE ID = $ID";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("location: ../officials.php");
    }else{
        echo "Failed: " . mysqli_error($conn);
    }

