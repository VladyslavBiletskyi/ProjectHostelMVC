@extends('layouts.master')

@section('title')
    Регистрация
@endsection

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Заявка на регистрацию</h1>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2">
                <form class="form-horizontal" method="post" action="#" id="signup-form" enctype="multipart/form-data">
                    <div class="input-group inputs">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Ф.И.О пользователя">
                    </div>
                    <div class="input-group inputs">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group inputs">
                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
                        <input type="text" class="form-control" placeholder="Факультет">
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
                            <button type="button" class="btn btn-success">Подать заявку</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection