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
            <form action="./delete-trainer-config.php" method="get" class="search-id">
                <?php
                    if(isset($_REQUEST['submit-id'])){
                        $id = $_REQUEST["id"];
                        include 'config.php';
                        $sql = "SELECT * FROM pricings WHERE id = {$id}";
                        $result = mysqli_query($conn , $sql);
                        if(mysqli_num_rows($result) > 0){
                            while ($row = mysqli_fetch_assoc($result)){
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
                                <a href="./delete-pricing-config.php?id=<?php echo $row["id"]; ?>" class="del-submit rounded-md bg-red-300">DELETE</a>
                                <?php
                            }
                        }
                    }
                ?>
            </form>
        </div>
    </div>