@extends('layouts.auth.app', ['title' => 'Login Page'])

@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                    <img src="{{ asset('logo.png') }}" class="w-100" alt="">
                </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">Selamat datang di aplikasi
                <br>
                <strong>Kartu Pelajar Digital</strong>! 👋
            </h4>
            <br>
            <form id="formAuthentication" class="mb-3" action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="admin@gmail.com"
                        autofocus />
                </div>
                <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="password">Password</label>
                        {{-- <a href="auth-forgot-password-basic.html">
                            <small>Forgot Password?</small>
                        </a> --}}
                    </div>
                    <div class="input-group input-group-merge">
                        <input type="password" id="password" class="form-control" name="password"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="password" />
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
