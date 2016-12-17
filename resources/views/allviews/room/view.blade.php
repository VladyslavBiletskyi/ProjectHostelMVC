@extends('layouts.master')

@section('title')
Комната
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col col-sm-12 col-md-8 col-md-offset-2">
            <div id="carousel-room" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-room" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-room" data-slide-to="1"></li>
                    <li data-target="#carousel-room" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="http://www.fullmoonhostel.com/photo/4.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="https://i.szalas.hu/hotels/480351/original/8704887.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="https://i.szalas.hu/hotels/480351/original/8704857.jpg" alt="">
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-room" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-room" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-xs-12 col-md-6">
            <div class="thumbnail description">
                <div class="caption">
                    <h2>О нас</h2>
                    <p class="description">
                        Прекрасная комната для жизни и смерти! Только самые свежие
                        и хрустящие тараканы специально для вас!
                        Есть даже горячая вода с 3:30 до 4:00 каждый день!
                        У вас есть уникальная возможность засыпать под умиротворяющее
                        пение ветра в оконных щелях и созерцать прекрасный вид на свалку под окном.
                        Каждому жильцу предоставляется персональный санузел класса Ведро-М1,
                        а также безлимитный абонемент на национализацию чужой еды
                        из общественного холодильника.
                        Удобные комфортные кровати с панцирной сеткой всегда готовы
                        подарить вам прекрасный отдых на целую ночь и для многих
                        являются ложем мечты(парни с подкатанными джинсами
                        спят в углу возле санузлов).
                        Отделка стен выполнена в новейшем стиле "газет-престиж"
                        теперь жильцам не понадобится придумывать новые теориии квантовой
                        механики перед сном. Статьи на стенах закончатся нескоро.
                        Комната находится в уютном панельном крупнощелевом здании и подарит
                        жильцам массу положительных эмоций в зимнее время года. Новогодняя
                        атмосфера будет заметна сразу же после выхода из-под одеяла.
                        Возле окна предусмотрено специальное средство для озонирования
                        воздуха, на которое жильцы смогут ставить свои носки.
                        Поселяйтесь в общежитие "Одуванчик"!
                        Общежитие "Одуванчик" - "Не дай Бог, приснится".
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary btn-lg">Забронировать</a>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection