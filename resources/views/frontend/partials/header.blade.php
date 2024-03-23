<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="{{ucwords(@$setting_data->meta_description ?? '')}} "/>
    <meta name="keywords" content="{{@$setting_data->meta_tags ?? ''}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="canonical" href="" />

    @if (\Request::is('/'))
        <title> {{ucwords($setting_data->title ?? '')}}</title>
    @else
        <title>@yield('title') |  {{ucwords($setting_data->title ?? '')}} </title>
    @endif


<!-- favicons Icons -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ $setting_data->favicon ?  asset(imagePath($setting_data->favicon)) : ''}}">

    <meta property="og:title" content=" {{ucwords(@$setting_data->meta_title ?? '')}}" />
    <meta property="og:type" content="Consultancy" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content=" {{ucwords(@$setting_data->meta_description ?? '')}}" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/bootstrap-select/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/tiny-slider/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/modins-icons/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/owl-carousel/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/owl-carousel/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/ion.rangeSlider/ion.rangeSlider.min.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/nmf.css') }}" />
    <script async src="https://www.googletagmanager.com/gtag/js?id={{@$setting_data->google_analytics}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{@$setting_data->google_analytics}}');
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('css')
    @stack('styles')
</head>

<body class="custom-cursor">

<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>

{{--<div class="preloader">--}}
{{--    <div class="preloader__image" style="background-image: url({{asset('assets/frontend/images/loader.png')}});"></div>--}}
{{--</div>--}}

<!-- /.preloader -->
<div class="page-wrapper">
    <div class="topbar-one">
        <div class="topbar-one__bg" style="background-image: url({{asset('assets/frontend/images/pattern/header-top-pattern.png')}});"></div>
        <div class="container-fluid">
            <div class="topbar-one__inner">
                <ul class="list-unstyled topbar-one__info">
                    <li class="topbar-one__info__item">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="mailto:{{@$setting_data->email ?? ''}}">{{@$setting_data->address ?? ''}}</a>
                    </li>
                    <li class="topbar-one__info__item">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:{{@$setting_data->email ?? ''}}">{{@$setting_data->email ?? ''}}</a>
                    </li>
                </ul><!-- /.list-unstyled topbar-one__info -->
                <div class="topbar-one__right">
                    {{--                    <ul class="topbar-one__menu">--}}
                    {{--                        <li><a href="#">Make a Claim</a></li>--}}
                    {{--                        <li><a href="#">FAQs</a></li>--}}
                    {{--                        <li><a href="#">Contact Us</a></li>--}}
                    {{--                    </ul>--}}
                    <div class="topbar-one__social">
                        @if(@$setting_data->facebook)
                            <a href="{{ @$setting_data->facebook }}">
                                <i class="fab fa-facebook" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                        @endif
                        @if(@$setting_data->youtube)
                            <a href="{{ @$setting_data->youtube }}">
                                <i class="fab fa-youtube" aria-hidden="true"></i>
                                <span class="sr-only">Youtuve</span>
                            </a>
                        @endif
                        @if(@$setting_data->instagram)
                            <a href="{{ @$setting_data->instagram }}">
                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                        @endif
                        @if(@$setting_data->linkedin)
                            <a href="{{ @$setting_data->linkedin }}">
                                <i class="fab fa-linkedin" aria-hidden="true"></i>
                                <span class="sr-only">Linkedin</span>
                            </a>
                        @endif
                        @if(!empty(@$setting_data->ticktock))
                            <a href="{{ @$setting_data->ticktock }}">
                                <i class="fa-brands fa-tiktok" aria-hidden="true"></i>
                                <span class="sr-only">Ticktock</span>
                            </a>
                        @endif
                    </div><!-- /.topbar-one__social -->
                </div><!-- /.topbar-one__right -->
            </div><!-- /.topbar-one__inner -->
        </div><!-- /.container-fluid -->
    </div><!-- /.topbar-one -->




    <header class="main-header sticky-header sticky-header--normal">
        <div class="container-fluid">
            <div class="main-header__inner">
                <div class="main-header__logo">
                    <a href="/">
                        <img src="{{ $setting_data->logo ?  asset(imagePath($setting_data->logo)) : asset(imagePath($setting_data->logo_white))}}" width="250">
                    </a>
                </div><!-- /.main-header__logo -->
                <div class="main-header__nav__wrapper">
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">
                            <li><a href="/">Home</a></li>
                            @if(!empty($top_nav_data))
                                @foreach($top_nav_data as $nav)
                                    @if(!empty($nav->children[0]))
                                        <li class="dropdown">
                                            <a href="#">{{ @$nav->name ?? @$nav->title }}</a>

                                            <ul class="sub-menu">
                                                @foreach($nav->children[0] as $childNav)
                                                    <li class="{{!empty($childNav->children[0]) ? 'dropdown':''}}">
                                                        <a href="{{get_menu_url($childNav->type, $childNav)}}">  {{ @$childNav->name ?? @$childNav->title ??''}}</a>
                                                        @if(@$childNav->children[0])
                                                            <ul class="sub-menu">
                                                                @foreach(@$childNav->children[0] as $key => $lastchild)
                                                                    <li>
                                                                        <a href="{{get_menu_url($lastchild->type, $lastchild)}}" target="{{@$lastchild->target ? '_blank':''}}">
                                                                            {{ @$lastchild->name ?? @$lastchild->title ?? ''}}
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                                {{ @$nav->name ?? @$nav->title ??''}}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </nav><!-- /.main-header__nav -->
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                        <a href="#" class="search-toggler main-header__search">
                            <i class="icon-magnifying-glass" aria-hidden="true"></i>
                            <span class="sr-only">Search</span>
                        </a><!-- /.search-toggler -->
                        <a href="#" class="main-header__cart">
                            <i class="icon-shopping-cart" aria-hidden="true"></i>
                            <span class="sr-only">Search</span>
                        </a><!-- /.search-toggler -->
                        <a href="{{ route('frontend.contact-us') }}" class="modins-btn main-header__btn">
                            Get a Quote
                            <em></em>
                        </a><!-- /.thm-btn main-header__btn -->
                        <a href="tel:{{@$setting_data->phone ?? $setting_data->mobile ?? ''}}" class="main-header__call">
                            <i class="icon-calling"></i>
                            <span>Call Experts <br>
                                    <b> {{@$setting_data->phone ?? $setting_data->mobile ?? ''}}</b></span>
                        </a><!-- /.thm-btn main-header__btn -->
                    </div><!-- /.main-header__right -->

                </div>
            </div><!-- /.main-header__inner -->
        </div><!-- /.container-fluid -->
    </header><!-- /.main-header -->

