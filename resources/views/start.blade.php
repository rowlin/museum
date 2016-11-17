@extends('layouts.app')

@section('title', 'Музей дружбы')

@section('content')

    <div class="row" id="slider" >

        <ul id="imageGallery">
           @foreach($slider as $img)
                <li data-thumb="{{ $img->image }}" data-src="{{ $img->image }}">
                    <img src="{{ $img->image }}" id="slider-img"/>
                    <!--span id="slider-text">{!! $img->desk !!}</span-->
                </li>
            @endforeach
        </ul>
    </div><!--row-->



@endsection