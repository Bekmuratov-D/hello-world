<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
    html{
        height: 100%;
    }
    body{
        height: 100%;
    }
    .wrapper{
        min-height: 100%;
        display: flex;
        flex-direction: column;
    }
    main{
        flex: 1 1 auto;
    }
    header{
        display: flex;
        background-color: aliceblue;
    }
    h1{
        margin-top: 2%;
        vertical-align: middle;
    }
    .text_hw{
        font-size: 70px;
        font-weight: bold;
        margin-top: 15%;
        animation: text_hw 2s infinite alternate;
    }
    @keyframes text_hw {
        0% {
            color: #0e3079;
        }
        50% {
            color: #e44e20;
        }
        100% {
            color: #d3d626;
        }
    }
    footer{
        background-color: aliceblue;
    }
</style>
<body>
    <?php
        echo '<div class="wrapper">
            <header class="header container">
                <img src="img/logo.jpg" width="80px" class="col-1">
                <h1 class="col-11 text-center">Лаба №1 веб-страниц на PHP</h1>
            </header>
            <main class="container">
                <p class=" text-center text_hw">Helow, World</p>
            </main>
            <footer class="container">
                <div class="row footer_wrapper">
                    <p class="col-6 text-center">Бекмуратов Дилмурат Бекмуратович</p>
                    <p class="col-6 text-center">Группа: 211-321</p>
                </div>
            </footer>
        </div>'
    ?>
</body>
</html>