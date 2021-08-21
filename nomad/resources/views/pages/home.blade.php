@extends('layouts.app')

@section('title')
Nomads
@endsection

@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>Explore The Beautiful World
            <br>
            As Easy One Click
        </h1>
        <p class="mt-3">You Will See Beautiful
            <br>
            Moment That You Never See Before
        </p>
        <a href="#" class="btn btn-get-started px-4 mt-4"> Get Started </a>
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Populer</h2>
                        <p>Something That You Never Try Before
                            <br>
                            in The World</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-popular-content" id="popularContent">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image :url('frontend/img/pulau-rubiah.jpg')">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">RUBIAH, SABANG</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image :url('frontend/img/pulau-rubiah.jpg')">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location"> RUBIAH, SABANG</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image :url('frontend/img/pulau-rubiah.jpg')">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">RUBIAH, SABANG</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image :url('frontend/img/pulau-rubiah.jpg')">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">RUBIAH, SABANG</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section-network">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Network</h2>
                        <p>Companies Are Trusted Us
                            <br>
                            More Than Just A Trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <div class="partners-logo d-flex">
                            <img src="{{url('frontend/img/partners/bnb.png')}}" alt="Parner Logo" class="img-partner">
                            <img src="{{url('frontend/img/partners/telkomsel.png')}}" alt="Parner Logo" class="img-partner">
                            <img src="{{url('frontend/img/partners/traveloka.png')}}" alt="Parner Logo" class="img-partner">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="containe">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>Moment were giving them <br> the best Experience</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="section-testimonial-content">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/img/testimonial/testimonial1.jpg" alt="User"
                                    class="mb-4 rounded-circle">
                                <h3 class="mb-4">Zul Fachrie</h3>
                                <p class="testimonial">
                                    "It was glorious and i couldn't stop to say Subhanallah for every single moment,
                                    syukran"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Sabang
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/img/testimonial/testimonial1.jpg" alt="User"
                                    class="mb-4 rounded-circle">
                                <h3 class="mb-4">Zul Fachrie</h3>
                                <p class="testimonial">
                                    "It was glorious and i couldn't stop to say Subhanallah for every single moment,
                                    syukran"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Bromo
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/img/testimonial/testimonial1.jpg" alt="User"
                                    class="mb-4 rounded-circle">
                                <h3 class="mb-4">Zul Fachrie</h3>
                                <p class="testimonial">
                                    "It was glorious and i couldn't stop to say Subhanallah for every single moment,
                                    syukran"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Pulau Banyak
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Button Get Started And Need Help -->
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="
                        " class="btn btn-need-help px-4 mt-4 mx-1"> I Need Help</a>
                        <a href="
                        " class="btn btn-get-started px-4 mt-4 mx-1"> Get Started</a>
                    </div>
                </div>
                <!-- Button Get Started And Need Help -->
            </div>
        </section>


    </main>
    @endsection