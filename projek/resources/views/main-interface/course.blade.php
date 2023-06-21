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
                <h4 class="tagline" style="font-size:26px;line-height:inherit;">Raih Keberhasilan Keuangan Melalui Pengetahuan Investasi yang Mendalam!</h4>
                <div>
                    <p style="color:#f9c817; font-weight:600; font-size:16px;">Start learning today</p>
                    <p>Dalam kursus ini, Anda akan belajar tentang dasar-dasar investasi, manajemen risiko, diversifikasi portofolio, analisis fundamental dan teknikal, serta banyak lagi.</p>
                </div>
            </div>
        </div>
        {{-- <div class="container-course-list">
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
        </div> --}}
        <div class="row justify-content-center text-center">
            <div class="col-md-6">
                <h4 class="mt-5 tagline" style="font-size:26px;line-height:inherit;">Naikkan Level Permainan Investasi Anda dengan Kelas Edukasi Jago Investasi</h4>
                <p style="color:#f9c817; font-weight:600; font-size:16px;">Investment Mastery Unleashed</p>
            </div>
        </div>
        <div class="row justify-content-center column-gap-5 mt-5">
            <div class="card col-md-3" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <form method="POST" action="{{ url('/dashboard/check-pin') }}">
                        @csrf
                
                        <label for="pin1">Masukkan PIN:</label>
                        <input type="text" id="pin1" name="pin1" required>
                
                        <button type="submit">Submit</button>
                    </form>
            
                    @if($errors->any())
                        <div>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            <div class="card col-md-3" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
@endsection