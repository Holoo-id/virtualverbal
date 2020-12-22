<!-- LAYOUT SIDEBAR -->
<div class="layout-sidebar layout-item own-grid gutter-medium">
    <div class="widget-sidebar">
        <div class="section-title-wrap violet">
            <h2 class="section-title medium">Popular Posts</h2>
            <div class="section-title-separator"></div>
        </div>
        <div class="post-preview-showcase grid-1col gutter-small">
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
    <!-- sample -->
    {{--<div class="widget-sidebar">
        <div class="post-preview-showcase grid-1col gutter-small">
            <!-- bubble only -->
            <div class="post-preview tiny featured padded gaming-news">
                <div class="bubble-ornament medium black no-link">
                <p class="bubble-ornament-info">0</p>
                </div>
                <a href="post-v1.html" class="post-preview-title">The Clash of Dragons is breaking record sales in USA and Japan</a>
                <div class="post-author-info-wrap">
                    <p class="post-author-info small light">By 
                    <a href="search-results.html" class="post-author">Dexter</a>
                    <span class="separator">|</span>Dec 15th, 2018</p>
                </div>
            </div>
            <!-- normal -->
            <div class="post-preview tiny padded gaming-news">
                <a href="post-v1.html">
                    <div class="post-preview-img-wrap">
                        <figure class="post-preview-img liquid">
                            <img src="{{ asset('/frontend/assets/img/posts/01.jpg')}}" alt="post-01">
                        </figure>
                    </div>
                </a>
                <a href="post-v1.html" class="post-preview-title">The Clash of Dragons is breaking record sales in USA and Japan</a>
                <div class="post-author-info-wrap">
                    <p class="post-author-info small light">By 
                    <a href="search-results.html" class="post-author">Dexter</a>
                    <span class="separator">|</span>Dec 15th, 2018</p>
                </div>
            </div>
            <div class="post-preview tiny padded gaming-news">
                <a href="post-v1.html">
                    <div class="post-preview-img-wrap">
                        <figure class="post-preview-img liquid">
                            <img src="{{ asset('/frontend/assets/img/posts/02.jpg')}}" alt="post-02">
                        </figure>
                    </div>
                </a>
                <div class="bubble-ornament small black no-link">
                    <p class="bubble-ornament-info">0</p>
                </div>
                <a href="post-v1.html" class="post-preview-title">The Clash of Dragons is breaking record sales in USA and Japan</a>
                <div class="post-author-info-wrap">
                    <p class="post-author-info small light">By 
                    <a href="search-results.html" class="post-author">Dexter</a>
                    <span class="separator">|</span>Dec 15th, 2018</p>
                </div>
            </div>
            <!-- with arc -->
            <div class="post-preview tiny padded game-review">
                <a href="post-v2.html">
                    <div class="post-preview-img-wrap">
                        <figure class="post-preview-img liquid">
                            <img src="{{ asset('/frontend/assets/img/posts/03.jpg')}}" alt="post-03">
                        </figure>
                        <div class="review-rating">
                            <div id="sidebar-rate-1" class="arc tiny"></div>
                        </div>
                    </div>
                </a>
                <a href="post-v2.html" class="post-preview-title">"Legend of Kenshii II" is a bit green for now</a>
                <div class="post-author-info-wrap">
                    <p class="post-author-info small light">By 
                        <a href="search-results.html" class="post-author">Vellatrix</a>
                        <span class="separator">|</span>Dec 15th, 2018</p>
                </div>
            </div>
            <div class="post-preview tiny padded game-review">
                <a href="post-v2.html">
                    <div class="post-preview-img-wrap">
                        <figure class="post-preview-img liquid">
                            <img src="{{ asset('/frontend/assets/img/posts/04.jpg')}}" alt="post-04">
                        </figure>
                        <div class="review-rating">
                            <div id="sidebar-rate-2" class="arc tiny"></div>
                        </div>
                    </div>
                </a>
                <div class="bubble-ornament small black no-link">
                    <p class="bubble-ornament-info">0</p>
                </div>
                <a href="post-v2.html" class="post-preview-title">"Legend of Kenshii II" is a bit green for now</a>
                <div class="post-author-info-wrap">
                    <p class="post-author-info small light">By 
                        <a href="search-results.html" class="post-author">Vellatrix</a>
                        <span class="separator">|</span>Dec 15th, 2018</p>
                </div>
            </div>
            <!-- with stars -->
            <div class="post-preview tiny padded movie-news">
                <a href="post-v3.html">
                    <div class="post-preview-img-wrap">
                        <figure class="post-preview-img liquid">
                            <img src="{{ asset('/frontend/assets/img/posts/05.jpg')}}" alt="post-05">
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
                <a href="post-v3.html" class="post-preview-title">We reviewed the "Guardians of the Universe" movie</a>
                <div class="post-author-info-wrap">
                    <p class="post-author-info small light">By 
                        <a href="search-results.html" class="post-author">Faye V.</a>
                        <span class="separator">|</span>Dec 15th, 2018</p>
                </div>
            </div>
            <div class="post-preview tiny padded movie-news">
                <a href="post-v3.html">
                    <div class="post-preview-img-wrap">
                        <figure class="post-preview-img liquid">
                            <img src="{{ asset('/frontend/assets/img/posts/06.jpg')}}" alt="post-06">
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
                <div class="bubble-ornament small black no-link">
                    <p class="bubble-ornament-info">0</p>
                </div>
                <a href="post-v3.html" class="post-preview-title">We reviewed the "Guardians of the Universe" movie</a>
                <div class="post-author-info-wrap">
                    <p class="post-author-info small light">By 
                        <a href="search-results.html" class="post-author">Faye V.</a>
                        <span class="separator">|</span>Dec 15th, 2018</p>
                </div>
            </div>
            <!-- video -->
            <div class="post-preview video gaming-news tiny no-hover">
                <a href="post-video.html">
                    <div class="post-preview-img-wrap">
                        <figure class="post-preview-img liquid">
                            <img src="{{ asset('/frontend/assets/img/posts/07.jpg')}}" alt="post-07">
                        </figure>
                        <div class="post-preview-overlay">
                            <div class="play-button tiny">
                                <svg class="play-button-icon tiny">
                                    <use xlink:href="#svg-play"></use>
                                </svg>
                            </div>
                            <p class="timestamp-tag tiny">08:04</p>
                        </div>
                    </div>
                </a>
                <a href="post-video.html" class="post-preview-title">Gameplay trailer for the new Legend of Kenji game</a>
                <div class="post-author-info-wrap">
                    <p class="post-author-info small light">By 
                        <a href="search-results.html" class="post-author">Dexter</a>
                        <span class="separator">|</span>Dec 15th, 2018</p>
                </div>
            </div>
        </div>
    </div>--}}
</div>