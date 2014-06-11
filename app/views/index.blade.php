@extends('master')

@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    {{Form::open(['method'=>'get'])}}
    <div class="row">
      <div class="col-lg-12">
        <div class="input-group">
          {{Form::text('q', $q, [
            'class'=>'form-control',
            'placeholder'=>'Búsqueda',
            'autocomplete'=>'off'
          ])}}
          <span class="input-group-btn">
            {{Form::submit('Buscar',['class'=>'btn btn-success'])}}
          </span>
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
    </div>
    {{Form::close()}}
    <br>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <th class="col-md-1">Id</th>
          <th class="col-md-8">Nombre</th>
          <th class="col-md-3">Probabilidad de Selección</th>
        </thead>
        <tbody>
          @foreach($list as $item)
            <tr>
              <td>{{$item['id']}}</td>
              <td>
                <a href="{{url("empleado/".$item['id'])}}">
                  {{$item['name']}}
                </a>
              </td>
              <td>{{$item['count']}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop
