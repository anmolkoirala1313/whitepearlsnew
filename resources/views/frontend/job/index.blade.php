@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'image-3.jpeg'])

    <section class="blog-one blog-one--page" style="background-image: url('{{ asset('assets/frontend/images/pattern/blog-bg-3.jpg') }}');">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-8">
                    <div class="row gutter-y-30">
                        @foreach( $data['rows']  as $index=>$row)
                            <div class="col-md-6 col-lg-6 d-flex align-items-stretch">
                                <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='0ms'>
                                    <div class="service-card__image">
                                        <img class="lazy" data-src="{{ asset(imagePath($row->image)) }}" alt=""  style="width: 370px; height: 253px; object-fit: cover">
                                        <div class="service-card__icon">
                                            <i class="icon-guarantee"></i>
                                        </div>
                                    </div>
                                    <div class="service-card__content">
                                        <h3 class="service-card__title">
                                            <a href="{{ route('frontend.job.show', $row->slug) }}">{{ $row->title ?? ''}}</a>
                                        </h3>
                                        <p class="service-card__info">
                                            @if(@$row->end_date >= date('Y-m-d'))
                                                {{date('M j, Y',strtotime(@$row->start_date))}} - {{date('M j, Y',strtotime(@$row->end_date))}}
                                            @else
                                                Expired
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="pagination-block">
                            {{ $data['rows']->links('vendor.pagination.default') }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include($view_path.'includes.sidebar')
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection
