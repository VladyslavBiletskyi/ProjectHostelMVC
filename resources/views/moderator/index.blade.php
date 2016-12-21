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
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#menuUsers">Пользователи</a></li>
                <li><a data-toggle="tab" href="#menuFloor">Этажи</a></li>
                <li><a data-toggle="tab" href="#menuRoom">Комнаты</a></li>

            </ul>

            <div class="tab-content">
                <div id="menuUsers" class="tab-pane fade in active">
                    <h3>Пользователи</h3>
                    <div class="col col-sm-12 col-md-6 studentList">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge">Не поселен</span>
                                Какой-то чувак
                            </li>
                            <li class="list-group-item">
                                <span class="badge">Поселен</span>
                                Какой-то чувак
                            </li>
                            <li class="list-group-item">
                                <span class="badge">Поселен</span>
                                Какой-то чувак
                            </li>
                            <li class="list-group-item">
                                <span class="badge">Не поселен</span>
                                Какой-то чувак
                            </li>
                            <li class="list-group-item">
                                <span class="badge">Не поселен</span>
                                Какой-то чувак
                            </li>
                            <li class="list-group-item">
                                <span class="badge">Поселен</span>
                                Какой-то чувак
                            </li>
                            <li class="list-group-item">
                                <span class="badge">Поселен</span>
                                Какой-то чувак
                            </li>
                            <li class="list-group-item">
                                <span class="badge">Не поселен</span>
                                Какой-то чувак
                            </li>
                            <li class="list-group-item">
                                <span class="badge">Не поселен</span>
                                Какой-то чувак
                            </li>
                            <li class="list-group-item">
                                <span class="badge">Поселен</span>
                                Какой-то чувак
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-4 col-md-offset-1 text-center">
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
                                <select class="form-control" name="is_admin" required>
                                    <option value="Нет" selected>Не модератор</option>
                                    <option value="Да">Модератор</option>
                                </select>
                            </div>
                            <input type="hidden" name="_token" value="{{ Session::token() }}"/>
                                    <button type="submit" class="btn btn-success">Зарегистрировать</button>
                        </form>
                    </div>
                </div>

                <div id="menuFloor" class="tab-pane fade">
                    <h3>Этажи</h3>
                    <div class="col col-sm-12 col-md-6 studentList">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">Этаж №1</h4>
                                <p class="list-group-item-text">Количество комнат:15</p>
                            </a>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-6">
                        <form enctype="multipart/form-data" class="text-center">
                            <div class="input-group inputs">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <input type="text" class="form-control" placeholder="Название">
                            </div>
                            <div class="input-group inputs">
                                <span class="input-group-addon">№</span>
                                <input type="text" class="form-control" placeholder="Количество комнат">
                            </div>
                            <textarea class="form-control" placeholder="Описание">

                            </textarea>
                            <br/>
                            <button type="submit" class="btn btn-success">Добавить этаж</button>
                        </form>
                    </div>
                </div>
                
                <div id="menuRoom" class="tab-pane fade">
                    <h3>Комнаты</h3>
                    <div class="col col-sm-12 col-md-6 studentList">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">Комната №1</h4>
                                <p class="list-group-item-text">Количество мест:4, Жильцов:3</p>
                            </a>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-6">
                        <form enctype="multipart/form-data" class="text-center">
                            <div class="input-group inputs">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <input type="text" class="form-control" placeholder="Название">
                            </div>
                            <div class="input-group inputs">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" class="form-control" placeholder="Количество мест">
                            </div>
                            <select class="form-control">
                                <option disabled selected>Этаж</option>
                                <option value="1">1 этаж</option>
                                <option value="2">2 этаж</option>
                                <option value="3">3 этаж</option>
                            </select>
                            <br/>
                            <textarea class="form-control" placeholder="Описание">

                            </textarea>
                            <br/>
                            <button type="submit" class="btn btn-success">Добавить комнату</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection