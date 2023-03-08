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
                <div>
                    <form class="form" method="post" action="{{ route('add.advert') }}">
                        @csrf
                        <div>
                            <select class="input" name="country" id="country">
                                @foreach ($allCountries as $country)
                                <option value="{{ $country->id }}">{{ $country->country_ru }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <select class="input" name="region" id="region"></select>
                        </div>
                        <div>
                            <select class="input" name="city" id="city"></select>
                            @error('city')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div>
                            <input class="input" type="text" name="address" placeholder="Адрес">
                            @error('address')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div>
                            {{-- <select class="input" name="housing" id="housing"> --}}
                                {{-- @foreach ($houseType as $key => $house)
                                <option value="{{ $key }}">{{ $house}}</option>
                                @endforeach --}}
                            {{-- </select> --}}
                        </div>
                        <div>
                            <input class="input" type="text" name="qtyrooms" placeholder="Количество комнат">
                            @error('qtyrooms')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div>
                            <input class="input" type="text" name="et" placeholder="Этаж">
                            @error('et')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div>
                            <input class="input" type="text" name="number_floor" placeholder="Этажность здания">
                        </div>
                        <div>
                            <input class="input" type="text" name="total_rooms" placeholder="Всего номеров">
                        </div>
                        <div>
                            <input class="input" type="text" name="room_type" placeholder="Тип номера">
                        </div>
                        <div>
                            <input class="" type="text" name="quantity_rooms" placeholder="Количество комнат">
                        </div>
                        <div>
                            <input class="" type="text" name="sleeping_place" placeholder="Количество спальныйх мест">
                        </div>
                        <div>
                            <button class="btn" type="submit">Добавить</button>
                        </div>
                        <div>
                            <button class="btn" type="reset">Назад</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Room Section End -->

@endsection




{{-- @extends('layouts.layout')

@section('title', 'Добавить объявление')
@section('content')


<div>
    <form class="form" method="post" action="{{ route('add.advert') }}">
        @csrf
        <div>
            <select class="input" name="country" id="country">
                {{-- @foreach ($allCountries as $country)
                <option value="{{ $country->id }}">{{ $country->country_ru }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <select class="input" name="region" id="region"></select>
        </div>
        <div>
            <select class="input" name="city" id="city"></select>
            @error('city')
            <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div>
            <input class="input" type="text" name="address" placeholder="Адрес">
            @error('address')
            <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div>
            <select class="input" name="housing" id="housing">
                {{-- @foreach ($houseType as $key => $house)
                <option value="{{ $key }}">{{ $house}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <input class="input" type="text" name="qtyrooms" placeholder="Количество комнат">
            @error('qtyrooms')
            <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div>
            <input class="input" type="text" name="et" placeholder="Этаж">
            @error('et')
            <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div>
            <input class="input" type="text" name="number_floor" placeholder="Этажность здания">
        </div>
        <div>
            <input class="input" type="text" name="total_rooms" placeholder="Всего номеров">
        </div>
        <div>
            <input class="input" type="text" name="room_type" placeholder="Тип номера">
        </div>
        <div>
            <input class="" type="text" name="quantity_rooms" placeholder="Количество комнат">
        </div>
        <div>
            <input class="" type="text" name="sleeping_place" placeholder="Количество спальныйх мест">
        </div>
        <div>
            <button class="btn" type="submit">Добавить</button>
        </div>
        <div>
            <button class="btn" type="reset">Назад</button>
        </div>
    </form>
    {{--
</div>
{{-- @endsection --}}
