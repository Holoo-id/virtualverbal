@extends('front.layouts.base')

@section('content')
    <div class="layout-item gutter-big">
        <div class="post-open game-review">
            <div class="post-open-img-wrap">
                <figure class="post-open-img2 liquid">
                    <img src="{{ asset('/frontend/assets/img/posts/01.jpg')}}" alt="post-01">
                </figure>
            </div>
        </div>
    </div>

    <div class="layout-content-2 layout-item-1-2-1 own-grid centered">
        @include('front.layouts.sidebar-left')

        <div class="layout-body layout-item">
            <div class="layout-item">
                <div class="post-open 
                    @if($content->category_id == 2)
                        gaming-news
                    @elseif($content->category_id == 1)
                        e-sport
                    @else
                        ''
                    @endif" >
                    <div class="post-open-content v5">
                        <div class="post-open-body">
                            <div class="tag-list">
                                <a href="{{ url('front/content/search?category='.$content->formatContent->id) }}" class="tag-ornament">{{ $content->formatContent->name }}</a>
                            </div>
                            <p class="post-open-title">{{ $content->judul }}</p>
                            <p class="post-open-subtitle">{{ $content->sub_judul }}</p>
                            <div class="section-title-wrap 
                                @if($content->category_id == 2)
                                    blue
                                @elseif($content->category_id == 1)
                                    violet
                                @else
                                    ''
                                @endif">
                                <div class="section-title-separator"></div>
                            </div>
                            <div style="margin-top: 5px;margin-bottom:40px;display: flex; justify-content: center;" class="post-author-info-wrap">
                                <a href="{{ url('front/content/search?author='.$content->writer->id) }}">
                                    <figure class="user-avatar tiny liquid">
                                        <img src="{{ asset('/frontend/assets/img/users/01.jpg')}}" alt="user-01">
                                    </figure>
                                </a>
                                <p style="display: flex; justify-content: center; align-items: center" class="post-author-info small light">Oleh 
                                    <a href="search-results.html" class="post-author" style="margin-left:2px"> {{ $content->writer->name }}</a>
                                    <span class="separator">-</span>{{ $date }}
                                    <span class="separator">-</span>
                                    <a href="#" class="bubble-ornament fb">
                                        <svg class="facebook-icon">
                                            <use xlink:href="#svg-facebook"></use>
                                        </svg>
                                    </a>
                                    <a href="#" class="bubble-ornament twt">
                                        <svg class="twitter-icon">
                                            <use xlink:href="#svg-twitter"></use>
                                        </svg>
                                    </a>
                                    <a href="#" class="bubble-ornament gplus">
                                        <svg class="gplus-icon">
                                            <use xlink:href="#svg-gplus"></use>
                                        </svg>
                                    </a>
                                </p>
                            </div>
                            <div class="post-open-text">
                                <?php echo($content->konten); ?>
                            </div>
                        </div>
                        
                        <div class="fb-comments" data-href="{{ env('APP_URL') }}/contents/third" data-numposts="3" data-order-by="social" data-colorscheme="light" data-width=""></div>
                    </div>
                </div>

                <div class="widget-news">
                    <div class="section-title-wrap blue">
                        <h2 class="section-title medium">Related News</h2>
                        <div class="section-title-separator"></div>
                    </div>
                </div>

                <div class="post-preview-showcase grid-2col centered">
                    @foreach($relates as $relate)
                        <div class="post-preview 
                        @if($relate->category_id == 2)
                            gaming-news
                        @elseif($relate->category_id == 1)
                            e-sport
                        @else
                            ''
                        @endif ">
                            <a href="{{ route('detail', ['permalink' => $relate->permalink]) }}">
                                <div class="post-preview-img-wrap">
                                    <figure class="post-preview-img liquid">
                                        <img src="{{ asset('/frontend/assets/img/posts/09.jpg')}}" alt="post-09">
                                    </figure>
                                </div>
                            </a>
                            <a href="{{ url('front/content/search?category='.$relate->category_id) }}" class="tag-ornament">{{ $relate->format }}</a>
                            <a href="{{ route('detail', ['permalink' => $relate->permalink]) }}" class="post-preview-title">{{ $relate->judul }}</a>
                            <div class="post-author-info-wrap">
                                <p class="post-author-info small light">By 
                                    <a href="{{ url('front/content/search?author='.$relate->created_by) }}" class="post-author">{{ $relate->author }}</a>
                                    <span class="separator">|</span>{{ $date2 }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

        @include('front.layouts.sidebar-right')
    </div>
@endsection