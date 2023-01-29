<!DOCTYPE html>
  <html lang="es" spellcheck="true">
    <head>
      <meta charset="utf-8" />
      <title>Tech Service</title>
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-theme.min.css') }}">

      <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>

      <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free-5.0.7/svg-with-js/css/fa-svg-with-js.css') }}">
      <script type="text/javascript" src="{{ asset('/plugins/fontawesome-free-5.0.7/svg-with-js/js/fontawesome-all.min.js') }}"></script>

      <link rel="stylesheet" href="{{ asset('/plugins/DataTables/datatables.min.css') }}">
      <script type="text/javascript" src="{{ asset('/plugins/DataTables/datatables.min.js') }}"></script>

      <script type="text/javascript" src="{{ asset('/js/sweetalert2.min.js') }}"></script>
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/sweetalert2.min.css') }}">

      <link rel="stylesheet" href="{{ asset('/css/handler_jb.css') }}">
      <script type="text/javascript" src="{{ asset('/js/handler_jb.js') }}"></script>

      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <style media="screen">
        *{
           margin: none;
         }
      </style>

    </head>
        <body >
          <input type="text" id="tcno" name="tcno" value="0" hidden>
          <div>
        <nav class="navbar navbar-inverse" id="navi" >
          <div class="container-fluid">
            <div class="navbar-header">
              <span class="icon-bar"></span>
              <a class="navbar-brand" href="{{ route('pages.home') }}"><img src="logo.png" width="48" style="transform: translateY(-10px);"></a>
              </div>
            <ul class="nav navbar-nav">
              <li>
                  <a class="dropdown-toggle" data-toggle="dropdown">User: Juan<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="">Change Password</a></li>
                    <li><a href="">Account</a></li>
                    <li><a href="">Profile</a></li>
                  </ul>
              </li>
              <li><p class="navbar-text">Type: Operator</p></li>
              <li id="brrInsertHelp"><a href="">Insert Help</a></li>
              <li id="brrListCurrentServices"><a href="">List Current Services</a></li>
              <li id="brrDashboardOperations"><a href="">Dashboard Operations</a></li>

              <li id="brrListaHistoricaTickets">
                  <a class="dropdown-toggle" data-toggle="dropdown">Historials<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="">Historial User</a></li>
                    <li><a href="">Historial Attentions</a></li>
                  </ul>
              </li>
              <li><a href="">Log out</a></li>
            </ul>
          </div>
        </nav>
  </div>
  <div id="jbSeparacionMenuBody">
    @yield('content')
  </div>

  <style media="screen">
  #navi{
    background: url({{ asset('/img/navbar.js') }});
    background-color: lavender;
  }
  nav.ul nav.li{
    font-family: sans-serif;
    font-size: 100%;
  }
  </style>
</body>
</html>
