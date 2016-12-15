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
                <li class="active"><a href="#">Главная</a></li>
                <li class="dropdown">
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
<div class="modal fade" id="modalAuth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Вход</h4>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="text" class="form-control" placeholder="Логин">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Пароль">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Войти</button>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="page-header">
        <h1>Hostel system</h1>
    </div>
    <div class="row">
        <div class="col col-xs-12 col-md-6">
            <!--<div class="thumbnail banner">-->
            <!--<div class="caption">-->

            <!--</div>-->
            <!--</div>-->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="../images/banner.jpg" alt="">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="../images/banner.jpg" alt="">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="../images/banner.jpg" alt="">
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <div class="col col-xs-12 col-md-6">
            <div class="thumbnail">
                <div class="caption">
                    <div class="board">
                        <div class="alert alert-info">Эй, чуваки, го бухать!</div>
                        <div class="alert alert-info">Опять тубик.</div>
                        <div class="alert alert-info">Кто на гитаре среди ночи играет!?... Го со мной!</div>
                        <div class="alert alert-info">Опять трионал отключил инет!</div>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Оставить объявление <span class="caret"></span></button>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="#">Для всех</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Для зарегистрированных пользователей</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row about">
        <div class="col col-xs-0 col-md-3">
        </div>
        <div class="col col-xs-12 col-md-6">
            <div class="thumbnail description">
                <div class="caption">
                    <h2>О нас</h2>
                    <p class="description">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed
                        do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit
                        esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in
                        culpa qui officia deserunt
                        mollit anim id est laborum.Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed
                        do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit
                        esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in
                        culpa qui officia deserunt
                        mollit anim id est laborum.</p>
                    <br>
                    <!--modal for registration-->
                    <div class="modal fade" id="modalReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Регистрация</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" placeholder="Ф.И.О пользователя">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">@</span>
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">№</span>
                                        <input type="text" class="form-control" placeholder="№ Ст. билета">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" class="form-control" placeholder="Пароль">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Зарегистрироваться</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalReg">Регистрация</button>
                </div>
            </div>
        </div>
        <div class="col col-xs-0 col-md-3">
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