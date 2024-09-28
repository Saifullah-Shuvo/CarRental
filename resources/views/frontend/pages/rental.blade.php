@extends('frontend.app')

@section('content')
    <section class="banner banner-secondary" id="top"
        style="background-image: url('{{ asset('frontend/img/banner-image-1-1920x300.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Fleet</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="featured-places">
            <div class="container">
                <div class="row">
                    @forelse($cars as $car)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="featured-item">
                                <div class="thumb">
                                    <div class="thumb-img">
                                        <img src="{{ asset('frontend/img/product-1-720x480.jpg') }}" alt="">
                                    </div>
                                    <div class="overlay-content">
                                        {{-- <strong><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <strong><i class="fa fa-cube"></i> 1800 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp; --}}
                                        <strong><i class="fa fa-cog"></i>
                                            @if ($car->availability === 1)
                                                <span class="badge badge-success">Available</span>
                                            @else
                                                <span class="badge badge-danger">Not Available</span>
                                            @endif
                                        </strong>

                                    </div>
                                </div>
                                <div class="down-content">
                                    <h4>{{ $car->name }}</h4>

                                    <br>

                                    <p>{{ $car->brand }} / {{ $car->model }} / {{ $car->year }} /
                                        {{ $car->car_type }}</p>

                                    <p><span><strong><sup>$</sup>{{ $car->daily_rent_price }}</strong>(per day)</span></p>

                                    <div class="text-button">
                                        <a href="{{ route('rental.details', ['id' => $car->id]) }}">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        No data found!
                    @endforelse

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{ asset('frontend/img/product-2-720x480.jpg') }}" alt="">
                                </div>
                                <div class="overlay-content">
                                    <strong><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong><i class="fa fa-cube"></i> 1800 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong><i class="fa fa-cog"></i> Manual</strong>
                                </div>
                            </div>
                            <div class="down-content">
                                <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                <br>

                                <p>190 hp / Petrol / 2008 / Used vehicle</p>

                                <p><span><del><sup>$</sup>11999.00 </del> <strong><sup>$</sup>11779.00</strong></span></p>

                                <div class="text-button">
                                    <a href="#">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{ asset('frontend/img/product-3-720x480.jpg') }}" alt="">
                                </div>
                                <div class="overlay-content">
                                    <strong><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong><i class="fa fa-cube"></i> 1800 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong><i class="fa fa-cog"></i> Manual</strong>
                                </div>
                            </div>
                            <div class="down-content">
                                <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                <br>

                                <p>190 hp / Petrol / 2008 / Used vehicle</p>

                                <p><span><del><sup>$</sup>11999.00 </del> <strong><sup>$</sup>11779.00</strong></span></p>

                                <div class="text-button">
                                    <a href="#">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{ asset('frontend/img/product-4-720x480.jpg') }}" alt="">
                                </div>
                                <div class="overlay-content">
                                    <strong><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong><i class="fa fa-cube"></i> 1800 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong><i class="fa fa-cog"></i> Manual</strong>
                                </div>
                            </div>
                            <div class="down-content">
                                <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                <br>

                                <p>190 hp / Petrol / 2008 / Used vehicle</p>

                                <p><span><del><sup>$</sup>11999.00 </del> <strong><sup>$</sup>11779.00</strong></span></p>

                                <div class="text-button">
                                    <a href="#">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{ asset('frontend/img/product-5-720x480.jpg') }}" alt="">
                                </div>
                                <div class="overlay-content">
                                    <strong><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong><i class="fa fa-cube"></i> 1800 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong><i class="fa fa-cog"></i> Manual</strong>
                                </div>
                            </div>
                            <div class="down-content">
                                <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                <br>

                                <p>190 hp / Petrol / 2008 / Used vehicle</p>

                                <p><span><del><sup>$</sup>11999.00 </del> <strong><sup>$</sup>11779.00</strong></span></p>

                                <div class="text-button">
                                    <a href="#">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="{{ asset('frontend/img/product-6-720x480.jpg') }}" alt="">
                                </div>
                                <div class="overlay-content">
                                    <strong><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong><i class="fa fa-cube"></i> 1800 cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong><i class="fa fa-cog"></i> Manual</strong>
                                </div>
                            </div>
                            <div class="down-content">
                                <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                <br>

                                <p>190 hp / Petrol / 2008 / Used vehicle</p>

                                <p><span><del><sup>$</sup>11999.00 </del> <strong><sup>$</sup>11779.00</strong></span></p>

                                <div class="text-button">
                                    <a href="#">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
