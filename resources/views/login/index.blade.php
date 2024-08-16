@extends('layouts.main')

@section('navbar')
    <div class="row  justify-content-center">
        <div class="col-md-4">

            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger" role="alert">
                    {{ session('loginError') }}
                </div>
            @endif

            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                <form action="/login" method="post">
                    @csrf
                    {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}

                    <div class="form-floating">
                        <label for="email">Email address</label>
                        <input type="email" name="email"
                            class="form-control @error('email') is-invalid
                        @enderror" id="email"
                            placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                            required>
                    </div>

                    {{-- <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                        </label>
                    </div> --}}
                    <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
                    {{-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p> --}}
                </form>
                <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
            </main>

        </div>
    </div>
@endsection
