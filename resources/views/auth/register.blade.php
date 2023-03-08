@extends('layouts.layout')

@section('title', 'Регистрация')
@section('content')
<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">

        <div class="row">
            <div class="col-lg-3">
                здесь какя то информация
            </div>
            <div class="col-lg-6">
                <div class="login-container">
                    <div class="contact-title">
                        <div class="section-title">
                            <h3>Регистрация в личном кабинете</h3>
                        </div>
                    </div>
                </div>
                <form class="contact-form" method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="username" placeholder="Имя пользователя">
                            @error('username')
                            <strong>{{ $message }}</strong>
                            @enderror

                        </div>
                        <div class="col-lg-6">
                            <input type="email" name="email" placeholder="E-mail">
                            @error('email')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <input type="password" name="password" placeholder="Пароль">
                            @error('password')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <input type="password" name="password_confirmation" placeholder="Повторите пароль">
                            @error('password_confirmation')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <div class="info-box"><button class="login-btn" type="submit">Регистрация</button></div>
                        </div>
                        
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                здесь какя то информация
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->


{{-- <div>
    <form class="form" method="post" action="{{ route('register') }}">
        @csrf
        <div>
            <input class="input" type="text" name="username" placeholder="Имя пользователя">
            @error('username')
            <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div>
            <input class="input" type="email" name="email" placeholder="E-mail">
            @error('email')
            <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div>
            <input class="input" type="password" name="password" placeholder="Пароль">
            @error('password')
            <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div>
            <input class="input" type="password" name="password_confirmation" placeholder="Повторите пароль">
            @error('password_confirmation')
            <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div>
            <button class="btn" type="submit">Зарегистрировать</button>
        </div>
    </form>
</div> --}}
@endsection