@extends('master')

@section('content')
<div class="row">
  <div class="col-md-4 col-md-offset-4" style="background-color: #f9f9f9; padding: 10px;">
    <center><h1 style="margin:0">{{$model->name}}</h1></center>
    <hr>
    <a href="/" class="btn btn-success" title="">Volver</a>
  </div>
</div>
@stop
