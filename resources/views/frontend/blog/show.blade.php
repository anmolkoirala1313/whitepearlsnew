@extends('frontend.layouts.master')
@section('title') {{ $data['row']->title ?? $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'image-3.jpeg'])

    <section class="blog-one blog-one--page">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-8">

                    <div class="blog-details">
                        <div class="blog-card blog-card-two">
                            <div class="blog-card__image-wrap">
                                <div class="blog-card__image">
                                    <img class="lazy" data-src="{{ asset(imagePath($data['row']->image)) }}" alt="">
                                </div>
                                <div class="blog-card__date"><span>{{date('d', strtotime($data['row']->created_at))}}</span>
                                    {{date('M Y', strtotime($data['row']->created_at))}}</div>
                            </div><!-- /.blog-card__image -->
                            <div class=" blog-card-two__content">
                                <h3 class="blog-card__title"> {{ $data['row']->title ?? '' }}</h3>
                                <div class="blog-card-two__text custom-description text-align-justify">
                                    {!!  $data['row']->description !!}
                                </div>
                            </div>
                        </div>
                        <div class="blog-details__meta">
                            <div class="blog-details__tags">
                                <h4 class="blog-details__tags__title">Category</h4><!-- /.blog-details__tags__title -->
                                <div class="sidebar__tags">
                                    <a href="{{ route('frontend.blog.category', $data['row']->blogCategory->slug)}}">  {{ $data['row']->blogCategory->title ?? ''}}</a>
                                </div>
                            </div>
                            <div class="blog-details__social">
                                <a href="#" tabindex="0" rel="noopener" aria-label="facebook">
                                    <i onclick='fbShare("{{route('frontend.blog.show',$data['row']->slug)}}")'
                                       class="fab fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" tabindex="0" rel="noopener" aria-label="twitter">
                                    <i onclick='twitShare("{{route('frontend.blog.show',$data['row']->slug)}}","{{ $data['row']->title }}")'
                                       class="fab fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" tabindex="0" rel="noopener" aria-label="pinterest">
                                    <i onclick='whatsappShare("{{route('frontend.blog.show',$data['row']->slug)}}","{{ $data['row']->title }}")'
                                       class="fab fa-whatsapp" aria-hidden="true"></i></a>
                            </div>
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
