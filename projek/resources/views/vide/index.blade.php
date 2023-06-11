@extends('../template')

@section('content')
<div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD LARAVEL 8</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('sisw.create') }}"> Input Siswa</a>
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
            <th>Judul</th>
            <th width="280px"class="text-center">video</th>
            <th width="280px"class="text-center">artikel</th>
           
        </tr>
        @foreach ($vide as $videos)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $videos->judul }}</td>
            <td>{!! $videos->video !!}</td>
            <td>{{ $videos->artikel }}</td>
        </tr>
        @endforeach
    </table>

    {!! $vide->links() !!}

@endsection