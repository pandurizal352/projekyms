@extends('layouts.main-layouts')

@section('content')
    <div class="course-container">
        <h2>Test Course</h2>
        @foreach ($videos as $video)
            <div class="course-list">
                <h2>{{ $video->title}}</h2>
                <div>
                    {!! $video->video !!}
                </div>
            </div>
        @endforeach
    </div>
@endsection