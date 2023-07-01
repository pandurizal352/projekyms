@extends('layouts.main-layouts')

@section('content')
    <div class="course-container">
        <div class="row">
            <div class="image-container col-md-6">
                <img src="/images/logo.png" alt="logo galvest" style="background-color: white">
                <span class="task-1">Pengenalan Investasi</span>
                <span class="task-2">Praktek Investasi</span>
                <span class="task-3">Implementasi Investasi</span>
            </div>
            <div class="main-text col-md-6 d-flex flex-column justify-content-center row-gap-3">
                <div>
                    <h4 class="tagline" style="font-size:26px;line-height:inherit;">Galeri Investasi Syariah</h4>   
                    <p style="color:#f9c817; font-weight:600; font-size:16px;">Universitas Muhammadiyah Prof. Dr. Hamka</p>
                </div>
                <p>Dalam kursus ini, Anda akan belajar tentang dasar-dasar investasi, manajemen risiko, diversifikasi portofolio, analisis fundamental dan teknikal, serta banyak lagi.</p>  
                <a href="#kelas"><button type="submit" class="access-button">Mulai Belajar</button></a>              
            </div>
        </div>
        <div class="row justify-content-center text-center" style="margin-top:50px">
            <div class="col-md-6" >
                <h4 class="mt-5 tagline" style="font-size:26px;line-height:inherit;">Naikkan Level Permainan Investasi Anda dengan Kelas Edukasi Jago Investasi</h4>
                <p style="color:#f9c817; font-weight:600; font-size:16px;">Investment Mastery Unleashed</p>
            </div>
        </div>
        <div class="row justify-content-center column-gap-5 mt-5" id="kelas">
            <div class="card col-md-3 pt-3" style="width: 18rem;">
                <img src="/images/spm-card.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title tagline" style="font-size:20px; line-height:inherit">Sekolah Pasar Modal</h5>
                  <p class="description" style="font-size:14px">Tingkatkan pemahaman dan keahlian investasi saham Anda! Bergabunglah dengan kelas pasar modal kami sekarang!.</p>
                    <form method="POST" action="{{ url('/dashboard/check-pin') }}">
                        @csrf
                
                        <label for="pin1" class="description" style="font-size:14px">Masukkan PIN:</label>
                        <input type="text" id="pin1" name="pin1" required>
                
                        <button type="submit" class="access-button">Masuk</button>
                    </form>
            
                    @if(session('pinError'))
                        <div class="alert alert-danger mt-3 text-center">{{session('pinError')}}</div>
                    @endif
                </div>
            </div>
            <div class="card col-md-3 pt-3" style="width: 18rem;">
                <img src="/images/kelas_investasi-card.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title tagline" style="font-size:20px; line-height:inherit">Kelas Investasi</h5>
                  <p class="description" style="font-size:14px">Optimalkan strategi investasi Anda! Bergabunglah dengan kelas investasi     untuk keuntungan jangka panjang.</p>
                    <form method="POST" action="{{ url('/dashboard/check-pin2') }}">
                        @csrf
                
                        <label for="pin1" class="description" style="font-size:14px">Masukkan PIN:</label>
                        <input type="text" id="pin2" name="pin2" required>
                
                        <button type="submit" class="access-button">Masuk</button>
                    </form>
            
                    @if(session('pin2Error'))
                        <div class="alert alert-danger mt-3 text-center">{{session('pin2Error')}}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection