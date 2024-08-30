<?php
include "db_conn.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];
    $placeofbirth = $_POST["placeofbirth"];
    $birthdate = $_POST["birthdate"];
    $age = $_POST["age"];
    $civilstatus = $_POST["civilstatus"];
    $gender = $_POST["gender"];
    $purok = $_POST["purok"];
    $voterstatus = $_POST["voterstatus"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $occupation = $_POST["occupation"];
    $citizenship = $_POST["citizenship"];
    $address = $_POST["address"];
    $householdno = $_POST["householdno"];
    $image = $_POST["image"];



        $sql = "INSERT INTO `residents`( `firstname`, `middlename`, `lastname`, `placeofbirth`, `birthdate`, `age`, `civilstatus`, `gender`, `purok`, `voterstatus`, `email`, `contact`, `occupation`, `citizenship`, `address`, `image`, `householdno`) VALUES ('$firstname','$middlename','$lastname','$placeofbirth','$birthdate','$age','$civilstatus','$gender','$purok','$voterstatus','$email','$contact','$occupation','$citizenship','$address','$image','$householdno')";
        $result = mysqli_query($conn, $sql);
                    
    if($result){
        header("location: ../residentsRecord.php");
    }else{
        echo "Failed: " . mysqli_error($conn);
    }
}