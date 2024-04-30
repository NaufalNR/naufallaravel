@extends('layout')
@section('content')
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('foto/aku.jpg') }}" alt="Image"
                        style="height: 900px;object-fit:filter: brightness(80%);">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start" style="padding-top: 50px !important">
                                <div class="col-lg-8">
                                    <p
                                        class="d-inline-block border border-white rounded text-white fw-semi-bold py-1 px-3 animated slideInDown">
                                        Selamat datang di</p>
                                    <h1 class="display-5 mb-4 animated slideInDown text-white">Website Portofolio Naufal
                                        Nawwar Riadi

                                    </h1>
                                    </p>
                                    <a href="{{ url('loginakun') }}"
                                        class="btn btn-primary py-3 px-5 animated slideInDown">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5 mt-5">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-12 wow fadeInUp my-auto" data-wow-delay="0.3s">
                    <br>
                    <h1 class="mb-5 text-center">Tentang Saya</h1>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                @foreach ($biodata as $row)
                                    <tr>
                                        <td>{{ $row->judul }}</td>
                                        <td> : {{ $row->isi }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s"
        style="background-color: #16a05b !important">
        <div class="container py-5">
            <center>
                <h1 class="text-white mb-3">PORTOFOLIO KU</h1>
            </center>
            <div class="row g-3" id="biodata">
                <div class="col-md-12">
                    <div class="card bg-white">
                        <div class="card-body">
                            <img src="{{ asset('foto/sertif.jpg') }}" width="100%">
                            </span>
                            <h5 class="mt-3">Sertifikat Kursus Javascript</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card bg-white">
                        <div class="card-body">
                            <img src="{{ asset('foto/Fotografi.jpg') }}" width="100%">
                            </span>
                            <h5 class="mt-3">Fotografi</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card bg-white">
                        <div class="card-body">
                            <img src="{{ asset('foto/Fotografi2.jpg') }}" width="100%">
                            </span>
                            <h5 class="mt-3">Fotografi</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
