<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/login-style.css">
    <link rel="stylesheet" href="/css/course-style.css">
    <script src="{{asset('js/code.jquery.com_jquery-3.7.0.js')}}"></script>
    <script src="https://kit.fontawesome.com/022d6e0ae6.js" crossorigin="anonymous"></script>
    <title>Jago Investasi | {{ $title }}</title>

</head>
<body>
    <div class="container-fluid">
        <head>
            <x-navbar title="{{ $title }}"/>
        </head>
        <main class="mb-5">
            @yield('content')
        </main>
        <footer id="Footer">
            <img src="" alt="">
        </footer>

    </div>

    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>