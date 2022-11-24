<?php
    include "header.php";
?>
<body>
        
    <?php
        include "./menu.php"
    ?>
    <div class="dele-indi-container">
        <div class="dele-indi-form-container">

            <form action="<?php $_SERVER['PHP_SELF']  ?>" method="post" class="search-id">
                <div class="form-group">
                    <label for="">Search ID</label><br>
                    <input type="text" name="id" id="id" class="form-control" placeholder="id">
                </div>
                <input type="submit" name="submit-id" class="rounded-md bg-stone-500" value="submit">
            </form>
            <form action="" method="get" class="deleteForm">
                <?php
                    if(isset($_REQUEST['submit-id'])){
                        $id = $_REQUEST["id"];
                        include 'config.php';
                        $sql = "SELECT * FROM usermessages WHERE id = {$id}";
                        $result = mysqli_query($conn , $sql);
                        if(mysqli_num_rows($result) > 0){
                            while ($row = mysqli_fetch_assoc($result)){
                                ?>
                            <div class="form-group">
                                <label for="">ID No.</label><br>
                                <input type="text" name="id" id="id" class="form-control" placeholder="id" value=<?php echo $row["id"]; ?>>
                            </div>
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
                    }
                ?>

            </form>
        </div>
    </div>
</body>
</html>