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
                    <div class="post-preview gaming-news">
                        <a href="post-v1.html">
                            <div class="post-preview-img-wrap">
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/09.jpg')}}" alt="post-09">
                                </figure>
                            </div>
                        </a>
                        <a href="news-v1.html" class="tag-ornament">Gaming news</a>
                        <a href="post-v1.html" class="post-preview-title">New "Rizen" game is gonna be released in summer 2019</a>
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>December 15th, 2018</p>
                        </div>
                    </div>
                    <div class="post-preview video gaming-news no-hover">
                        <a href="post-video.html">
                            <div class="post-preview-img-wrap">
                                <figure class="post-preview-img2 liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/02.jpg')}}" alt="post-31">
                                </figure>
                                <div class="post-preview-overlay">
                                    <div class="play-button">
                                        <svg class="play-button-icon">
                                            <use xlink:href="#svg-play"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="news-v1.html" class="tag-ornament">Gaming news</a>
                        <a href="post-v1.html" class="post-preview-title">New "Rizen" game is gonna be released in summer 2019</a>
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>December 15th, 2018</p>
                        </div>
                    </div>
                    <div class="post-preview e-sport">
                        <a href="post-v1.html">
                            <div class="post-preview-img-wrap">
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/09.jpg')}}" alt="post-09">
                                </figure>
                            </div>
                        </a>
                        <a href="news-v1.html" class="tag-ornament">Gaming news</a>
                        <a href="post-v1.html" class="post-preview-title">New "Rizen" game is gonna be released in summer 2019</a>
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>December 15th, 2018</p>
                        </div>
                    </div>
                    <div class="post-preview game-review">
                        <a href="post-v2.html">
                            <div class="post-preview-img-wrap">
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/08.jpg')}}" alt="post-05">
                                </figure>
                                <div class="review-rating">
                                    <div id="content-news-rate-7" class="arc"></div>
                                </div>
                            </div>
                        </a>
                        <a href="news-v1.html" class="tag-ornament">Gaming news</a>
                        <a href="post-v1.html" class="post-preview-title">New "Rizen" game is gonna be released in summer 2019</a>
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>December 15th, 2018</p>
                        </div>
                    </div>
                    <div class="post-preview geeky-news">
                        <a href="post-v4.html">
                            <div class="post-preview-img-wrap">
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/02.jpg')}}" alt="post-02">
                                </figure>
                            </div>
                        </a>
                        <a href="news-v4.html" class="tag-ornament">Geeky news</a>
                        <a href="post-v4.html" class="post-preview-title">Jessica Tam to star in the new "Charlotte" series</a>
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>December 15th, 2018</p>
                        </div>
                    </div>
                    <div class="post-preview movie-news">
                        <a href="post-v3.html">
                            <div class="post-preview-img-wrap">
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/12.jpg')}}" alt="post-12">
                                </figure>
                                <div class="rating-ornament">
                                    <div class="rating-ornament-item">
                                        <svg class="rating-ornament-icon">
                                            <use xlink:href="#svg-star"></use>
                                        </svg>
                                    </div>
                                    <div class="rating-ornament-item">
                                        <svg class="rating-ornament-icon empty">
                                            <use xlink:href="#svg-star"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="news-v3.html" class="tag-ornament">Movie news</a>
                        <a href="post-v3.html" class="post-preview-title">We reviewed the "Guardians of the Universe" movie</a>
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Faye V.</a><span class="separator">|</span>December 15th, 2018</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @include('front.layouts.sidebar-right')
    </div>
@endsection