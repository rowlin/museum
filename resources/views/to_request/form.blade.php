@extends('layouts.app')

@section('title', 'Тестовое задание')

@section('content')
    <div class="projects">
        @foreach($all_tickets as $ticket)
            <div class="box">
                <h4>Сообщение пользователя (#{{$ticket->id}}): {{ $ticket->mail }}</h4>
                <h3>{{$ticket->text}}</h3>
                <p>{{ $ticket->created_at }}</p>
            </div><hr/>
        @endforeach
    </div>

 <!--проверяем ввод-->
  @if($errors->any())
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
      @endforeach
    </div>
  @endif

  @if(isset($ticket))
  <h2>Последнее сообщение (#{{ $ticket->id }}) : </h2>
    <div class="alert alert-info">
      <p>{{ $ticket->mail }}</p>
      <h3>{{ $ticket->text }}</h3>
      <p>{{$ticket->created_at}}</p>
    </div>

    <h2>Ввести новое:</h2>
  @endif

<div class="projects">
  {!! Form::open([
      'route' => 'request.create',
      'method' =>'post'
  ]) !!}
  <div class="form-group">
    <label for="mail">Введите почту:</label>
    <input type="mail" class="form-control"  name="mail" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="message">Введите сообщение:</label>
      <textarea class="form-control" name="text" id="message" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Отправить</button>
{!! Form::close() !!}
</div>
@endsection

