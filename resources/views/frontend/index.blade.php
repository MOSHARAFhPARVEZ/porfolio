@extends('frontend\frontend')

@section('content')

<!-- banner-area -->
<section id="home" class="banner-area banner-bg fix">
    <div class="container">
        @foreach ($banners as $banner)
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-6">

                <div class="banner-content">
                    <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                    <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am {{ $banner->name }}</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.6s">{{ $banner->description }}</p>
                    <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                        <ul>
                            <li><a href="{{ $banner->link_one }}"><i class="{{ $banner->icon_four }}"></i></a></li>
                            <li><a href="{{ $banner->link_two }}"><i class="{{ $banner->icon_three }}"></i></a></li>
                            <li><a href="{{ $banner->link_three }}"><i class="{{ $banner->icon_two }}"></i></a></li>
                            <li><a href="{{ $banner->link_four }}"><i class="{{ $banner->icon_one }}"></i></a></li>
                        </ul>
                    </div>
                    <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                </div>

            </div>
            <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                <div class="banner-img text-right">
                    <img src="{{ asset('uploads/banner') }}/{{ $banner->banner }}" alt="">
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="banner-shape"><img src="{{ asset('frontend_assets') }}/img/shape/dot_circle.png" class="rotateme"
            alt="img"></div>
</section>
<!-- banner-area-end -->

<!-- about-area-->
@foreach ($abouts as $about)
<section id="about" class="about-area primary-bg pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="{{ asset('uploads/about_photo') }}/{{ $about->photo }}" title="me-01" alt="me-01">
                </div>
            </div>
            <div class="col-lg-6 pr-90">
                <div class="section-title mb-25">
                    <span>Introduction</span>
                    <h2>About Me</h2>
                </div>
                <div class="about-content">
                    <p>{{ $about->long_description }}</p>
                    <h3>Education:</h3>
                </div>
                <!-- Education Item -->
                <div class="education">
                    <div class="year">{{ $about->edu_one_year }}</div>
                    <div class="line"></div>
                    <div class="location">
                        <span>{{ $about->edu_one_name }}</span>
                        <div class="progressWrapper">
                            <div class="progress">
                                <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s"
                                    role="progressbar" style="width: {{ $about->edu_one_mark }}%;" aria-valuenow="65"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Education Item -->
                <!-- Education Item -->
                <div class="education">
                    <div class="year">{{ $about->edu_two_year }}</div>
                    <div class="line"></div>
                    <div class="location">
                        <span>{{ $about->edu_two_name }}</span>
                        <div class="progressWrapper">
                            <div class="progress">
                                <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s"
                                    role="progressbar" style="width: {{ $about->edu_two_mark }}%;" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Education Item -->
                <!-- Education Item -->
                <div class="education">
                    <div class="year">{{ $about->edu_three_year }}</div>
                    <div class="line"></div>
                    <div class="location">
                        <span>{{ $about->edu_three_name }}</span>
                        <div class="progressWrapper">
                            <div class="progress">
                                <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s"
                                    role="progressbar" style="width: {{ $about->edu_three_mark }}%;" aria-valuenow="85"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Education Item -->
                <!-- Education Item -->
                <div class="education">
                    <div class="year">{{ $about->edu_four_year }}</div>
                    <div class="line"></div>
                    <div class="location">
                        <span>{{ $about->edu_four_name }}</span>
                        <div class="progressWrapper">
                            <div class="progress">
                                <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s"
                                    role="progressbar" style="width: {{ $about->edu_four_mark }}%;" aria-valuenow="90"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Education Item -->
            </div>
        </div>

    </div>
</section>
@endforeach
<!-- about-area-end -->

<!-- Services-area -->
@foreach ($solutions as $solution)
<section id="service" class="services-area pt-120 pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <span>WHAT WE DO</span>
                    <h2>Services and Solutions</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                    <i class="{{ $solution->icon }}"></i>
                    <h3>{{ $solution->header }}</h3>
                    <p>
                        {{ $solution->description }}
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
@endforeach
<!-- Services-area-end -->

