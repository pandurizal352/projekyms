@extends('layouts.main-layouts')

@section('content')    
<div class="bg-profile" id="profile"> 
    <h3 class="profile-text text-light">Profile.</h3>
    <div class="user-profile">
        <div class="pp-container position-relative d-flex flex-column">
            <!-- <img src="/images/60111.jpg" alt="Profile Picture" class=""> -->
            @if($userImage !== null)
                <img src="{{asset('storage/' . $userImage)}}" class="img-preview profile-picture" alt="Profile Picture">
                @else
                <img src="/images/60111.jpg" class="img-preview profile-picture" alt="Profile Picture">
            @endif
            <label for="image" class="upload-picture-btn"><i class="fa-solid fa-camera"></i></label>
            <form action="{{route('Profilep.update',auth()->user()->id) }}" method="POST" enctype="multipart/form-data" class="pp-container d-flex justify-content-center">
                @csrf
                <input type="file" id="image" value="{{ $userImage }}" onchange="previewImage()" class="form-control" name="image">
                <button type="submit" class="btn btn-primary mt-3" id="simpan">Simpan</button>
            </form>
        </div>
        <h2 class="greetings-1 blue-font fw-semibold">Halo, <span class="time"></span></h2>
        <div class="greetings">
            <h2 class="typing"> {{ auth()->user()->nama}}</h2>
        </div>
        <div class="mt-4 row row-gap-3 justify-content-center">
            <button class="col-md-6 btn-login rounded-1 fw-semibold" style="width:200px!important;"><a href="/change-password" class="link-style" style="color:white;">Ubah Password</a>  <i class="fa-solid fa-lock"></i></button>
            <form action="/logout" method="POST" class="col-md d-flex justify-content-center">
                @csrf
                <button class="btn-login-2 rounded-1 fw-semibold" style="background-image: linear-gradient(to right, #f9c817, #facd1c, #fbd120, #fcd625, #fddb29);" type="submit">LogOut      <i class="fa-solid fa-right-from-bracket"></i></button>
            </form>      
        </div>
    </div>
</div>




@endsection
