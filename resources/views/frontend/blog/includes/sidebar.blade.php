<div class="sidebar stickthis">
    <aside class="widget-area">
        <div class="sidebar__single sidebar__search-wrap">
            {!! Form::open(['route' => $base_route.'search', 'method'=>'GET', 'class'=>'sidebar__search']) !!}
               <input type="text" id="search" placeholder="Search Here..." name="for"   oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required/>
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
                                <p class="sidebar__posts__meta"><a href="{{ route($module.'blog.show',$latest->slug) }}">
                                        <i class="fa fa-calendar-alt"></i>
                                        {{date('d M Y', strtotime($latest->created_at))}}</a></p>
                                <h4 class="sidebar__posts__title"><a href="{{ route($module.'blog.show',$latest->slug) }}">
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
                        <li><a href="{{ route($base_route.'category',$category->slug) }}">{{$category->title}} ({{$category->blogs_count}})</a></li>
                    @endforeach
                </ul>
            </div>
        @endif
    </aside>
</div>
