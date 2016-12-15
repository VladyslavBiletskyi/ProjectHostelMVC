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
                        <li><a href="/floor/1">Этаж 1</a></li>
                        <li><a href="/floor/2">Этаж 2</a></li>
                        <li><a href="/floor/3">Этаж 3</a></li>
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