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
                <form class="contact-form" method="post" action="{{ route('password.reset') }}">
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
                            <a href="{{ route('show.confirm.password') }}">новый пароль</a>
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
