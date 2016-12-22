@extends('layouts.master')
@section('title')
    Добро пожаловать
@endsection

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Добро пожаловать в Hostel System</h1>
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
                            <img src="{{ URL::to('images/banner.jpg')}}" alt="">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ URL::to('images/banner.jpg')}}" alt="">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ URL::to('images/banner.jpg')}}" alt="">
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
                <div class="thumbnail thumbnailBoard">
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
    </div>
@endsection