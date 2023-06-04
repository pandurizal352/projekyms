<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .form-signin {
  max-width: 330px;
  padding: 1rem;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
@if(session()->has('success'))
                <div class="alert alert-succes alert-dismissible fade show" role="alert">
                    {{ session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            @endif
            
 @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            @endif     
    <div class="row justify-content-center">
        
        <div class="col-md-6">
       
                <main class="form-signin w-100 m-auto">
                    
                    <h1 class="h3 mb-4 fw-normal">Please sign in</h1>
                   
                <form action="/login" method="post">
                

                    @csrf
                    <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" placeholder="name@example.com" autofocus required value="{{old('email')}}" >
                    <label for="floatingInput">Email address</label>
                    @error('email')
                    <div class='invalid-feddback'>
                        {{$message}}    
                    </div
                    @enderror
                    </div>
                    <div class="form-floating">
                    <input type="password" class="form-control" name="password"  placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                    </div>
                
                
                    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                   
                </form>
                </main>

        </div>
    </div>
</div>
</body>
</html>