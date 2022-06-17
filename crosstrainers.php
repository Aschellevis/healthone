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
                height: 200px;
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
            <div class="container-fluid">
                <p class="pt-5">
                    <a href="index.php">Home</a>
                    /
                    <a href="categories.php">Categories</a>
                    /
                    Crosstrainer
                </p>
                <div class="row">
                    <div class="col-2">
                        <a href="crosstrainers.php"><img src="img/crosstrainers/crosstrainer1.png" class="border border-black rounded-1 mx-auto p-5"></a>
                    </div>
                    <div class="col-2">
                        <a href="crosstrainers.php"><img src="img/crosstrainers/crosstrainer2.png" class="border border-black mx-auto p-5"></a>
                    </div>
                    <div class="col-2">
                        <a href="crosstrainers.php"><img src="img/crosstrainers/crosstrainer3.png" class="border border-black mx-auto p-5"></a>
                    </div>
                    <div class="col-2">
                        <a href="crosstrainers.php"><img src="img/crosstrainers/crosstrainer4.png" class="border border-black mx-auto p-5"></a>
                    </div>
                    <div class="col-2">
                        <a href="crosstrainers.php"><img src="img/crosstrainers/crosstrainer5.png" class="border border-black mx-auto p-5"></a>
                    </div>
                    <div class="col-2">
                        <a href="crosstrainers.php"><img src="img/crosstrainers/crosstrainer6.png" class="border border-black mx-auto p-5"></a>
                    </div>
                </div>
            </div>
            <?php
                include("components/footer.php");
            ?>
         </div>
    </body>
</html>

