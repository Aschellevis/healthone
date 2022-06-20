

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
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">E-mailadres</label>
                <input type="email" class="form-control" id="inputEmail4">
                <p class="text-black-50">Wij delen nooit uw persoonlijke gegevens.</p>
            </div>
            <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Wachtwoord</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <a href="logged_in.php"><button type="button" class="btn btn-primary">Verzenden</button></a>
            </div>
        </form>
        <?php
        include("components/footer.php");
        ?>
    </div>
</body>
</html>
