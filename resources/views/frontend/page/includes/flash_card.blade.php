{{--<section class="services-page" style="background-color: #fff;padding: 45px 0 90px;">--}}
{{--    <div class="container">--}}
{{--        <div class="section-title-three text-left">--}}
{{--            <div class="section-title__tagline-box">--}}
{{--                <p class="section-title__tagline">{{ $element->first()->subtitle ?? '' }}</p>--}}
{{--            </div>--}}
{{--            <h2 class="section-title-three__title">{{ $element->first()->title ?? '' }}</h2>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            @foreach($element as $index=>$row)--}}
{{--                <div class="col-xl-4 col-lg-6 col-md-6 d-flex align-items-stretch">--}}
{{--                    <div class="services-page__single">--}}
{{--                        <h3 class="services-page__title">--}}
{{--                            <a>{{$row->list_title ?? ''}}</a>--}}
{{--                        </h3>--}}
{{--                        <div class="services-page__icon">--}}
{{--                            @if($row->image)--}}
{{--                                <span><img src="{{ asset(imagePath($row->image)) }}"  alt=""></span>--}}
{{--                            @else--}}
{{--                                <span class="{{ get_flash_card_icons($index) }}"></span>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                        <p class="services-page__text text-align-justify">{{$row->list_description ?? ''}}</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<section class="service-three" style="background-image: url('{{ asset('assets/frontend/images/pattern/blog-bg-3.jpg') }}');">
    <div class="container">
        <div class="sec-title sec-title-stand">
            <h6 class="sec-title__tagline">{{ $element->first()->subtitle ?? '' }}</h6>
            <h3 class="sec-title__title">{{ $element->first()->title ?? '' }}</h3>
        </div>
        <div class="row gutter-y-30 mt-5">
            @foreach($element as $index=>$row)
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="service-three-card wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="{{ $index }}00ms">
                        <div class="service-three-card__inner h-100">
                            <div class="service-three-card__icon">
                                <i class="{{get_icons($index)}}"></i>
                            </div>
                            <div class="service-three-card__content h-100">
                                <div class="service-three-card__img" style="background-image: url('{{ asset(imagePath($row->image)) }}');">
                                </div>
                                <h3 class="service-three-card__title">
                                    <a >{{$row->list_title ?? ''}}</a>
                                </h3><!-- /.service-three-card__title -->
                                <p class="service-three-card__info text-align-justify">{{$row->list_description ?? ''}}</p>
                            </div><!-- /.service-three-card__content -->
                        </div>
                    </div><!-- /.service-three-card -->
                </div>
            @endforeach
        </div>
    </div>
</section>
