<?php
    $id = $_REQUEST["id"];
    include "config.php";
    $sql = "DELETE FROM usermessages WHERE id = {$id}";
    $result = mysqli_query($conn , $sql);
    header("location: http://localhost/project-15/admin/user-content-list.php");
    mysqli_close($conn);
?>