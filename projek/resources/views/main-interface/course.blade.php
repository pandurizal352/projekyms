@extends('layouts.main-layouts')

@section('content')
    <div class="course-container">
        <div class="row">
            <div class="image-container col-md-6">
                <img src="/images/galvest-room.png" alt="Galvest Room Image">
                <span class="task-1">Pengenalan Investasi</span>
                <span class="task-2">Praktek Investasi</span>
                <span class="task-3">Implementasi Investasi</span>
            </div>
            <div class="main-text col-md-6 d-flex flex-column justify-content-center row-gap-3">
                <h4>Raih Keberhasilan Keuangan Melalui Pengetahuan Investasi yang Mendalam!</h4>
                <div>
                    <p style="color:#f9c817; font-weight:600; font-size:16px;">Start learning today</p>
                    <p>Dalam kursus ini, Anda akan belajar tentang dasar-dasar investasi, manajemen risiko, diversifikasi portofolio, analisis fundamental dan teknikal, serta banyak lagi.</p>
                </div>
            </div>
        </div>
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