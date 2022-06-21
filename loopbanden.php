<?php
include_once ("database.php");

$query = $db->prepare("SELECT * FROM products WHERE id=4");
$query->execute();
$result = $query->fetchALL (PDO::FETCH_ASSOC);
?>

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
                    <a href="categories.php">Categories</a>
                    /
                    Loopband
                </p>
                <div class="row">
                    <?php
                    foreach($result as &$product) {
                        ?>
                        <div class="col-2">
                            <div class="card border border-black rounded ">
                                <img src="img/<?= $product['image'];?>" class="mx-auto p-5" width="100%">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?=$product["name"]?></h5>
                                    <a href="<?=$product["link"]?>" class="btn stretched-link"></a>
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

