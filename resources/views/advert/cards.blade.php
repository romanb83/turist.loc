@extends('layouts.layout')

@section('title', 'Объявления')
@section('content')

<section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="services-item">
                    <a href="{{ route('show.advert') }}">
                        <div class="si-pic set-bg" data-setbg="img/krym.jpg"></div>
                    </a>
                    <div class="si-text">
                        <h3>Infinity Pool</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="services-item">
                    <a href="{{ route('show.advert') }}">
                        <div class="si-pic set-bg" data-setbg="img/anapa.jpg"></div>
                    </a>
                    <div class="si-text">
                        <h3>Fitness Area</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="services-item">
                    <a href="{{ route('show.advert') }}">
                        <div class="si-pic set-bg" data-setbg="img/altai.jpg"></div>
                    </a>
                    <div class="si-text">
                        <h3>Shuttle</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="services-item">
                    <a href="{{ route('show.advert') }}">
                        <div class="si-pic set-bg" data-setbg="img/altai.jpg"></div>
                    </a>
                    <div class="si-text">
                        <h3>Restaurant</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="services-item">
                    <a href="{{ route('show.advert') }}">
                        <div class="si-pic set-bg" data-setbg="img/altai.jpg"></div>
                    </a>
                    <div class="si-text">
                        <h3>City Guide</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="services-item">
                    <a href="{{ route('show.advert') }}">
                        <div class="si-pic set-bg" data-setbg="img/altai.jpg"></div>
                    </a>
                    <div class="si-text">
                        <h3>Day Trips</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="services-item">
                    <a href="{{ route('show.advert') }}">
                        <div class="si-pic set-bg" data-setbg="img/altai.jpg"></div>
                    </a>
                    <div class="si-text">
                        <h3>Spa & Sauna</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="services-item">
                    <a href="{{ route('show.advert') }}">
                        <div class="si-pic set-bg" data-setbg="img/altai.jpg"></div>
                    </a>
                    <div class="si-text">
                        <h3>Free Diving</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection