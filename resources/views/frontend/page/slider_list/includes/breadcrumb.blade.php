<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="container">
        <h2 class="page-header__title"> {{ $page_title }}</h2>
        <ul class="modins-breadcrumb list-unstyled">
            <li><a href="/">Home</a></li>
            <li>
                <a href="{{route($base_route.'index', $data['row']->section->page->slug)}}">{{ucwords(@$data['row']->section->page->title)}}</a>
            </li>
            <li><span>
                    {{ucwords(@$data['row']->list_title ?? $page_title ?? '')}}
              </span>
            </li>
        </ul>
    </div>
</section>
