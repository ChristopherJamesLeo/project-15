<?php
    include "header.php";
?>
<body>
        
    <?php
        include "./menu.php"
    ?>
    <div class="dele-indi-container">
        <div class="dele-indi-form-container">
            <form action="add-trainer-config.php" method="get" class=" add-pricing">
                <div class="form-group">
                    <label for="">Frist Name</label><br>
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="firstname">
                </div>
                <div class="form-group">
                    <label for="">Last Name</label><br>
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="lastname">
                </div>
                <div class="form-group">
                    <label for="">Type</label><br>
                    <input type="text" name="type" id="type" class="form-control" placeholder="type">
                </div>
                <div class="form-group">
                    <label for="">Image</label><br>
                    <input type="text" name="image" id="image" class="form-control" placeholder="image">
                </div>
                <input type="submit" name="submit-id" class="rounded-md bg-stone-500" value="submit">
            </form>
        </div>
    </div>
</body>
</html>