@extends('layouts.layout')

@section('title', 'Карточка объекта')
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
                        <span>в избранное</span>
                        <span>поделиться</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider">
                            <div class="slider-preview">
                                <img src="img/altai.jpg" alt="">
                            </div>
                            <div class="navigation">
                                <div class="navigation__content">
                                    <div class="navigation__preview">
                                        <img class="navigation__img" src="img/rooms/room-1.jpg" alt="">
                                    </div>
                                    <div class="navigation__preview">
                                        <img class="navigation__img" src="img/rooms/room-2.jpg" alt="">
                                    </div>
                                    <div class="navigation__preview">
                                        <img class="navigation__img" src="img/rooms/room-3.jpg" alt="">
                                    </div>
                                    <div class="navigation__preview">
                                        <img class="navigation__img" src="img/rooms/room-4.jpg" alt="">
                                    </div>
                                    <div class="navigation__preview">
                                        <img class="navigation__img" src="img/rooms/room-1.jpg" alt="">
                                    </div>
                                    <div class="navigation__preview">
                                        <img class="navigation__img" src="img/rooms/room-2.jpg" alt="">
                                    </div>
                                    <div class="navigation__preview">
                                        <img class="navigation__img" src="img/rooms/room-3.jpg" alt="">
                                    </div>
                                    <div class="navigation__preview">
                                        <img class="navigation__img" src="img/rooms/room-4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="ri-slider-item">
                            <div class="ri-sliders owl-carousel">
                                <div class="single-img set-bg" data-setbg="img/rooms/room-1.jpg"></div>
                                <div class="single-img set-bg" data-setbg="img/rooms/room-2.jpg"></div>
                                <div class="single-img set-bg" data-setbg="img/rooms/room-3.jpg"></div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="ri-text">
                    <div class="section-title">
                        <div class="section-title">
                            <span>Отель Красная поляна</span>
                            <h2>Номер-студия на двоих</h2>
                        </div>
                        <p>Студия находится в живописном месте, всего в 5 минутах хотьбы от моря.
                            В стоимость номера включен континетальный завтрак. В номере есть балкон, кондиционер,
                            телевизор</p>
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
                        <a href="#" class="primary-btn">Забронировать</a>
                        <div class="new-section">
                            <span>Отзывы</span>
                            <h2>Номер-студия на двоих</h2>
                        </div>
                        <p>Студия находится в живописном месте, всего в 5 минутах хотьбы от моря.
                            В стоимость номе
                        </p>
                        <div class="new-section">
                            <h5>Контакты</h5>
                            <h3>Сочи, Красная поляна</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestias ut officiis
                                deleniti consectetur blanditiis. Ipsam, similique! Recusandae quisquam voluptatibus, ab
                                praesentium eum libero magnam dolor! At reprehenderit cum provident.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus harum amet,
                                perferendis eum tempore soluta numquam magni distinctio cum nobis quaerat inventore
                                impedit doloremque illum blanditiis facere! Cupiditate, dolore quis!
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam veritatis, in dolores
                                animi ut asperiores natus adipisci autem tempore quo ad et iste odio sequi repellat
                                voluptates minus cupiditate nam!
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam fuga iste doloribus,
                                nobis tempore labore et. Blanditiis repudiandae tempora cupiditate tempore consectetur
                                amet fugit, dolorum, unde possimus perspiciatis enim eum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Room Section End -->

@endsection