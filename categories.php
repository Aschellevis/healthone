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
                    Categorieën
                </p>
                <div class="row">
                    <?php
                        foreach($result as &$category) {
                    ?>
                        <div class="col-3 categories">
                            <div class="card border border-black rounded ">
                                <img src="img/<?= $category['image'];?>" class="mx-auto p-5">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?=$category["name"]?></h5>
                                    <a href="<?=$category["link"]?>" class="btn stretched-link"></a>
                                </div>
                            </div>
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

