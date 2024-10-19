@extends('theme.master')
@section('title', 'Register')
@section('content')
    @include('theme.partials.hero', ['title' => 'Register'])
    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('register') }}" class="form-contact contact_form" method="post"
                        novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control border" name="name" id="name"
                                        value="{{ old('name') }}" type="text" placeholder="Enter your name">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control border" name="email" id="email"
                                        value="{{ old('email') }}" type="email" placeholder="Enter email address">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control border" name="password" id="name" type="password"
                                        placeholder="Enter your password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control border" name="password_confirmation" type="password"
                                        placeholder="Enter your password confirmation">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center text-md-right mt-3">
                            <a href="{{ route('login') }}" class="mx-3">Already Registered?</a>
                            <button type="submit" class="button button--active button-contactForm">Register</button>

                        </div>
                        <div class="form-group text-center">
                            <p>Or login with:</p>
                            <a href="{{ route('socialite.login', ['provider' => 'github']) }}" class="btn btn-dark">
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
