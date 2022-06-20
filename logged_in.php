<?php
include_once ("database.php");

$query = $db->prepare("SELECT * FROM users");
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
        include("components/navigation_logged_in.php");
        include("components/banner.php");
        ?>
        <?php
        foreach($result as &$user) {
        ?>
        <h2 class="px-1 pt-5">
            Welkom<?=$user["name"]?>
        </h2>
        <?php
        }
        ?>
        <p class="px-1">
            Fit en gezond zijn is geen vanzelfsprekendheid. We moeten er zelf wat voor doen. Goede, gezonde voeding is
            hiervoor de basis. Bewegen hoort hier ook bij. Regelmatig bewegen zorgt voor een goede doorbloeding en draagt
            bij aan ontspanning van lichaam en geest. Sporten is goed voor sterkere spieren en voor de conditie. Sportcenter
            HealtOne heeft verschillende sportapparaten om mee te kunnen werken aan je conditie. Deze gebruiker heeft de
            admin rechten en kan de website beheren!
        </p>
        <?php
        include("components/footer.php");
        ?>
    </div>
</body>
</html>
