@extends('layouts.layout')

@section('title', 'Кабинет')
@section('content')

<!-- Room Section Begin -->
<section class="room-section">
    <div class="container-fluid">
        <div class="row">
            <div class="header-panel">
                <div class="header-panel-container">
                    <div class="address">
                        <p>улица Морская, 19</p>
                    </div>
                    <div class="breadcrumbs">
                        <p>Главная > Сочи > Красная Поляна</p>
                    </div>
                    <div class="bookmark">
                        <span>Баланс</span>
                        <span>0.00 р.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div><a href="{{ route('show.dashboard') }}" class="primary-btn">Общая</a></div>
                <div><a href="{{ route('show.dashboard.account') }}" class="primary-btn">Аккаунт</a></div>
                <div><a href="{{ route('show.my.booking') }}" class="primary-btn">Мои бронирования</a></div>
                <div><a href="{{ route('show.add.advert.form') }}" class="primary-btn">Добавить объект</a></div>
            </div>
            <div class="col-lg-9">
                <div class="ri-text">
                    <div class="section-title">
                        <div class="section-title">
                            <h3>Мои бронирования</h3>
                        </div>
                        <p></p>
                        <div class="row">
                            <div class="col-lg-5">
                                <span>Имя:</span>

                            </div>
                            <div class="col-lg-7">
                                <span>(имя из базы) <a href="#">изменить</a></span>

                            </div>
                        </div>
                        <p>dd</p>

                        <div class="ri-features">
                            <div class="ri-info">
                                <i class="flaticon-019-television"></i>
                                <p>Smart TV</p>
                            </div>
                            <div class="ri-info">
                                <i class="flaticon-029-wifi"></i>
                                <p>Wi-fi</p>
                            </div>
                            <div class="ri-info">
                                <i class="flaticon-003-air-conditioner"></i>
                                <p>AC</p>
                            </div>
                            <div class="ri-info">
                                <i class="flaticon-036-parking"></i>
                                <p>Парковка</p>
                            </div>
                            <div class="ri-info">
                                <i class="flaticon-007-swimming-pool"></i>
                                <p>Бассейн</p>
                            </div>
                            <div class="ri-info">
                                <i class="flaticon-005-tea"></i>
                                <p>Завтрак</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Room Section End -->

@endsection
