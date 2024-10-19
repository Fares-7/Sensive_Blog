@extends('theme.master')
@section('title', 'Login')
@section('content')
    @include('theme.partials.hero', ['title' => 'login'])
    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto">
                    <form action="{{ route('login') }}" class="form-contact contact_form" action="contact_process.php"
                        method="post" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="form-group">
                            <input class="form-control border" name="email" :value="old('email')" type="email"
                                placeholder="Enter email address">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <input class="form-control border" name="password" :value="__('Password')" type="password"
                                placeholder="Enter your password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                        </div>
                        <div class="form-group text-center text-md-right mt-3">
                            <a href="{{ route('register') }}" class="mx-3">Sign up instead?</a>
                            <button type="submit" class="button button--active button-contactForm">Login</button>
                        </div>
                        <div class="form-group text-center">
                            <p>Or login with:</p>
                            <a href="{{ route('socialite.login', ['provider'=>'github']) }}" class="btn btn-dark">
                                <i class="fab fa-github"></i> Login with GitHub
                            </a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->

@endsection
