<?php
include_once ("../database.php");

$query = $db->prepare("SELECT * FROM products WHERE id=13");
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
include("../components/head.php");
?>
<body>
<div class="m-3">
    <?php
    include("../components/header.php");
    include("../components/navigation_equipment.php");
    include("../components/banner_equipment.php");
    ?>
    <div class="container-fluid">
        <p class="pt-5">
            <a href="../index.php">Home</a>
            /
            <a href="../categories.php">Categories</a>
            /
            <a href="../hometrainers.php">Hometrainers</a>
            /
            Fitbike Ride 5
        </p>
        <div class="row my-4">
            <?php
            foreach($result as &$product) {
                ?>
                <div class="col-12 border border-black rounded">
                    <img src="../img/<?= $product['image'];?>" class="mx-auto p-5 w-25" width="100%">
                    <h2><?=$product['name'];?></h2>
                    <p><?=$product['description'];?></p>
                </div>
                <?php
            }
            ?>
        </div>
        <?php
        include ("../components/review.php");
        include("../components/new_review.php");
        include("../components/footer.php");
        ?>
    </div>
</div>
</body>
</html>
