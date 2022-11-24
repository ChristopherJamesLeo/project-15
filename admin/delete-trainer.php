<?php
    include "header.php";
?>
<body>
        
    <?php
        include "./menu.php"
    ?>
    <div class="delete-content-container">

        <div class="delete-content-form">
            <div class="delete-content-heading text-center">
                <h1 class="font-bold">Delete Trainer</h1>
            </div>
            <form action="" method="get" class="deleteForm">
                <?php
                    $id = $_REQUEST['id'];
                    include "config.php";
                    $sql = "SELECT * FROM trainers WHERE id = {$id}";
                    $result = mysqli_query($conn , $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <h2>Trainer id - <?php echo $row["id"]; ?></h2>
                        <input type="hidden" name="id" id="id" class="form-control" placeholder="title" value=<?php echo $row["id"]; ?>>
                        <div class="form-group">
                            <label for="">Frist Name</label><br>
                            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="firstname" value = <?php echo $row["firstname"]; ?>>
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label><br>
                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="lastname" value = <?php echo $row["lastname"]; ?>>
                        </div>
                        <div class="form-group">
                            <label for="">Type</label><br>
                            <input type="text" name="type" id="type" class="form-control" placeholder="type" value = <?php echo $row["type"]; ?>>
                        </div>
                        <div class="form-group">
                            <label for="">Image</label><br>
                            <input type="text" name="image" id="image" class="form-control" placeholder="type" value = <?php echo $row["image"]; ?>>
                        </div>
                            <a href="#" class="del-back rounded-md bg-lime-300">BACK</a>
                            <a href="./delete-trainer-config.php?id=<?php echo $row["id"]; ?>" class="del-submit rounded-md bg-red-300">DELETE</a>
                        <?php
                        }
                    }

                ?>

            </form>
        </div>
    </div>
</body>
</html>