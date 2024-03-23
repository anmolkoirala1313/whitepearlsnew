@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'background_action.jpeg'])

    <section class="blog-one blog-one--page">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-8">
                    <div class="row gutter-y-30">
                        @foreach( $data['rows']  as $index=>$row)
                            <div class="col-md-6">
                                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='{{$index}}00ms'>
                                    <div class="blog-card__image-wrap">
                                        <div class="blog-card__image">
                                            <img src="{{ asset(thumbnailImagePath($row->image))}}" alt="">
                                            <img src="{{ asset(thumbnailImagePath($row->image))}}" alt="">
                                            <a href="{{ route('frontend.blog.show', $row->slug) }}" class="blog-card__image__link"><span class="sr-only">
                                             {{ $row->title ?? '' }}</span>
                                            </a>
                                        </div>
                                        <div class="blog-card__date"><span>{{date('d', strtotime($row->created_at))}}</span>
                                            {{date('M Y', strtotime($row->created_at))}}</div>
                                    </div>
                                    <div class="blog-card__content">
                                        <ul class="list-unstyled blog-card__meta">
                                            <li><a href="{{ route('frontend.blog.show', $row->slug) }}">
                                                    <i class="fas fa-list-alt"></i>
                                                    {{ $row->blogCategory->title ?? '' }}</a></li>
                                        </ul><!-- /.list-unstyled blog-card__meta -->
                                        <h3 class="blog-card__title"><a href="{{ route('frontend.blog.show', $row->slug) }}">
                                                {{ $row->title ?? '' }} </a></h3>
                                        <a href="{{ route('frontend.blog.show', $row->slug) }}" class="blog-card__link">
                                            <span>Read more</span>
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
