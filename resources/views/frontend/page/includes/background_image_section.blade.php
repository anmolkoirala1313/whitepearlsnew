<section class="about-one">
    <div class="about-one__shape-3 float-bob-y">
        <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/about-one-shape-3.png')}}" alt="">
    </div>
{{--    <div class="about-one__shape-4 img-bounce">--}}
{{--        <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/about-one-shape-4.png')}}" alt="">--}}
{{--    </div>--}}
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__left">
                    <div class="about-one__img-box wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-one__img">
                            <img class="lazy" data-src="{{ asset(imagePath($element->first()->image)) }}" alt="">
                        </div>
{{--                        <div class="about-one__shape-1 float-bob-x">--}}
{{--                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/about-one-shape-1.png')}}" alt="">--}}
{{--                        </div>--}}
                        <div class="about-one__shape-2 float-bob-y">
                            <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/about-one-shape-2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-one__right">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <p class="section-title__tagline">{{ $element->first()->subtitle ?? '' }}</p>
                        </div>
                        <h2 class="section-title__title section-title_normal" style="    margin-bottom: 10px;">{{ $element->first()->title ?? '' }}</h2>
                    </div>
                    <p class="about-one__text text-align-justify custom-description"> {!! $element->first()->description ?? '' !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="about-two about-two--home">
    <div class="about-two__bg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-two__left wow">

                    <div class="about-two__img-1">
                        <img class="lazy" data-src="{{ asset(imagePath($element->first()->image)) }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-two__right">
                    <div class="sec-title">

                        <h6 class="sec-title__tagline">{{ $element->first()->subtitle ?? '' }}</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">{{ $element->first()->title ?? '' }}</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="about-two__info text-align-justify">
                        {!! $element->first()->description ?? '' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
