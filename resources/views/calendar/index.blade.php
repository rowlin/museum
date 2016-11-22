@extends('layouts.app')

@section('styles')
    {{  HTML::style('css/calendar.css') }}
@endsection


@section('content')
    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}

@endsection

@section('scripts')
    {{  HTML::script('js/calendar.js') }}
@endsection $table->dateTime('end_time'); // время конца
