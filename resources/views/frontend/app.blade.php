@extends('frontend.master')

@section('content')

<section class="banner" id="top" style="background-image: url('{{ asset('frontend/img/homepage-banner-image-1920x700.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-caption">
                    <div class="line-dec"></div>
                    <h2>Drive Your Journey: Rent the Perfect Car Today!</h2>
                    <div class="blue-button">
                        <a href="{{route('contact')}}">Contact Us</a>
                    </div>
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
                        <p>Welcome to "Car Rental", where we are committed to providing a seamless and convenient car rental experience. Whether you're traveling for business or leisure, we offer a wide selection of high-quality vehicles to meet your needs. From compact cars to luxury SUVs, our fleet is designed to provide comfort, safety, and affordability. Our dedicated team ensures that every rental is hassle-free, so you can focus on enjoying the road ahead. With flexible booking options and exceptional customer service, we're here to make your journey as smooth as possible. Rent with confidence today!</p>
                        <div class="blue-button">
                            <a href="{{route('about')}}">Discover More</a>
                        </div>

                        <br>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="{{asset('frontend/img/about-1-720x480.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="featured-places">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Offers</span>
                        <h2>Find the best deals here!!</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="{{asset('frontend/img/offer-1-720x480.jpg')}}" alt="">
                        </div>

                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <span>from <strong><sup>$</sup>120</strong> per weekend</span>

                            <p>Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.</p>

                            <div class="text-button">
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="{{asset('frontend/img/offer-2-720x480.jpg')}}" alt="">
                        </div>

                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <span>from <strong><sup>$</sup>120</strong> per weekend</span>

                            <p>Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.</p>

                            <div class="text-button">
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="{{asset('frontend/img/offer-3-720x480.jpg')}}" alt="">
                        </div>

                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <span>from <strong><sup>$</sup>120</strong> per weekend</span>

                            <p>Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.</p>

                            <div class="text-button">
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: center;">
                <div class="blue-button">
                    <a href="{{ route('rental') }}">SEE MORE</a>
                </div>
            </div>

        </div>
    </section>

    {{-- <section class="featured-places">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Latest blog posts</span>
                        <h2>Find the lastest blog posts from "Car Rental"!</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="{{asset('frontend/img/blog-1-720x480.jpg')}}" alt="">
                            </div>

                            <div class="overlay-content">
                             <strong title="Author"><i class="fa fa-user"></i> John Doe</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                             <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020 10:30</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                             <strong title="Views"><i class="fa fa-map-marker"></i> 115</strong>
                            </div>
                        </div>

                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim consectetur assumenda nam facere voluptatibus totam veritatis. </p>

                            <div class="text-button">
                                <a href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="{{asset('frontend/img/blog-2-720x480.jpg')}}" alt="">
                            </div>

                            <div class="overlay-content">
                             <strong title="Author"><i class="fa fa-user"></i> John Doe</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                             <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020 10:30</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                             <strong title="Views"><i class="fa fa-map-marker"></i> 115</strong>
                            </div>
                        </div>

                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim consectetur assumenda nam facere voluptatibus totam veritatis. </p>

                            <div class="text-button">
                                <a href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="{{asset('frontend/img/blog-3-720x480.jpg')}}" alt="">
                            </div>

                            <div class="overlay-content">
                             <strong title="Author"><i class="fa fa-user"></i> John Doe</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                             <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020 10:30</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                             <strong title="Views"><i class="fa fa-map-marker"></i> 115</strong>
                            </div>
                        </div>

                        <div class="down-content">
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim consectetur assumenda nam facere voluptatibus totam veritatis. </p>

                            <div class="text-button">
                                <a href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
                  <div class="section-heading">
                      <span>Contact Us</span>
                      <h2>Vivamus nec vehicula felis</h2>
                  </div>
                  <!-- Modal button -->

                  <div class="blue-button">
                    <a href="{{route('contact')}}">Talk to us</a>
                  </div>
            </div>
        </div>
    </section>

    <section class="popular-places" id="popular">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Testimonials</span>
                        <h2>"See What Our Customers Are Saying About Their Experience!"</h2>
                    </div>
                </div>
            </div>

            <div class="owl-carousel owl-theme">
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="{{asset('frontend/img/popular_item_1.jpg')}}" alt="">
                        <div class="text-content">
                            <h4>John Doe</h4>
                            <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                        </div>

                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="{{asset('frontend/img/popular_item_2.jpg')}}" alt="">
                        <div class="text-content">
                            <h4>John Doe</h4>
                            <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                        </div>

                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="{{asset('frontend/img/popular_item_3.jpg')}}" alt="">
                        <div class="text-content">
                            <h4>John Doe</h4>
                            <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                        </div>

                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="{{asset('frontend/img/popular_item_4.jpg')}}" alt="">
                        <div class="text-content">
                            <h4>John Doe</h4>
                            <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                        </div>

                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="{{asset('frontend/img/popular_item_5.jpg')}}" alt="">
                        <div class="text-content">
                            <h4>John Doe</h4>
                            <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                        </div>

                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="{{asset('frontend/img/popular_item_1.jpg')}}" alt="">
                        <div class="text-content">
                            <h4>John Doe</h4>
                            <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                        </div>

                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="{{asset('frontend/img/popular_item_2.jpg')}}" alt="">
                        <div class="text-content">
                            <h4>John Doe</h4>
                            <span>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
