<section class="faq-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="faq-page-search__title">{{ $element->first()->title ?? '' }}</h3><!-- /.faq-page-search__title -->
            </div><!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <!-- /.col-lg-4 col-xl-3 -->
            <div class="col-lg-12 mb-20">
                <div class="faq-page__accordion modins-accrodion" data-grp-name="modins-accrodion">
                    @foreach($element as $index=>$row)
                        <div class="accrodion {{$loop->first ? 'active':''}}">
                            <div class="accrodion-title">
                                <h4>{{ $row->list_title ?? '' }}
                                    @if($row->list_description)
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    @endif
                                </h4>
                            </div>

                            @if($row->list_description)
                                <div class="accrodion-content" style="">
                                    <div class="inner">
                                        <p>{{ $row->list_description ?? '' }}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div><!-- /.col-lg-8 col-xl-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
