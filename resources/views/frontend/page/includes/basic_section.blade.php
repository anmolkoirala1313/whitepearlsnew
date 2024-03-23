<section class="about-one" style="  padding-bottom: 60px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-one__left">
                    <div class="sec-title">

                        <h6 class="sec-title__tagline">{{ $element->first()->subtitle ?? '' }}</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">{{ $element->first()->title ?? '' }}</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="about-one__text text-align-justify custom-description" style="    margin-bottom: 15px;">
                        {!! $element->first()->description ?? '' !!}
                    </div>
                    <!-- /.about-one_text -->
                    @if($element->first()->button_link)
                        <div class="about-one__btns">
                            <a href="{{$element->first()->button_link}}" class="modins-btn about-one__link">
                                {{ $element->first()->button ?? 'Reach Out' }}
                                <em></em></a>
                            <a href="tel:{{@$setting_data->phone ?? $setting_data->mobile ?? ''}}" class="about-one__call">
                                <i class="icon-calling"></i>
                                <span>Call experts <br>
                                            <b>{{@$setting_data->phone ?? $setting_data->mobile ?? ''}}</b></span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6">

                <div class="about-one__content">
                    <div class="about-one__img">
                        <img class="lazy" data-src="{{ asset(imagePath($element->first()->image)) }}" alt="">
                    </div>
                </div><!-- /.why-choose-two__content -->
            </div><!-- /.col-lg-6 -->
        </div>
    </div>
</section>
