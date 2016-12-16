@extends('layouts.master')

@section('title')
    Регистрация
@endsection

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Hostel system</h1>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2">
                <form class="form-horizontal" method="post" action="#" id="signup-form">
                    <div class="input-group inputs">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Ф.И.О пользователя">
                    </div>
                    <div class="input-group inputs">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group inputs">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Пароль">
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="file" class="filestyle form-control" accept="image/jpeg,image/png"
                                   data-buttonText="Квитанция" data-buttonBefore="true">
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-sm-12 col-md-2 col-md-offset-5">
                            <button type="button" class="btn btn-success">Зарегистрироваться</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection