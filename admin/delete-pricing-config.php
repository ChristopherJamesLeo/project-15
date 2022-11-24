<?php
    $id = $_REQUEST["id"];
    include "config.php";
    $sql = "DELETE FROM pricings WHERE id = {$id}";
    $result = mysqli_query($conn , $sql);
    header("location: http://localhost/project-15/admin/pricing-list.php");
    mysqli_close($conn);
?>