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
    include("components/navigation_admin.php");
    include("components/banner.php");
    ?>
    <h2 class="px-1 pt-5">
        SportCenter HealthOne
    </h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">nr</th>
            <th scope="col">Naam</th>
            <th scope="col">Categorie</th>
            <th scope="col">Aanpassen</th>
            <th scope="col">Verwijderen</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php
        foreach($result as &$category) {
            ?>
        <tr>
            <th scope="row">1</th>
            <td></td>
            <td><?=$category["name"]?></td>
            <td><a href="#"><button type="button" class="btn btn-success px-4"><i class="bi bi-pencil-square"></i></button></a></td>
            <td><button type="button" class="btn btn-danger px-4"><i class="bi bi-dash-square"></i></button></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    <a href="admin_add.php"><button type="button" class="btn btn-success px-4"><i class="bi bi-plus-square"></i></button></a>
    <?php
    include("components/footer.php");
    ?>
</div>
</body>
</html>
