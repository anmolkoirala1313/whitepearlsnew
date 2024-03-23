<div class="service-sidebar">
    <div class="sidebar__single sidebar__search-wrap">
        {!! Form::open(['route' => $base_route.'search', 'method'=>'GET', 'class'=>'sidebar__search']) !!}
        <input type="text" id="search" placeholder="Search Service..." name="for"   oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required/>
        <button type="submit" aria-label="search submit">
            <span><i class="icon-magnifying-glass"></i></span>
        </button>
        {!! Form::close() !!}
    </div>

    @if(count( $data['latest']) > 0)
        <div class="service-sidebar__single mt-20">
            <ul class="list-unstyled service-sidebar__nav">
                @foreach($data['latest'] as $latest)
                    <li><a href="{{ route('frontend.service.show',$latest->key) }}"> {{$latest->title ?? ''}}</a></li>
                @endforeach`
            </ul>
        </div>
    @endif

    <div class="service-sidebar__single ">
        <div class="service-sidebar__contact background-base text-center" style="background-image: url( '{{ asset('assets/frontend/images/service/sidebar-service-bg.jpg') }}');">
            <div class="service-sidebar__contact__icon">
                <i class="icon-phone-call"></i>
            </div>
            <h3 class="service-sidebar__contact__title">Reach us quickly</h3><!-- /.service-sidebar__contact__title -->
            <p class="service-sidebar__contact__number">
                <span>Talk to an expert</span> <br>
                <a href="tel:{{$data['setting']->phone ?? $data['setting']->mobile ?? ''}}">{{$data['setting']->phone ?? $data['setting']->mobile ?? ''}}</a>
            </p>
        </div>
    </div>
</div>
