@extends('layouts.main-layouts')

@section('content')    
<div class="bg-profile" id="profile"> 
    <h2 class="profile-text text-light">TEST Profile.</h2>
    <div class="user-profile">
        <div class="pp-container position-relative d-flex flex-column">

            <!-- <img src="/images/60111.jpg" alt="Profile Picture" class=""> -->
            @if($userImage !== null)
                <img src="{{asset('storage/' . $userImage)}}" class="profile-picture" alt="Profile Picture">
                @else
                <img src="/images/60111.jpg" class="profile-picture" alt="Profile Picture">
                @endif
            
            <input type="file" id="file" value="{{ $userImage }}">
            <label for="file" class="upload-picture-btn d-none"><i class="fa-solid fa-camera fa-beat"></i></label>
        </div>
        <h2 class="greetings-1 blue-font fw-semibold">Halo, <span class="time"></span></h2>
        <div class="greetings">
            <h2 class="typing"> {{ auth()->user()->nama}}</h2>
        </div>
        <div class="mt-4 row gap-4 row-gap-3 justify-content-center">
                <button class="btn-login rounded-1 fw-semibold" style="width:200px!important;"><a href="/change-password" class="link-style" style="color:white;">Ubah Password</a>  <i class="fa-solid fa-lock"></i></button>      
                <button class="btn-login-2 rounded-1 fw-semibold" style="background-image: linear-gradient(to right, #f9c817, #facd1c, #fbd120, #fcd625, #fddb29);">LogOut      <i class="fa-solid fa-right-from-bracket"></i></button>
        </div>
    </div>
</div>




@endsection
