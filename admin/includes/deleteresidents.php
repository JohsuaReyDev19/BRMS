<?php
include "db_conn.php";
    $ID = $_GET['ID'];
    $sql = "DELETE FROM `residents` WHERE res_id = $ID";
    $result = mysqli_query($conn, $sql);
                    
    if($result){
        header("location: ../residentsRecord.php");
    }else{
        echo "Failed: " . mysqli_error($conn);
    }

