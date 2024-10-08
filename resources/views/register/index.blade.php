@extends('layouts.main')

@section('navbar')
    <div class="row  justify-content-center">
        <div class="col-lg-4">



            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Registration From</h1>
                <form method="post" action="/register">
                    {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                    @csrf
                    <div class="form-floating mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name"
                            class="form-control rounded-top @error('name') is-invalid
                        @enderror"
                            id="name" placeholder="Name" required value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <label for="username">Username</label>
                        <input type="text" name="username"
                            class="form-control @error('username') is-invalid
                        @enderror"
                            id="username" placeholder="Username" required value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <label for="email">Email address</label>
                        <input type="email" name="email"
                            class="form-control @error('email') is-invalid
                        @enderror" id="email"
                            placeholder="name@example.com" required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <label for="password">Password</label>
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid
                        @enderror"
                            id="password" placeholder="password" required value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <button class="btn btn-info w-100 py-2 mt-3" type="submit">Register</button>
                    {{-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p> --}}
                </form>
                <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
            </main>

        </div>
    </div>
@endsection
