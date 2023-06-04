<!DOCTYPE html>
<html>
<head>
    <title>Tutorial CRUD Laravel 8 untuk Pemula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <!-- untuk menghilangkan apa bila dia bukan admin-->
        @can('admin')
        <a class="nav-link" href="/sisw">siswa</a>
        @endcan
        <a class="nav-link" href="/user">user</a>
        <a class="nav-link disabled">Disabled</a>
      </div>
    </div>
  </div>

  <div>
  @auth
  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            welcome back suu,{{ auth()->user()->nama}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">my, dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <form action="/logout"  method="post">
                @csrf
                <button type="submit" class="dropdown-item">log out</button>
            </form>
            
          </ul>
        </li>
  @else
  
  <a class="nav-link" href="/login">login</a>
  
  @endauth
</div>

</nav>
<h1>halo </h1> 
    @yield('content')
</div>

</body>
</html>