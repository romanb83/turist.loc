@extends('layouts.layout')

@section('title', 'Вход')
@section('content')
<section class="contact-section spad">
    <div class="container">

        <div class="row">
            <div class="col-lg-4">
                здесь какя то информация
            </div>
            <div class="col-lg-4">
                <div class="login-container">
                    <div class="contact-title">
                        <div class="section-title">
                            <h3>Вход в личный кабинет</h3>
                        </div>
                    </div>
                </div>
                <form class="contact-form" method="post" action="{{ route('login') }}">
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
                            <div class="login-input">
                                <input type="password" name="password" placeholder="Пароль">
                            </div>
                            @error('password')
                            <strong>{{ $message }}</strong>
                            @enderror
                            <div class="remember-forgot">
                                <div class="cont">
                                    <input type="checkbox" name="remember" id="remember">
                                    <span>запомнить меня</span>
                                </div>
                                <div class="login-link">
                                    <a href="{{ route('password.request') }}">не помню пароль</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="info-box"><button class="login-btn" type="submit">Войти</button></div>
                        </div>
                        <div class="col-lg-12">
                            <div class="info-box">
                                <div>войти с помощью</div>
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-google"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-vk"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-odnoklassniki"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                                <div class="login-link login-reg-link">или
                                    <a href="{{ route('show.register.form') }}">зарегистрироваться</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                здесь какя то информация
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
{{-- <div>
    <form class="form" method="post" action="{{ route('login') }}">
        @csrf
        <div>
            <input class="input" type="email" name="email" placeholder="E-mail" required>
        </div>
        <div>
            <input class="input" type="password" name="password" placeholder="Пароль" required>
        </div>
        <div>
            <button class="btn" type="submit">Войти</button>
        </div>
    </form>
</div> --}}
@endsection