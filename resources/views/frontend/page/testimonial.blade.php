@extends('frontend.layouts.master')
@section('title') {{ $page }} @endsection
@section('css')
@endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'image-2.png'])

    <section class="testimonials-one testimonials-one--page">
        <div class="container">
            @if($data['heading'])
                <div class="sec-title" style="text-align: center;">
                    <h6 class="sec-title__tagline">{{ $data['heading']->subtitle ?? '' }}</h6><!-- /.sec-title__tagline -->
                    <h3 class="sec-title__title">{{ $data['heading']->title ?? '' }}</h3><!-- /.sec-title__title -->
                    <div class="about-one__text text-align-justify custom-description heading mt-20">{!! $data['heading']->description ?? ''  !!}</div>
                </div>
            @endif
            <div class="row gutter-y-30">
                @if(count($data['rows'] ))
                    @foreach($data['rows'] as $index=>$testimonial)
                        <div class="col-md-6 col-lg-6 d-flex align-items-stretch">
                            <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='{{ $index }}00ms'>
                                <div class="testimonials-card__inner h-100">
                                    <div class="shape-one"><img src="{{ asset('assets/frontend/images/shapes/testi-shape-one.png') }}" alt="shape"></div>
                                    <div class="testimonials-card__top">
                                        <div class="testimonials-card__image">
                                            <img src="{{ asset(imagePath($testimonial->image)) }}" alt="">
                                        </div>
                                        <div class="testimonials-card__top__left">
                                            <h3 class="testimonials-card__name">
                                                {{ $testimonial->title ?? '' }}
                                            </h3>
                                            <p class="testimonials-card__designation">{{ $testimonial->position ?? '' }}</p>
                                        </div>
                                    </div>
                                    <div class="testimonials-card__content">
                                        "{{ $testimonial->description }}"
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="pagination-block">
                    {{ $data['rows']->links('vendor.pagination.default') }}
                </div>
            </div>

        </div>
    </section>

@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script src="{{asset('assets/common/general.js')}}"></script>
    @include($module.'includes.toast_alert')
@endsection
