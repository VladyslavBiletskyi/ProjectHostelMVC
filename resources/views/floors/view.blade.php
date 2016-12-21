@extends('layouts.master')

@section('title')
    Этаж {{$floor->floor_id}}
@endsection

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Этаж {{$floor->floor_id}}</h1>
            <ul class="pager">
                <li class="previous"><a href="/"><i class="glyphicon glyphicon-arrow-left"></i> На главную</a></li>
            </ul>
        </div>
        @include('includes.message')
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
                        @foreach($floor->rooms as $room)
                            <a href="#">
                                <li class="list-group-item room">
                                    <span class="badge">{{$room->places}}</span>
                                        Комната № {{$room->id}}
                                </li>
                            </a>
                        @endforeach
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
@endsection