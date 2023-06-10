@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show User</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('user.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                @if($user->image)
                <img src="{{asset('storage/' . $user->image)}}" class="img-fluid mt-3" style="height: 120px;">
                @else
                <img src="/images/60111.jpg" class="img-fluid mt-3" style="height: 120px;">
                @endif
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nim:</strong>
                {{ $user->Nim }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nama :</strong>
                {{ $user->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email :</strong>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>role :</strong>
                {{ $user->role }}
            </div>
        </div>
        
    </div>
@endsection