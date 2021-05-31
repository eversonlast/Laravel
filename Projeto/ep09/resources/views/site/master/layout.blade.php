<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>Treinamento Laravel</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Treinamento</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link {{Route::current()->getName() === 'site.home' ? 'active': ''}}" aria-current="page" href="{{route('site.home')}}">Home</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link {{Route::current()->getName() === 'site.courses' ? 'active': ''}}" href="{{route('site.courses')}}">Cursos</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link {{Route::current()->getName() === 'site.contact' ? 'active': ''}}" href="{{route('site.contact')}}">Contato</a>
                </li>
              </ul>
              {{-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form> --}}
            </div>
          </div>
        </nav>
      </header>
      
      <main>
      
       @yield('content')
      
      
        <!-- FOOTER -->
        <footer class="container">
          <p class="float-end"><a href="#">Back to top</a></p>
          <p>&copy; {{ date('Y')}} Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
      </main>
      
</body>
</html>