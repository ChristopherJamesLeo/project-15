<?php

    $firstname = $_REQUEST["firstname"];
    $lastname = $_REQUEST["lastname"];
    $email = $_REQUEST["email"];
    $phoneNumber = $_REQUEST["phoneNumber"];
    $city = $_REQUEST["city"];
    $country = $_REQUEST["country"];
    $password = $_REQUEST["passwords"];


    echo $firstname,$lastname,$email,$phoneNumber,$city,$country,$password;
    $conn = mysqli_connect("localhost","root","","project_15") or die ("connection lost");
    $sql = "INSERT INTO users (firstname,lastname,emails,phoneNumber,city,country,passwords) VALUE ('{$firstname}','{$lastname}','{$email}',{$phoneNumber},'{$city}','{$country}','{$password}')";
    $result = mysqli_query($conn , $sql) or die ("Connection Fail");

    
    header("location: http://localhost/project-15/html/home_page.php");
    mysqli_colse($conn);

?>