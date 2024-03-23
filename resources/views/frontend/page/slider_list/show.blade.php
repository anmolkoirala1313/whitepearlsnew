@extends('frontend.layouts.master')
@section('title') {{ $data['row']->list_title ?? $page_title }} @endsection

@section('content')

    @include($view_path.'slider_list.includes.breadcrumb',['breadcrumb_image'=>'image-3.jpeg'])

    <section class="service-details">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-md-12 col-lg-4">
                    @include($view_path.'slider_list.includes.sidebar')
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="service-details__content">
                        <div class="service-details__thumbnail">
                            <img class="lazy" data-src="{{ asset(imagePath($data['row']->image)) }}" alt="">
                        </div>
                        <h3 class="service-details__title">  {{ $data['row']->list_title ?? '' }}</h3>
                        <div class="service-details__text custom-description text-align-justify">
                            {!!  $data['row']->list_description !!}
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
