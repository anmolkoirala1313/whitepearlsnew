@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')

@endsection
@section('content')
    <!-- main-slider-start -->
    <section class="main-slider-two">
        <div class="main-slider-two__carousel modins-owl__carousel owl-carousel" data-owl-options='{
		"loop": true,
		"animateOut": "fadeOut",
		"animateIn": "fadeIn",
		"items": 1,
		"autoplay": true,
		"autoplayTimeout": 7000,
		"smartSpeed": 1000,
		"nav": true,
        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
		"dots": false,
		"margin": 0
	    }'>
            @foreach($data['sliders'] as $index=>$slider)
                <div class="item">
                    <div class="main-slider-two__item">
                        <div class="main-slider-one__bg" style="background-image: linear-gradient(90deg, rgb(43 43 94 / 68%) 0%, rgb(43 43 94 / 53%) 35%, rgb(43 43 94 / 63%) 100%),url('{{ asset(imagePath($slider->image)) }}');"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="main-slider-two__wrap">
                                        <div class="main-slider-two__content">
                                            <!-- slider-sub-title -->
                                            <h2 class="main-slider-two__title">{{ $slider->title ?? ''}}
                                            </h2><!-- slider-title -->
                                            @if($slider->subtitle)
                                                <p class="main-slider-two__info">
                                                    {{ $slider->subtitle ?? '' }}
                                                </p>
                                            @endif
                                            @if(@$slider->link)
                                                <div class="main-slider-two__btn">
                                                    <a href="{{@$slider->link ?? ''}}" class="modins-btn modins-btn--base"><span>{{ ucwords(@$slider->button ?? 'View More') }}
                                                        </span> <em></em></a><!-- slider-btn -->
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="about-one-home">
        @if($data['homepage']->mission)

            <div class="about-one-home__shape">
                <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/about-shape-1-3.png')}}" alt="">
            </div>
            <!-- Feature Start -->
            <section class="feature-one">
                <div class="container-fluid ">
                    <div class="row gutter-y-30">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-one__item">
                                <div class="feature-one__item__icon"><span class="icon-success"></span></div>
                                <div class="feature-one__item__content">
                                    <h3 class="feature-one__item__title">Our Mission</h3>
                                    <p class="feature-one__item__text">{{ $data['homepage']->mission ?? '' }}</p>
                                </div>
                            </div><!-- feature-item -->
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-one__item">
                                <div class="feature-one__item__icon"><span class="icon-online-registration"></span></div>
                                <div class="feature-one__item__content">
                                    <h3 class="feature-one__item__title">Our Vision</h3>
                                    <p class="feature-one__item__text">{{ $data['homepage']->vision ?? '' }}</p>
                                </div>
                            </div><!-- feature-item -->
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-one__item">
                                <div class="feature-one__item__icon"><span class="icon-guarantee"></span></div>
                                <div class="feature-one__item__content">
                                    <h3 class="feature-one__item__title">Our Goal</h3>
                                    <p class="feature-one__item__text">{{ $data['homepage']->value ?? '' }}</p>
                                </div>
                            </div><!-- feature-item -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Feature End -->
        @endif

        @if($data['homepage']->description)
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-one-home__image wow fadeInLeft" data-wow-delay="300ms">
                            <div class="about-one-home__double-image">
                                <div class="img-1">
                                    <img class="lazy" data-src="{{ asset(imagePath($data['homepage']->image)) }}"  />
                                </div>
                                <div class="about-one-home__image__arrow">
                                    <img src="{{ asset('assets/frontend/images/shapes/about-shape-1-2.png') }}" />
                                </div>
                            </div>


                        </div><!-- /.why-choose-two__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="about-one-home__content">
                            <div class="sec-title">

                                <h6 class="sec-title__tagline">{{ $data['homepage']->subtitle ?? '' }}</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">{{ $data['homepage']->title ?? '' }}</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <div class="about-one-home__content__text-two text-align-justify">
                                {!! $data['homepage']->description ?? '' !!}
                            </div>
                            @if($data['homepage']->link)
                                <div class="about-one-home__content__wrapper">
                                    <div>
                                        <a href="{{ $data['homepage']->link ?? '' }}"
                                           class="modins-btn modins-btn--base"><span>{{ $data['homepage']->button }}</span>
                                            <em></em></a>
                                    </div>
                                </div>
                            @endif
                        </div><!-- /.why-choose-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div>
            </div>
        @endif
    </section><!-- /.about-one-home -->

    @if($data['homepage']->action_title)
        <div class="cta-one cta-one__home mb-5">
        <div class="feature-two__shape">
            <img src="{{ asset('assets/frontend/images/shapes/feature-shape-2.png') }}" alt="">
        </div>
        <div class="container" style="max-width: 1290px;">
            <div class="cta-one__inner">
                <div class="cta-one__headline">
                    <div class="cta-one__icon">
                        <i class="icon-folder"></i>
                    </div>
                    <div class="cta-one__content">
                        <span class="cta-one__tagline">{{ $data['homepage']->action_subtitle ?? '' }} </span>
                        <h3 class="cta-one__title">{{ $data['homepage']->action_title ?? '' }}</h3>
                    </div>
                </div>
                <div class="cta-one__btn">
                    <a href="{{ $data['homepage']->action_link ?? '/contact-us' }}" class="modins-btn modins-btn-white">{{ $data['homepage']->action_button ?? 'Start Here' }} <em></em></a>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(count($data['services']) > 0)
        <section class="service-one service-home-one pt-120 pb-120" style="background-image: url('{{ asset('assets/frontend/images/backgrounds/insurace-bg-1.jpg')  }}');">
            <div class="container">
                <div class="sec-title">

                    <h6 class="sec-title__tagline">What we’re offering</h6><!-- /.sec-title__tagline -->
                    <h3 class="sec-title__title">We provide great categories<br> for you</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30">
                    @foreach($data['services'] as $index=>$service)
                        <div class="col-md-6 col-lg-3">
                            <div class="portfolio-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='0ms'>
                                <div class="portfolio-card__image">
                                    <img class="lazy" data-src="{{ asset(thumbnailImagePath($service->image)) }}" alt="">
                                </div><!-- /.portfolio-card__image -->
                                <div class="portfolio-card__content">
                                    <div class="portfolio-card__head">
                                        <h6 class="portfolio-card__tagline"></h6>
                                        <h3 class="portfolio-card__title">
                                            <a href="{{ route('frontend.service.show', $service->key) }}">{{ $service->title ?? '' }}</a>
                                        </h3><!-- /.portfolio-card__title -->
                                    </div>
                                    <a href="{{ route('frontend.service.show', $service->key) }}" class="portfolio-card__link">
                                        <i class="icon-right-arrow"></i>
                                    </a><!-- /.blog-card__link -->
                                </div><!-- /.portfolio-card__content -->
                            </div><!-- /.portfolio-card -->
                        </div>
                    @endforeach
                </div>

            </div><!-- /.container -->
        </section><!-- /.service-page -->
    @endif


    @if(count($data['jobs']))
        <section class="service-one service-home-one pt-120 pb-0">
            <div class="container">
                <div class="sec-title">
                    <h6 class="sec-title__tagline">Current demands</h6>
                    <h3 class="sec-title__title">Learn more about our latest <br> jobs</h3>
                </div>
                <div class="row gutter-y-30 pt-20">
                    @foreach($data['jobs'] as $index=>$job)
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='0ms'>
                                <div class="service-card__image">
                                    <img class="lazy" data-src="{{ asset(imagePath($job->image)) }}" style="width: 370px; height: 253px; object-fit: cover" alt="">
                                    <div class="service-card__icon">
                                        <i class="icon-guarantee"></i>
                                    </div>
                                </div>
                                <div class="service-card__content">
                                    <h3 class="service-card__title">
                                        <a href="{{ route('frontend.job.show', $job->slug) }}">{{ $job->title ?? '' }}</a>
                                    </h3>
                                    <p class="service-card__info">
                                        @if(@$job->end_date >= date('Y-m-d'))
                                            {{date('M j, Y',strtotime(@$job->start_date))}} - {{date('M j, Y',strtotime(@$job->end_date))}}
                                        @else
                                            Expired
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-md-6 col-lg-4 align-items-stretch">
                        <div class="service-card service-featured wow fadeInUp h-100" data-wow-duration="1500ms" data-wow-delay="8ms">
                            <div class="service-card__bg" style="background-image: url('{{asset('assets/frontend/images/resources/service-featured.jpg')}}');"></div>
                            <div class="service-card__content">
                                <h3 class="service-card__title" style="margin-top: 40px">
                                    We offer best updates on <br> current demands <br> for your success
                                </h3>
                                <p class="service-card__info">Start exploring the right away.</p>
                                <a href="{{ route('frontend.job.index') }}" class="modins-btn">View All <em></em></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($data['homepage']->why_title)
        <div class="about-three pt-120" style="position: relative;">
            <div class="about-one-home__shape">
                <img src="{{asset('assets/frontend/images/shapes/about-shape-1-3.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="about-three__left">
                            <div class="about-one__content">
                                <div class="sec-title">
                                    <h6 class="sec-title__tagline">{{ $data['homepage']->why_subtitle ?? 'Why Choose Us' }}</h6>
                                    <h3 class="sec-title__title">{{ $data['homepage']->why_title }}</h3>
                                </div>
                                <p class="about-one__text text-align-justify">{{ $data['homepage']->why_description ?? '' }}</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-three__right">
                            <div class="about-three__img-1">
                                <div class="img">
                                    <img class="lazy" data-src="{{ asset(imagePath($data['homepage']->why_image)) }}" alt="">
                                </div>
                                <div class="about-three__counter__map">
                                    <img class="lazy" data-src="{{ asset('assets/frontend/images/shapes/map-shape.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="funfact-one funfact-two">
            <div class="container">
                <div class="list-unstyled funfact-one__list">
                    <div class="funfact-two__lines">
                        <img src="{{ asset('assets/frontend/images/shapes/line.png') }}" alt="">
                        <img src="{{ asset('assets/frontend/images/shapes/line.png') }}" alt="">
                        <img src="{{ asset('assets/frontend/images/shapes/line.png') }}" alt="">
                        <img src="{{ asset('assets/frontend/images/shapes/line-4.png') }}" alt="">
                    </div>
                    <div class="row gutter-y-40">
                        <div class="col-md-6 col-lg-3">
                            <div class="funfact-one__item count-box">
                                <i class="icon-insurance"></i>
                                <div class="funfact-one__content">
                                    <div class="funfact-one__wrap">
                                        <h3 class="funfact-one__count count-text" data-stop="{{ $data['homepage']->project_completed ?? '600' }}" data-speed="1500">
                                        </h3>
                                        <h3 class="funfact-one__count count-before">+</h3>
                                    </div>
                                    <p class="funfact-one__text">Projects Completed</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="funfact-one__item count-box">
                                <i class="icon-group"></i>
                                <div class="funfact-one__content">
                                    <div class="funfact-one__wrap">
                                        <h3 class="funfact-one__count count-text" data-stop="{{ $data['homepage']->happy_clients ?? '560' }}" data-speed="1500"></h3>
                                        <h3 class="funfact-one__count count-before">+</h3>
                                    </div>
                                    <p class="funfact-one__text">Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="funfact-one__item count-box">
                                <i class="icon-life-insurance"></i>
                                <div class="funfact-one__content">
                                    <div class="funfact-one__wrap">
                                        <h3 class="funfact-one__count count-text" data-stop="{{ $data['homepage']->visa_approved ?? '785' }}" data-speed="1500">
                                        </h3>
                                        <h3 class="funfact-one__count count-before">+</h3>
                                    </div>
                                    <p class="funfact-one__text">Visa Approved</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="funfact-one__item count-box">
                                <i class="icon-success"></i>
                                <div class="funfact-one__content">
                                    <div class="funfact-one__wrap">
                                        <h3 class="funfact-one__count count-text" data-stop="{{ $data['homepage']->success_stories ?? '650' }}" data-speed="1500"></h3>
                                        <h3 class="funfact-one__count count-before">+</h3>
                                    </div>
                                    <p class="funfact-one__text">Success Stories</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(count($data['homepage']->recruitmentProcess))
        <div class="feature-three" style="margin-top: -120px;padding-top: 170px;background-color:  #f4f3f8;">
            <div class="container">
                <div class="sec-title">

                    <h6 class="sec-title__tagline">Our working process</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">Easy steps to get the<br>best results</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->

                <div class="row gutter-y-30 pt-40">
                    @foreach($data['homepage']->recruitmentProcess as $index=>$process)
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                            <div class="feature-three__item">
                                <div class="feature-three__top">
                                    <div class="feature-three__counter">{{ $index + 1 }}</div>
                                    <div class="feature-three__icon">
                                        <i class="{{ recruitment_process_icons($index) }}"></i>
                                    </div>
                                </div>
                                <div class="feature-three__content h-75">
                                    <h3 class="feature-three__title">{{@$process->title}}</h3>
                                    <p class="feature-three__info">{{ $process->description ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

{{--    @if(count($latesttests) > 0)--}}
{{--        <div class="blog-three" style="margin-top: -120px;background-image: url('{{ asset('assets/frontend/images/pattern/blog-bg-3.jpg') }}');">--}}
{{--            <div class="container">--}}
{{--                <div class="blog-three__section_title d-flex justify-content-between align-items-center">--}}
{{--                    <div class="sec-title">--}}

{{--                        <h6 class="sec-title__tagline">Trainings and tests</h6>--}}

{{--                        <h3 class="sec-title__title">Get the best trainings <br> you deserve</h3>--}}
{{--                    </div><!-- /.sec-title -->--}}
{{--                    <div class="blog-three__btn">--}}
{{--                        <a href="{{ route('test-preparation.list') }}" class="modins-btn">View All Tests <em></em></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row gutter-y-30">--}}
{{--                    @foreach(@$latesttests as $index=>$latest)--}}
{{--                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">--}}
{{--                            <div class="blog-card-three">--}}
{{--                                <img class="lazy" data-src="{{ @$latest->image ? asset('/images/test_preparation/thumb/thumb_'.@$latest->image):''}}" alt="">--}}
{{--                                <div class="blog-card-three__content">--}}
{{--                                    <h3 class="blog-card-three__title">--}}
{{--                                        <a href="{{ route('test-preparation.single', $latest->slug) }}">{{ $latest->title ?? ''}}</a>--}}
{{--                                    </h3>--}}
{{--                                    <p>{{ elipsis( strip_tags($latest->summary ?? '') )}}</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}

    @if(count( $data['clients']) > 0)
        <div class="client-carousel client-carousel-one">
            <div class="client-carousel__shape-1">
                <img src="{{ asset('assets/frontend/images/shapes/line-shape-1.png') }}" alt="shape-1">
            </div>
            <div class="client-carousel__shape-2">
                <img src="{{ asset('assets/frontend/images/shapes/line-shape-2.png') }}" alt="shape-2">
            </div>

            <div class="container portfolio-one__home" style="padding-top: 0px">
                <div class="sec-title">

                    <h6 class="sec-title__tagline">Our affiliation</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">Clients We Proudly <br> Represent</h3><!-- /.sec-title__title -->
                </div>
                <div class="client-carousel__one modins-owl__carousel owl-theme owl-carousel" data-owl-options='{
                "items": 5,
                "margin":10,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": 6000,
                "nav":false,
                "dots":false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "responsive":{
                    "0":{
                        "items":1,
                        "margin": 0
                    },
                    "360":{
                        "items":2,
                        "margin": 0
                    },
                    "575":{
                        "items":3,
                        "margin": 30
                    },
                    "768":{
                        "items":3,
                        "margin": 30
                    },
                    "992":{
                        "items": 4,
                        "margin": 30
                    },
                    "1200":{
                        "items": 5
                    }
                }
                }'>
                    @foreach($data['clients'] as $index=>$client)
                        <div class="client-carousel__one__item">
                            <a href="{{ $client->link ?? '#' }}" target="{{ ($client->link !== null) ? '_blank':'' }}">
                                <img src="{{ asset(imagePath($client->image)) }}"  alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    @if(count($data['homepage']->coreValueDetail))
        <section class="service-three" style="background-color:  #f4f3f8;">
            <div class="container">
                <div class="sec-title">

                    <h6 class="sec-title__tagline">{{ $data['homepage']->core_subtitle ?? '' }}</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">{{ $data['homepage']->core_title ?? '' }}</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->

                <div class="row gutter-y-30 mt-20">
                    @foreach($data['homepage']->coreValueDetail as $index=>$core_value)
                        <div class="col-md-6 col-lg-6 d-flex align-items-stretch">
                            <div class="service-three-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='0ms'>
                                <div class="service-three-card__inner">
                                    <div class="service-three-card__icon">
                                        <i class="{{ core_value_icon($index) }}"></i>
                                    </div>
                                    <div class="service-three-card__content">
                                        <div class="service-three-card__img" style="background-image: url({{ asset('assets/frontend/images/service/service-3-bg.jpg') }});">
                                        </div>
                                        <h3 class="service-three-card__title">
                                            <a>{{ $core_value->title ?? '' }}</a>
                                        </h3><!-- /.service-three-card__title -->
                                        <p class="service-three-card__info">{{ $core_value->description ?? '' }}</p>
                                    </div><!-- /.service-three-card__content -->
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-page -->
    @endif


    @if(count($data['testimonials'])>0)
        <section class="testimonials-one">
            <div class="testimonials-one__bg" style="background-image: url('{{ asset('assets/frontend/images/backgrounds/testimonail-one-bg.jpg') }}');"></div>
            <div class="container-fluid">
                <div class="testimonials-one__heading">
                    <div class="sec-title">

                        <h6 class="sec-title__tagline">Our Success Stories</h6>

                        <h3 class="sec-title__title">Hear what they’re talking about us</h3>
                    </div><!-- /.sec-title -->
                    <p class="testimonials-one__info">Live through our testimonials and stories to better understand how we operate and deliver success</p>
                </div>
                <div class="testimonials-one__carousel modins-owl__carousel modins-owl__carousel--with-shadow modins-owl__carousel--basic-nav owl-carousel" data-owl-options='{
                "items": 1,
                "margin": 0,
                "loop": true,
                "smartSpeed": 700,
                "nav": false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "dots": true,
                "autoplay": true,
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "576": {
                        "items": 2,
                        "margin":30
                    },
                    "992": {
                        "items": 2,
                        "margin": 30
                    }
                }
            }'>
                    @foreach($data['testimonials'] as $index=>$testimonial)
                        <div class="item align-items-stretch d-flex">
                            <div class="testimonials-card wow h-100 fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <div class="testimonials-card__inner h-100">
                                    <div class="shape-one"><img src="{{ asset('assets/frontend/images/shapes/testi-shape-one.png') }}" alt="shape"></div>
                                    <div class="testimonials-card__top">
                                        <div class="testimonials-card__image">
                                            <img src="{{ asset(imagePath($testimonial->image))}}" alt="Kevin martin">
                                        </div>
                                        <div class="testimonials-card__top__left">
                                            <h3 class="testimonials-card__name">
                                                {{ $testimonial->title ?? '' }}
                                            </h3>
                                            <p class="testimonials-card__designation">{{ $testimonial->position ?? '' }}</p>
                                        </div>
                                    </div>
                                    <div class="testimonials-card__content text-align-justify">
                                        {{ $testimonial->description }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    @endif

{{--    @if(count($latestPosts) > 0)--}}
{{--        <section class="blog-one blog-one--home">--}}
{{--            <div class="container">--}}
{{--                <div class="sec-title">--}}

{{--                    <h6 class="sec-title__tagline">Recent News Feed</h6><!-- /.sec-title__tagline -->--}}

{{--                    <h3 class="sec-title__title">Latest news & articles <br> from the blog</h3><!-- /.sec-title__title -->--}}
{{--                </div>--}}
{{--                <div class="row gutter-y-40">--}}
{{--                    @foreach(@$latestPosts as $index=>$post)--}}
{{--                        <div class="col-md-6 col-lg-4">--}}
{{--                            <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>--}}
{{--                                <div class="blog-card__image-wrap">--}}
{{--                                    <div class="blog-card__image">--}}
{{--                                        <img src="{{asset('/images/blog/thumb/thumb_'.@$post->image)}}" alt="">--}}
{{--                                        <img src="{{asset('/images/blog/thumb/thumb_'.@$post->image)}}" alt="">--}}
{{--                                        <a href="{{route('blog.single',$post->slug)}}" class="blog-card__image__link"><span class="sr-only">--}}
{{--                                             {{ucfirst(@$post->title)}}</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="blog-card__date"><span>{{date('d', strtotime($post->created_at))}}</span>--}}
{{--                                        {{date('M Y', strtotime($post->created_at))}}</div>--}}
{{--                                </div>--}}
{{--                                <div class="blog-card__content">--}}
{{--                                    <ul class="list-unstyled blog-card__meta">--}}
{{--                                        <li><a href="{{route('blog.single',@$post->slug)}}">--}}
{{--                                                <i class="fas fa-list-alt"></i>--}}
{{--                                                {{ucfirst(@$post->category->name)}}</a></li>--}}
{{--                                    </ul><!-- /.list-unstyled blog-card__meta -->--}}
{{--                                    <h3 class="blog-card__title"><a href="{{route('blog.single',$post->slug)}}">--}}
{{--                                            {{ucfirst(@$post->title)}} </a></h3>--}}
{{--                                    <a href="{{route('blog.single',$post->slug)}}" class="blog-card__link">--}}
{{--                                        <span>Read more</span>--}}
{{--                                        <i class="icon-right-arrow"></i>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    @endif--}}

    {{--    <div class="cta-one cta-one__home">--}}
    {{--        <div class="container">--}}
    {{--            <div class="cta-one__inner">--}}
    {{--                <div class="cta-one__headline">--}}
    {{--                    <div class="cta-one__icon">--}}
    {{--                        <i class="icon-folder"></i>--}}
    {{--                    </div>--}}
    {{--                    <div class="cta-one__content">--}}
    {{--                        <span class="cta-one__tagline">Quisque vel ortor</span>--}}
    {{--                        <h3 class="cta-one__title">Start reporting or tracking your claims</h3>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="cta-one__btn">--}}
    {{--                    <a href="contact.html" class="modins-btn modins-btn-white">Track your Claim <em></em></a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

@endsection
@section('js')
@endsection
