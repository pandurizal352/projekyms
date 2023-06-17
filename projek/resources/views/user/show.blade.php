@extends('layouts.main-layouts')

@section('content')
    <main style="width:90%; margin:auto">
        <div class="row mt-5 mb-5">
            <div class="col-lg-12 margin-tb">
                <div class="float-left">
                    <h2>User Data</h2>
                </div>
                <div class="float-right">
                    <a class="btn btn-secondary" href="{{ route('user.index') }}"> Back</a>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-6">
                    @if($user->image)
                    <img src="{{asset('storage/' . $user->image)}}" class="img-fluid mt-1" style="width:400px; height:400px; object-fit:contain;">
                    @else
                    <img src="/images/60111.jpg" class="img-fluid mt-3" style="height: 120px;">
                    @endif
            </div>
            <div class="col-md-6 d-flex flex-column row-gap-2">
                <p><strong>Nim : </strong>{{ $user->Nim }}</p>   
                <p><strong>Nama : </strong>{{ $user->nama }}</p>   
                <p><strong>Email : </strong>{{ $user->email }}</p>  
                <p><strong>Password : </strong>{{ $user->password }}</p>  
                <p><strong>Role : </strong>{{ $user->role }}</p>
            </div>
    </main>
@endsection