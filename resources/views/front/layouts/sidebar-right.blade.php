<!-- LAYOUT SIDEBAR 2 -->
<div class="layout-sidebar2 layout-item">
    <div class="widget-sidebar">
        <div class="promo-ad">
            <a href="#">
                <img class="promo-ad-img" src="{{ asset('/frontend/assets/img/banners/promo-ad-1.jpg') }}" alt="promo-ad-1">
            </a>
        </div>
    </div>

    <div class="widget-sidebar">
        <div class="section-title-wrap violet">
            <h2 class="section-title medium">Popular Contents</h2>
            <div class="section-title-separator"></div>
        </div>
        <div class="post-preview-showcase grid-1col_1 gutter-medium">
            @foreach($populars as $popular)
                <div class="post-preview tiny padded 
                    @if($popular->category_id == 2)
                        gaming-news
                    @elseif($popular->category_id == 1)
                        e-sport
                    @else
                        ''
                    @endif ">
                    <a href="{{ route('detail', $popular->permalink) }}">
                        <div class="post-preview-img-wrap">
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/01.jpg')}}" alt="post-01">
                            </figure>
                        </div>
                    </a>
                    <a href="{{ route('detail', $popular->permalink) }}" class="post-preview-title">{{ $popular->judul }}</a>
                    <div class="post-author-info-wrap">
                        <p class="post-author-info small light" style="line-height:1em; margin-top:.6875em">
                            <a href="{{ url('front/content/search?author='.$popular->writer->id) }}" class="post-author">{{ $popular->writer->name }}</a>
                            <span class="separator">|</span>{{ $popular->publish_at }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    <div class="widget-sidebar">
        <div class="section-title-wrap red">
            <h2 class="section-title medium">Latest Content</h2>
            <div class="section-title-separator"></div>
        </div>
        <div class="post-preview-showcase grid-1col_1 gutter-medium">
            @foreach($latest as $late)
                <div class="post-preview tiny padded 
                    @if($late->category_id == 2)
                        gaming-news
                    @elseif($late->category_id == 1)
                        e-sport
                    @else
                        ''
                    @endif ">
                    <a href="{{ route('detail', $late->permalink) }}">
                        <div class="post-preview-img-wrap">
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/01.jpg')}}" alt="post-01">
                            </figure>
                        </div>
                    </a>
                    <a href="{{ route('detail', $late->permalink) }}" class="post-preview-title">{{ $late->judul }}</a>
                    <div class="post-author-info-wrap">
                        <p class="post-author-info small light" style="line-height:1em; margin-top:.6875em">
                            <a href="{{ url('front/content/search?author='.$late->writer->id) }}" class="post-author">{{ $late->writer->name }}</a>
                            <span class="separator">|</span>{{ $late->publish_at }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>