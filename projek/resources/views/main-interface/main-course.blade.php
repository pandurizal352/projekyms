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
    <script src="{{asset('js/code.jquery.com_jquery-3.7.0.js')}}"></script>
    <script src="https://kit.fontawesome.com/022d6e0ae6.js" crossorigin="anonymous"></script>
    <title>Jago Investasi | Course</title>
</head>
<body>
    <div class="container-fluid">
        <head>
            <div class="d-flex align-items-center p-4">
                <img src="/images/logo.png" alt="" style="width:3.4em;" class="rounded">
                <h5 class="blue-font fw-bold fs-6"><u>Jago</u><span class="invest-text rounded ms-1">Investasi</span></h5>
            </div>
            <div class="bg-profile">
                <h2 class="profile-text text-light">Profile.</h2>
                <div class="user-profile">
                    <div class="pp-container position-relative d-flex flex-column">
                        <img src="/images/60111.jpg" alt="Profile Picture" class="profile-picture">
                        <input type="file" id="file">
                        <label for="file" class="upload-picture-btn d-none"><i class="fa-solid fa-camera fa-beat"></i></label>
                    </div>
                    <h2 class="greetings-1">Halo, <span class="time"></span></h2>
                    <div class="greetings">
                        <h2 class="typing"> ${Nama Mahasiswa}</h2>
                    </div>
                    <div class="mt-4 row gap-4 row-gap-3 justify-content-center">
                        <button class="col-md btn-login rounded-1" style="width:200px!important;">Ubah Password   <i class="fa-solid fa-lock"></i></button>
                        <button class="col-md btn-login-2 rounded-1" style="background-image: linear-gradient(to right, #f9c817, #facd1c, #fbd120, #fcd625, #fddb29);">LogOut      <i class="fa-solid fa-right-from-bracket"></i></button>
                    </div>
                </div>
            </div>
        </head>
        <main>

        </main>
    </div>

    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>