<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <title>Control Panel</title>
        <link rel="shortcut icon" href=".png" type="image/x-icon">
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/media-style.css">
        <link rel="stylesheet" href="../css/media-style.css">
        
    </head>
</head>
<body>
        
    <?php
        include "./menu.php"
    ?>
    <div class="delete-content-container">

        <div class="delete-content-form">
            <div class="delete-content-heading text-center">
                <h1 class="font-bold">Delete Message</h1>
            </div>
            <form action="" method="get" class="deleteForm">
                <?php
                    $id = $_REQUEST['id'];
                    include "config.php";
                    $sql = "SELECT * FROM usermessages WHERE id = {$id}";
                    $result = mysqli_query($conn , $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <input type="hidden" name="id" id="id" value=<?php echo $row["id"]; ?>>
                            <div class="form-group">
                                <label for="">First Name</label><br>
                                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Firstname" value=<?php echo $row["firstname"]; ?>>
                            </div>
                            <div class="form-group">
                                <label for="">Last Name</label><br>
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="lastname" value=<?php echo $row["lastname"]; ?>>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label><br>
                                <input type="email" name="email" id="email" class="form-control" placeholder="email" value=<?php echo $row["email"]; ?>>
                            </div>
                            <div class="form-group">
                                <label for="">Message</label><br>
                                <textarea name="message" id="usermessage" class="usermessage"><?php echo $row["message"]; ?></textarea>
                            </div>
                            <a href="#" class="del-back rounded-md bg-lime-300">BACK</a>
                            <a href="./delete.php?id=<?php echo $row["id"]; ?>" class="del-submit rounded-md bg-red-300">DELETE</a>
                        <?php
                        }
                    }

                ?>

            </form>
        </div>
    </div>
</body>
</html>