@extends('layouts.master')

@section('title')
    Модератор
@endsection

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Добро пожаловать, модератор</h1>
        </div>

        @include('includes.message')

        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2">
                <form class="form-horizontal" method="post" action="{{route('register')}}" id="register-form" enctype="multipart/form-data">
                    <div class="input-group inputs">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Ф.И.О пользователя" name="username" required>
                    </div>
                    <div class="input-group inputs">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-group inputs">
                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
                        <input type="text" class="form-control" name="faculty" placeholder="Факультет" required>
                    </div>
                    <div class="input-group inputs">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Пароль" required>
                    </div>
                    <div class="input-group inputs">
                        <span class="input-group-addon"><i class="fa fa-question"></i></span>
                        <input type="text" class="form-control" name="is_admin" placeholder="" required>
                    </div>
                    <br/>
                    <input type="hidden" name="_token" value="{{ Session::token() }}"/>
                    <div class="row">
                        <div class="col-sm-12 col-md-2 col-md-offset-5">
                            <button type="submit" class="btn btn-success">Зарегистрировать</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection