@extends('frontend.layouts.master')
@section('title') {{ $data['row']->title ?? $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'background_action.jpeg'])

    <section class="portfolio-details">
        <div class="container">
            <div class="row">
                <div class="portfolio-details__img">
                    <img class="lazy" data-src="{{ asset(imagePath($data['row']->image)) }}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="portfolio-details__content">
                        <h3 class="portfolio-details__title">
                            {{ $data['row']->name ?? $data['row']->title ?? '' }}
                        </h3>
                        <div class="custom-description text-align-justify">
                            {!!  $data['row']->description !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="portfolio-details__sidebar">
                        <div class="portfolio-details__info">
                            <h6 class="portfolio-details__info__tagline">Published Date:</h6>
                            <h3 class="portfolio-details__info__title">
                                @if(@$data['row']->end_date >= date('Y-m-d'))
                                    {{date('M j, Y',strtotime(@$data['row']->start_date))}} - {{date('M j, Y',strtotime(@$data['row']->end_date))}}
                                @else
                                    Expired
                                @endif
                            </h3>
                        </div>
                        @if($data['row']->company)
                            <div class="portfolio-details__info">
                                <h6 class="portfolio-details__info__tagline">Company:</h6>
                                <h3 class="portfolio-details__info__title">{{ ucfirst($data['row']->company ?? '')}}</h3>
                            </div>
                        @endif
                        @if($data['row']->required_number)
                            <div class="portfolio-details__info">
                                <h6 class="portfolio-details__info__tagline">Required Number:</h6>
                                <h3 class="portfolio-details__info__title">{{ $data['row']->required_number ?? ''}}</h3>
                            </div>
                        @endif
                        @if($data['row']->salary)
                            <div class="portfolio-details__info">
                                <h6 class="portfolio-details__info__tagline">Salary:</h6>
                                <h3 class="portfolio-details__info__title">{{ $data['row']->salary ?? '' }}</h3>
                            </div>
                        @endif
                        @if($data['row']->min_qualification)
                            <div class="portfolio-details__info">
                                <h6 class="portfolio-details__info__tagline">Minimum Qualification:</h6>
                                <h3 class="portfolio-details__info__title">{{ $data['row']->min_qualification  ?? ''}}</h3>
                            </div>
                        @endif
                        @if($data['row']->formlink && $data['row']->end_date >= date('Y-m-d'))
                            <div class="portfolio-details__info">
                                <h6 class="portfolio-details__info__tagline">Apply:</h6>
                                <h3 class="portfolio-details__info__title">
                                    <a href="{{$data['row']->formlink}}" target="_blank">Submit response</a>
                                </h3>
                            </div>
                        @endif
                        <div class="portfolio-details__social">
                            <a href="#"><i class="fab fa-facebook" onclick='fbShare("{{route('frontend.job.show',$data['row']->slug)}}")'></i></a>
                            <a href="#"><i class="fab fa-twitter" onclick='twitShare("{{route('frontend.job.show',$data['row']->slug)}}","{{ $data['row']->title }}")'></i></a>
                            <a href="#"><i class="fab fa-whatsapp" onclick='whatsappShare("{{route('frontend.job.show',$data['row']->slug)}}","{{ $data['row']->title }}")'></i></a>
                        </div>

                    </div>
                </div><!-- /.col-md-12 col-lg-4 -->
            </div>
        </div><!-- /.container -->
    </section><!-- /.portfolio-details -->


    <section class="portfolio-carousel pt-100 pb-100" style="    margin-bottom: 60px;background-image: url('{{ asset('assets/frontend/images/pattern/blog-bg-3.jpg') }}');">
        <div class="container">
            <div class="portfolio-carousel__title text-center">
                <div class="sec-title">

                    <h6 class="sec-title__tagline">Recent Demands</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">View our Jobs</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
            </div>
            <div class="portfolio-page__carousel modins-owl__carousel modins-owl__carousel--with-shadow modins-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
			"items": 1,
			"margin": 0,
			"loop": false,
			"smartSpeed": 700,
			"nav": false,
			"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
			"dots": false,
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
                @foreach($data['latest'] as $index=>$latest)
                    <div class="item ">
                        <div class="col-md-12 col-lg-12 d-flex align-items-stretch">
                            <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='0ms'>
                                <div class="service-card__image">
                                    <img class="lazy" data-src="{{ asset(imagePath($latest->image)) }}" style="width: 370px; height: 253px; object-fit: cover" alt="">
                                    <div class="service-card__icon">
                                        <i class="icon-guarantee"></i>
                                    </div>
                                </div>
                                <div class="service-card__content">
                                    <h3 class="service-card__title">
                                        <a href="{{ route('frontend.job.show', $latest->slug) }}">{{ $latest->title ?? '' }}</a>
                                    </h3>
                                    <p class="service-card__info">
                                        @if(@$job->end_date >= date('Y-m-d'))
                                            {{date('M j, Y',strtotime(@$latest->start_date))}} - {{date('M j, Y',strtotime(@$latest->end_date))}}
                                        @else
                                            Expired
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection

@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script>
        function fbShare(url) {
            window.open("https://www.facebook.com/sharer/sharer.php?u=" + url, "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
        }
        function twitShare(url, title) {
            window.open("https://twitter.com/intent/tweet?text=" + encodeURIComponent(title) + "+" + url + "", "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
        }
        function whatsappShare(url, title) {
            message = title + " " + url;
            window.open("https://api.whatsapp.com/send?text=" + message);
        }
        $( document ).ready(function() {
            let selector = $('.custom-description').find('table').length;
            if(selector>0){
                $('.custom-description').find('table').addClass('table table-bordered table-responsive');
            }
        });
    </script>
@endsection
