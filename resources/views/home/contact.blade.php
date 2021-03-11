@extends('layouts.frontend.app',[
    'title' => 'Contact',
])
@section('content')
<section class="contact-area">
    <div class="container">
        <div class="row">
            <!-- Contact Info -->
            <div class="col-12 col-lg-6">
                <div class="contact--info mt-50">
                    <h4>Info Kontak</h4>
                    <ul class="contact-list">
                        <li>
                            <h6><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i> Jam Masuk</h6>
                            <h6>9:00 WIB  - 17:00 WIB</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-phone fa-fw" aria-hidden="true"></i> No Telp</h6>
                            <h6>+1 123 321 456 654</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> Email</h6>
                            <h6>laraschool@examlpe.com</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-map-pin fa-fw" aria-hidden="true"></i> Alamat</h6>
                            <h6>Berlin,Germany</h6>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="contact--info mt-50 mb-50">
                    <h4>Tulis Pesan</h4>
                    <form method="POST" action="">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama" id="text" placeholder="Nama">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="isi" id="message" cols="30" rows="5" placeholder="Pesan"></textarea>
                                    <small id="emailHelp" class="form-text text-muted">Maksimal kirim 5 kali dengan email yang sama</small>
                                    @error('isi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            @csrf
                            <div class="col-12">
                                <button class="btn clever-btn w-100" type="submit">Kirim</button>
                            </div>
                        </div>
                    <!-- </form> -->
                    </form>
                </div>
            </div>


        </div>
    </div>
</section>
@stop