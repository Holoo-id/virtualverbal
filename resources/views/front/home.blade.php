@extends('front.layouts.base')

@section('content')
    @include('front.layouts.banner-slider')
    {{--@include('front.layouts.components.esports-live-score')--}}
    <!-- LAYOUT CONTENT 1 -->
    <div class="layout-content-1 layout-item centered">
        <!-- LAYOUT BODY -->
        <div class="layout-body layout-item centered">
            <!-- LAYOUT ITEM -->
            <div class="subscribe-section-wrap">
                <div class="subscribe-section">

                    <!-- SUBSCRIBE SECTION INFO -->
                    <div class="subscribe-section-info">
                    <!-- SUBSCRIBE SECTION TITLE -->
                    <p class="subscribe-section-title">Langganan Artikel!</p>
                    <!-- /SUBSCRIBE SECTION TITLE -->

                    <!-- SUBSCRIBE SECTION TEXT -->
                    <p class="subscribe-section-text">Temukan tips dan berita menarik setiap harinya. GRATIS!</p>
                    <!-- /SUBSCRIBE SECTION TEXT -->

                    <!-- FORM WRAP -->
                    <form class="form-wrap">
                        <!-- SUBMIT INPUT -->
                        <div class="submit-input medium green">
                            <input type="text" id="newsletter_email" name="newsletter_email" placeholder="Emailmu...">
                            <button class="submit-input-button">
                                <!-- ARROW ICON -->
                                <svg class="arrow-icon medium">
                                <use xlink:href="#svg-arrow-medium"></use>
                                </svg>
                                <!-- /ARROW ICON -->
                            </button>
                            </div>
                        <!-- /SUBMIT INPUT -->
                    </form>
                    <!-- /FORM WRAP -->
                    </div>
                    <!-- /SUBSCRIBE SECTION INFO -->
                </div>
            </div>

            <div class="layout-item centered">
                <!-- POSTSLIDE WRAP -->
                <div class="postslide-wrap">
                    <!-- POSTSLIDE -->
                    <div id="postslide-1" class="postslide">
                        <!-- NEWS PREVIEW -->
                        <div class="news-preview slider-items">
                            <!-- POST PREVIEW -->
                            <div class="post-preview picture big gaming-news">
                                <!-- POST PREVIEW IMG WRAP -->
                                <a href="post-v1.html">
                                    <div class="post-preview-img-wrap">
                                        <!-- POST PREVIEW IMG -->
                                        <figure class="post-preview-img liquid">
                                            <img src="{{ asset('/frontend/assets/img/posts/10.jpg')}}" alt="post-07">
                                        </figure>
                                        <!-- /POST PREVIEW IMG -->
    
                                        <!-- POST PREVIEW OVERLAY -->
                                        <div class="post-preview-overlay">
                                            <!-- TAG ORNAMENT -->
                                            <span class="tag-ornament">Gaming News</span>
                                            <!-- /TAG ORNAMENT -->
    
                                            <!-- POST PREVIEW TITLE -->
                                            <p class="post-preview-title">New expansion pack coming to "Rise of Depredators"
                                            </p>
                                            <!-- POST PREVIEW TEXT -->
                                            <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed do eiusmod tempor incididunt.</p>
                                        </div>
                                        <!-- /POST PREVIEW OVERLAY -->
    
                                        <!-- LOADING LINE -->
                                        <div class="loading-line"></div>
                                        <!-- /LOADING LINE -->
                                    </div>
                                </a>
                                <!-- /POST PREVIEW IMG WRAP -->
                            </div>
                            <!-- /POST PREVIEW -->
    
                            <!-- POST PREVIEW -->
                            <div class="post-preview picture big game-review">
                                <!-- POST PREVIEW IMG WRAP -->
                                <a href="post-v2.html">
                                    <div class="post-preview-img-wrap">
                                        <!-- POST PREVIEW IMG -->
                                        <figure class="post-preview-img liquid">
                                            <img src="{{ asset('/frontend/assets/img/posts/11.jpg')}}" alt="post-25">
                                        </figure>
                                        <!-- /POST PREVIEW IMG -->
    
                                        <!-- POST PREVIEW OVERLAY -->
                                        <div class="post-preview-overlay">
                                            <!-- TAG ORNAMENT -->
                                            <span class="tag-ornament">Game Reviews</span>
                                            <!-- /TAG ORNAMENT -->
    
                                            <!-- POST PREVIEW TITLE -->
                                            <p class="post-preview-title">"Legend of Kenshi II" is a bit green for now</p>
                                            <!-- POST PREVIEW TEXT -->
                                            <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed do eiusmod tempor incididunt.</p>
                                        </div>
                                        <!-- /POST PREVIEW OVERLAY -->
    
                                        <!-- REVIEW RATING -->
                                        <div class="review-rating">
                                            <div id="content-news-rate-6" class="arc medium"></div>
                                        </div>
                                        <!-- /REVIEW RATING -->
    
                                        <!-- LOADING LINE -->
                                        <div class="loading-line"></div>
                                        <!-- /LOADING LINE -->
                                    </div>
                                </a>
                                <!-- /POST PREVIEW IMG WRAP -->
                            </div>
                            <!-- /POST PREVIEW -->
    
                            <!-- POST PREVIEW -->
                            <div class="post-preview picture big geeky-news">
                                <!-- POST PREVIEW IMG WRAP -->
                                <a href="post-v4.html">
                                    <div class="post-preview-img-wrap">
                                        <!-- POST PREVIEW IMG -->
                                        <figure class="post-preview-img liquid">
                                            <img src="{{ asset('/frontend/assets/img/posts/12.jpg')}}" alt="post-18">
                                        </figure>
                                        <!-- /POST PREVIEW IMG -->
    
                                        <!-- POST PREVIEW OVERLAY -->
                                        <div class="post-preview-overlay">
                                            <!-- TAG ORNAMENT -->
                                            <span class="tag-ornament">Geeky News</span>
                                            <!-- /TAG ORNAMENT -->
    
                                            <!-- POST PREVIEW TITLE -->
                                            <p class="post-preview-title">"Ichigo Idol" anime will have a new season in
                                                April</p>
                                            <!-- POST PREVIEW TEXT -->
                                            <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed do eiusmod tempor incididunt.</p>
                                        </div>
                                        <!-- /POST PREVIEW OVERLAY -->
    
                                        <!-- LOADING LINE -->
                                        <div class="loading-line"></div>
                                        <!-- /LOADING LINE -->
                                    </div>
                                </a>
                                <!-- /POST PREVIEW IMG WRAP -->
                            </div>
                            <!-- /POST PREVIEW -->
    
                            <!-- POST PREVIEW -->
                            <div class="post-preview picture big gaming-news">
                                <!-- POST PREVIEW IMG WRAP -->
                                <a href="post-v1.html">
                                    <div class="post-preview-img-wrap">
                                        <!-- POST PREVIEW IMG -->
                                        <figure class="post-preview-img liquid">
                                            <img src="{{ asset('/frontend/assets/img/posts/13.jpg')}}" alt="post-09">
                                        </figure>
                                        <!-- /POST PREVIEW IMG -->
    
                                        <!-- POST PREVIEW OVERLAY -->
                                        <div class="post-preview-overlay">
                                            <!-- TAG ORNAMENT -->
                                            <span class="tag-ornament">Gaming News</span>
                                            <!-- /TAG ORNAMENT -->
    
                                            <!-- POST PREVIEW TITLE -->
                                            <p class="post-preview-title">New "Rizen" game is gonna be released in summer
                                                2016</p>
                                            <!-- POST PREVIEW TEXT -->
                                            <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed do eiusmod tempor incididunt.</p>
                                        </div>
                                        <!-- /POST PREVIEW OVERLAY -->
    
                                        <!-- LOADING LINE -->
                                        <div class="loading-line"></div>
                                        <!-- /LOADING LINE -->
                                    </div>
                                </a>
                                <!-- /POST PREVIEW IMG WRAP -->
                            </div>
                            <!-- /POST PREVIEW -->
    
                            <!-- POST PREVIEW -->
                            <div class="post-preview picture big movie-news">
                                <!-- POST PREVIEW IMG WRAP -->
                                <a href="post-v3.html">
                                    <div class="post-preview-img-wrap">
                                        <!-- POST PREVIEW IMG -->
                                        <figure class="post-preview-img liquid">
                                            <img src="{{ asset('/frontend/assets/img/posts/14.jpg')}}" alt="post-12">
                                        </figure>
                                        <!-- /POST PREVIEW IMG -->
    
                                        <!-- POST PREVIEW OVERLAY -->
                                        <div class="post-preview-overlay">
                                            <!-- TAG ORNAMENT -->
                                            <span class="tag-ornament">Movie news</span>
                                            <!-- /TAG ORNAMENT -->
    
                                            <!-- POST PREVIEW TITLE -->
                                            <p class="post-preview-title">We reviewed the "Guardians of the Universe" movie
                                            </p>
                                            <!-- POST PREVIEW TEXT -->
                                            <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed do eiusmod tempor incididunt.</p>
                                        </div>
                                        <!-- /POST PREVIEW OVERLAY -->
    
                                        <!-- LOADING LINE -->
                                        <div class="loading-line"></div>
                                        <!-- /LOADING LINE -->
                                    </div>
                                </a>
                                <!-- /POST PREVIEW IMG WRAP -->
                            </div>
                            <!-- /POST PREVIEW -->
                        </div>
                        <!-- /NEWS PREVIEW -->
    
                        <!-- NEWS ROSTER -->
                        <div class="news-roster slider-roster">
                            <!-- POST PREVIEW -->
                            <div class="post-preview picture short gaming-news">
                                <!-- POST PREVIEW IMG WRAP -->
                                <div class="post-preview-img-wrap">
                                    <!-- POST PREVIEW IMG -->
                                    <figure class="post-preview-img liquid">
                                        <img src="{{ asset('/frontend/assets/img/posts/15.jpg')}}" alt="post-07">
                                    </figure>
                                    <!-- /POST PREVIEW IMG -->
    
                                    <!-- POST PREVIEW OVERLAY -->
                                    <div class="post-preview-overlay">
                                        <!-- POST PREVIEW TITLE -->
                                        <p class="post-preview-title">New expansion pack coming to "Rise of Depredators"</p>
                                    </div>
                                    <!-- /POST PREVIEW OVERLAY -->
    
                                    <!-- TAG ORNAMENT -->
                                    <span class="tag-ornament">Gaming news</span>
                                    <!-- /TAG ORNAMENT -->
                                </div>
                                <!-- /POST PREVIEW IMG WRAP -->
    
                                <!-- LOADING LINE -->
                                <div class="loading-line"></div>
                                <!-- /LOADING LINE -->
    
                                <!-- OVERLAY -->
                                <div class="overlay"></div>
                                <!-- /OVERLAY -->
                            </div>
                            <!-- /POST PREVIEW -->
    
                            <!-- POST PREVIEW -->
                            <div class="post-preview picture short game-review">
                                <!-- POST PREVIEW IMG WRAP -->
                                <div class="post-preview-img-wrap">
                                    <!-- POST PREVIEW IMG -->
                                    <figure class="post-preview-img liquid">
                                        <img src="{{ asset('/frontend/assets/img/posts/16.jpg')}}" alt="post-25">
                                    </figure>
                                    <!-- /POST PREVIEW IMG -->
    
                                    <!-- POST PREVIEW OVERLAY -->
                                    <div class="post-preview-overlay">
                                        <!-- POST PREVIEW TITLE -->
                                        <p class="post-preview-title">"Legend of Kenshi II" is a bit green for now</p>
                                    </div>
                                    <!-- /POST PREVIEW OVERLAY -->
    
                                    <!-- TAG ORNAMENT -->
                                    <span class="tag-ornament">Game reviews</span>
                                    <!-- /TAG ORNAMENT -->
                                </div>
                                <!-- /POST PREVIEW IMG WRAP -->
    
                                <!-- LOADING LINE -->
                                <div class="loading-line"></div>
                                <!-- /LOADING LINE -->
    
                                <!-- OVERLAY -->
                                <div class="overlay"></div>
                                <!-- /OVERLAY -->
                            </div>
                            <!-- /POST PREVIEW -->
    
                            <!-- POST PREVIEW -->
                            <div class="post-preview picture short geeky-news">
                                <!-- POST PREVIEW IMG WRAP -->
                                <div class="post-preview-img-wrap">
                                    <!-- POST PREVIEW IMG -->
                                    <figure class="post-preview-img liquid">
                                        <img src="{{ asset('/frontend/assets/img/posts/17.jpg')}}" alt="post-18">
                                    </figure>
                                    <!-- /POST PREVIEW IMG -->
    
                                    <!-- POST PREVIEW OVERLAY -->
                                    <div class="post-preview-overlay">
                                        <!-- POST PREVIEW TITLE -->
                                        <p class="post-preview-title">"Ichigo Idol" anime will have a new season in April
                                        </p>
                                    </div>
                                    <!-- /POST PREVIEW OVERLAY -->
    
                                    <!-- TAG ORNAMENT -->
                                    <span class="tag-ornament">Geeky news</span>
                                    <!-- /TAG ORNAMENT -->
                                </div>
                                <!-- /POST PREVIEW IMG WRAP -->
    
                                <!-- LOADING LINE -->
                                <div class="loading-line"></div>
                                <!-- /LOADING LINE -->
    
                                <!-- OVERLAY -->
                                <div class="overlay"></div>
                                <!-- /OVERLAY -->
                            </div>
                            <!-- /POST PREVIEW -->
    
                            <!-- POST PREVIEW -->
                            <div class="post-preview picture short gaming-news">
                                <!-- POST PREVIEW IMG WRAP -->
                                <div class="post-preview-img-wrap">
                                    <!-- POST PREVIEW IMG -->
                                    <figure class="post-preview-img liquid">
                                        <img src="{{ asset('/frontend/assets/img/posts/18.jpg')}}" alt="post-09">
                                    </figure>
                                    <!-- /POST PREVIEW IMG -->
    
                                    <!-- POST PREVIEW OVERLAY -->
                                    <div class="post-preview-overlay">
                                        <!-- POST PREVIEW TITLE -->
                                        <p class="post-preview-title">New "Rizen" game is gonna be released in summer 2016
                                        </p>
                                    </div>
                                    <!-- /POST PREVIEW OVERLAY -->
    
                                    <!-- TAG ORNAMENT -->
                                    <span class="tag-ornament">Gaming news</span>
                                    <!-- /TAG ORNAMENT -->
                                </div>
                                <!-- /POST PREVIEW IMG WRAP -->
    
                                <!-- LOADING LINE -->
                                <div class="loading-line"></div>
                                <!-- /LOADING LINE -->
    
                                <!-- OVERLAY -->
                                <div class="overlay"></div>
                                <!-- /OVERLAY -->
                            </div>
                            <!-- /POST PREVIEW -->
    
                            <!-- POST PREVIEW -->
                            <div class="post-preview picture short movie-news">
                                <!-- POST PREVIEW IMG WRAP -->
                                <div class="post-preview-img-wrap">
                                    <!-- POST PREVIEW IMG -->
                                    <figure class="post-preview-img liquid">
                                        <img src="{{ asset('/frontend/assets/img/posts/19.jpg')}}" alt="post-12">
                                    </figure>
                                    <!-- /POST PREVIEW IMG -->
    
                                    <!-- POST PREVIEW OVERLAY -->
                                    <div class="post-preview-overlay">
                                        <!-- POST PREVIEW TITLE -->
                                        <p class="post-preview-title">We reviewed the "Guardians of the Universe" movie</p>
                                    </div>
                                    <!-- /POST PREVIEW OVERLAY -->
    
                                    <!-- TAG ORNAMENT -->
                                    <span class="tag-ornament">Movie news</span>
                                    <!-- /TAG ORNAMENT -->
                                </div>
                                <!-- /POST PREVIEW IMG WRAP -->
    
                                <!-- LOADING LINE -->
                                <div class="loading-line"></div>
                                <!-- /LOADING LINE -->
    
                                <!-- OVERLAY -->
                                <div class="overlay"></div>
                                <!-- /OVERLAY -->
                            </div>
                            <!-- /POST PREVIEW -->
                        </div>
                        <!-- /NEWS ROSTER -->
                    </div>
                    <!-- POSTSLIDE -->
    
                    <!-- SLIDER CONTROLS -->
                    <div id="postslide-1-controls" class="slider-controls blue">
                        <!-- CONTROL PREVIOUS -->
                        <div class="slider-control big control-previous">
                            <!-- ARROW ICON -->
                            <svg class="arrow-icon medium">
                                <use xlink:href="#svg-arrow-medium"></use>
                            </svg>
                            <!-- /ARROW ICON -->
                        </div>
                        <!-- /CONTROL PREVIOUS -->
    
                        <!-- CONTROL NEXT -->
                        <div class="slider-control big control-next">
                            <!-- ARROW ICON -->
                            <svg class="arrow-icon medium">
                                <use xlink:href="#svg-arrow-medium"></use>
                            </svg>
                            <!-- /ARROW ICON -->
                        </div>
                        <!-- /CONTROL NEXT -->
                    </div>
                    <!-- /SLIDER CONTROLS -->
                </div>
                <!-- /POSTSLIDE WRAP -->
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
                                            <img src="https://images.igdb.com/igdb/image/upload/t_cover_small/co2jrt.jpg" alt="post-36">
                                            <img src="https://images.igdb.com/igdb/image/upload/t_cover_small/{{-- $recent->cover->image_id --}}.jpg" alt="post-36">
                                        </figure>
                                    </div>
                                </a>
                                <a href="esports-post.html" class="post-preview-title">{{ $recent->name }}</a>
                                <div class="post-author-info-wrap">
                                    <p class="post-author-info small light">By <a href="search-results.html"
                                            class="post-author">Dexter</a><span class="separator">|</span>{{ $recent->first_release_date }}</p>
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
                                        {{--dd($coming_soon)--}}
                        @foreach($coming_soon as $soon)
                        <div class="post-preview tiny e-sport">
                            <a href="esports-post.html">
                                <div class="post-preview-img-wrap">
                                    <figure class="post-preview-img liquid">
                                        <img src="https://images.igdb.com/igdb/image/upload/t_thumb/{{-- $soon->cover->image_id --}}.jpg" alt="post-36">
                                    </figure>
                                </div>
                            </a>
                            <a href="esports-post.html" class="post-preview-title">{{ $soon->name }}</a>
                            <div class="post-author-info-wrap">
                                <p class="post-author-info small light">By <a href="search-results.html"
                                        class="post-author">Dexter</a><span class="separator">|</span>
                                        {{--$soon->release_dates->human--}}
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
                                        <img src="{{ asset('/frontend/assets/img/posts/28.jpg')}}" alt="post-36">
                                    </figure>
                                </div>
                            </a>
                            <a href="esports-post.html" class="post-preview-title">{{ $hype->name }}</a>
                            <div class="post-author-info-wrap">
                                <p class="post-author-info small light">By <a href="search-results.html"
                                        class="post-author">Dexter</a><span class="separator">|</span>{{ $hype->first_release_date }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- /LAYOUT BODY -->
    </div>
    <!-- SECTION BG -->
    <div class="section-bg">
        <!-- LAYOUT CONTENT 1 -->
        <div class="layout-content-1 layout-item-3-1 own-grid padded-large centered">
            <!-- LAYOUT BODY -->
            <div class="layout-body">
                <!-- POST OPEN -->
                <div class="post-open game-review negative">
                    <!-- POST OPEN CONTENT -->
                    <div class="post-open-content v5">
                        <!-- POST OPEN BODY  -->
                        <div class="post-open-body">
                            <!-- POST OPEN MEDIA WRAP -->
                            <div class="post-open-media-wrap">
                                <!-- POST OPEN MEDIA -->
                                <div class="post-open-media">
                                    <iframe src="../embed/IoBOFTi-zAk.html"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe>
                                </div>
                                <!-- /POST OPEN MEDIA -->
                            </div>
                            <!-- /POST OPEN MEDIA WRAP -->
    
                            <!-- TAG LIST -->
                            <div class="tag-list">
                                <!-- TAG ORNAMENT -->
                                <a href="browse-videos.html" class="tag-ornament video">Video</a>
                                <!-- /TAG ORNAMENT -->
    
                                <!-- TAG ORNAMENT -->
                                <a href="news-v2.html" class="tag-ornament">Game Reviews</a>
                                <!-- /TAG ORNAMENT -->
                            </div>
                            <!-- /TAG LIST -->
    
                            <!-- POST OPEN TITLE -->
                            <p class="post-open-title small">We reviewed the new Magimons Game - Video Review</p>
                            <!-- /POST OPEN TITLE -->
    
                            <!-- POST AUTHOR INFO -->
                            <div class="post-author-info-wrap">
                                <!-- USER AVATAR -->
                                <a href="search-results.html">
                                    <figure class="user-avatar tiny liquid">
                                        <img src="{{ asset('/frontend/assets/img/users/04.jpg')}}" alt="user-04">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->
                                <p class="post-author-info small light">By <a href="search-results.html"
                                        class="post-author">Vellatrix</a><span class="separator">|</span>December 15th,
                                    2018<span class="separator">|</span><a href="post-v2.html#op-comments"
                                        class="post-comment-count">130 Comments</a></p>
                            </div>
                            <!-- /POST AUTHOR INFO -->
    
                            <!-- POST OPEN TEXT -->
                            <p class="post-open-text"><span class="video-length">03:22</span>In this video review you’ll be
                                able to see what works and what doesn’t in the new game. Lorem ipsum dolor sit amet,
                                consectetur...</p>
                            <!-- /POST OPEN TEXT -->
    
                            <!-- SOCIAL LINKS -->
                            <div class="social-links">
                                <!-- BUBBLE ORNAMENT -->
                                <a href="#" class="bubble-ornament fb">
                                    <!-- FACEBOOK ICON -->
                                    <svg class="facebook-icon">
                                        <use xlink:href="#svg-facebook"></use>
                                    </svg>
                                    <!-- /FACEBOOK ICON -->
                                </a>
                                <!-- /BUBBLE ORNAMENT -->
    
                                <!-- BUBBLE ORNAMENT -->
                                <a href="#" class="bubble-ornament twt">
                                    <!-- TWITTER ICON -->
                                    <svg class="twitter-icon">
                                        <use xlink:href="#svg-twitter"></use>
                                    </svg>
                                    <!-- /TWITTER ICON -->
                                </a>
                                <!-- /BUBBLE ORNAMENT -->
                            </div>
                            <!-- /SOCIAL LINKS -->
                        </div>
                        <!-- /POST OPEN BODY -->
                    </div>
                    <!-- /POST OPEN CONTENT -->
                </div>
                <!-- /POST OPEN -->
            </div>
            <!-- /LAYOUT BODY -->
    
            <!-- LAYOUT SIDEBAR -->
            <div class="layout-sidebar">
                <!-- POST PREVIEW SHOWCASE -->
                <div class="post-preview-showcase grid-1col_1 centered gutter-small">
                    <!-- POST PREVIEW -->
                    <div class="post-preview video gaming-news tiny no-hover negative">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="post-video.html">
                            <div class="post-preview-img-wrap">
                                <!-- POST PREVIEW IMG -->
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/32.jpg')}}" alt="post-25">
                                </figure>
                                <!-- /POST PREVIEW IMG -->
    
                                <!-- POST PREVIEW OVERLAY -->
                                <div class="post-preview-overlay">
                                    <!-- PLAY BUTTON -->
                                    <div class="play-button tiny">
                                        <!-- PLAY BUTTON ICON -->
                                        <svg class="play-button-icon tiny">
                                            <use xlink:href="#svg-play"></use>
                                        </svg>
                                        <!-- /PLAY BUTTON ICON -->
                                    </div>
                                    <!-- /PLAY BUTTON -->
    
                                    <!-- TIMESTAMP TAG -->
                                    <p class="timestamp-tag tiny">08:04</p>
                                    <!-- /TIMESTAMP TAG -->
                                </div>
                                <!-- /POST PREVIEW OVERLAY -->
                            </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
    
                        <!-- POST PREVIEW TITLE -->
                        <a href="post-video.html" class="post-preview-title">Gameplay trailer for the new Legend of Kenji
                            game</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html"
                                    class="post-author">Dexter</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
    
                    <!-- POST PREVIEW -->
                    <div class="post-preview video e-sport tiny no-hover negative">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="post-video.html">
                            <div class="post-preview-img-wrap">
                                <!-- POST PREVIEW IMG -->
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/33.jpg')}}" alt="post-38">
                                </figure>
                                <!-- /POST PREVIEW IMG -->
    
                                <!-- POST PREVIEW OVERLAY -->
                                <div class="post-preview-overlay">
                                    <!-- PLAY BUTTON -->
                                    <div class="play-button tiny">
                                        <!-- PLAY BUTTON ICON -->
                                        <svg class="play-button-icon tiny">
                                            <use xlink:href="#svg-play"></use>
                                        </svg>
                                        <!-- /PLAY BUTTON ICON -->
                                    </div>
                                    <!-- /PLAY BUTTON -->
    
                                    <!-- TIMESTAMP TAG -->
                                    <p class="timestamp-tag tiny">07:57</p>
                                    <!-- /TIMESTAMP TAG -->
                                </div>
                                <!-- /POST PREVIEW OVERLAY -->
                            </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
    
                        <!-- POST PREVIEW TITLE -->
                        <a href="post-video.html" class="post-preview-title">Watch the best match of the Pro Soccer 2017
                            World Cup</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html"
                                    class="post-author">Vellatrix</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
    
                    <!-- POST PREVIEW -->
                    <div class="post-preview video gaming-news tiny no-hover negative">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="post-video.html">
                            <div class="post-preview-img-wrap">
                                <!-- POST PREVIEW IMG -->
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/34.jpg')}}" alt="post-31">
                                </figure>
                                <!-- /POST PREVIEW IMG -->
    
                                <!-- POST PREVIEW OVERLAY -->
                                <div class="post-preview-overlay">
                                    <!-- PLAY BUTTON -->
                                    <div class="play-button tiny">
                                        <!-- PLAY BUTTON ICON -->
                                        <svg class="play-button-icon tiny">
                                            <use xlink:href="#svg-play"></use>
                                        </svg>
                                        <!-- /PLAY BUTTON ICON -->
                                    </div>
                                    <!-- /PLAY BUTTON -->
    
                                    <!-- TIMESTAMP TAG -->
                                    <p class="timestamp-tag tiny">04:37</p>
                                    <!-- /TIMESTAMP TAG -->
                                </div>
                                <!-- /POST PREVIEW OVERLAY -->
                            </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
    
                        <!-- POST PREVIEW TITLE -->
                        <a href="post-video.html" class="post-preview-title">Galaxy Adventure RX peek at the new weapons</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html"
                                    class="post-author">Dexter</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
    
                    <!-- POST PREVIEW -->
                    <div class="post-preview video gaming-news tiny no-hover negative">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="post-video.html">
                            <div class="post-preview-img-wrap">
                                <!-- POST PREVIEW IMG -->
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/35.jpg')}}" alt="post-07">
                                </figure>
                                <!-- /POST PREVIEW IMG -->
    
                                <!-- POST PREVIEW OVERLAY -->
                                <div class="post-preview-overlay">
                                    <!-- PLAY BUTTON -->
                                    <div class="play-button tiny">
                                        <!-- PLAY BUTTON ICON -->
                                        <svg class="play-button-icon tiny">
                                            <use xlink:href="#svg-play"></use>
                                        </svg>
                                        <!-- /PLAY BUTTON ICON -->
                                    </div>
                                    <!-- /PLAY BUTTON -->
    
                                    <!-- TIMESTAMP TAG -->
                                    <p class="timestamp-tag tiny">09:24</p>
                                    <!-- /TIMESTAMP TAG -->
                                </div>
                                <!-- /POST PREVIEW OVERLAY -->
                            </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
    
                        <!-- POST PREVIEW TITLE -->
                        <a href="post-video.html" class="post-preview-title">"Rise of Depredators" launched it's cinematic
                            trailer</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html"
                                    class="post-author">Faye V.</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
    
                    <!-- POST PREVIEW -->
                    <div class="post-preview video e-sport tiny no-hover negative">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="post-video.html">
                            <div class="post-preview-img-wrap">
                                <!-- POST PREVIEW IMG -->
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/36.jpg')}}" alt="post-41">
                                </figure>
                                <!-- /POST PREVIEW IMG -->
    
                                <!-- POST PREVIEW OVERLAY -->
                                <div class="post-preview-overlay">
                                    <!-- PLAY BUTTON -->
                                    <div class="play-button tiny">
                                        <!-- PLAY BUTTON ICON -->
                                        <svg class="play-button-icon tiny">
                                            <use xlink:href="#svg-play"></use>
                                        </svg>
                                        <!-- /PLAY BUTTON ICON -->
                                    </div>
                                    <!-- /PLAY BUTTON -->
    
                                    <!-- TIMESTAMP TAG -->
                                    <p class="timestamp-tag tiny">08:04</p>
                                    <!-- /TIMESTAMP TAG -->
                                </div>
                                <!-- /POST PREVIEW OVERLAY -->
                            </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
    
                        <!-- POST PREVIEW TITLE -->
                        <a href="post-video.html" class="post-preview-title">Watch crowd highlights of the Xenowatch
                            semifinals</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html"
                                    class="post-author">Dexter</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
    
                    <!-- POST PREVIEW -->
                    <div class="post-preview video geeky-news tiny no-hover negative">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="post-video.html">
                            <div class="post-preview-img-wrap">
                                <!-- POST PREVIEW IMG -->
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/37.jpg')}}" alt="post-02">
                                </figure>
                                <!-- /POST PREVIEW IMG -->
    
                                <!-- POST PREVIEW OVERLAY -->
                                <div class="post-preview-overlay">
                                    <!-- PLAY BUTTON -->
                                    <div class="play-button tiny">
                                        <!-- PLAY BUTTON ICON -->
                                        <svg class="play-button-icon tiny">
                                            <use xlink:href="#svg-play"></use>
                                        </svg>
                                        <!-- /PLAY BUTTON ICON -->
                                    </div>
                                    <!-- /PLAY BUTTON -->
    
                                    <!-- TIMESTAMP TAG -->
                                    <p class="timestamp-tag tiny">09:24</p>
                                    <!-- /TIMESTAMP TAG -->
                                </div>
                                <!-- /POST PREVIEW OVERLAY -->
                            </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
    
                        <!-- POST PREVIEW TITLE -->
                        <a href="post-video.html" class="post-preview-title">"Charlotte" released a new teaser for the new
                            series</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html"
                                    class="post-author">Faye V.</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
    
                    <!-- POST PREVIEW -->
                    <div class="post-preview video movie-news tiny no-hover negative">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="post-video.html">
                            <div class="post-preview-img-wrap">
                                <!-- POST PREVIEW IMG -->
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/38.jpg')}}" alt="post-12">
                                </figure>
                                <!-- /POST PREVIEW IMG -->
    
                                <!-- POST PREVIEW OVERLAY -->
                                <div class="post-preview-overlay">
                                    <!-- PLAY BUTTON -->
                                    <div class="play-button tiny">
                                        <!-- PLAY BUTTON ICON -->
                                        <svg class="play-button-icon tiny">
                                            <use xlink:href="#svg-play"></use>
                                        </svg>
                                        <!-- /PLAY BUTTON ICON -->
                                    </div>
                                    <!-- /PLAY BUTTON -->
    
                                    <!-- TIMESTAMP TAG -->
                                    <p class="timestamp-tag tiny">05:56</p>
                                    <!-- /TIMESTAMP TAG -->
                                </div>
                                <!-- /POST PREVIEW OVERLAY -->
                            </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
    
                        <!-- POST PREVIEW TITLE -->
                        <a href="post-video.html" class="post-preview-title">Check out the new "Guardians of the Universe"
                            trailer</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html"
                                    class="post-author">Faye V.</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
    
                    <!-- POST PREVIEW -->
                    <div class="post-preview video gaming-news tiny no-hover negative">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="post-video.html">
                            <div class="post-preview-img-wrap">
                                <!-- POST PREVIEW IMG -->
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/39.jpg')}}" alt="post-01">
                                </figure>
                                <!-- /POST PREVIEW IMG -->
    
                                <!-- POST PREVIEW OVERLAY -->
                                <div class="post-preview-overlay">
                                    <!-- PLAY BUTTON -->
                                    <div class="play-button tiny">
                                        <!-- PLAY BUTTON ICON -->
                                        <svg class="play-button-icon tiny">
                                            <use xlink:href="#svg-play"></use>
                                        </svg>
                                        <!-- /PLAY BUTTON ICON -->
                                    </div>
                                    <!-- /PLAY BUTTON -->
    
                                    <!-- TIMESTAMP TAG -->
                                    <p class="timestamp-tag tiny">04:37</p>
                                    <!-- /TIMESTAMP TAG -->
                                </div>
                                <!-- /POST PREVIEW OVERLAY -->
                            </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
    
                        <!-- POST PREVIEW TITLE -->
                        <a href="post-video.html" class="post-preview-title">Take a look at The Clash of Dragons new
                            classes</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html"
                                    class="post-author">Vellatrix</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
    
                    <!-- POST PREVIEW -->
                    <div class="post-preview video gaming-news tiny no-hover negative">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="post-video.html">
                            <div class="post-preview-img-wrap">
                                <!-- POST PREVIEW IMG -->
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/40.jpg')}}" alt="post-09">
                                </figure>
                                <!-- /POST PREVIEW IMG -->
    
                                <!-- POST PREVIEW OVERLAY -->
                                <div class="post-preview-overlay">
                                    <!-- PLAY BUTTON -->
                                    <div class="play-button tiny">
                                        <!-- PLAY BUTTON ICON -->
                                        <svg class="play-button-icon tiny">
                                            <use xlink:href="#svg-play"></use>
                                        </svg>
                                        <!-- /PLAY BUTTON ICON -->
                                    </div>
                                    <!-- /PLAY BUTTON -->
    
                                    <!-- TIMESTAMP TAG -->
                                    <p class="timestamp-tag tiny">05:56</p>
                                    <!-- /TIMESTAMP TAG -->
                                </div>
                                <!-- /POST PREVIEW OVERLAY -->
                            </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
    
                        <!-- POST PREVIEW TITLE -->
                        <a href="post-video.html" class="post-preview-title">5 minutes of the new "Rizen" game story
                            mode</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html"
                                    class="post-author">Faye V.</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
                </div>
                <!-- /POST PREVIEW SHOWCASE -->
    
                <a href="browse-videos.html" class="button small full cyan">Browse more videos...</a>
            </div>
            <!-- /LAYOUT SIDEBAR -->
        </div>
        <!-- /LAYOUT CONTENT 1 -->
    </div>
    
    <div class="layout-content-1 layout-item-3-1 own-grid grid-limit centered">
        <div class="layout-body layout-item">
            <div class="layout-item">
                @include('front.layouts.components.data-search')
    
                <!-- POST PREVIEW -->
                {{--<div class="post-preview landscape game-review">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-v2.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/44.jpg')}}" alt="post-05">
                            </figure>
                            <!-- POST PREVIEW IMG -->
    
                            <!-- REVIEW RATING -->
                            <div class="review-rating">
                                <div id="content-news-rate-7" class="arc"></div>
                            </div>
                            <!-- /REVIEW RATING -->
                        </div>
                    </a>
                    <!-- /POST PREVIEW IMG WRAP -->
    
                    <!-- TAG ORNAMENT -->
                    <a href="news-v2.html" class="tag-ornament">Game Reviews</a>
                    <!-- /TAG ORNAMENT -->
    
                    <!-- POST PREVIEW TITLE -->
                    <a href="post-v2.html" class="post-preview-title">We reviewed the new and exciting fantasy game
                        "Olympus"</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                        <p class="post-author-info small light">Ditulis oleh <a href="search-results.html"
                                class="post-author">Dexter</a><span class="separator">|</span>Hari, 15 Desember 2018<span
                                class="separator">|</span><a href="post-v1.html#op-comments" class="post-comment-count">174
                                Komentar</a></p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                    <!-- POST PREVIEW TEXT -->
                    <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt dutor et dolore magna aliqua</p>
                </div>
                <div class="post-preview landscape movie-news">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-v3.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/46.jpg')}}" alt="post-03">
                            </figure>
                            <!-- /POST PREVIEW IMG -->
    
                            <!-- RATING ORNAMENT -->
                            <div class="rating-ornament">
                                <!-- RATING ORNAMENT ITEM -->
                                <div class="rating-ornament-item">
                                    <!-- RATING ORNAMENT ICON -->
                                    <svg class="rating-ornament-icon">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                </div>
                                <!-- /RATING ORNAMENT ITEM -->
    
                                <!-- RATING ORNAMENT ITEM -->
                                <div class="rating-ornament-item">
                                    <!-- RATING ORNAMENT ICON -->
                                    <svg class="rating-ornament-icon">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                </div>
                                <!-- /RATING ORNAMENT ITEM -->
    
                                <!-- RATING ORNAMENT ITEM -->
                                <div class="rating-ornament-item">
                                    <!-- RATING ORNAMENT ICON -->
                                    <svg class="rating-ornament-icon">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                </div>
                                <!-- /RATING ORNAMENT ITEM -->
    
                                <!-- RATING ORNAMENT ITEM -->
                                <div class="rating-ornament-item">
                                    <!-- RATING ORNAMENT ICON -->
                                    <svg class="rating-ornament-icon">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                </div>
                                <!-- /RATING ORNAMENT ITEM -->
    
                                <!-- RATING ORNAMENT ITEM -->
                                <div class="rating-ornament-item">
                                    <!-- RATING ORNAMENT ICON -->
                                    <svg class="rating-ornament-icon">
                                        <use xlink:href="#svg-star"></use>
                                    </svg>
                                </div>
                                <!-- /RATING ORNAMENT ITEM -->
                            </div>
                            <!-- /RATING ORNAMENT -->
                        </div>
                    </a>
                    <!-- /POST PREVIEW IMG WRAP -->
    
                    <!-- TAG ORNAMENT -->
                    <a href="news-v3.html" class="tag-ornament">Movie News</a>
                    <!-- /TAG ORNAMENT -->
    
                    <!-- POST PREVIEW TITLE -->
                    <a href="post-v3.html" class="post-preview-title">"The Sandbender II" break the bad sequel spell with a
                        great movie</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                        <p class="post-author-info small light">Ditulis oleh <a href="search-results.html"
                                class="post-author">Dexter</a><span class="separator">|</span>Hari, 15 Desember 2018<span
                                class="separator">|</span><a href="post-v1.html#op-comments" class="post-comment-count">174
                                Komentar</a></p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                    <!-- POST PREVIEW TEXT -->
                    <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt dutor et dolore magna aliqua</p>
                </div>--}}
            </div>

            <!-- BUTTON -->
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