<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="">


    {{ HTML::script('js/all.js') }}
    {{ HTML::style('css/all.css') }}
    @yield('styles')
    <title>@yield('title')</title>
</head>
<body>

<nav class="navbar  navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">

            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Панель навигации</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Музей дружбы</a>
        </div>


        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/calendar') }}">Календарь</a></li>
                <li><a href="{{ url('/vizit') }}">Посещение</a></li>
                <li><a href="{{ url('/buy_ticket') }}">Купить билеты</a></li>
                <li><a href="{{ url('/about') }}">Музей</a></li>
                <li><a href="{{ url('/donation') }}">Поддержать проект</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Поиск...">
            </form>
        </div>
    </div>
</nav>

    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <!--logo (для примера)-->
            <a href="/"><img id="img_logo" alt="Музей Дружбы" src="#"  ></a>
            <!--logo-->
            <!--search panel-->
            <form style="padding:7px;">
                <input type="text" class="form-control" placeholder="Поиск...">
            </form>
            <ul class="nav nav-sidebar">
                <li><a href="{{ url('/calendar') }}">Календарь</a></li>
                <li><a href="{{ url('/vizit') }}">Посещение</a></li>
                <li><a href="{{ url('/buy_ticket') }}">Купить билеты</a></li>
                <li><a href="{{ url('/about') }}">О музее</a></li>
                <li><a href="{{ url('/donation') }}">Поддержать проект</a></li>
                <li><a href="{{ url('/request') }}">Пожелания</a></li>
            </ul>


            <span>
                <h4>Время работы :</h4>
                <p>с 12:00 до 22:00</p>
            </span>
                <hr/>
            <span>
                <h4>Мы находимся:</h4>
                <p>СПБ РазвеЭтоВажно </p>
            </span>
                <hr/>
            </span>
            <h4>Мы в соц. сетях:</h4>
            <i>Иконки</i>
            </span>
            <!--в таком ключе публиуации записей-->
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 ">

            <!--content-->

@yield('content')
            </div>
    </div><!--row-->

@yield('scripts')

</body>
</html>