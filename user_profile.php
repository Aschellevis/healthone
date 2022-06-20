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
    <h2 class="px-1 pt-5">
        Member Profile
    </h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col-5"></th>
            <th scope="col-7"></th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <td>email</td>
                <?php
                foreach($result as &$user) {
                    ?>
                <td><?=$user["email"]?></td>
                <?php
                }
                ?>
            </tr>
            <tr>
                <td>firstname</td>
                <?php
                foreach($result as &$user) {
                    ?>
                    <td><?=$user["first name"]?></td>
                    <?php
                }
                ?>
            </tr>
            <tr>
                <td>lastname</td>
                <?php
                foreach($result as &$user) {
                    ?>
                    <td><?=$user["last name"]?></td>
                    <?php
                }
                ?>
            </tr>
        </tbody>
    </table>
    <a href="change_user_profile.php"><button type="button" class="btn btn-success px-4">Profiel aanpassen</button></a>
    <a href="change_user_password.php"><button type="button" class="btn btn-danger px-4">Wachtwoord aanpassen</button></a>
    <?php
    include("components/footer.php");
    ?>
</div>
</body>
</html>
