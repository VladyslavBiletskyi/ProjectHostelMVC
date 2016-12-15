<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">
    <link rel="stylesheet" href="../css/index.css">
    <title>Добро пожаловать</title>
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#index-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Эмблема</a>
        </div>

        <div class="collapse navbar-collapse" id="index-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Главная</a></li>
                <li class="dropdown active">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Этажи<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Этаж 1</a></li>
                        <li><a href="#">Этаж 2</a></li>
                        <li><a href="#">Этаж 3</a></li>
                    </ul>
                </li>
                <li><a href="#" data-toggle="modal" data-target="#modalAuth">Войти</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="page-header">
        <h1>Этаж 1</h1>
    </div>
</div>
<div class="container">
    <p class="text-muted">&copy; NURE 2016</p>
</div>
</body>
<script type="text/javascript" src="../js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/index.js"></script>
</html>