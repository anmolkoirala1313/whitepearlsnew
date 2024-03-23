<div class="service-sidebar">

    <div class="sidebar__single sidebar__search-wrap">
        {!! Form::open(['route' => $base_route.'search', 'method'=>'GET', 'class'=>'sidebar__search']) !!}
        <input type="text" id="search" placeholder="Search Jobs..." name="for"   oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required/>
        <button type="submit" aria-label="search submit">
            <span><i class="icon-magnifying-glass"></i></span>
        </button>
        {!! Form::close() !!}
    </div>

    @if(count( $data['latest']) > 0)
        <div class="sidebar__single">
            <h4 class="sidebar__title">Latest posts</h4>
            <ul class="sidebar__posts list-unstyled">
                @foreach($data['latest'] as $latest)
                    <li class="sidebar__posts__item">
                        <div class="sidebar__posts__image">
                            <img class="thumbnail lazy" data-src="{{ asset(imagePath($latest->image)) }}"  alt="">
                        </div>
                        <div class="sidebar__posts__content">
                            <p class="sidebar__posts__meta"><a href="{{ route($module.'job.show',$latest->slug) }}">
                                    <i class="fa fa-calendar-alt"></i>
                                    @if(@$job->end_date >= date('Y-m-d'))
                                        {{date('M j, Y',strtotime(@$job->start_date))}} - {{date('M j, Y',strtotime(@$job->end_date))}}
                                    @else
                                        Expired
                                    @endif
                                </a></p>
                            <h4 class="sidebar__posts__title"><a href="{{ route($module.'job.show',$latest->slug) }}">
                                    {{ $latest->title }}
                                </a></h4>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(count( $data['categories']) > 0)
        <div class="sidebar__single">
            <h4 class="sidebar__title">Categories</h4><!-- /.sidebar__title -->
            <ul class="sidebar__categories list-unstyled">
                @foreach($data['categories'] as $category)
                    <li><a href="{{ route($base_route.'category',$category->slug) }}">{{$category->title}} ({{$category->jobs_count}})</a></li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="service-sidebar__single mt-20">
        <div class="service-sidebar__contact background-base text-center" style="background-image: url( '{{ asset('assets/frontend/images/service/sidebar-service-bg.jpg') }}');">
            <div class="service-sidebar__contact__icon">
                <i class="icon-phone-call"></i>
            </div>
            <h3 class="service-sidebar__contact__title">Reach us quickly</h3><!-- /.service-sidebar__contact__title -->
            <p class="service-sidebar__contact__number">
                <span>Talk to an expert</span> <br>
                <a href="tel:{{@$setting_data->phone ?? $setting_data->mobile ?? ''}}">{{@$setting_data->phone ?? $setting_data->mobile ?? ''}}</a>
            </p>
        </div>
    </div>

</div>
