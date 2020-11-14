<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('titulo')</title>
</head>
<body>
    <header>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="{{Route('Inicio')}}">Doble Regi&oacute;n</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                  <a class="nav-item nav-link active" href="{{Route('Inicio')}}">Inicio</a>
                    <a class="nav-item nav-link" href="{{Route('Albumes')}}">&Aacute;lbumes</a>
                    <a class="nav-item nav-link" href="{{Route('Contacto')}}">Contacto</a>
                    <a class="nav-item nav-link" href="{{Route('Biografia')}}">Biograf&iacute;a</a>
                  </div>
                </div>
              </nav>
        </div>
    </header>
    @yield('body')
    <footer>
      <div class="container">
        
      </div>
    </footer>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>