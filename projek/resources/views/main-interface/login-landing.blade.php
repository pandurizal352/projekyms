<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jago Investasi</title>
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
        <div class="col-md-8 py-md-4 ps-4">
          <div class="d-none d-md-flex align-items-center">
            <img src="/images/logo.png" alt="" style="width:3.4em;" class="rounded">
            <h5 class="blue-font fw-bold fs-6"><u>Jago</u><span class="invest-text rounded ms-1">Investasi</span></h5>
          </div>
          <div class="main-wrapper">
            <div class="welcome">Welcome</div>
            <h1 class="tagline">Pelajari, Investasi, Raih Kebebasan Finansial!</h1>
            <p class="description">"Ungkap potensi keuntungan pasar saham dengan Yuk Melek Saham. Pelajari strategi, analisis, dan manajemen risiko untuk kebebasan finansial Anda."</p>
            <p class="description">LogIn sekarang untuk akses modul pembelajaran!</p>
            <button class="btn-login mb-5 rounded fw-semibold">Join us!</button>
          </div>
        </div>
        <div class="mobile-title col-md-4 pt-3">
          <div class="d-md-none d-flex align-items-center column-gap-2">
            <img src="/images/logo.png" alt="" style="width:40px; background-color:white;" class="rounded">
            <h5 class="d-md-none mt-2"><u>Jago</u><span class="invest-text rounded-1">Investasi</span></h5>
          </div>
        </div>
      </div>    
    </div>
    <div class="login-container position-absolute top-50 start-50 translate-middle bg-light rounded-2">
      <i class="fa-regular fa-circle-xmark"></i>
      
      <form action="/"  method="post" class="d-flex flex-column justify-content-center p-5 mt-5">
        @csrf
        <h2 class="login-text fw-semibold">Login</h2>
        <div class=" d-flex flex-column row-gap-3 mt-3">
          <div class="input-container d-flex align-items-center column-gap-2">
            <i class="fa-solid fa-user"></i>
            <input type="email" name="email" class="input @error('email') is-invalid @enderror" placeholder="name@example.com" autofocus required value="{{old('email')}}">
            @error('email')
                    <div class='invalid-feddback'>
                        {{$message}}    
                    </div>
            @enderror
          </div>
          <div class="input-container d-flex align-items-center column-gap-2">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="password" id="Password" class="input" placeholder="Password" required>
            <div class="password-hide-icon">
              <i class="fa-solid fa-eye-slash"></i>
              <i class="fa-solid fa-eye d-none"></i>
            </div>
          </div>
          <button type="submit" class="btn-login-2 w-100 rounded-1 fw-semibold">Login</button>
        </div>
      </form>

    </div>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>