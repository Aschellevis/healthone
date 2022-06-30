<?php
include_once ("database.php");

$query = $db->prepare("SELECT * FROM users");
$query->execute();
$result = $query->fetchALL (PDO::FETCH_ASSOC);
?>


<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand text-black" href="index.php">Sportcenter</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-black-50" href="categories.php">sportapparaat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black-50" href="user_profile.php">profiel</a>
                    </li>
                </ul>
                <?php
                foreach($result as &$user) {
                ?>
                <li class="nav-item" style="list-style: none;">
                    <a class="nav-link text-black-50" href="#"><?=$user["first name"]?>uitloggen (member)</a>
                </li>
                <?php
                }
                ?>
            </div>
        </div>
    </nav>
</body>
</html>
