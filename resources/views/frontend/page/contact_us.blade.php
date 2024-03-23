@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection
@section('css')
@endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'background_action.jpeg'])


    <section class="contact-one pt-100">

        <div class="container">
            <div class="contact-one__inner">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="contact-one__content pb-100">
                            <div class="sec-title">

                                <h6 class="sec-title__tagline">Contact with us</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">Have questions? Feel free to write us</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="contact-one__text">Message us with your queries and questions and we will get back to you ASAP.</p><!-- /.contact-one__text -->
                            <ul class="list-unstyled contact-one__info">
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-phone-call"></i>
                                    </div>
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Call expert</p>
                                        <h4 class="contact-one__info__title"><a href="tel:{{ $data['setting_data']->phone ?? $data['setting_data']->mobile ?? '' }}">{{ $data['setting_data']->phone ?? $data['setting_data']->mobile ?? '' }}</a></h4>
                                    </div>
                                </li>
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-message"></i>
                                    </div>
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Write email</p>
                                        <h4 class="contact-one__info__title"><a href="mailto:{{$data['setting_data']->email ?? ''}}">{{ $data['setting_data']->email ?? ''}}</a></h4>
                                    </div>
                                </li>
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-placeholder"></i>
                                    </div>
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Visit office</p>
                                        <h4 class="contact-one__info__title"><a href="mailto:{{ $data['setting_data']->email ?? ''}}">{{ $data['setting_data']->address ?? ''}}</a></h4>
                                    </div>
                                </li>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-xl-7 -->
                    <div class="col-xl-6">
                        <div class="contact-one__form__box">
                            {!! Form::open(['route' => $module.'contact-us.store', 'method'=>'POST', 'class'=>'contact-one__form contact-form-validated submit_form','novalidate'=>'novalidate']) !!}
                             <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-one__input">
                                            <input type="text" placeholder="Your Name" name="name" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-one__input">
                                            <input type="email" placeholder="Email Address" name="email" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-one__input">
                                            <input type="email" placeholder="Phone" name="phone" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-one__input">
                                            <input type="text" placeholder="Subject" name="subject" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="contact-one__input">
                                            <textarea name="message" placeholder="Write message"></textarea>
                                        </div>
                                        <div class="contact-one__btn">
                                            <button type="submit" class="modins-btn contact-one__btn">Send a Message
                                                <em></em></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @if($data['setting_data'] && $data['setting_data']->google_map)
        <section class="contact-map">
            <div class="container-fluid">
                <div class="google-map google-map__contact">
                    <iframe title="template google map" src="{{$data['setting_data']->google_map ?? ''}}" data-tm-width="100%" height="500"
                            class="map__contact" allowfullscreen></iframe>
                </div>
            </div>
        </section>
    @endif
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script src="{{asset('assets/common/general.js')}}"></script>
    @include($module.'includes.toast_alert')
@endsection
