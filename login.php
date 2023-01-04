
<?php

    include 'connect.php';

    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
     
    // Taking all 5 values from the form data(input)
    $usrmail =  $_REQUEST['mail'];
    $usrpas = $_REQUEST['pass'];
     
    // Performing insert query execution
    // here our table name is college
    $sql = "SELECT * FROM user WHERE email='$usrmail' AND pass='$usrpas'";

    $result = mysqli_query($conn, $sql);



    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
   
        if ($row['email'] === $usrmail && $row['pass'] === $usrpas) {
   
            echo "Hello ",$usrmail;

            $query1 = "SELECT * FROM `admin`";
            echo "</br>";
            $q =mysqli_query($conn, $query1);
            foreach($q as $row1)
            {
                echo $row['username'];
            }
        }}
    // Close connection
    

    mysqli_close($conn);
?>