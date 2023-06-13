@extends('layouts.main-layouts')

@section('content')
    <main style="width: 90%; margin:auto;">
        <div class="row mt-5 mb-5">
            <div class="col-lg-12 margin-tb">
                <div class="float-left">
                    <h2>Edit User</h2>
                </div>
                <div class="float-right">
                    <a class="btn btn-secondary" href="{{ route('user.index') }}"> Back</a>
                </div>
            </div>
        </div>
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nim:</strong>
                        <input type="text" name="Nim" class="form-control" placeholder="NIS User" value="{{ $user->Nim }}">
                    </div>
                </div>
        
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="image" class="form-label"><strong>Image</strong></label>
                    {{-- <input type="" name="oldImage" value="{{$user->image}}"> --}}
        
                    @if($user->image)
                    <img src="{{ asset('storage/' . $user->image) }}" class="img-preview img-fluid mb-3 d-block">
                    @else
                    <img class="img-preview img-fluid mb-3" style="width:150px; height:150px;">
                    @endif
                    <input class="form-control " type="file" id="image" name="image" onchange="previewImage()">
                </div>
        
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
        
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <div class="form-group">
                        <strong>Nama User</strong>
                        <input type="text" name="nama" value="{{ $user->nama}}" class="form-control" placeholder="NAMA User">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email</strong>
                        <input type="text" class="form-control"  name="email" value="{{ $user->email}}" placeholder="Content"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password</strong>
                        <input type="password" class="form-control"  name="password"  value="" placeholder="Content"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role</strong>
                        <input type="text" class="form-control"  name="role"  value="" placeholder="user = 0 admmin= 1"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>    
        </form>
    </main>
        <!--  java script gambar nya ya  -->
    <script>
        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
