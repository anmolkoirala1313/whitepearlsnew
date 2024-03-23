@extends('frontend.layouts.master')
@section('title') {{ $page }} @endsection
@section('css')
    <style>
        .card-image img {
            width: 370px; /* Set your preferred maximum width */
            height: 345px; /* Set your preferred maximum height */
            object-fit: cover;
        }

        .card-image:hover a::before {
            height: 100%;
        }
        a::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 0;
            background-color:  #2b2b5e;
            opacity: 0.4;
            transition: 0.3s;
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">


@endsection


@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=> 'image-3.jpeg'])


    <section class="portfolio-one portfolio-page">
        <div class="container">
            <div class="row gutter-y-30">
                @if(count(@$data['rows']->albumGallery) > 0)
                    @foreach($data['rows']->albumGallery as $index=>$gallery)
                        <div class="col-md-6 col-lg-4">
                            <!-- featured-imagebox -->
                            <div class="featured-imagebox featured-imagebox-portfolio style1">
                                <div class="card" style="border: none">
                                    <div class="card-image gallery-item">
                                        <a href="{{ asset(galleryImagePath('album').$gallery->resized_name) }}" data-fancybox="gallery">
                                            <img src="{{ asset(galleryImagePath('album').$gallery->resized_name) }}" class="img-wrapper" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox end-->
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script src="{{asset('assets/common/general.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>// Fancybox Config
        $('[data-fancybox="gallery"]').fancybox({
            buttons: [
                "slideShow",
                "zoom",
                "close"
            ],
            loop: true,
            protect: true
        });
    </script>
@endsection
