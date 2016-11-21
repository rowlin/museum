@extends('layouts.app')

@section('title', 'Музей дружбы')

@section('content')
    <!--начало карусели-->
        <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Слайды карусели -->
            <div class="carousel-inner">
                <?php $count = 0; ?>
                @foreach($slider as $item)
                    <!--последний добавленный будет активным-->
                    @if($count == count($slider)-1)
                        <div class="item  active">
                            @else
                        <div class="item ">
                            <?php $count++;?>
                            @endif
                    <h2>{{$item->desk}}</h2>
                    <img src="{{ $item->image }}" class="center-block" alt="{{ $item->desk }}">
                    <div class="carousel-caption" style="text-align: left ">
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->subtitle }}</p>
                    </div>
                </div>
                    @endforeach
            </div><!--carousel-inner-->
            <!-- Навигация для карусели -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div><!--конец карусели-->
        <div class="projects"><!--начало раздела Проекты-->
            <h3>Мероприятия</h3>
            <div class="row">
                foreach($events as $event)
                <div class="col-md-6">


                </div>
            </div>
        </div><!--конец раздела Проекты-->

        <div class="news"><!--начало раздела Поддержать проект-->
            <h3>Поддержать проект</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis illo asperiores consequatur esse consectetur velit deleniti perferendis eligendi. Molestiae dolorem totam vel delectus, aut quaerat, mollitia, amet tenetur eius placeat quidem eaque praesentium! Ratione laborum maiores neque excepturi hic nisi animi. At nemo inventore saepe necessitatibus labore eum adipisci ex, accusamus id incidunt quo quaerat maxime sequi vero consequatur in, nihil dolor distinctio nisi earum porro asperiores. Voluptatum dolorum autem corporis a voluptas architecto harum dolor expedita aliquam. Illum vel, corporis blanditiis atque possimus beatae incidunt. Vel unde natus velit ex quo. Nam nesciunt suscipit alias earum consectetur esse similique.
            <div id="btn">
                <button class="btn btn-default">Подробнее</button>
            </div>
        </div><!--конец раздела Поддержать проект-->
@endsection

@section('scripts')

@endsection