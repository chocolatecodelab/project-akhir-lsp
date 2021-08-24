<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
        <link rel="stylesheet" href={{asset('css/app.css')}}>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
            <a class="navbar-brand" href="{{ route('welcome')}}">
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

        <div class="container-landing">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <main class="py-4">
                            @yield('content')
                        </main>
                    </div>
                    <div class="col-md-3">
                        <div class="aside">
                            <a href="https://bpptik.kominfo.go.id/jadwal-2/">
                                <img src={{ asset('image/aside1.jpg') }} style="width: 282px; height: 137px; margin-top: 150px;" alt="">
                            </a>
                            <a href="http://202.89.117.140/">
                                <img src={{ asset('image/aside2.png') }} style="width: 282px; height: 137px;" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="containerSosmed justify-content-center">
            <div class="twitter">
                <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fbpptik.kominfo.go.id%2Fsertifikasi%2F&text=Sertifikasi+Kompetensi+Bidang+TIK">Share on Twitter</a>
            </div>
            <div class="facebook">
                <a href="https://facebook.com/sharer.php?u=https%3A%2F%2Fbpptik.kominfo.go.id%2Flsp-bpptik%2F&t=LSP+BPPTIK">Share on Facebook</a>
            </div>
            <div class="google">
                <a href="https://plus.google.com/share?url=https%3A%2F%2Fbpptik.kominfo.go.id%2Flsp-bpptik%2F">Share on Google+</a>
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
</body>
</html>