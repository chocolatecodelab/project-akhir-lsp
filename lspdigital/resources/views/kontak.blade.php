@extends('layouts.app')

@section('content')
<section class="contact" id="contact">
    <div class="container">
      <h2 class="text-center mt-5">Contact<span> Us</span></h2>
      <div class="hr justify-content-center">
        <hr>
    </div>
    <div data-aos="fade-right" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine" class="container">
        <div class="row justify-content-center contactContainer">
            <div class="col-md-4 col-sm-12">
              <div class="card">
                  <div class="card-body">
                      <div class="card-title">
                          <h4>Contact Information</h3>
                          <p>If you have any question, fill up the form, we will get back to within 24 hours</p>
                      </div>
                      <div class="card-icon">
                          <div class="telpon ">
                              <p><i class="fas fa-phone-alt mr-3"></i>+62 21 28645000</p>
                          </div>
                          <div class="email">
                              <p><i class="fas fa-envelope mr-3"></i> bpptik@kominfo.go.id</p>
                          </div>
                          <div class="visit">
                              <i class="fas fa-map-marker-alt mr-3"></i><p>Jl. Jalan Sekolah Hijau Kav. 2 Jababeka, Cikarang Utara, Kabupaten Bekasi 17530</p>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-md-8 col-sm-12 formpart1">
                <div class="formContainer">
                  <div class="col-md-5 col-sm-12 formpart2">
                      <form action="#" method="GET">
                          <div class="mb-3 mt-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                            <input  placeholder="Masukkan Nama Depan" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input placeholder="Masukkan Email" type="password" class="form-control" id="exampleInputPassword1">
                          </div>
                    </div>
                    <div class="col-md-5 col-sm-12 formpart3">
                          <div class="mb-3 mt-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
                            <input placeholder="Masukkan Nama Belakang" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Pekerjaan</label>
                            <input placeholder="Masukkan Password" type="password" class="form-control" id="exampleInputPassword1">
                          </div>
                    </div>
                </div>
                  <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                      <textarea placeholder="Masukkan Pesan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="buttonSubmit text-right">
                      <button type="submit"  class="btn">Submit</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</section>
@endsection