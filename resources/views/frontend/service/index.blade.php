@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'image-2.png'])

    <section class="service-details">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-md-12 col-lg-4">
                    @include($view_path.'includes.sidebar')
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        @foreach( $data['rows']  as $index=>$row)
                            <div class="col-md-6 col-lg-6 {{ $index > 1 ? 'mt-5':'' }}">
                                <div class="portfolio-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='{{ $index }}00ms'>
                                    <div class="portfolio-card__image">
                                        <img src="{{ asset(thumbnailImagePath($row->image)) }}" alt="Insurance policy">
                                    </div>
                                    <div class="portfolio-card__content">
                                        <div class="portfolio-card__head">
                                            <h3 class="portfolio-card__title">
                                                <a href="{{ route('frontend.service.show', $row->key) }}">{{ $row->title ?? '' }}</a>
                                            </h3>
                                        </div>
                                        <a href="{{ route('frontend.service.show', $row->key) }}" class="portfolio-card__link">
                                            <i class="icon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                            <div class="pagination-block">
                                {{ $data['rows']->links('vendor.pagination.default') }}
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection
