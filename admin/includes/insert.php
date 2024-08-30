<?php
include "db_conn.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $full_name = $_POST["full_name"];
    $chairmanship = $_POST["chairmanship"];
    $position = $_POST["position"];
    $termstart = $_POST["termstart"];
    $termend = $_POST["termend"];
    $status = $_POST["status"];

        $sql = "INSERT INTO `brgyoffice` (`Fullname`, `Chairmanship`, `Position`, `Termstart`, `Termend`, `Status`) VALUES ('$full_name', '$chairmanship','$position', '$termstart', '$termend', '$status')";
        $result = mysqli_query($conn, $sql);
                    
    if($result){
        header("location: ../officials.php");
    }else{
        echo "Failed: " . mysqli_error($conn);
    }
}