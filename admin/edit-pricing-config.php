<?php
    $title = $_REQUEST["title"];
    $price = $_REQUEST["price"];
    $id    = $_REQUEST["id"];

    include "config.php";
    $sql = "UPDATE pricings SET title = '{$title}' , price = '{$price}' WHERE id = {$id}";
    $result = mysqli_query($conn , $sql);

    header ("location: http://localhost/project-15/admin/pricing-list.php");
    mysqli_close($conn);


?>
