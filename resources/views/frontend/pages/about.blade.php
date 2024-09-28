@extends('frontend.app')

@section('content')

<section class="banner banner-secondary" id="top" style="background-image: url('{{ asset('frontend/img/banner-image-1-1920x300.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-caption">
                    <div class="line-dec"></div>
                    <h2>About Us</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<main>
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="left-content">
                        <br>
                        <h4>About us</h4>
                        <p>Welcome to "Car Rental", where we are committed to providing a seamless and convenient car rental experience. Whether you're traveling for business or leisure, we offer a wide selection of high-quality vehicles to meet your needs.</p>

                        <p>From compact cars to luxury SUVs, our fleet is designed to provide comfort, safety, and affordability. Our dedicated team ensures that every rental is hassle-free, so you can focus on enjoying the road ahead. With flexible booking options and exceptional customer service, we're here to make your journey as smooth as possible. Rent with confidence today!</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="{{asset('frontend/img/about-1-720x480.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
                  <div class="section-heading">
                      <span>Lorem ipsum dolor.</span>
                      <h2>Vivamus nec vehicula felis</h2>
                  </div>
                  <!-- Modal button -->

                  <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi blanditiis, esse deserunt assumenda! Tempora nulla natus illum soluta quasi, nisi, in quaerat cumque corrupti ipsum impedit necessitatibus expedita minus harum, fuga id aperiam autem architecto odio. Perferendis eius possimus ex itaque tenetur saepe id quis dicta voluptas, corrupti sapiente hic!</p>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>

    <section class="popular-places" id="popular">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Team</span>
                        <h2>"Get to Know Our Experts"</h2>
                    </div>
                </div> 
            </div> 

            <div class="owl-carousel owl-theme">
                <div class="item popular-item">
                    <div class="thumb">
                        <div class="thumb-img">
                            <img src="{{asset('frontend/img/team-image-1-646x680.jpg')}}" alt="">
                        </div>
                        <div class="text-content">
                            <h4>John Doe</h4>
                            <span>CEO</span>
                        </div>
                        
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <div class="thumb-img">
                            <img src="{{asset('frontend/img/team-image-2-646x680.jpg')}}" alt="">
                        </div>
                        <div class="text-content">
                            <h4>Jane Doe</h4>
                            <span>Marketing Manager</span>
                        </div>
                        
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <div class="thumb-img">
                            <img src="{{asset('frontend/img/team-image-3-646x680.jpg')}}" alt="">
                        </div>
                        <div class="text-content">
                            <h4>Paula Jeorge</h4>
                            <span>Customer Service</span>
                        </div>
                        
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <div class="thumb-img">
                            <img src="{{asset('frontend/img/team-image-4-646x680.jpg')}}" alt="">
                        </div>
                        <div class="text-content">
                            <h4>Dan Blatan</h4>
                            <span>Customer Service</span>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection