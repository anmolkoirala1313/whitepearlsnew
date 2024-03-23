@extends('frontend.layouts.master')
@section('title') {{ $page }} @endsection
@section('css')
@endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'image-2.png'])

    <section class="team-one team-one--page">
        <div class="container">
            @if($data['heading'])
                <div class="sec-title" style="text-align: center;">
                    <h6 class="sec-title__tagline">{{ $data['heading']->subtitle ?? '' }}</h6><!-- /.sec-title__tagline -->
                    <h3 class="sec-title__title">{{ $data['heading']->title ?? '' }}</h3><!-- /.sec-title__title -->
                    <div class="about-one__text text-align-justify custom-description heading mt-20">{!! $data['heading']->description ?? ''  !!}</div>
                </div>
            @endif
            <div class="row gutter-y-30">
                @foreach($data['rows'] as $index=>$row)
                    <div class="col-md-6 col-lg-4">
                        <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='{{ $index }}00ms'>
                            <div class="team-card__image">
                                <img class="lazy" data-src="{{ asset(imagePath($row->image)) }}" alt="">
                                <div class="team-card__hover">
                                    @if(@$row->fb_link || @$row->twitter_link || @$row->instagram_link || @$row->linkedin_link)
                                        <div class="team-card__social">
                                            <i class="fa fa-share-alt"></i>
                                            <div class="list-unstyled team-card__social__list">
                                                @if($row->fb_link)
                                                    <a href="{{ $row->fb_link }}">
                                                        <i class="fab fa-facebook" aria-hidden="true"></i>
                                                        <span class="sr-only">Facebook</span>
                                                    </a>
                                                @endif
                                                    @if($row->twitter_link)
                                                    <a href="{{ $row->twitter_link }}">
                                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                                        <span class="sr-only">Twitter</span>
                                                    </a>
                                                @endif
                                                @if($row->linkedin_link)
                                                    <a href="{{ $row->linkedin_link }}">
                                                        <i class="fab fa-linkedin" aria-hidden="true"></i>
                                                        <span class="sr-only">LinkedIn</span>
                                                    </a>
                                                @endif
                                                @if($row->instagram_link)
                                                    <a href="{{ $row->instagram_link }}">
                                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                                        <span class="sr-only">Instagram</span>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                </div><!-- /.team-card__hover -->
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <h3 class="team-card__title">
                                    <a >{{$row->title ?? ''}}</a>
                                </h3><!-- /.team-card__title -->
                                <h6 class="team-card__designation">{{$row->designation ?? ''}}</h6><!-- /.team-card__designation -->
                            </div><!-- /.team-card__content -->
                            <div class="team-card__bg"></div><!-- /.team-card__image__bg -->
                        </div><!-- /.team-card -->
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script src="{{asset('assets/common/general.js')}}"></script>
    @include($module.'includes.toast_alert')
@endsection
