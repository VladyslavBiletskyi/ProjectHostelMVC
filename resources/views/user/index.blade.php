@extends('layouts.master')

@section('title')
   Профиль
@endsection

@section('content')
   <div class="container">
      <div class="row about">
         <div class="col col-xs-12 col-md-4">
            <div class="thumbnail description">
               <div class="caption">
                  <h2>Добро пожаловать, Пользователь!</h2>
                  <p class="description">
                     ФИО: {{Auth::user()->username}}
                     <br/>
                     Логин: {{Auth::user()->email}}
                     <br/>
                     Факультет: {{Auth::user()->faculty}}
                     <br/>
                     Бронь: {{Auth::user()->room_id}} <a href="#">Снять бронь</a>
                  </p>
                  <br>
                  <!--<a href="#" data-toggle="modal" data-target="#modalEdit" class="btn btn-primary btn-lg">Редактировать</a>-->
               </div>
            </div>
         </div>
         <div class="col col-sm-12 col-md-7 col-md-offset-1">
            <div class="thumbnail description">
               <div class="caption">
                  <h2>Инструкция</h2>
                     <p class="description">
                        Уважаемый студент!
                        Эта система была создана для удобства расселения в
                        сверхкомфортных апартаментах, которые все привыкли называть общагой.
                        На главной странице можно оставить объявление для всех посетителей и
                        для зарегистрированных пользователей. Объявления локального масштаба
                        можно разместить на странице этажа.
                     </p>
                  <br>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title" id="myModalLabel">Редактировать профиль</h4>
            </div>
            <form method="post" action="">
               <div class="modal-body">
                  <div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input type="text" class="form-control" name="username" placeholder="ФИО" required>
                  </div>
                  <div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                     <input type="password" name="password" class="form-control" placeholder="Пароль" required>
                     <input type="hidden" name="_token" value=""/>
                  </div>
                  <div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                     <input type="password" name="repeatPassword" class="form-control" placeholder="Повторите пароль" required>
                     <input type="hidden" name="_token" value=""/>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Редактировать</button>
               </div>
            </form>
         </div>
      </div>
   </div>
@endsection