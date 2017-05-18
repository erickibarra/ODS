<html>
<head>
  <meta charset="UTF-8">
  <title>Ing. Web</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="{{asset("/css/bootstrap.css")}}">
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('admin/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{asset('admin/dist/css/admin.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/dist/css/skins/skin-black.min.css')}}">
</head>
<body>

<div class="wrapper">
  <header class="main-header">
    <a href="index2.html" class="logo">
      <span class="logo-lg"><b>Ing.</b>WEB</span>
    </a>  
  </header>


  <aside class="main-sidebar">
  <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">Carreras</li>

      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
     
    </section>
    <section class="content">
          <!--@yield('titulo')
          @yield('contenido')-->
    </section>
          <div class="container">
          @yield('titulo')
          @yield('contenido')
      </div>
        
  </div>
  </div>

  <footer class="text-center">Ingenieria Web &copy; 2018</footer>
  <script src="{{asset('admin/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
  <script src="{{asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/dist/js/app.min.js')}}"></script>
  <script src="{{asset("js/jquery-3.1.1.js")}}"></script>
  <script src="{{asset("js/bootstrap.min.js")}}"></script>
</body>
</html>