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
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="inputFirstName4" class="form-label">First name</label>
                <input type="name" class="form-control" id="inputFirstName4">
            </div>
            <div class="col-md-6">
                <label for="inputLastName4" class="form-label">Last name</label>
                <input type="password" class="form-control" id="inputLastName4">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
        <?php
        include("components/footer.php");
        ?>
    </div>
</body>
</html>
