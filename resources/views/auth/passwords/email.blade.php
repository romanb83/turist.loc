@extends('layouts.layout')

@section('title', 'Сброс пароля')
@section('content')
<section class="contact-section spad">
    <div class="container">

        <div class="row">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">
                <div class="login-container">
                    <div class="contact-title">
                        <div class="section-title">
                            <p>Введите адрес электронной почты указанный при регистрации.
                                Мы отправим на неё ссылку для сброса пароля
                            </p>
                        </div>
                    </div>
                </div>
                <form class="contact-form" method="post" action="{{ route('password.email') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-input">
                                <input type="text" name="email" placeholder="Электронная почта">
                            </div>
                            @error('email')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <div class="info-box"><button class="login-btn" type="submit">Отправить ссылку</button></div>
                        </div>
                        <div class="login-link login-reg-link">или
                            <a href="{{--{{ route('show.confirm.password') }} --}}">новый пароль</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
</section>

@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
