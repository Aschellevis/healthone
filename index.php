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
        </style>
    </head>
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
            <p class="px-1">
                Fit en gezond zijn is geen vanzelfsprekendheid. We moeten er zelf wat voor doen. Goede, gezonde voeding is 
                hiervoor de basis. Bewegen hoort hier ook bij. Regelmatig bewegen zorgt voor een goede doorbloeding en draagt
                bij aan ontspanning van lichaam en geest. Sporten is goed voor sterkere spieren en voor de conditie. Sportcenter
                HealtOne heeft verschillende sportapparaten om mee te kunnen werken aan je conditie.
            </p>
            <?php
                include("components/footer.php");
            ?>
         </div>
    </body>
</html>
