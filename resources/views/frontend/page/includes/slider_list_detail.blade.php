@foreach($element as $index=>$row)
            @if( $data['slider_list_type'] == 'normal')
                <div class="col-xl-4 col-lg-4 wow d-flex align-items-stretch fadeInLeft mt-4" data-wow-delay="{{ $index + 1 }}00ms">
            @else
                <div class="item d-flex align-items-stretch">
            @endif
                <div class="blog-card-three h-100" style="    background-color: #f4f3f8;">
                    <img src="{{ asset(imagePath($row->image)) }}" alt="">
                    <div class="blog-card-three__content">
                        <h3 class="blog-card-three__title">
                            @if($data['slider_list_type'] !== 'normal')
                                <a href="{{ route($base_route.'slider_single',@$row->list_subtitle) }}">
                                    {{ $row->list_title ?? '' }}
                                </a>
                            @else
                                <a>
                                    {{ $row->list_title ?? '' }}
                                </a>
                            @endif
                        </h3>
                        <p>{{ $data['slider_list_type'] == 'normal' ? strip_tags($row->list_description) : elipsis($row->list_description)}}</p>
                    </div>
                </div>
            </div>
@endforeach



