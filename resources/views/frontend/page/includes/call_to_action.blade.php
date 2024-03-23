<section class="funfact-one" style=" padding-bottom: 30px;padding-top: 20px; background-image:url( '{{asset('assets/frontend/images/shapes/funfact-shape.png')}}' );">
    <div class="container">
        <div class="cta-one__inner_two">
            <div class="cta-one__headline">
                <div class="cta-one__icon">
                    <i class="icon-folder"></i>
                </div>
                <div class="cta-one__content">
                    <h3 class="cta-one__title" style="font-size: 30px;"> {{ $element->first()->title ?? '' }}</h3>
                </div>
            </div>
            @if($element->first()->button_link)
                <div class="cta-one__btn">
                    <a href="{{ $element->first()->button_link }}" class="modins-btn modins-btn-white">{{ $element->first()->button ?? 'Learn More' }} <em></em></a>
                </div>
            @endif
        </div>
    </div><!-- /.container -->
</section>
