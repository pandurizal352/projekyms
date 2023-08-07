@extends('layouts.main-layouts')

@section('content')
    <div class="course-container">
        <h1 class="tagline" style="font-size:30px">Sekolah Pasar Modal</h1>
        <p style="color:#f9c817; font-weight:600; font-size:16px;">Kuatkan Investasi Anda: Kelas Sekolah Pasar Modal</p>
        <p class="description" style="font-size: 14px">Di website Jago Investasi, Sekolah Pasar Modal menyediakan beragam materi dan sumber daya pendidikan <br> yang dapat diakses secara online. Melalui platform ini, pengguna dapat mempelajari dasar-dasar pasar modal, <br> mengenal instrumen investasi seperti saham, obligasi dan reksa dana, serta memahami berbagai faktor yang <br> mempengaruhi pergerakan harga dan risiko investasi.
        </p>
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