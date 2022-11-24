<?php
    include "header.php";
?>
<body>

    <?php
        include "./menu.php"
    ?>
    <div class="user-content-list">
        <div class="user-content-table-container">
            <table class="user-content-table table-auto border-separate">
                <thead class="user-content-table-head">
                    <tr class="text-center">
                        <th>No</th>
                        <th>ID</th>
                        <th>firstname</th>
                        <th>lastname</th>
                        <th>Email</th>
                        <th>message</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "config.php";
                        $sql = ("SELECT * FROM usermessages");
                        $result = mysqli_query($conn , $sql) or die("connection fail");
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <tr class="table-role-data">
                            <td id="user_content_series" class="user_content_series text-center"></td>
                            <td class="text-center"><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["firstname"]; ?></td>
                            <td><?php echo $row["lastname"]; ?></td>
                            <td class="user-email-list"><?php echo $row["email"]; ?></td>
                            <td class="user-message"><?php echo $row["message"]; ?></td>
                            <td class="delete-content text-center">
                                <a href="./delete-user_Content.php?id=<?php echo $row["id"]; ?>"><i class="fas fa-trash"></i></a>
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
        let getSeriesTag = document.querySelectorAll(".user_content_series");
        for( let i = 0 ; i < getSeriesTag.length ; i++){
            getSeriesTag[i].innerText = i+1;
        }
    </script>
</body>
</html>