<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Integración Bases de Datos con Bases de Conocimiento</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
  <nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><b>Proyecto AI</b></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
      @if(Auth::check())
        <li><a href="{{url("logout")}}">Logout</a></li>
      @else
        <li><a href="{{url("login")}}">Login</a></li>
      @endif

    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

<div style="margin: 16px">
@yield('content', '')
</div>

@yield('scripts', '')
</body>
</html>
