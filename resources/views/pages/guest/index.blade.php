@extends('layouts.guest.app', ['title' => 'Login Page'])

@section('content')
    <div class="w-100 card">
        <div class="card-body d-flex flex-wrap justify-content-between align-items-center">
            <p class="mb-1 fw-semibold text-md" style="margin-bottom: -5px; color:black;">AYO SEGERA DAFTAR KUOTA
                TERBATAS !</p>
            <div class="d-flex justify-between gap-2">
                <button class="btn btn-primary text-sm">
                    Daftar Sekarang
                </button>
                <button class="btn btn-warning text-sm">
                    Check Data Pendaftar
                </button>
            </div>
        </div>
    </div>

    <div class="card my-4">
        <div class="card-body">
            <div class="w-100">
                <img src="{{ asset('slide.jpg') }}" alt="gambar slide" class="img-thumbnail mx-auto img-slide-responsive">
            </div>
        </div>
    </div>

    <div class="my-4">
        <div class="row">
            <div class="col-6 my-2 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="text-white d-flex bg-primary justify-content-center p-3 align-items-center">
                                <i class="tf-icons bx bxs-user"></i>
                            </div>
                        </div>
                        <span class="fw-medium d-block mb-1">Total Pendaftar</span>
                        <h4 class="card-title mb-2">53 siswa</h4>
                    </div>
                </div>
            </div>

            <div class="col-6 my-2 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="text-white d-flex bg-primary justify-content-center p-3 align-items-center">
                                <i class="tf-icons bx bxs-user"></i>
                            </div>
                        </div>
                        <span class="fw-medium d-block mb-1">Total Pendaftar</span>
                        <h4 class="card-title mb-2">53 siswa</h4>
                    </div>
                </div>
            </div>

            <div class="col-6 my-2 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="text-white d-flex bg-primary justify-content-center p-3 align-items-center">
                                <i class="tf-icons bx bxs-user"></i>
                            </div>
                        </div>
                        <span class="fw-medium d-block mb-1">Total Pendaftar</span>
                        <h4 class="card-title mb-2">53 siswa</h4>
                    </div>
                </div>
            </div>

            <div class="col-6 my-2 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="text-white d-flex bg-primary justify-content-center p-3 align-items-center">
                                <i class="tf-icons bx bxs-user"></i>
                            </div>
                        </div>
                        <span class="fw-medium d-block mb-1">Total Pendaftar</span>
                        <h4 class="card-title mb-2">53 siswa</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
