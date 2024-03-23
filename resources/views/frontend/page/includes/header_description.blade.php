<section class="portfolio-details pt-0">
    <div class="container">
        @if($element->first()->subtitle)
            <div class="sec-title sec-title-stand">
                <h3 class="sec-title__title"> {{$element->first()->subtitle ?? '' }}</h3>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="portfolio-details__content custom-description text-align-justify">
                    {!! $element->first()->description ?? '' !!}
                </div>
            </div>
        </div>
    </div>
</section>
