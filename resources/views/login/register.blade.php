@extends('landingpage.layout.index')

@section('content')
<section class="vh-200 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px; margin-top:50px">
                        <div class="card-body p-5 mt-3">
                            <h2 class="text-uppercase text-center mb-5">Create an account Admin</h2>
                            <form class="row g-3 needs-validation" action='/register/admin' method="post">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" required />
                                    <label class="form-label" for="yourEmail">Email</label>
                                    @error('email')
                                    <div id="emailHelp" class="form-text">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" name="name" id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" required />
                                    <label class="form-label" for="yourUsername">Name</label>
                                    @error('name')
                                    <div id="nameHelp" class="form-text">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" required />
                                    <label class="form-label" for="yourPassword">Password</label>
                                    @error('password')
                                    <div id="passwordHelp" class="form-text">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" name="company_name" id="company_name" class="form-control form-control-lg @error('name') is-invalid @enderror" required />
                                    <label class="form-label" for="yourUsername">Company Name</label>
                                    @error('company_name')
                                    <div id="companyNameHelp" class="form-text">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example3cg" />
                                    <label class="form-check-label " for="form2Example3g">
                                        I agree all statements in <u>Terms of service</u>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-white">Register</button>
                                </div>
                                <p class="text-center text-muted mt-5 mb-0">Have already an account?<a href="{{url('./login')}}" class="fw-bold text-body"><u>Login here</u></a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection