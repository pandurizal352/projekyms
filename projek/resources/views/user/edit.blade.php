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
                    <p><strong>Image</strong></p>
                    <label for="image" class="form-label">Upload Image</label>
                    <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                    {{-- <input type="file" name="oldImage" value="{{$user->image}}"> --}}
                    @if($user->image)
                    <img src="{{ asset('storage/' . $user->image) }}" class="img-preview img-fluid mb-3 d-block" style="width:200px; height:200px; object-fit:contain;">
                    @else
                    <img class="img-preview img-fluid mb-3" style="width:150px; height:150px;" src="/images/60111.jpg">
                    @endif
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
                
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <div class="form-group">
                        <strong>Pin1</strong>
                        <input type="text" name="pin1" value="{{ $user->pin1}}" class="form-control" placeholder="kode pin1">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                    <div class="form-group">
                        <strong>Pin2</strong>
                        <input type="text" name="pin2" value="{{ $user->pin2}}" class="form-control" placeholder="kode pin2">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role</strong>
                        <select id="cars" name="role" class="form-control " placeholder="role" required="">
                            <option value="1">Admin</option>
                            <option value="0">User</option>
                        </select>                    
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>    
        </form>
    </main>
@endsection
