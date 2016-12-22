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
            <a class="navbar-brand" href="{{route('welcome')}}">HS</a>
        </div>

        <div class="collapse navbar-collapse" id="index-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{route('welcome')}}"><i class="fa fa-home" aria-hidden="true"></i> Главная</a></li>
                @if(Auth::user())
                    <li><a href="{{route('user')}}"><i class="fa fa-user" aria-hidden="true"></i> Профиль</a></li>
                @endif
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-list" aria-hidden="true"></i>
                        Этажи<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach(Floor::all() as $floor)
                            <li><a href="{{route('floors.view', $floor->floor_id)}}">Этаж {{$floor->floor_id}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="about"><i class="fa fa-question" aria-hidden="true"></i> О проекте</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user" aria-hidden="true"></i>
                        Аккаунт <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        @if(Auth::user())
                            <li><a href="{{route('logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i>
                                    Выход</a></li>
                        @else
                            <li><a href="#" data-toggle="modal" data-target="#modalAuth"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                    Вход</a></li>
                            <li><a href="{{ route('signup') }}"><i class="fa fa-book" aria-hidden="true"></i> Регистрация</a></li>

                        @endif
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
                        <input type="text" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Пароль" required>
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