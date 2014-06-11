@extends('master')

@section('content')
<div class="row">
  <div class="col-md-4 col-md-offset-4">
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
