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
    <form class="row g-3 px-1 my-4">
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">E-mailadres</label>
            <input type="email" class="form-control" id="inputEmail4" name="email">
        </div>
        <div class="col-md-6">
            <label for="inputFirstName4" class="form-label">Voornaam</label>
            <input type="name" class="form-control" id="inputFirstName4" name="firstname">
        </div>
        <div class="col-md-6">
            <label for="inputLastName4" class="form-label">Achternaam</label>
            <input type="name" class="form-control" id="inputLastName4" name="lastname">
        </div>
        <div class="col-12">
            <a href="logged_in.php"><button type="button" class="btn btn-primary" name="send">Profiel aanpassen</button></a>
        </div>
    </form>
    <?php
    include("components/footer.php");
    ?>
</div>
</body>
</html>