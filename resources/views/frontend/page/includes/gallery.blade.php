<section class="portfolio-one portfolio-page" style="background-color: #f4f3f8;">
    <div class="container">
        @if(@$element->list_number_1!==null)
            <div class="sec-title sec-title-stand">
                <h6 class="sec-title__tagline">{{ $element->list_number_1 ?? '' }}</h6>
                <h3 class="sec-title__title">{{ $element->list_number_2 ?? '' }}</h3>
            </div>
        @endif
        <div class="row gutter-y-30">
                @foreach($element->pageSectionGalleries as $index=>$gallery)
                    <div class="col-md-6 col-lg-4">
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <div class="card" style="border: none">
                                <div class="card-image gallery-item">
                                    <a href="{{ asset(galleryImagePath('section_element').$gallery->resized_name) }}" data-fancybox="gallery">
                                        <img src="{{ asset(galleryImagePath('section_element').$gallery->resized_name) }}" class="{{ @$page_detail->slug=='legal-document' || @$page_detail->slug=='legal-documents' || @$page_detail->slug=='sample-documents' || @$page_detail->slug=='sample-document' ? '':'image-dimension' }}" alt="Image Gallery">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
</section>
