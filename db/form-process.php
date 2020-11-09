<?php 
    include("db_connect.php");
    extract($_POST);
    $sql = "INSERT INTO `contact-us-data`(`name`, `email`, `questions`) VALUES ('".$name."','".$email."','".$questions."')";
    $result = $mysqli->query($sql);
    if(!$result){
        die("Failed to enter data: ".$mysqli->error);
    }
    echo "Thank You for Contacting Us";
    $mysqli->close();
?>