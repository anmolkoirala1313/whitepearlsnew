{{--<section class="news-one" style="background-color: #F5F7F8;padding: 100px 0 90px;margin-top: 40px;">--}}
{{--    <div class="container">--}}
{{--        <div class="section-title text-center">--}}
{{--            <div class="section-title__tagline-box">--}}
{{--                <p class="section-title__tagline">{{ $element->first()->subtitle ?? '' }}</p>--}}
{{--            </div>--}}
{{--            <h2 class="section-title__title">{{ $element->first()->title ?? '' }}</h2>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            @if( $data['slider_list_type'] == 'normal')--}}
{{--                  @include($base_route.'includes.slider_list_detail')--}}
{{--            @else--}}
{{--                <div class="news-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style" data-owl-options='{--}}
{{--                    "items": 3,--}}
{{--                    "margin": 30,--}}
{{--                    "smartSpeed": 600,--}}
{{--                    "loop":true,--}}
{{--                    "autoplay": 6000,--}}
{{--                    "nav":false,--}}
{{--                    "dots":true,--}}
{{--                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],--}}
{{--                    "responsive":{--}}
{{--                        "0":{--}}
{{--                            "items":1--}}
{{--                        },--}}
{{--                        "768":{--}}
{{--                            "items":2--}}
{{--                        },--}}
{{--                        "992":{--}}
{{--                            "items": 3--}}
{{--                        }--}}
{{--                    }--}}
{{--                }'>--}}
{{--                    @include($base_route.'includes.slider_list_detail')--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<div class="blog-three">
    <div class="container">
        <div class="blog-three__section_title d-flex justify-content-between align-items-center">
            <div class="sec-title">

                <h6 class="sec-title__tagline">{{ $element->first()->subtitle ?? '' }}</h6>

                <h3 class="sec-title__title">{{ $element->first()->title ?? '' }}</h3>
            </div><!-- /.sec-title -->
        </div>
        <div class="row gutter-y-30">
            @if( $data['slider_list_type'] == 'normal')
                @include($base_route.'includes.slider_list_detail')
            @else
                <div class="portfolio-page__carousel modins-owl__carousel modins-owl__carousel--with-shadow modins-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
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
                                            "margin": 30
                                        },
                                        "992": {
                                            "items": 3,
                                            "margin": 30
                                        }
                                    }
                                }'>
                    @include($base_route.'includes.slider_list_detail')
                </div>
            @endif
{{--            <div class="portfolio-page__carousel modins-owl__carousel modins-owl__carousel--with-shadow modins-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{--}}
{{--                                    "items": 1,--}}
{{--                                    "margin": 0,--}}
{{--                                    "loop": true,--}}
{{--                                    "smartSpeed": 700,--}}
{{--                                    "nav": false,--}}
{{--                                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],--}}
{{--                                    "dots": true,--}}
{{--                                    "autoplay": true,--}}
{{--                                    "responsive": {--}}
{{--                                        "0": {--}}
{{--                                            "items": 1--}}
{{--                                        },--}}
{{--                                        "576": {--}}
{{--                                            "items": 2,--}}
{{--                                            "margin": 30--}}
{{--                                        },--}}
{{--                                        "992": {--}}
{{--                                            "items": 3,--}}
{{--                                            "margin": 30--}}
{{--                                        }--}}
{{--                                    }--}}
{{--                                }'>--}}
{{--               --}}
{{--            </div>--}}
        </div>
    </div>
</div>
