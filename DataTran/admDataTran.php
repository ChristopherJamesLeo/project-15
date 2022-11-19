<?php

    $firstname = $_REQUEST["firstname"];
    $lastname = $_REQUEST["lastname"];
    $role = $_REQUEST["role"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];


    $conn = mysqli_connect("localhost","root","","project_15") or die ("connection lost");
    $sql = "INSERT INTO adms (firstname,lastname,roles,emails,passwords) VALUE ('{$firstname}','{$lastname}','{$role}','{$email}','{$password}')";
    $result = mysqli_query($conn , $sql) or die ("Connection Fail");

    
    header("location: http://localhost/project-15/html/home_page.php");
    mysqli_colse($conn);

?>