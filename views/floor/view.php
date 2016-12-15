<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">
    <link rel="stylesheet" href="../css/index.css">
    <title>Этаж 1</title>
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
            <a class="navbar-brand" href="/">Эмблема</a>
        </div>

        <div class="collapse navbar-collapse" id="index-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">Главная</a></li>
                <li class="dropdown active">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Этажи<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/floor/1">Этаж 1</a></li>
                        <li><a href="/floor/2">Этаж 2</a></li>
                        <li><a href="/floor/3">Этаж 3</a></li>
                    </ul>
                </li>
                <li><a href="/">Выход</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="page-header">
        <h1>Этаж 1</h1>
        <ul class="pager">
            <li class="previous"><a href="/"><i class="glyphicon glyphicon-arrow-left"></i> На главную</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col col-xs-12 col-md-6">
            <h3>Доска объявлений</h3>
            <div class="thumbnail">
                <div class="caption">
                    <div class="board">
                        <div class="alert alert-info">Первый этаж, го бухать, я создал!</div>
                        <div class="alert alert-info">Какой козел сверху копытами топает!?</div>
                        <div class="alert alert-info">Кто там с третьего этажа гирю сбросил? Заберите в 4 комнате - к нам влетела</div>
                        <div class="alert alert-info">Двер закрой! Дует!</div>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default">Оставить объявление</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-xs-12 col-md-6">
            <h3>Комнаты</h3>
            <div class="board roomList">
            <ul class="list-group text-center ">
                <a href="/room/3">
                    <li class="list-group-item room">
                        <span class="badge">3</span>
                            Комната № 3
                    </li>
                </a>
                <a href="/room/4">
                    <li class="list-group-item room">
                        <span class="badge">1</span>
                        Комната № 4
                    </li>
                </a>
                <a href="/room/5">
                    <li class="list-group-item room">
                        <span class="badge">2</span>
                        Комната № 5
                    </li>
                </a>
                <a href="/room/3">
                    <li class="list-group-item room">
                        <span class="badge">3</span>
                        Комната № 3
                    </li>
                </a>
                <a href="/room/4">
                    <li class="list-group-item room">
                        <span class="badge">1</span>
                        Комната № 4
                    </li>
                </a>
                <a href="/room/5">
                    <li class="list-group-item room">
                        <span class="badge">2</span>
                        Комната № 5
                    </li>
                </a><a href="/room/3">
                    <li class="list-group-item room">
                        <span class="badge">3</span>
                        Комната № 3
                    </li>
                </a>
                <a href="/room/4">
                    <li class="list-group-item room">
                        <span class="badge">1</span>
                        Комната № 4
                    </li>
                </a>
                <a href="/room/5">
                    <li class="list-group-item room">
                        <span class="badge">2</span>
                        Комната № 5
                    </li>
                </a>
            </ul>
            </div>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col col-xs-12">
            <h3>Схема этажа</h3>
            <img src="/images/floorSchema.jpg" class="floorSchema">
        </div>
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