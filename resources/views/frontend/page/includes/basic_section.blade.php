
{{--<section class="about-three" style="    padding: 120px 0 0px;">--}}
{{--    <div class="about-three__shape-2 float-bob-y">--}}
{{--        <img class="lazy" data-src="{{asset('assets/frontend/images/shapes/about-three-shape-2.png')}}" alt="">--}}
{{--    </div>--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-xl-6">--}}
{{--                <div class="about-three__left">--}}
{{--                    <div class="about-three__img wow slideInLeft" data-wow-delay="100ms"--}}
{{--                         data-wow-duration="2500ms">--}}
{{--                        <img class="lazy" data-src="{{ asset(imagePath($element->first()->image)) }}" alt="">--}}
{{--                        <div class="about-three__shape-1 zoominout">--}}
{{--                            <img class="lazy" data-src="{{ asset('assets/frontend/images/shapes/about-three-shape-1.png') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="about-three__shape-2 float-bob-y">--}}
{{--                            <img class="lazy" data-src="{{ asset('assets/frontend/images/shapes/about-three-shape-2.png') }}" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-6">--}}
{{--                <div class="about-three__right">--}}
{{--                    <div class="section-title-three text-left">--}}
{{--                        <div class="section-title-three__tagline-box">--}}
{{--                            <p class="section-title-three__tagline">{{ $element->first()->subtitle ?? '' }}</p>--}}
{{--                        </div>--}}
{{--                        <h2 class="section-title-three__title">{{ $element->first()->title ?? '' }}</h2>--}}
{{--                    </div>--}}
{{--                    <div class="about-three__text-2 text-align-justify custom-description">--}}
{{--                        {!! $element->first()->description ?? '' !!}--}}
{{--                    </div>--}}
{{--                    @if($element->first()->button_link)--}}
{{--                        <div class="about-two__btn-box">--}}
{{--                            <a href="{{$element->first()->button_link}}" class="about-one__btn thm-btn">  {{ $element->first()->button ?? 'Reach Out' }}</a>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<section class="about-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-one__left">
                    <div class="sec-title">

                        <h6 class="sec-title__tagline">{{ $element->first()->subtitle ?? '' }}</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">{{ $element->first()->title ?? '' }}</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="about-one__text text-align-justify custom-description" style="    margin-bottom: 15px;">
                        {!! $element->first()->description ?? '' !!}
                    </div>
                    <!-- /.about-one_text -->
                    @if($element->first()->button_link)
                        <div class="about-one__btns">
                            <a href="{{$element->first()->button_link}}" class="modins-btn about-one__link">
                                {{ $element->first()->button ?? 'Reach Out' }}
                                <em></em></a>
                            <a href="tel:{{@$setting_data->phone ?? $setting_data->mobile ?? ''}}" class="about-one__call">
                                <i class="icon-calling"></i>
                                <span>Call experts <br>
                                            <b>{{@$setting_data->phone ?? $setting_data->mobile ?? ''}}</b></span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6">

                <div class="about-one__content">
                    <div class="about-one__img">
                        <img class="lazy" data-src="{{ asset(imagePath($element->first()->image)) }}" alt="">
                    </div>
                </div><!-- /.why-choose-two__content -->
            </div><!-- /.col-lg-6 -->
        </div>
    </div>
</section>
