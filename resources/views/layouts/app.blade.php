<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Todolist</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
      @yield('content')
    </div>
    <footer class="text-center">
      <p>Copyright &copy; 2017</p>
    </footer>
    @section('javascript')
      <script type="text/javascript" src="/js/app.js"></script>
      @show
  </body>
</html>
