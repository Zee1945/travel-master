@extends('layouts.app')

@section('title','Detail Travel')
@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/lib/xzoom/xzoom.min.css')}}">
@endpush
    
@section('content')
<main>
    <section class="section-details-header">

    </section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>

                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Gunung Bromo</h1>
                        <p>Republic of Indonesia</p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img class="xzoom" id="xzoom-default" src="{{url('frontend/img/gallery/bromo.jpg')}}" alt="">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="{{url('frontend/img/gallery/bromo.jpg')}}">
                                    <img class="xzoom-gallery" src="{{url('frontend/img/gallery/bromo.jpg')}}" alt=""
                                        width="128" xpreview="frontend/img/gallery/bromo.jpg" alt="">
                                </a>
                                <a href="{{url('frontend/img/gallery/bromo1.jpg')}}">
                                    <img class="xzoom-gallery" src="{{url('frontend/img/gallery/bromo1.jpg')}}" alt=""
                                        width="128" xpreview="frontend/img/gallery/bromo1.jpg" alt=""
                                        title="Bisa dikasi desckripsi ">
                                </a>
                                <a href="{{url('frontend/img/gallery/bromo2.jpg')}}">
                                    <img class="xzoom-gallery" src="{{url('frontend/img/gallery/bromo2.jpg')}}" alt=""
                                        width="128" xpreview="{{url('frontend/img/gallery/bromo2.jpg')}}" alt="">
                                </a>

                            </div>
                        </div>
                        <h2>Tentang Wisata</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quam. Ad ratione ipsum
                            totam facilis maxime illo pariatur, nostrum placeat ex animi voluptatum, eius fugiat!
                            Quo in doloremque cumque. Saepe.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam, cupiditate! Quaerat quo
                            totam, neque corporis nulla unde obcaecati ut voluptatibus! Suscipit laudantium natus
                            iure, delectus modi doloremque ipsam totam atque.</p>

                        <div class="features row">
                            <div class="col-md-4 ">
                                <img src="{{url('frontend/img/icon/ticket.png')}}" alt="" class="features-image">
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>Tari Kecak</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="{{url('frontend/img/icon/chat.png')}}" alt="" class="features-image">
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>Bahasa Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="{{url('frontend/img/icon/foods.png')}}" alt="" class="features-image">
                                <div class="description">
                                    <h3>Foods</h3>
                                    <p>Local Foods</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are Going</h2>
                        <div class="members my-2">
                            <img src="#" alt="Gambar Member" class="member-image mr-1">
                            <img src="#" alt="Gambar Member" class="member-image mr-1">
                            <img src="#" alt="Gambar Member" class="member-image mr-1">
                            <img src="#" alt="Gambar Member" class="member-image mr-1">

                        </div>
                        <hr>
                        <h2>Trip Informations</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td class="text-right" width="50%"> Aug, 22 2020</td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td class="text-right" width="50%"> 4D 3N</td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td class="text-right" width="50%"> Open Trip</td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td class="text-right" width="50%"> $80,00 / person</td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="checkout.html" class="btn btn-block btn-join-now mt-3 py-2">
                            Join Now
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('addon-script')
<script src="{{url('frontend/lib/xzoom/xzoom.min.js')}}"></script>

<script>
    $(document).ready(function () {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>
@endpush