<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{asset('css/bootstrap.min.css') }}>
        <link rel="stylesheet" href={{asset('css/welcome.css')}}>

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>

          
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src={{asset('image/logo-bpptik.png')}} alt="" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link text-center"  href="{{ route('visimisi') }}">Visi Dan Misi </a>
                    <a class="nav-link text-center" href="{{ route('strukturorganisasi') }}">Struktur Organisasi</a>
                    <a class="nav-link text-center" href="{{ route('ruangLingkup') }}">Ruang Lingkup</a>
                    <a class="nav-link text-center" href="{{ route('skemasertifikasi') }}">Skema Sertifikasi</a>
                    <a class="nav-link text-center" href="{{ route('kontak') }}">Kontak</a>
                </div>
            </div>
        </nav>

        <div  class="container-landing">
            <div class="container">
                <div class="row landing-bag">
                    <div class="col-md-6 sm-12 text" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <p class="titleLanding"><span>Welcome</span> To<br></p>
                        <p class="titleLanding2"><span>LSP</span> Digital Teknologi<span>.</span> </p>
                    </div>
                    <div class="col-md-6 sm-12 tombolPelatihan">
                        <a href="https://bpptik.kominfo.go.id/jadwal-2/" class="pelatihanTIK">Pelatihan Teknis TIK</a><br><br>
                        <a href="http://202.89.117.140/" class="pelatihanSKKNI">Pelatihan dan Sertifikasi SKKNI</a>  
                    </div>    
                </div>
                <div class="footer fixed-bottom">
                    <div class="title">
                        <p> Copyright © 2021 BPPTIK. All Rights Reserved</p>
                    </div>
                </div>
            </div> 
        </div>    
        <script src={{ asset('js/bootstrap.min.js') }}></script>
    </body>
</html>
