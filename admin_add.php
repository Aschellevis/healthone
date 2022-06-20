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
    <h2 class="px-1 pt-5">
        SportCenter HealthOne
    </h2>
    <form class="row g-3 px-1">
        <div class="col-md-6">
            <label for="inputName4" class="form-label">Naam</label>
            <input type="name" class="form-control" id="inputName4">
        </div>
        <div class="col-md-6">
            <label for="inputName4" class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Kies een categorie</option>
                <?php
                foreach($result as &$category) {
                ?>
                <option value="1"><?=$category["name"]?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Beschrijving:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="input-group col-md-12">
            <label for="inputGroupFile04" class="form-label">Image bij sportapparaat</label>
            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
    <?php
    include("components/footer.php");
    ?>
</div>
</body>
</html>
