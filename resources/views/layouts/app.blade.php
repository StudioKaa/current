<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Current</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <script src="https://use.fontawesome.com/30b7c2b05b.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
      <div>
        <a class="navbar-brand" href="{{ url('educations') }}">Curr<span class="text-muted">ent</span></a><div class="navbar-text">&nbsp;@yield('page-title')</div>
      </div>
      <div class="btn-group">
        @yield('buttons-right')
        @if(Auth::check())
          <a class="btn btn-outline-secondary navbar-text" href="#"><i class="fa fa-user"></i>&nbsp;{{ Auth::user()->name }}</a>
          <a class="btn btn-outline-secondary navbar-text" href="/logout"><i class="fa fa-sign-out"></i></a>
        @endif
      </div>
    </nav>

    <div class="main">
      <div class="container">
            @yield('content')
      </div>
    </div>

    <footer class="text-muted">
      <div class="container">
        <p><small>Designed, built and powered by <a target="_blank" href="http://studiokaa.co">studioKaa</a>, for Team ICO at Radius College.</small></p>
      </div>
    </footer>

    <script type="text/javascript" src="/js/script.js"></script>
  </body>
</html>