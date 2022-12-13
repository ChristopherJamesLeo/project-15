<?php
    include "header.php";
?>
<body>
        
    <?php
        include "./menu.php"
    ?>
    <div class="dele-indi-container">
        <div class="dele-indi-form-container">
            <form action="add-pricing-config.php" method="get" class=" add-pricing">
                <div class="form-group">
                    <label for="">Title</label><br>
                    <input type="text" name="title" id="title" class="form-control" placeholder="title">
                </div>
                <div class="form-group">
                    <label for="">Price</label><br>
                    <input type="text" name="price" id="price" class="form-control" placeholder="price">
                </div>
                <input type="submit" name="submit-id" class="rounded-md bg-stone-500" value="submit">
            </form>
        </div>
    </div>
</body>
</html>