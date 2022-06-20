<?php
    include_once ("database.php");

    $query = $db->prepare("SELECT * FROM categories");
    $query->execute();
    $result = $query->fetchALL (PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <?php
    include("components/head.php");
    ?>
    <body>
        <div class="m-3">
            <?php
                include("components/header.php");
                include("components/navigation.php");
                include("components/banner.php");
            ?>
            <div class="container-fluid">
                <p class="pt-5">
                    <a href="index.php">Home</a>
                    /
                    Categories
                </p>
                <div class="row">
                    <?php
                        foreach($result as &$category) {
                    ?>
                        <div class="col-3 categories">
                            <a href="<?=$category["link"]?>"><img src="img/<?= $category['image'];?>" class="border border-black rounded mx-auto p-5"></a>
                            <p><?=$category["name"]?></p>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <?php
                include("components/footer.php");
            ?>
         </div>
    </body>
</html>

