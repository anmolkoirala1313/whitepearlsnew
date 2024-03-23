@extends('frontend.layouts.master')
@section('title') {{ $page }} @endsection
@section('css')
@endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'image-2.png'])

    <section class="portfolio-one portfolio-page" style="padding-top: 70px;">
        <div class="container">
            @if($data['heading'])
                <div class="sec-title" style="text-align: center;">
                    <h6 class="sec-title__tagline">{{ $data['heading']->subtitle ?? '' }}</h6><!-- /.sec-title__tagline -->
                    <h3 class="sec-title__title">{{ $data['heading']->title ?? '' }}</h3><!-- /.sec-title__title -->
                    <div class="about-one__text text-align-justify custom-description heading mt-20">{!! $data['heading']->description ?? ''  !!}</div>
                </div>
            @endif
            <div class="row gutter-y-30">
                @foreach($data['rows'] as $row)
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='0ms'>
                            <div class="portfolio-card__image">
                                <img class="lazy" data-src="{{ asset(imagePath($row->image)) }}" alt="">
                            </div><!-- /.portfolio-card__image -->
                            <div class="portfolio-card__content">
                                <div class="portfolio-card__head">
                                    <h3 class="portfolio-card__title">
                                        <a href="{{ route('frontend.page.album_gallery',$row->slug) }}">{{ $row->title ?? '' }}</a>
                                    </h3><!-- /.portfolio-card__title -->
                                    <h6 class="portfolio-card__tagline">Images: ({{ $row->album_gallery_count }})</h6>
                                </div>
                                <a href="{{ route('frontend.page.album_gallery',$row->slug) }}" class="portfolio-card__link">
                                    <i class="icon-magnifying-glass"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
                <div class="portfolio-page__pagination">
                    {{ $data['rows']->links('vendor.pagination.default') }}
                </div>
        </div>
    </section>

@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script src="{{asset('assets/common/general.js')}}"></script>
    @include($module.'includes.toast_alert')
@endsection
