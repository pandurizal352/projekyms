<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('js/code.jquery.com_jquery-3.7.0.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <title>Document</title>
</head>
<body>
    <div class="bg-profile" id="profile"> 
        <h2 class="profile-text text-light">TEST Profile.</h2>
        <div class="user-profile">
            <div class="pp-container position-relative d-flex flex-column">
                <img src="/images/60111.jpg" alt="Profile Picture" class="profile-picture">
                <input type="file" id="file">
                <label for="file" class="upload-picture-btn d-none"><i class="fa-solid fa-camera fa-beat"></i></label>
            </div>
            <h2 class="greetings-1 blue-font fw-semibold">Halo, <span class="time"></span></h2>
            <div class="greetings">
                <h2 class="typing"> ${Nama Mahasiswa}</h2>
            </div>
            <div class="mt-4 row gap-4 row-gap-3 justify-content-center">
                <button class="col-md btn-login rounded-1 fw-semibold" style="width:200px!important;">Ubah Password   <i class="fa-solid fa-lock"></i></button>
                <button class="col-md btn-login-2 rounded-1 fw-semibold" style="background-image: linear-gradient(to right, #f9c817, #facd1c, #fbd120, #fcd625, #fddb29);">LogOut      <i class="fa-solid fa-right-from-bracket"></i></button>
            </div>
        </div>
    </div>
</body>
</html>