
<footer class="main-footer footer-bg main-footer__home">
    <div class="main-footer__shape_1">
        <img src="{{asset('assets/frontend/images/shapes/footer-shape-1.png')}}" alt="footer shape">
    </div>
    <div class="main-footer__shape_2">
        <img src="{{asset('assets/frontend/images/shapes/footer-shape-2.png')}}" alt="footer shape">
    </div>
    <!-- /.main-footer__bg -->
    <div class="main-footer__top" style="padding-top : {{  Request::is('/') ? '120px':'80px' }}">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="footer-widget footer-widget--about">
                        <a href="/" class="footer-widget__logo">
                            <img src="{{ $setting_data->logo_white ?  asset(imagePath($setting_data->logo_white)) : asset(imagePath($setting_data->logo))}}" width="260" alt="">
                        </a>
                        <div class="text-align-justify">
                            {!! ucfirst(@$setting_data->description ?? '') !!}
                        </div>
                        <!-- /.footer-widget__text -->
                        <div class="footer-widget__social">
                            @if(@$setting_data->facebook)
                                <a href="{{ @$setting_data->facebook }}">
                                    <i class="fab fa-facebook" aria-hidden="true"></i>
                                    <span class="sr-only">Facebook</span>
                                </a>
                            @endif
                            @if(@$setting_data->youtube)
                                <a href="{{ @$setting_data->youtube }}">
                                    <i class="fab fa-youtube" aria-hidden="true"></i>
                                    <span class="sr-only">Youtuve</span>
                                </a>
                            @endif
                            @if(@$setting_data->instagram)
                                <a href="{{ @$setting_data->instagram }}">
                                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                    <span class="sr-only">Instagram</span>
                                </a>
                            @endif
                            @if(@$setting_data->linkedin)
                                <a href="{{ @$setting_data->linkedin }}">
                                    <i class="fab fa-linkedin" aria-hidden="true"></i>
                                    <span class="sr-only">Linkedin</span>
                                </a>
                            @endif
                            @if(!empty(@$setting_data->ticktock))
                                <a href="{{ @$setting_data->ticktock }}">
                                    <i class="fa-brands fa-tiktok" aria-hidden="true"></i>
                                    <span class="sr-only">Instagram</span>
                                </a>
                            @endif
                        </div><!-- /.footer-widget__social -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-xl-3">
                    <div class="footer-widget footer-widget--contact">
                        <h2 class="footer-widget__title">Contact</h2><!-- /.footer-widget__title -->
                        <p class="footer-widget__text">{{@$setting_data->address ?? ''}}</p>
                        <ul class="list-unstyled footer-widget__info">
                            <li> <i class="fas fa-phone"></i><a href="tel: {{@$setting_data->phone ?? $setting_data->mobile ?? ''}}"> {{@$setting_data->phone ?? $setting_data->mobile ?? ''}}</a></li>
                            <li> <i class="fas fa-envelope "></i><a href="mailto:{{@$setting_data->email ?? ''}}">{{@$setting_data->email ?? ''}}</a></li>
                        </ul><!-- /.list-unstyled -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-xl-3">
                    @if($footer_nav_data1!==null)
                        <div class="footer-widget footer-widget--gallery">
                            <h2 class="footer-widget__title">{{ $footer_nav_title1 ?? '' }}</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__info">
                                @foreach(@$footer_nav_data1 as $nav)
                                    @if(empty(@$nav->children[0]))
                                        <li>
                                            <i class="fas fa-arrow-alt-circle-right"></i>
                                            <a href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                                {{ @$nav->name ?? @$nav->title ?? ''}}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-xl-3">
                    @if($footer_nav_data2!==null)
                        <div class="footer-widget footer-widget--gallery">
                            <h2 class="footer-widget__title">{{ $footer_nav_title2 ?? '' }}</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__info">
                                @foreach(@$footer_nav_data2 as $nav)
                                    @if(empty(@$nav->children[0]))
                                        <li>
                                            <i class="fas fa-arrow-alt-circle-right"></i>
                                            <a href="{{get_menu_url(@$nav->type, @$nav)}}" target="{{@$nav->target ? '_blank':''}}">
                                                {{ @$nav->name ?? @$nav->title ?? ''}}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__top -->
    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner">
                <p class="main-footer__copyright">
                    Copyright © 2023 <span class="dynamic-year"></span>
                    <a href="/" class=" font-weight-500">{{$setting_data->title ?? ''}}.</a>
                    by <a href="https://www.canosoft.com.np/" target="_blank">Canosoft Technology</a> All Rights Reserved.
                </p>
            </div><!-- /.main-footer__inner -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__bottom -->
</footer><!-- /.main-footer -->

</div><!-- /.page-wrapper -->



<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="/" aria-label="logo image"><img src="{{ $setting_data->logo_white ?  asset(imagePath($setting_data->logo_white)) : asset(imagePath($setting_data->logo))}}" width="155" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:{{@$setting_data->email ?? ''}}">{{@$setting_data->email ?? ''}}</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:{{@$setting_data->phone ?? $setting_data->mobile ?? ''}}">{{@$setting_data->phone ?? $setting_data->mobile ?? ''}}</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__social">
            @if(@$setting_data->facebook)
                <a href="{{ @$setting_data->facebook }}">
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
            @endif
            @if(@$setting_data->youtube)
                <a href="{{ @$setting_data->youtube }}">
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                    <span class="sr-only">Youtuve</span>
                </a>
            @endif
            @if(@$setting_data->instagram)
                <a href="{{ @$setting_data->instagram }}">
                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
            @endif
            @if(@$setting_data->linkedin)
                <a href="{{ @$setting_data->linkedin }}">
                    <i class="fab fa-linkedin" aria-hidden="true"></i>
                    <span class="sr-only">Linkedin</span>
                </a>
            @endif
            @if(!empty(@$setting_data->ticktock))
                <a href="{{ @$setting_data->ticktock }}">
                    <i class="fa-brands fa-tiktok" aria-hidden="true"></i>
                    <span class="sr-only">Ticktock</span>
                </a>
            @endif
        </div><!-- /.mobile-nav__social -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->
<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form method="get" id="searchform" action="{{route('frontend.job.search')}}" role="search" class="search-popup__form">
            <input type="text" id="s" name="s" placeholder="Search blogs..."
                   oninvalid="this.setCustomValidity('Type a keyword')"
                   oninput="this.setCustomValidity('')" required/>
            <button type="submit" aria-label="search submit" class="modins-btn modins-btn--base">
                <span><i class="icon-magnifying-glass"></i></span>
                <em></em>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="{{ asset('assets/frontend/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/countdown/countdown.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
<script src="{{ asset('assets/frontend/vendors/ion.rangeSlider/ion.rangeSlider.min.js') }}"></script>
<!-- template js -->
<script src="{{asset('assets/frontend/js/nmf.js')}}"></script>
<script src="{{asset('assets/common/lazyload.js')}}"></script>

@yield('js')
@stack('scripts')
</body>
</html>
