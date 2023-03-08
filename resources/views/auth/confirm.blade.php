@extends('layouts.layout')

@section('title', 'Новый пароль')
@section('content')
<section class="contact-section spad">
    <div class="container">

        <div class="row">
            <div class="col-lg-4">
                {{-- здесь какя то информация --}}
            </div>
            <div class="col-lg-4">
                <div class="login-container">
                    <div class="contact-title">
                        <div class="section-title">
                            <h3>Ввод нового пароля</h3>
                        </div>
                    </div>
                </div>
                <form class="contact-form" method="post" action="{{ route('confirm.password') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-input">
                                <input type="text" name="password" placeholder="Новый пароль">
                            </div>
                            @error('password')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <div class="login-input">
                                <input type="password" name="password_confirmation" placeholder="Повторите пароль">
                            </div>
                            @error('password_confirmation')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <div class="info-box"><button class="login-btn" type="submit">Сменить пароль</button></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                {{-- здесь какя то информация --}}
            </div>
        </div>
    </div>
</section>

@endsection