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
                <form class="form-horizontal" method="post" action="{{route('sendrequest')}}" id="signup-form" enctype="multipart/form-data">
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
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="file" class="filestyle form-control" accept="image/jpeg,image/png"
                                   data-buttonText="Квитанция" name="scan" data-buttonBefore="true" required>
                        </div>
                    </div>
                    <br/>
                    <input type="hidden" name="_token" value="{{ Session::token() }}"/>
                    <div class="row">
                        <div class="col-sm-12 col-md-2 col-md-offset-5">
                            <button type="submit" class="btn btn-success">Подать заявку</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection