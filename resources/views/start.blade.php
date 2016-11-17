@extends('layouts.app')

@section('title', 'Музей дружбы')

@section('content')
    <div class="row" id="slider" >
        <ul id="imageGallery">
           @foreach($slider as $img)
                <li data-thumb="{{ $img->image }}" data-src="{{ $img->image }}">
                    <img src="{{ $img->image }}" id="slider-img"/>
                </li>
            @endforeach
        </ul>
    </div><!--row-->

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#imageGallery').lightSlider({
                item:1,
                loop:true,
                slideMargin:0,
                enableDrag: true,
                adaptiveHeight:true,
                verticalHeight:295,
                slideMargin:0,
                useCSS: true,
                speed:2000,
            });
        });
    </script>
@endsection