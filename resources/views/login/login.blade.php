@extends('landingpage.layout.index')

@section('content')
<main id="main">
    <section class="vh-100" style="margin-top: 60px;">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5 " data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('bikin/assets/img/login.svg') }}" class="img-fluid" alt="image login">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 " data-aos="fade-left" data-aos-delay="200">
                    <form action="{{ route('login') }}" method="POST" class="row g-3 needs-validation">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="email" id="email" class="form-control form-control-lg form-control @error('email') is-invalid @enderror" placeholder="Enter a valid email address" required />
                            <label class="form-label" for="yourUsername">Email address</label>
                            @error('email')
                            <div id="emailHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Enter password" required />
                            <label class="form-label" for="yourPassword">Password</label>
                            @error('password')
                            <div id="passwordHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? Create an account
                                <a href="{{url('/register/admin')}}" class="link-danger">Admin</a> or
                                <a href="{{url('/register/Employee')}}" class="link-danger">Karyawan</a>
                            </p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection