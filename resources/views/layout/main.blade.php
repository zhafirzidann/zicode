<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
  <title>Zhafir Zidan Laravel</title>
</head>

<body>
  @include('sweetalert::alert')
  <!-- This example requires Tailwind CSS v2.0+ -->
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparant">
    <div class="container">
      <img src="/img/logoz.png" alt="" width="70">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
          <a class="nav-link" href="/product">Product</a>
          <a class="nav-link" href="/portfolio">Portfolio</a>
          <a class="nav-link" href="/about">About</a>
          @auth
          <form id="logout" method="post" action="/logout">
            @csrf
            <a href="#" class="nav-link" onclick="document.getElementById('logout').submit()">Logout</a>
          </form>
          @else
          <a class="nav-link" href="/login">Login</a>
          @endauth
        </div>
      </div>
    </div>
  </nav>


  <div class="container-s">
    @yield('zidancode')
  </div>

  <noscript>
    <input type="submit" value="Submit form!" />
  </noscript>

</body>

</html>