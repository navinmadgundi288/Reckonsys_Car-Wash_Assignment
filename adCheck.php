<?php

    include 'connect.php';

    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
     
    // Taking all 5 values from the form data(input)
    $usrmail =  $_REQUEST['username'];
    $usrpas = $_REQUEST['pass'];
     
    // Performing insert query execution
    // here our table name is college
    $sql = "SELECT * FROM `admin` WHERE username='$usrmail' AND pass='$usrpas'";

    $result = mysqli_query($conn, $sql);
     
    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
   
        if ($row['username'] === $usrmail && $row['pass'] === $usrpas) {
   
            echo "Admin Logged in! ",$usrmail;
        }}
    // Close connection
    mysqli_close($conn);
?>