<?php
    include "header.php";
?>
<body>
    <?php
        include "./menu.php"
    ?>
<div class="pricing-list">
        <div class="pricing-table-container">
            <table class="pricing-table table-auto border-separate">
                <thead class="pricing-content-table-head">
                    <tr class="text-center">
                        <th>No</th>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Pricing</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "config.php";
                        $sql = ("SELECT * FROM pricings");
                        $result = mysqli_query($conn , $sql) or die("connection fail");
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <tr class="table-role-data">
                            <td id="pricing_series" class="pricing_series text-center"></td>
                            <td class="text-center"><?php echo $row["id"]; ?></td>
                            <td class="text-center"><?php echo $row["title"]; ?></td>
                            <td class="text-center"><?php echo $row["price"]; ?></td>
                            <td class="edit-content text-center">
                                <a href="./edit-pricing.php?id=<?php echo $row["id"]; ?>"><i class="fas fa-edit"></i></a>
                            </td>
                            <td class="delete-content text-center">
                                <a href="./delete-pricing.php?id=<?php echo $row["id"]; ?>"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>

                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        let getSeriesTag = document.querySelectorAll(".pricing_series");
        for( let i = 0 ; i < getSeriesTag.length ; i++){
            getSeriesTag[i].innerText = i+1;
        }
    </script>
</body>