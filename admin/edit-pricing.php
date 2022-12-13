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
                <h1 class="font-bold">Edit Pricing</h1>
             </div>
            <form action="edit-pricing-config.php" method="get" class="deleteForm">
                <?php
                    $id = $_REQUEST['id'];
                    include "config.php";
                    $sql = "SELECT * FROM pricings WHERE id = {$id}";
                    $result = mysqli_query($conn , $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                          <input type="hidden" name="id" id="id" class="form-control" placeholder="title" value=<?php echo $row["id"]; ?>>
                            <div class="form-group">
                                <label for="">Title</label><br>
                                <input type="text" name="title" id="title" class="form-control" placeholder="title" value=<?php echo $row["title"]; ?>>
                            </div>
                            <div class="form-group">
                                <!-- <label for="">Price</label><br> -->
                                <input type="text" name="price" id="price" class="form-control" placeholder="price" value=<?php echo $row["price"]; ?>>
                            </div>
                            <a href="#" class="del-back rounded-md bg-lime-300">BACK</a>
                            <input type="submit" name="submit-id" class="rounded-md bg-stone-500" value="submit">
                        <?php
                        }
                    }

                ?>
            </form>
        </div>
    </div>
</body>
</html>