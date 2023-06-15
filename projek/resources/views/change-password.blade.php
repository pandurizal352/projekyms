@extends('layouts.main-layouts')

@section('content')    
<div style="width: 95%; margin:auto;">
    <form action="change-password" method="post" class="w-50">
        @csrf
        @if(session('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        <div class="mb-3">
            <label for="OldPassword"><strong>Password</strong></label>
            <input type="password" class="form-control" id="oldpassword" name="old_password" class="">
        </div>
        <div class="mb-3">
            <label for="NewPassword"><strong>Password Baru</strong></label>
            <input type="password" class="form-control" id="Newpassword" name="New_password" class="">
        </div>
        <div class="mb-3">
            <label for="ReapetPassword"><strong>Konfirmasi Password</strong></label>
            <input type="password" class="form-control" id="Reapetpassword" name="Reapet_password" class="">
        </div>
        <div>
            <div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection