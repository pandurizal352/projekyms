@extends('layouts.main-layouts')

@section('content')
    <div class="course-container">
        <h1 class="tagline" style="font-size:30px">Kelas Investasi</h1>
        <p style="color:#f9c817; font-weight:600; font-size:16px;">Kuatkan Investasi Anda: Kelas Investasi</p>
        <p class="description" style="font-size:15px">Kelas Investasi adalah program pendidikan daring yang memberikan pemahaman praktis dan keterampilan dalam berinvestasi, meliputi dasar-dasar investasi hingga strategi investasi yang canggih, dengan akses ke materi pembelajaran berkualitas dan latihan praktis. Cocok untuk pemula dan mereka yang ingin meningkatkan pengetahuan investasi mereka.</p>
        <div class="container-course-list">
            @foreach ($videos as $video)
                <div class="course-list">
                    <div class="d-flex justify-content-between">
                        <h5>{{ $video->title}}</h5>
                        <i class="fa-solid fa-caret-down fa-xl" id="arrow"></i>
                    </div>
                    <div class="course-video">
                        {!! $video->video !!}
                    </div>
                    <article>
                        {{$video->article}}
                    </article>
                </div>
            @endforeach
        </div>
    </div>
@endsection