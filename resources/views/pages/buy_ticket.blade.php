@extends('layouts.app')

@section('styles')

@endsection


@section('content')
<h2>Купить билеты(записаться на участие)</h2>

    @foreach($events as $event)
        <div class="box">
            {{$event->name}}
            {{ $event->title }}

        </div>
    @endforeach



@endsection

@section('scripts')

@endsection