<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ITI CRUD</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
      <a class="navbar-brand" href="#">ITI CRUD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/users">All</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('users.create')}}">Create</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  <footer class="footer py-3 bg-light fixed-bottom">
    <div class="container text-center">
      <span class="text-muted">All Rights Reserved</span>
    </div>
  </footer>

  <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>

</html>