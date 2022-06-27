<?php
include_once ("../database.php");

$query = $db->prepare("SELECT * FROM products WHERE id=20");
$query = $db->prepare("SELECT * FROM reviews");
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
    include("../components/navigation.php");
    include("../components/banner_equipment.php");
    ?>
    <div class="container-fluid">
        <p class="pt-5">
            <a href="../index.php">Home</a>
            /
            <a href="../categories.php">Categories</a>
            /
            <a href="../loopbanden.php">Loopbanden</a>
            /
            VirtuFit Elite TR-900i loopband
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
        <ul class="nav nav-tabs my-4">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home" aria-controls="home">Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#new" aria-controls="new">Maak je eigen review</a>
            </li>
        </ul>
        <table class="table border border-black">
            <thead>
            <tr>
                <th scope="col">Rating</th>
                <th scope="col">Review</th>
                <th scope="col">Datum</th>
                <th scope="col">Tijd</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($result as &$review) {
                ?>
                <tr>
                    <th><?=$review['rating'];?></th>
                    <td><?=$review['description'];?></td>
                    <td><?=$review['date'];?></td>
                    <td>@<?=$review['time'];?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <?php
        include("../components/footer.php");
        ?>
    </div>
</div>
</body>
</html>
