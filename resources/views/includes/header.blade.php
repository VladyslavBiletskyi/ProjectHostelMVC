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
            <a class="navbar-brand" href="/">HS</a>
        </div>

        <div class="collapse navbar-collapse" id="index-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Главная</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-list" aria-hidden="true"></i>
                        Этажи<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/floor/1">Этаж 1</a></li>
                        <li><a href="/floor/2">Этаж 2</a></li>
                        <li><a href="/floor/3">Этаж 3</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user" aria-hidden="true"></i>
                        Аккаунт<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#modalAuth"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                Вход</a></li>
                        <li><a href="{{ route('signup') }}"><i class="fa fa-book" aria-hidden="true"></i> Регистрация</a></li>
                    </ul>
                </li>
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
            <form method="post" action="{{ route('signin') }}">
                <div class="modal-body">
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Пароль">
                        <input type="hidden" name="_token" value="{{ Session::token() }}"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Войти</button>
                </div>
            </form>
        </div>
    </div>
</div>