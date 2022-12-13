<?php
    $id    = $_REQUEST["id"];
    $firstname = $_REQUEST["firstname"];
    $lastname = $_REQUEST["lastname"];
    $type = $_REQUEST["type"];
    $image = $_REQUEST["image"];
    

    include "config.php";
    $sql = "UPDATE trainers SET firstname = '{$firstname}' ,lastname = '{$lastname}' , type = '{$type}', image = '{$image}' WHERE id = {$id}";
    $result = mysqli_query($conn , $sql);

    header ("location: http://localhost/project-15/admin/trainers-list.php");
    mysqli_close($conn);


?>