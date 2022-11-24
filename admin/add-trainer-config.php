<?php
    $firstname = $_REQUEST["firstname"];
    $lastname = $_REQUEST["lastname"];
    $type = $_REQUEST["type"];
    $image = $_REQUEST["image"];

    include "config.php";
    $sql = "INSERT INTO trainers (firstname,lastname,type,image) VALUE ('{$firstname}','{$lastname}','{$type}','{$image}')";
    $result = mysqli_query($conn , $sql);
    header("location: http://localhost/project-15/admin/add-trainer.php");
    mysqli_close($conn);

?>