<!-- Portfolios-area -->
@foreach ($best_works as $best_work)
<section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <span>Portfolio Showcase</span>
                    <h2>My Recent Best Works</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 pitem">
                <div class="speaker-box">
                    <div class="speaker-thumb">
                        <img src="{{ asset('uploads/best_works') }}/{{ $best_work->photo }}" alt="img">
                    </div>
                    <div class="speaker-overlay">
                        <span>{{ $best_work->header }}</span>
                        <h4><a href="{{ route('best_works.show',$best_work->id) }}">{{ $best_work->tittle }}</a></h4>
                        <a href="{{ route('best_works.show',$best_work->id) }}" class="arrow-btn">More information
                            <span></span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endforeach
<!-- services-area-end -->


<!-- fact-area -->
@foreach ($fast_areas as $fast_area)
<section class="fact-area">
    <div class="container">
        <div class="fact-wrap">
            <div class="row justify-content-between">

                <div class="col-xl-2 col-lg-3 col-sm-6">
                    <div class="fact-box text-center mb-50">
                        <div class="fact-icon">
                            <i class="{{ $fast_area->icon }}"></i>
                        </div>
                        <div class="fact-content">
                            <h2><span class="count">{{ $fast_area->number }}</span></h2>
                            <span>{{ $fast_area->tittle }}</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endforeach
<!-- fact-area-end -->

<!-- testimonial-area -->
<section class="testimonial-area primary-bg pt-115 pb-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <span>testimonial</span>
                    <h2>happy customer quotes</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10">
                <div class="testimonial-active">
                    @foreach ($testimonials as $testimonial)
                    <div class="single-testimonial text-center">
                        <div class="testi-avatar">
                            <img src="{{ asset('uploads/testimonial') }}/{{ $testimonial->photo }}" alt="img"
                                class="img-fluid rounded-circle">
                        </div>
                        <div class="testi-content">
                            <h4><span>“</span> {{ $testimonial->comment }}
                                <span>”</span></h4>
                            <div class="testi-avatar-info">
                                <h5>{{ $testimonial->name }}</h5>
                                <span>{{ $testimonial->position }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-area-end -->

<!-- brand-area -->
<div class="barnd-area pt-100 pb-100">
    <div class="container">
        <div class="row brand-active">
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="{{ asset('frontend_assets') }}/img/brand/brand_img01.png" alt="img">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="{{ asset('frontend_assets') }}/img/brand/brand_img02.png" alt="img">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="{{ asset('frontend_assets') }}/img/brand/brand_img03.png" alt="img">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="{{ asset('frontend_assets') }}/img/brand/brand_img04.png" alt="img">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="{{ asset('frontend_assets') }}/img/brand/brand_img05.png" alt="img">
                </div>
            </div>
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="{{ asset('frontend_assets') }}/img/brand/brand_img03.png" alt="img">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand-area-end -->

<!-- contact-area -->
<section id="contact" class="contact-area primary-bg pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-title mb-20">
                    <span>information</span>
                    <h2>Contact Information</h2>
                </div>
                @foreach ($contacts as $contact)
                <div class="contact-content">
                    <p>{{ $contact->description }}</p>
                    <h5>OFFICE IN <span>NEW YORK</span></h5>
                    <div class="contact-list">
                        <ul>
                            <li><i class="fas fa-map-marker"></i><span>Address :</span>{{ $contact->address }}
                            </li>
                            <li><i class="fas fa-headphones"></i><span>Phone :</span>{{ $contact->mobile }}</li>
                            <li><i class="fas fa-globe-asia"></i><span>e-mail :</span>{{ $contact->email }}</li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form action="{{ route('msgyou') }}" method="POST">
                        @csrf
                        <input type="text" placeholder="your name *" class="form-control @error('name') is-invalid @enderror" name="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <input type="email" placeholder="your email *" class="form-control @error('email') is-invalid @enderror" name="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <textarea  id="message" placeholder="your message *"  name="msg"></textarea>
                        <button type="submit" class="btn">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->

@endsection
