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
                            @foreach($students as $student)
                                @if($student->is_admin == 0)
                                    <li class="list-group-item">
                                        <span class="badge">
                                            @if($student->room_id == 0)
                                                Не поселен
                                            @else
                                                Этаж {{$student->room->floor_id }}, Комната {{ $student->room_id }}
                                            @endif
                                        </span>
                                        <a href="{{route('refuse_booking', $student->id)}}"><span class="badge">
                                            Снять бронь
                                        </span></a>
                                        {{ $student->username }}
                                    </li>
                                @endif
                            @endforeach
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
                        @foreach($floors as $floor)
                            <div class="list-group">
                                <a href="#" class="list-group-item active">
                                    <h4 class="list-group-item-heading">Этаж №{{$floor->floor_id}}</h4>
                                    <p class="list-group-item-text">Описание: {{$floor->description}}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="col col-sm-12 col-md-6">
                        <form enctype="multipart/form-data" class="text-center" method="post" action="{{route('add_floor')}}">
                            <div class="input-group inputs">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <select class="form-control" name="floor_id" required>
                                    <option disabled>Номер этажа</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="file" class="filestyle form-control" accept="image/jpeg,image/png"
                                           data-buttonText="Фото" name="photo" data-buttonBefore="true" required>
                                </div>
                            </div>
                            <br/>
                            <textarea class="form-control" name="description" required rows="2" placeholder="Описание"></textarea>
                            <input type="hidden" name="_token" value="{{ Session::token() }}"/>
                            <br/>
                            <button type="submit" class="btn btn-success">Добавить этаж</button>
                        </form>
                    </div>
                </div>
                
                <div id="menuRoom" class="tab-pane fade">
                    <h3>Комнаты</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="studentList">
                            @foreach($floors as $floor)
                                @foreach($rooms as $room)
                                    @if($room->floor_id == $floor->floor_id)
                                        <div class="list-group">
                                            <a href="#" class="list-group-item active">
                                                <h4 class="list-group-item-heading">Комната №{{$room->id}}</h4>
                                                <p class="list-group-item-text">Этаж: {{$room->floor_id}}, Количество мест: {{$room->places}}</p>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                            </div>
                        </div>
                        <div class="col col-sm-12 col-md-6">
                            <form enctype="multipart/form-data" class="text-center" method="post" action="{{route('add_room')}}">
                                <div class="input-group inputs">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="number" class="form-control" name="id" placeholder="Номер">
                                </div>
                                <div class="input-group inputs">
                                    <span class="input-group-addon">№</span>
                                    <input type="number" class="form-control" name="places" placeholder="Количество мест">
                                </div>
                                <select class="form-control" name="floor_id">
                                    <option disabled selected>Этаж</option>
                                    @foreach($floors as $floor)
                                        <option value="{{$floor->floor_id}}">{{$floor->floor_id}} этаж</option>
                                    @endforeach
                                </select>
                                <br/>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="file" class="filestyle form-control" accept="image/jpeg,image/png"
                                               data-buttonText="Фото" name="photo" data-buttonBefore="true" required>
                                    </div>
                                </div>
                                <br/>
                                <textarea name="description" class="form-control" rows="2" placeholder="Описание"></textarea>
                                <input type="hidden" name="_token" value="{{ Session::token() }}"/>
                                <br/>
                                <button type="submit" class="btn btn-success">Добавить комнату</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection