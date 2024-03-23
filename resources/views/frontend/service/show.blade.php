@extends('frontend.layouts.master')
@section('title') {{ $data['row']->title ?? $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'image-3.jpeg'])

    <section class="service-details">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-md-12 col-lg-4">
                    @include($view_path.'includes.sidebar')
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="service-details__content">
                        <div class="service-details__thumbnail">
                            <img class="lazy" data-src="{{ asset(imagePath($data['row']->image)) }}" alt="">
                        </div>
                        <h3 class="service-details__title">  {{ $data['row']->title ?? '' }}</h3>
                        <div class="service-details__text custom-description text-align-justify">   {!!  $data['row']->description !!}</div>
                    </div>
                    <div class="blog-details__meta" style="    border-top: 1px solid var(--nmf-border-color, #e0ddea);">
                        <h4 class="blog-details__tags__title">Share</h4>
                        <div class="blog-details__social">
                            <a href="#" tabindex="0" rel="noopener" aria-label="facebook">
                                <i onclick='fbShare("{{route('frontend.service.show',$data['row']->key)}}")'
                                   class="fab fa-facebook" aria-hidden="true"></i></a>

                            <a href="#" tabindex="0" rel="noopener" aria-label="twitter">
                                <i onclick='twitShare("{{route('frontend.service.show',$data['row']->key)}}","{{ $data['row']->title }}")'
                                   class="fab fa-twitter" aria-hidden="true"></i></a>

                            <a href="#" tabindex="0" rel="noopener" aria-label="pinterest">
                                <i onclick='whatsappShare("{{route('frontend.service.show',$data['row']->key)}}","{{ $data['row']->title }}")'
                                   class="fab fa-whatsapp" aria-hidden="true"></i></a>
                        </div>
                    </div>
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
