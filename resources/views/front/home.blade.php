@extends('front.layouts.base')

@section('content')
    @include('front.layouts.components.banner-slider')
    {{--@include('front.layouts.components.esports-live-score')--}}
    <div class="layout-content-1 layout-item centered">
        <div class="layout-body layout-item centered">
            <div class="subscribe-section-wrap">
                <div class="subscribe-section">
                    <div class="subscribe-section-info">
                        <p class="subscribe-section-title">Langganan Artikel!</p>
                        <p class="subscribe-section-text">Temukan tips dan berita menarik setiap harinya. GRATIS!</p>
                        <form class="form-wrap">
                            <div class="submit-input medium green">
                                <input type="text" id="newsletter_email" name="newsletter_email" placeholder="Emailmu...">
                                <button class="submit-input-button">
                                    <svg class="arrow-icon medium">
                                        <use xlink:href="#svg-arrow-medium"></use>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="layout-item centered">
                <div class="postslide-wrap">
                    <div id="postslide-1" class="postslide">
                        <div class="news-preview slider-items">
                            @foreach($highlight_news as $highlight)
                                <div class="post-preview picture big e-sport">
                                    <a href="{{ route('detail', ['permalink' => $highlight->permalink]) }}">
                                        <div class="post-preview-img-wrap">
                                            <figure class="post-preview-img liquid">
                                                <img src="{{ !empty($highlight->image_path) ? asset($highlight->image_path) : asset('/frontend/assets/img/brand/virtual_banner.jpg')}}" alt="{{ $highlight->image_name }}">
                                            </figure>
                                            <div class="post-preview-overlay">
                                                <span class="tag-ornament">{{ $highlight->FormatContent->name }}</span>
                                                <p class="post-preview-title">{{ $highlight->judul }}</p>
                                                <p class="post-preview-text">{{ $highlight->sub_judul }}</p>
                                            </div>
                                            <div class="loading-line"></div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="news-roster slider-roster">
                            @foreach($highlight_news as $highlight)
                                <div class="post-preview picture short e-sport">
                                    <div class="post-preview-img-wrap">
                                        <figure class="post-preview-img liquid">
                                            <img src="{{ !empty($highlight->image_path) ? asset($highlight->image_path) : asset('/frontend/assets/img/brand/virtual_banner.jpg')}}" alt="{{ $highlight->image_name }}">
                                        </figure>
                                        <div class="post-preview-overlay">
                                            <p class="post-preview-title">{{ $highlight->judul }}</p>
                                        </div>
                                        <span class="tag-ornament">{{ $highlight->FormatContent->name }}</span>
                                    </div>
                                    <div class="loading-line"></div>
                                    <div class="overlay"></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="postslide-1-controls" class="slider-controls blue">
                        <div class="slider-control big control-previous">
                            <svg class="arrow-icon medium">
                                <use xlink:href="#svg-arrow-medium"></use>
                            </svg>
                        </div>
                        <div class="slider-control big control-next">
                            <svg class="arrow-icon medium">
                                <use xlink:href="#svg-arrow-medium"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="layout-item layout-item-1-1-1 centered">
                <div class="post-preview-showcase grid-1col_1 centered gutter-small">
                    <div class="section-title-wrap blue">
                        <h2 class="section-title medium">Recently Release</h2>
                        <div class="section-title-separator"></div>
                    </div>
                    <div class="post-preview-showchase grid-1col_1 centered gutter-small">
                        @foreach($recently_release as $recent)
                            <div class="post-preview tiny gaming-news">
                                <a href="esports-post.html">
                                    <div class="post-preview-img-wrap">
                                        <figure class="post-preview-img liquid">
                                            <img src="https://images.igdb.com/igdb/image/upload/t_cover_small/{{ $recent->cover->image_id }}.jpg" alt="{{ $recent->name }}">
                                        </figure>
                                    </div>
                                </a>
                                <a href="esports-post.html" class="post-preview-title">{{ $recent->name }}</a>
                                <div class="post-author-info-wrap">
                                    <p class="post-author-info small light">
                                        @foreach($recent->release_dates as $release_date)
                                            {{ $release_date->human }}
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="post-preview-showcase grid-1col_1 centered gutter-small">
                    <div class="section-title-wrap violet">
                        <h2 class="section-title medium">Coming Soon</h2>
                        <div class="section-title-separator"></div>
                    </div>
                    
                    <div class="post-preview-showchase grid-1col_1 centered gutter-small">
                        @foreach($coming_soon as $soon)
                            <div class="post-preview tiny e-sport">
                                <a href="esports-post.html">
                                    <div class="post-preview-img-wrap">
                                        <figure class="post-preview-img liquid">
                                            <img src="https://images.igdb.com/igdb/image/upload/t_thumb/{{ $soon->cover->image_id }}.jpg" alt="{{ $soon->name }}">
                                        </figure>
                                    </div>
                                </a>
                                <a href="esports-post.html" class="post-preview-title">{{ $soon->name }}</a>
                                <div class="post-author-info-wrap">
                                    <p class="post-author-info small light">
                                        @foreach($soon->release_dates as $release_date)
                                            {{ $release_date->human }}
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="post-preview-showcase grid-1col_1 centered gutter-small">
                    <div class="section-title-wrap red">
                        <h2 class="section-title medium">Most Anticipated</h2>
                        <div class="section-title-separator"></div>
                    </div>
                    
                    <div class="post-preview-showchase grid-1col_1 centered gutter-small">
                        @foreach($hypes as $hype)
                            <div class="post-preview tiny game-review">
                                <a href="esports-post.html">
                                    <div class="post-preview-img-wrap">
                                        <figure class="post-preview-img liquid">
                                            <img src="https://images.igdb.com/igdb/image/upload/t_cover_small/{{ $hype->cover->image_id }}.jpg" alt="{{ $hype->name }}">
                                        </figure>
                                    </div>
                                </a>
                                <a href="esports-post.html" class="post-preview-title">{{ $hype->name }}</a>
                                <div class="post-author-info-wrap">
                                    <p class="post-author-info small light">
                                        @foreach($hype->release_dates as $release_date)
                                            {{ $release_date->human }}
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section-bg">
        <div class="layout-content-1 layout-item-3-1 own-grid padded-large centered">
            <div class="layout-body">
                <div class="post-open game-review negative">
                    <div class="post-open-content v5">
                        <div class="post-open-body">
                            <div class="post-open-media-wrap">
                                <div class="post-open-media">
                                    <iframe src="https://www.youtube.com/embed/AqgeQMy0NQI" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="tag-list">
                                <a href="browse-videos.html" class="tag-ornament video">Video</a>
                                <a href="news-v2.html" class="tag-ornament">Game Reviews</a>
                            </div>
                            <p class="post-open-title small">We reviewed the new Magimons Game - Video Review</p>
                            <div class="post-author-info-wrap">
                                <a href="search-results.html">
                                    <figure class="user-avatar tiny liquid">
                                        <img src="{{ asset('/frontend/assets/img/users/04.jpg')}}" alt="user-04">
                                    </figure>
                                </a>
                                <p class="post-author-info small light">By 
                                    <a href="search-results.html" class="post-author">Vellatrix</a>
                                    <span class="separator">|</span>December 15th, 2018
                                    <span class="separator">|</span>
                                    <a href="post-v2.html#op-comments" class="post-comment-count">130 Comments</a>
                                </p>
                            </div>
                            <p class="post-open-text">
                                <span class="video-length">03:22</span>
                                In this video review you’ll be able to see what works and what doesn’t in the new game. Lorem ipsum dolor sit amet, consectetur...
                            </p>
                            <div class="social-links">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="layout-sidebar">
                <div class="post-preview-showcase grid-1col_1 centered gutter-small">
                    @foreach($video_contents as $video)
                        <div class="post-preview video gaming-news tiny no-hover negative">
                            <a href="{{ route('detail', ['permalink' => $video->permalink]) }}">
                                <div class="post-preview-img-wrap">
                                    <figure class="post-preview-img liquid">
                                        <img src="{{ asset($video->image_path)}}" alt="{{ $video->image_name }}">
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
                            <a href="{{ route('detail', ['permalink' => $video->permalink]) }}" class="post-preview-title">{{ $video->judul }}</a>
                            <div class="post-author-info-wrap">
                                <p class="post-author-info small light">By 
                                    <a href="{{ url('front/content/search?author='.$video->writer->id) }}" class="post-author">{{ $video->writer->name }}</a>
                                    <span class="separator">|</span>{{ $video->publish_at }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="browse-videos.html" class="button small full cyan">Browse more videos...</a>
            </div>
        </div>
    </div>
    
    <div class="layout-content-1 layout-item-3-1 own-grid grid-limit centered">
        <div class="layout-body layout-item">
            <div class="layout-item">
                @include('front.layouts.components.data-search')
            </div>

            <div class="layout-item centered padded">
                <a href="{{ route('all-content') }}" class="button big blue">
                    Load More
                    <div class="button-ornament">
                        <svg class="arrow-icon medium">
                            <use xlink:href="#svg-arrow-medium"></use>
                        </svg>
                        <svg class="cross-icon small">
                            <use xlink:href="#svg-cross-small"></use>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
        
        @include('front.layouts.sidebar-esports')
    </div>
@endsection