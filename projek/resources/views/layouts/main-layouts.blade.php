<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
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
            <div class="row d-flex column-gap-4 row-gap-0 justify-content-center">
                <div class="col-md">
                    <img src="/images/logo.png" alt="Company Logo" style="width:5em;">
                    <p class="blue-font"><strong>Gallery Investasi UHAMKA.</strong></p>
                    <p> Jl. Raya Bogor KM.23 No.99, RT.4/RW.5, Rambutan, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13830</p>
                    <p>Jakarta, Indonesia</p>
                    <p></p>
                </div>
                <div class="col-md" style="margin-top:5em">
                    <p class="blue-font"><strong>Contact</strong></p>
                    <p><i class="fa-solid fa-phone"></i>  (021) 8400341</p>
                    <p><i class="fa-solid fa-envelope"></i>  galeriinvestasifeb@uhamka.ac.id</p>
                </div>
                <div class="col-md">
                    <p class="blue-font" style="margin-top:5em"><strong>Keep update</strong></p>
                     <a href="https://www.instagram.com/galvest_uhamka/" style="text-decoration: none"><i class="fa-brands fa-instagram fa-2xl"></i></a>
                </div>
            <div class="d-flex justify-content-center mt-4">
                <p style="font-weight:600;">&copy 2023 Gallery Investasi UHAMKA</p>
            </div>
        </footer>
    </div>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>