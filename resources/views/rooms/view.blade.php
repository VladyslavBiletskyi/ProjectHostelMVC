@extends('layouts.master')

@section('title')
Комната №{{$room->id}}
@endsection

@section('content')

<div class="container">
    <div class="page-header">
        <h1>Комната {{$room->id}}, этаж {{$room->floor_id}}</h1>
        <ul class="pager">
            <li class="previous"><a href="{{route('floors.view', $room->floor_id)}}"><i class="glyphicon glyphicon-arrow-left"></i> Назад к этажу</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col col-sm-12 col-md-8 col-md-offset-2">
            <img src="" />
        </div>
    </div>
    <div class="row">
        <div class="col col-xs-12 col-md-6">
            <div class="thumbnail description">
                <div class="caption">
                    <h2>Описание</h2>
                    <p class="description">
                        {{$room->description}}
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary btn-lg">Забронировать</a>
                </div>
            </div>
        </div>
        <div class="col col-xs-12 col-md-6">
            <div class="thumbnail description">
                <div class="caption">
                    <h2>Список жильцов</h2>
                    <p class="description">
                        <ul class="list-group">
                            @foreach($students as $student)
                                <li class="list-group-item roomMemberItem">{{$student->username}}</li>
                            @endforeach
                        </ul>
                    </p>
                    <br>
                </div>
            </div>
        </div>
        <hr/>
        <section class="row">
            <div class="col-md-6 col-md-offset-3">
                <header><h3>Комментарии...</h3></header>
                <form action="{{route('add.comment')}}" method="post">
                    <div class="form-group">
                        <textarea class="form-control" name="text" cols="30" rows="5" placeholder="Ваш комментарий..."></textarea>
                    </div>
                    <input type="hidden" value="{{ Session::token() }}" name="_token"/>
                    <input type="hidden" value="{{$room->id}}" name="room_id"/>
                    <button type="submit" class="btn btn-primary">Добавить комментарий</button>
                </form>
                <hr>
                @foreach($comments as $comment)
                    <div class="post" data-postid="{{ $comment->id }}">
                        <p>{{ $comment->text }}</p>
                        <div class="info">
                            <i>Оставил(а) {{ $comment->user->username }}  {{ $comment->created_at }}</i>
                        </div>
                        <div class="interaction">
                            @if(Auth::user() == $comment->user || Auth::user()->is_admin == 1)
                                |
                                <a href="#" class="open-edit">Редактировать</a> |
                                <a href="{{ route('comment.delete', ['id' => $comment->id]) }}">Удалить</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection