@extends('layouts.main-layouts')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD User</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('user.create') }}"> Input User</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th width="280px"class="text-center">image</th>
            <th>Nim</th>
            <th width="280px"class="text-center">Nama User</th>
            <th width="280px"class="text-center">email</th>
            <th width="280px"class="text-center">password</th>

            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($user as $User)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>
                @if($User->image)
                <div style="max-height:350px; overflow:hidden;">
                    <img src="{{asset('storage/' . $User->image)}}" class="img-fluid mt-3">
                </div>
                
                @else
                <div style="max-height:350px; overflow:hidden;">
                <img src="/images/60111.jpg" class="img-fluid mt-3">
                </div>
                
                @endif
            </td>
            <td>{{ $User->Nim }}</td>
            <td>{{ $User->nama }}</td>
            <td>{{ $User->email}}</td>
            <td>{{ $User->password}}</td>
            <td class="text-center">
                <form action="{{ route('user.destroy',$User->id) }}" method="POST" class="d-flex">
                    <a class="btn btn-info btn-sm" href="{{ route('user.show',$User->id) }}">Show</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('user.edit',$User->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $user->links() !!}

@endsection