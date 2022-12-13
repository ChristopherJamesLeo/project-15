<?php
    $title = $_REQUEST["title"];
    $price = $_REQUEST["price"];

    include "config.php";
    $sql = "INSERT INTO pricings (title,price) VAlUE ('{$title}','{$price}')";
    $result = mysqli_query($conn , $sql);
    header("location: http://localhost/project-15/admin/pricing-list.php");
    mysqli_close($conn);

?>
