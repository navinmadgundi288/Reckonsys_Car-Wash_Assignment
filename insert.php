<?php

    include 'connect.php';

    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
     
    // Taking all 5 values from the form data(input)
    $usrmail =  $_REQUEST['mail'];
    $usrpas = $_REQUEST['pass'];
    $usrname =  $_REQUEST['flname'];
     
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO user  VALUES ('$usrmail',
        '$usrpas','$usrname')";
     
    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
     
    // Close connection
    mysqli_close($conn);
?>