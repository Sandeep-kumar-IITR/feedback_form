<?php
 $insert = false;
if(isset($_POST['firstname'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    
    // Collect post variables
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    
    $email = $_POST['email'];
    
    $massage = $_POST['massage'];
    $sql = "INSERT INTO `feedback`.`feedback` ( `firstname`, `lastname`, `email`, `message`, `date&time`) VALUES
     ( '$firstName', '$lastName', '$email', '$massage', current_timestamp());";
     
    

    // Execute the query
    if($con->query($sql) == true){
        echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
 <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
        }
    ?>


<!-- jsdkjsk -->
