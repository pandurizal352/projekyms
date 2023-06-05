<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yuk-Melek-Saham||Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/login-style.css">
    <script src="{{asset('js/code.jquery.com_jquery-3.7.0.js')}}"></script>
    <script src="https://kit.fontawesome.com/022d6e0ae6.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-fluid overflow-x-hidden">
      <div class="wrapper d-flex flex-column-reverse flex-md-row pb-md-0">
        <div class="col-md-8 py-md-5 ps-4">
          <h5 class="blue-font d-none d-md-block fw-bold fs-5"><i>YukMelekSaham.</i></h5>
          <div class="main-wrapper">
            <div class="welcome">Welcome</div>
            <h1 class="tagline">Pelajari, Investasi, Raih Kebebasan Finansial!</h1>
            <p class="description">"Ungkap potensi keuntungan pasar saham dengan Yuk Melek Saham. Pelajari strategi, analisis, dan manajemen risiko untuk kebebasan finansial Anda."</p>
            <p class="description">LogIn sekarang untuk akses modul pembelajaran!</p>
            <button class="btn-login mb-5 rounded">Join us!</button>
          </div>
        </div>
        <div class="hello col-md-4 pt-3">
          <div class="d-md-none">
            <h5 class="d-md-none"><i>YukMelekSaham.</i></h5>
          </div>
        </div>
      </div>    
    </div>
    <div class="login-container position-absolute top-50 start-50 translate-middle bg-light rounded-2">
      <i class="fa-regular fa-circle-xmark"></i>
      <form action="" class="d-flex flex-column justify-content-center p-5 mt-5">
        <h2>Login</h2>
        <div class=" d-flex flex-column row-gap-3 mt-3">
          <div class="input-container d-flex align-items-center column-gap-2">
            <i class="fa-solid fa-user"></i>
            <input type="text" name="NIM" id="NIM" class="input">
          </div>
          <div class="input-container d-flex align-items-center column-gap-2">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="Password" id="Password" class="input">
          </div>
          <button type="submit" class="btn-login w-100 rounded-1">Login</button>
        </div>
      </form>
    </div>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>