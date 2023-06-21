@extends('layouts.main-layouts')

@section('content')
    <main style="width:95%; margin:auto;">
        <div class="row mt-5 mb-5">
            <div class="col-lg-12 margin-tb">
                <div class="float-left">
                    <h2>CRUD User</h2>
                </div>
                
                <div class="float-right">
                    <a class="btn btn-primary" href="{{ route('user.create') }}"> Input User</a>
                </div>
            </div>
        </div>
    
        @if ($message = Session::get('succes'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif


        <form class="form" method="get" action="{{ route('search') }}">
        <div class="form-group w-100 mb-3">
        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">

        <button type="submit" class="btn btn-primary mb-1">Cari</button>
    </div>
</form>

        <table class="table table-bordered w-100 overflow-hidden">
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Profile Picture</th>
                <th>Nim</th>
                <th class="text-center">Username</th>
                <th class="text-center">Email</th>
                <th class="text-center">pin1</th>
                <th class="text-center">pin2</th>
                <th class="text-center">Action</th>
            </tr>
            @foreach ($user as $User)
            <tr>
                <td class="text-center">{{ ++$i }}</td>
                <td>
                    @if($User->image)
                    <div style="max-height:150px; overflow:hidden;">
                        <img src="{{asset('storage/' . $User->image)}}" class="img-fluid mt-3" style="width:150px">
                    </div>
                    @else
                    <div style="max-height:150px; overflow:hidden;">
                    <img src="/images/60111.jpg" class="img-fluid mt-3" style="width:150px">
                    </div>
                    @endif
                </td>
                <td>{{ $User->Nim }}</td>
                <td>{{ $User->nama }}</td>
                <td>{{ $User->email}}</td>
                <td>{{ $User->pin1}}</td>
                <td>{{ $User->pin2}}</td>
                
                <td class="text-center">
                    <form action="{{ route('user.destroy',$User->id) }}" method="POST" class="d-flex column-gap-3 justify-content-center">
                        <a class="btn btn-primary btn-sm" href="{{ route('user.show',$User->id) }}" style="width: 70px">Show</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('user.edit',$User->id) }}" style="width: 70px">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" style="width: 70px">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <div style="width: 150px" class="d-flex">
            {!! $user->links('pagination::bootstrap-4')  !!}
        </div>
    </main>


@endsection