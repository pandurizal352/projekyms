@extends('layouts.main-layouts')

@section('content')    
<div class="bg-profile" id="profile"> 
    <h2 class="profile-text text-light">TEST Profile.</h2>
    <div class="user-profile">
        <div class="pp-container position-relative d-flex flex-column">

            <!-- <img src="/images/60111.jpg" alt="Profile Picture" class=""> -->
            @if($user)
                <img src="{{asset('storage/' . $user)}}" class="profile-picture" alt="Profile Picture">
                @else
                <img src="/images/60111.jpg" class="profile-picture" alt="Profile Picture">
                @endif
            
            <input type="file" id="file">
            <label for="file" class="upload-picture-btn d-none"><i class="fa-solid fa-camera fa-beat"></i></label>
        </div>
        <h2 class="greetings-1 blue-font fw-semibold">Halo, <span class="time"></span></h2>
        <div class="greetings">
            <h2 class="typing"> {{ auth()->user()->nama}}</h2>
        </div>
        <div class="mt-4 row gap-4 row-gap-3 justify-content-center">
            <button class="col-md btn-login rounded-1 fw-semibold" style="width:200px!important;">Ubah Password   <i class="fa-solid fa-lock"></i></button>
            <button class="col-md btn-login-2 rounded-1 fw-semibold" style="background-image: linear-gradient(to right, #f9c817, #facd1c, #fbd120, #fcd625, #fddb29);">LogOut      <i class="fa-solid fa-right-from-bracket"></i></button>
        </div>
        <select name="cars" id="cars">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
    </div>
</div>




@endsection
