@extends('master')

@section('content')
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    Usuarios de prueba: <br>
    user: admin <br>
    password: 12345 <br>

    user: admin2 <br>
    password: 12345 <br>

    La búsqueda se mostrará en orden de probabilidades, los registros con más probabilidad a ser elegidos se mostrarán primero


    <div class="form-group">
      {{Form::open(['url'=>'login'])}}
      <b>{{Form::label('username', 'Username:')}}</b>
      {{Form::text('username', Input::old('username'), [
        'class'=>'form-control',
        'placeholder'=>'Username',
        'autocomplete'=>'off',
        'id'=>'username'
      ])}}
      <b>{{Form::label('password', 'Password:')}}</b>
      {{Form::password('password', [
        'class'=>'form-control',
        'placeholder'=>'Password',
        'id'=>'password'
      ])}}
      <br>
      {{Form::submit('Login', [
        'class'=>'btn btn-success',
        'id'=>'boton'
      ])}}
      {{Form::close()}}
    </div>
  </div>
</div>
@stop
