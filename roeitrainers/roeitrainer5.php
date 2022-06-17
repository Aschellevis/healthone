<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <meta charset="UTF-8">
        <title></title>
        <style>
            html {
                background-color: #DCDCDC;
            }
            
            body {
                margin-left: 20px;
                margin-right: 20px;
            }
            
            img {
                width: 200px;
            }
        </style>
    </head>
    <body>
        <div class="m-3">
            <?php
                include("../components/header.php");
                include("../components/navigation.php");
                include("../components/banner.php");
            ?>
            <div class="container-fluid">
                <p class="pt-5">
                    <a href="../index.php">Home</a>
                    /
                    <a href="../categories.php">Categories</a>
                    /
                    <a href="../roeitrainers.php">Roeitrainer</a>
                    /
                    VirtuFit Easy Fit Roeitrainer
                </p>
                <div class="row">
                    <div class="col-12 border border-black rounded">
                        <a href="roeitrainers.php"><img src="../img/roeitrainers/roeitrainer5.png" alt="roeitrainer" class="m-3"></a>
                        <h2>VirtuFit Easy Fit Roeitrainer</h2>
                        <p>
                            De VirtuFit Easy Fit Roeitrainer is een heerlijke roeitrainer die voor iedereen toegankelijk is. Hij is 
                            gebruiksvriendelijk, compact en beschikt over 16 weerstandsniveaus voor een enorme variatie aan trainingsmogelijkheden. 
                            Verbeter je roeisnelheid, je uithoudingsvermogen of ga voor intervaltrainingen om je conditie optimaal te krijgen.
                        </p>
                    </div>
                </div>
                <?php
                    include("../components/footer.php");
                ?>
             </div>
        </div>
    </body>
</html>

