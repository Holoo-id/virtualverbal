@extends('front.layouts.base')

@section('content')
    <!-- LAYOUT ITEM -->
    <div class="layout-item gutter-big">
        <!-- POST OPEN -->
        <div class="post-open game-review">
            <!-- POST OPEN IMG WRAP -->
            <div class="post-open-img-wrap">
                <!-- POST OPEN IMG -->
                <figure class="post-open-img2 liquid">
                    <img src="{{ asset('/frontend/assets/img/posts/18.jpg')}}" alt="post-12">
                </figure>
                <!-- /POST OPEN IMG -->
            </div>
            <!-- /POST OPEN IMG WRAP -->
        </div>
        <!-- /POST OPEN -->
    </div>
    <!-- /LAYOUT ITEM -->
    <!-- LAYOUT CONTENT 2 -->
    <div class="layout-content-2 layout-item-1-2-1 own-grid centered">
        @include('front.layouts.sidebar-left')
    
        <!-- LAYOUT BODY -->
        <div class="layout-body layout-item">
            <!-- POST OPEN -->
            <div class="post-open gaming-news">
                <!-- POST OPEN CONTENT -->
                <div class="post-open-content v5">
                    <!-- POST OPEN BODY  -->
                    <div class="post-open-body">
                        <!-- TAG LIST -->
                        <div class="tag-list">
                            <!-- TAG ORNAMENT -->
                            <a href="news-v4.html" class="tag-ornament">Geeky News</a>
                            <!-- /TAG ORNAMENT -->
                        </div>
                        <!-- /TAG LIST -->
    
                        <!-- POST OPEN TITLE -->
                        <p class="post-open-title">Check out some Hearte Bunny original design ideas</p>
                        <!-- /POST OPEN TITLE -->
                
                        <!-- POST OPEN TEXT -->
                        <p class="post-open-subtitle">Also, get a sneak peak of the new season looks</p>
                        <div class="section-title-wrap blue">
                            <div class="section-title-separator"></div>
                        </div>
                        <!-- /POST OPEN TEXT -->

                        <!-- POST AUTHOR INFO -->
                        <div style="margin-top: 5px;margin-bottom:40px;display: flex; justify-content: center;" class="post-author-info-wrap">
                            <!-- USER AVATAR -->
                            <a href="search-results.html">
                                <figure class="user-avatar tiny liquid">
                                    <img src="{{ asset('/frontend/assets/img/users/01.jpg')}}" alt="user-01">
                                </figure>
                            </a>
                            <!-- /USER AVATAR -->
                            <p style="display: flex; justify-content: center; align-items: center" class="post-author-info small light">Oleh 
                                <a href="search-results.html" class="post-author" style="margin-left:2px"> Dexter</a>
                                <span class="separator">-</span>Senin, 19 Oktober 2020, 14:29 WIB
                                <span class="separator">-</span>
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
    
                                <!-- BUBBLE ORNAMENT -->
                                <a href="#" class="bubble-ornament gplus">
                                    <!-- GPLUS ICON -->
                                    <svg class="gplus-icon">
                                        <use xlink:href="#svg-gplus"></use>
                                    </svg>
                                    <!-- /GPLUS ICON -->
                                </a>
                                <!-- /BUBBLE ORNAMENT -->
                            </p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                        
                        <!-- POST OPEN TEXT -->
                        <p class="post-open-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                            in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <!-- /POST OPEN TEXT -->
                        <!-- POST OPEN MEDIA WRAP -->
                        <div class="post-open-media-wrap">
                            <!-- POST OPEN MEDIA -->
                            <div class="post-open-media">
                                <iframe src="../embed/2ywJQKBSPbX39cAllH.html" allowfullscreen=""></iframe>
                            </div>
                            <!-- /POST OPEN MEDIA -->
                        
                            <!-- POST OPEN MEDIA INFO -->
                            <p class="post-open-media-info">In this boss fight GIF you can take a peek of the amazing combat
                                elements and magimon special attacks</p>
                            <!-- /POST OPEN MEDIA INFO -->
                        </div>
                        <!-- /POST OPEN MEDIA WRAP -->
                        <!-- POST OPEN IMG -->
                        <figure class="post-open-img liquid">
                            <img src="{{ asset('/frontend/assets/img/posts/19.jpg')}}" alt="post-13">
                        </figure>
                        <!-- /POST OPEN IMG -->
                        <!-- Slideshow -->
                        <!-- <div id="po-slideshow2" class="slideshow v2">
                            <div class="slider-content">
                                <div class="slider-items">
                                    <div class="slider-item slider-item-1">
                                        <div class="slider-blur-bg"></div>
                                        <div class="slider-item-img"></div>
                                    </div>
                                    <div class="slider-item slider-item-2">
                                        <div class="slider-blur-bg"></div>
                                        <div class="slider-item-img"></div>
                                    </div>
                                    <div class="slider-item slider-item-3">
                                        <div class="slider-blur-bg"></div>
                                        <div class="slider-item-img"></div>
                                    </div>
                                    <div class="slider-item slider-item-4">
                                        <div class="slider-blur-bg"></div>
                                        <div class="slider-item-img"></div>
                                    </div>
                                    <div class="slider-item slider-item-5">
                                        <div class="slider-blur-bg"></div>
                                        <div class="slider-item-img"></div>
                                    </div>
                                    <div class="slider-item slider-item-6">
                                        <div class="slider-blur-bg"></div>
                                        <div class="slider-item-img"></div>
                                    </div>
                                    <div class="slider-item slider-item-7">
                                        <div class="slider-blur-bg"></div>
                                        <div class="slider-item-img"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="po-slideshow2-1" class="slider-footer">
                                <div class="slider-roster">
                                    <div class="slider-roster-item">
                                        <div class="slider-roster-item-img-border"></div>
                                        <figure class="slider-roster-item-img liquid">
                                            <img src="{{ asset('/frontend/assets/img/posts/19.jpg')}}" alt="post-19">
                                        </figure>
                                    </div>
                                    <div class="slider-roster-item">
                                        <div class="slider-roster-item-img-border"></div>
                                        <figure class="slider-roster-item-img liquid">
                                            <img src="{{ asset('/frontend/assets/img/posts/29.jpg')}}" alt="post-29">
                                        </figure>
                                    </div>
                                    <div class="slider-roster-item">
                                        <div class="slider-roster-item-img-border"></div>
                                        <figure class="slider-roster-item-img liquid">
                                            <img src="{{ asset('/frontend/assets/img/posts/27.jpg')}}" alt="post-27">
                                        </figure>
                                    </div>
                                    <div class="slider-roster-item">
                                        <div class="slider-roster-item-img-border"></div>
                                        <figure class="slider-roster-item-img liquid">
                                            <img src="22" alt="post-22">
                                        </figure>
                                    </div>
                                    <div class="slider-roster-item">
                                        <div class="slider-roster-item-img-border"></div>
                                        <figure class="slider-roster-item-img liquid">
                                            <img src="{{ asset('/frontend/assets/img/posts/18.jpg')}}" alt="post-18">
                                        </figure>
                                    </div>
                                    <div class="slider-roster-item">
                                        <div class="slider-roster-item-img-border"></div>
                                        <figure class="slider-roster-item-img liquid">
                                            <img src="{{ asset('/frontend/assets/img/posts/23.jpg')}}" alt="post-23">
                                        </figure>
                                    </div>
                                    <div class="slider-roster-item">
                                        <div class="slider-roster-item-img-border"></div>
                                        <figure class="slider-roster-item-img liquid">
                                            <img src="{{ asset('/frontend/assets/img/posts/21.jpg')}}" alt="post-21">
                                        </figure>
                                    </div>
                                </div>
                                <div id="po-slideshow2-controls" class="slider-controls hover-yellow">
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
                        </div> -->
                        <!-- POST OPEN QUOTE -->
                        <div class="post-open-quote">
                            <!-- QUOTE TEXT -->
                            <p class="quote-text">We are very proud to be one of the largest gaming industries in the world and we
                                can assure that the new game <span class="highlight">will release before 2016</span></p>
                            <!-- /QUOTE TEXT -->
                        </div>
                        <!-- /POST OPEN QUOTE -->
                        <!-- POST OPEN IMG WRAP BLUR-->
                        <div class="post-open-img-wrap blur-bg-wrap">
                            <!-- POST OPEN IMG -->
                            <figure class="post-open-img blur-bg liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/20.jpg')}}" alt="post-19">
                            </figure>
                            <!-- /POST OPEN IMG -->
                        
                            <!-- POST OPEN IMG -->
                            <figure class="post-open-img blur-bg-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/21.jpg')}}" alt="post-19">
                            </figure>
                            <!-- /POST OPEN IMG -->
                        </div>
                        <!-- /POST OPEN IMG WRAP -->
                        <!-- REVIEW WRAP -->
                        <div class="review-wrap">
                            <!-- REVIEW SCORE WRAP -->
                            <div class="review-score-wrap">
                                <!-- REVIEW SCORE NUMBER -->
                                <p class="review-score-number">3/5</p>
                                <!-- /REVIEW SCORE NUMBER -->
                        
                                <!-- RATING ORNAMENT -->
                                <div class="rating-ornament medium void">
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
                                        <svg class="rating-ornament-icon empty">
                                            <use xlink:href="#svg-star"></use>
                                        </svg>
                                    </div>
                                    <!-- /RATING ORNAMENT ITEM -->
                        
                                    <!-- RATING ORNAMENT ITEM -->
                                    <div class="rating-ornament-item">
                                        <!-- RATING ORNAMENT ICON -->
                                        <svg class="rating-ornament-icon empty">
                                            <use xlink:href="#svg-star"></use>
                                        </svg>
                                    </div>
                                    <!-- /RATING ORNAMENT ITEM -->
                                </div>
                                <!-- /RATING ORNAMENT -->
                        
                                <!-- REVIEW SCORE TEXT -->
                                <p class="review-score-text">Good</p>
                                <!-- /REVIEW SCORE TEXT -->
                            </div>
                            <!-- /REVIEW SCORE WRAP -->
                        
                            <!-- REVIEW INFO WRAP -->
                            <div class="review-info-wrap">
                                <!-- REVIEW INFO TEXT -->
                                <p class="review-info-text"><span class="highlight">“Guardians of the Universe”</span> is a
                                    fun movie for all the family but lacks originality and the villain is one of the bunch.
                                </p>
                                <!-- /REVIEW INFO TEXT -->
                        
                                <!-- REVIEW INFO LIST WRAP -->
                                <div class="review-info-list-wrap">
                                    <!-- REVIEW INFO LIST -->
                                    <div class="review-info-list pros">
                                        <!-- REVIEW INFO LIST ITEM -->
                                        <div class="review-info-list-item">
                                            <!-- REVIEW INFO LIST ICON -->
                                            <div class="review-info-list-icon">
                                                <!-- PLUS ICON -->
                                                <svg class="plus-icon">
                                                    <use xlink:href="#svg-plus-big"></use>
                                                </svg>
                                                <!-- /PLUS ICON -->
                                            </div>
                                            <!-- /REVIEW INFO LIST ICON -->
                        
                                            <!-- REVIEW INFO LIST ITEM -->
                                            <p class="review-info-list-item-text">Great Performances</p>
                                            <!-- /REVIEW INFO LIST ITEM -->
                                        </div>
                                        <!-- /REVIEW INFO LIST ITEM -->
                        
                                        <!-- REVIEW INFO LIST ITEM -->
                                        <div class="review-info-list-item">
                                            <!-- REVIEW INFO LIST ICON -->
                                            <div class="review-info-list-icon">
                                                <!-- PLUS ICON -->
                                                <svg class="plus-icon">
                                                    <use xlink:href="#svg-plus-big"></use>
                                                </svg>
                                                <!-- /PLUS ICON -->
                                            </div>
                                            <!-- /REVIEW INFO LIST ICON -->
                        
                                            <!-- REVIEW INFO LIST ITEM -->
                                            <p class="review-info-list-item-text">Incredible Effects</p>
                                            <!-- /REVIEW INFO LIST ITEM -->
                                        </div>
                                        <!-- /REVIEW INFO LIST ITEM -->
                        
                                        <!-- REVIEW INFO LIST ITEM -->
                                        <div class="review-info-list-item">
                                            <!-- REVIEW INFO LIST ICON -->
                                            <div class="review-info-list-icon">
                                                <!-- PLUS ICON -->
                                                <svg class="plus-icon">
                                                    <use xlink:href="#svg-plus-big"></use>
                                                </svg>
                                                <!-- /PLUS ICON -->
                                            </div>
                                            <!-- /REVIEW INFO LIST ICON -->
                        
                                            <!-- REVIEW INFO LIST ITEM -->
                                            <p class="review-info-list-item-text">Superb Soundtrack</p>
                                            <!-- /REVIEW INFO LIST ITEM -->
                                        </div>
                                        <!-- /REVIEW INFO LIST ITEM -->
                                    </div>
                                    <!-- /REVIEW INFO LIST -->
                        
                                    <!-- REVIEW INFO LIST -->
                                    <div class="review-info-list">
                                        <!-- REVIEW INFO LIST ITEM -->
                                        <div class="review-info-list-item">
                                            <!-- REVIEW INFO LIST ICON -->
                                            <div class="review-info-list-icon">
                                                <!-- MINUS CC ICON -->
                                                <svg class="minus-cc-icon">
                                                    <use xlink:href="#svg-minus-cc"></use>
                                                </svg>
                                                <!-- /MINUS CC ICON -->
                                            </div>
                                            <!-- /REVIEW INFO LIST ICON -->
                        
                                            <!-- REVIEW INFO LIST ITEM -->
                                            <p class="review-info-list-item-text">Weak Villain</p>
                                            <!-- /REVIEW INFO LIST ITEM -->
                                        </div>
                                        <!-- /REVIEW INFO LIST ITEM -->
                        
                                        <!-- REVIEW INFO LIST ITEM -->
                                        <div class="review-info-list-item">
                                            <!-- REVIEW INFO LIST ICON -->
                                            <div class="review-info-list-icon">
                                                <!-- MINUS CC ICON -->
                                                <svg class="minus-cc-icon">
                                                    <use xlink:href="#svg-minus-cc"></use>
                                                </svg>
                                                <!-- /MINUS CC ICON -->
                                            </div>
                                            <!-- /REVIEW INFO LIST ICON -->
                        
                                            <!-- REVIEW INFO LIST ITEM -->
                                            <p class="review-info-list-item-text">No Originality</p>
                                            <!-- /REVIEW INFO LIST ITEM -->
                                        </div>
                                        <!-- /REVIEW INFO LIST ITEM -->
                                    </div>
                                    <!-- /REVIEW INFO LIST -->
                                </div>
                                <!-- /REVIEW INFO LIST WRAP -->
                            </div>
                            <!-- /REVIEW INFO WRAP -->
                        </div>
                        <!-- /REVIEW WRAP -->
                        <!-- FEATURE LIST -->
                        <div class="feature-list">
                            <!-- FEATURE LIST BLOCK -->
                            <div class="feature-list-block">
                                <!-- FEATURE LIST ITEM -->
                                <p class="feature-list-item"><span class="feature-title">Game:</span><span class="feature-info">Magimons
                                        Rising</span></p>
                                <!-- /FEATURE LIST ITEM -->
                        
                                <!-- FEATURE LIST ITEM -->
                                <p class="feature-list-item"><span class="feature-title">Developer:</span><span class="feature-info">Broken
                                        Pixels</span></p>
                                <!-- /FEATURE LIST ITEM -->
                        
                                <!-- FEATURE LIST ITEM -->
                                <p class="feature-list-item"><span class="feature-title">Release Date:</span><span class="feature-info">October
                                        15th, 2018</span></p>
                                <!-- /FEATURE LIST ITEM -->
                            </div>
                            <!-- /FEATURE LIST BLOCK -->
                        
                            <!-- FEATURE LIST BLOCK -->
                            <div class="feature-list-block">
                                <!-- FEATURE LIST ITEM -->
                                <p class="feature-list-item"><span class="feature-title">Publisher:</span><span class="feature-info">Diamond
                                        Canada</span></p>
                                <!-- /FEATURE LIST ITEM -->
                        
                                <!-- FEATURE LIST ITEM -->
                                <p class="feature-list-item"><span class="feature-title">Reviewed on:</span><span
                                        class="feature-info">Powerstation 4</span></p>
                                <!-- /FEATURE LIST ITEM -->
                        
                                <!-- FEATURE LIST ITEM -->
                                <p class="feature-list-item"><span class="feature-title">MSRP:</span><span class="feature-info">USD
                                        59.99</span></p>
                                <!-- /FEATURE LIST ITEM -->
                            </div>
                            <!-- /FEATURE LIST BLOCK -->
                        </div>
                        <!-- /FEATURE LIST -->
                        <!-- Progress bar block -->
                        <!-- <div class="progress-bar-block">
                            <div id="po-pgb-1" class="progress-bar medium">
                                <p class="bar-progress-info medium">Gaming Graphics</p>
                                <div class="bar-progress-wrap bubble">
                                    <p class="bar-progress-text"></p>
                                </div>
                            </div>
                            <div id="po-pgb-2" class="progress-bar medium">
                                <p class="bar-progress-info medium">Overall Story</p>
                                <div class="bar-progress-wrap bubble">
                                    <p class="bar-progress-text"></p>
                                </div>
                            </div>
                            <div id="po-pgb-3" class="progress-bar medium">
                                <p class="bar-progress-info medium">Detailed Atmosphere</p>
                                <div class="bar-progress-wrap bubble">
                                    <p class="bar-progress-text"></p>
                                </div>
                            </div>
                            <div id="po-pgb-4" class="progress-bar medium">
                                <p class="bar-progress-info medium">Multiplayer &amp; Online</p>
                                <div class="bar-progress-wrap bubble">
                                    <p class="bar-progress-text"></p>
                                </div>
                            </div>
                        </div> -->
                        <!-- POST OPEN TEXT -->
                        <p class="post-open-text bold">The new game from the world famous “Eternity Studios” is back with a new
                            adventure game with a lot of classic and puzzle elements.</p>
                        <!-- /POST OPEN TEXT -->
                        <!-- POST OPEN MEDIA WRAP -->
                        <div class="post-open-media-wrap">
                            <!-- POST OPEN MEDIA -->
                            <div class="post-open-media small">
                                <iframe src="../embed/h3HphgSn0o4.html?start=19"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen=""></iframe>
                            </div>
                            <!-- /POST OPEN MEDIA -->
                        </div>
                        <!-- /POST OPEN MEDIA WRAP -->
                        <!-- POST OPEN SUBTITLE -->
                        <p class="post-open-subtitle small">Unordered list</p>
                        <!-- /POST OPEN SUBTITLE -->
                        <!-- BULLET LIST -->
                        <div class="bullet-list">
                            <!-- BULLET LIST ITEM -->
                            <div class="bullet-list-item">
                                <!-- BULLET LIST ITEM ICON -->
                                <div class="bullet-list-item-icon">
                                    <!-- CHECK ICON -->
                                    <svg class="check-icon">
                                        <use xlink:href="#svg-check"></use>
                                    </svg>
                                    <!-- /CHECK ICON -->
                                </div>
                                <!-- /BULLET LIST ITEM ICON -->
                        
                                <!-- BULLET LIST ITEM TEXT -->
                                <p class="bullet-list-item-text">Dolorem ipsum quia dolor sit ametoru consectetur adipisicing elit,
                                    sed do eiusmod</p>
                                <!-- /BULLET LIST ITEM TEXT -->
                            </div>
                            <!-- /BULLET LIST ITEM -->
                        
                            <!-- BULLET LIST ITEM -->
                            <div class="bullet-list-item">
                                <!-- BULLET LIST ITEM ICON -->
                                <div class="bullet-list-item-icon">
                                    <!-- CHECK ICON -->
                                    <svg class="check-icon">
                                        <use xlink:href="#svg-check"></use>
                                    </svg>
                                    <!-- /CHECK ICON -->
                                </div>
                                <!-- /BULLET LIST ITEM ICON -->
                        
                                <!-- BULLET LIST ITEM TEXT -->
                                <p class="bullet-list-item-text">Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                </p>
                                <!-- /BULLET LIST ITEM TEXT -->
                            </div>
                            <!-- /BULLET LIST ITEM -->
                        
                            <!-- BULLET LIST ITEM -->
                            <div class="bullet-list-item">
                                <!-- BULLET LIST ITEM ICON -->
                                <div class="bullet-list-item-icon">
                                    <!-- CHECK ICON -->
                                    <svg class="check-icon">
                                        <use xlink:href="#svg-check"></use>
                                    </svg>
                                    <!-- /CHECK ICON -->
                                </div>
                                <!-- /BULLET LIST ITEM ICON -->
                        
                                <!-- BULLET LIST ITEM TEXT -->
                                <p class="bullet-list-item-text">Dolorem ipsum quia dolor sit ametoru consectetur adipisicing elit,
                                    sed do eiusmod</p>
                                <!-- /BULLET LIST ITEM TEXT -->
                            </div>
                            <!-- /BULLET LIST ITEM -->
                        
                            <!-- BULLET LIST ITEM -->
                            <div class="bullet-list-item">
                                <!-- BULLET LIST ITEM ICON -->
                                <div class="bullet-list-item-icon">
                                    <!-- CHECK ICON -->
                                    <svg class="check-icon">
                                        <use xlink:href="#svg-check"></use>
                                    </svg>
                                    <!-- /CHECK ICON -->
                                </div>
                                <!-- /BULLET LIST ITEM ICON -->
                        
                                <!-- BULLET LIST ITEM TEXT -->
                                <p class="bullet-list-item-text">Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                </p>
                                <!-- /BULLET LIST ITEM TEXT -->
                            </div>
                            <!-- /BULLET LIST ITEM -->
                        </div>
                        <!-- /BULLET LIST -->
                        <!-- SLIDESHOW -->
                        <div id="po-slideshow1" class="slideshow">
                            <!-- SLIDER CONTENT -->
                            <div class="slider-content">
                                <!-- SLIDER ITEMS -->
                                <div class="slider-items">
                                    <!-- SLIDER ITEM -->
                                    <div class="slider-item slider-item-1">
                                        <!-- SLIDER BLUR BG -->
                                        <div class="slider-blur-bg"></div>
                                        <!-- SLIDER ITEM IMG -->
                                        <div class="slider-item-img"></div>
                                    </div>
                                    <!-- /SLIDER ITEM -->
                        
                                    <!-- SLIDER ITEM -->
                                    <div class="slider-item slider-item-2">
                                        <!-- SLIDER BLUR BG -->
                                        <div class="slider-blur-bg"></div>
                                        <!-- SLIDER ITEM IMG -->
                                        <div class="slider-item-img"></div>
                                    </div>
                                    <!-- /SLIDER ITEM -->
                        
                                    <!-- SLIDER ITEM -->
                                    <div class="slider-item slider-item-3">
                                        <!-- SLIDER BLUR BG -->
                                        <div class="slider-blur-bg"></div>
                                        <!-- SLIDER ITEM IMG -->
                                        <div class="slider-item-img"></div>
                                    </div>
                                    <!-- /SLIDER ITEM -->
                        
                                    <!-- SLIDER ITEM -->
                                    <div class="slider-item slider-item-4">
                                        <!-- SLIDER BLUR BG -->
                                        <div class="slider-blur-bg"></div>
                                        <!-- SLIDER ITEM IMG -->
                                        <div class="slider-item-img"></div>
                                    </div>
                                    <!-- /SLIDER ITEM -->
                        
                                    <!-- SLIDER ITEM -->
                                    <div class="slider-item slider-item-5">
                                        <!-- SLIDER BLUR BG -->
                                        <div class="slider-blur-bg"></div>
                                        <!-- SLIDER ITEM IMG -->
                                        <div class="slider-item-img"></div>
                                    </div>
                                    <!-- /SLIDER ITEM -->
                                </div>
                                <!-- /SLIDER ITEMS -->
                            </div>
                            <!-- /SLIDER CONTENT -->
                        
                            <!-- SLIDER FOOTER -->
                            <div id="po-slideshow1-1" class="slider-footer">
                                <!-- SLIDER ROSTER -->
                                <div class="slider-roster">
                                    <!-- SLIDER ROSTER ITEM -->
                                    <div class="slider-roster-item">
                                        <h6 class="slider-footer-title"><span class="current-slide">1</span>/<span class="max-slide">5</span>
                                            Bunny's new look for season 02</h6>
                                        <p class="slider-footer-text">In this new season, Bunny will have a wardrobe change and a
                                            revamped look</p>
                                    </div>
                                    <!-- /SLIDER ROSTER ITEM -->
                        
                                    <!-- SLIDER ROSTER ITEM -->
                                    <div class="slider-roster-item">
                                        <h6 class="slider-footer-title"><span class="current-slide">2</span>/<span class="max-slide">5</span>
                                            Check out some Hearte Bunny original design ideas</h6>
                                        <p class="slider-footer-text">Some of the best design ideas</p>
                                    </div>
                                    <!-- /SLIDER ROSTER ITEM -->
                        
                                    <!-- SLIDER ROSTER ITEM -->
                                    <div class="slider-roster-item">
                                        <h6 class="slider-footer-title"><span class="current-slide">3</span>/<span class="max-slide">5</span>
                                            "Ichigo Idol" anime will have a new season in April</h6>
                                        <p class="slider-footer-text">This new season promises to give a finish to the story</p>
                                    </div>
                                    <!-- /SLIDER ROSTER ITEM -->
                        
                                    <!-- SLIDER ROSTER ITEM -->
                                    <div class="slider-roster-item">
                                        <h6 class="slider-footer-title"><span class="current-slide">4</span>/<span class="max-slide">5</span>
                                            "Steamboat" anime will have a preview event on May</h6>
                                        <p class="slider-footer-text">All you need to know to get there</p>
                                    </div>
                                    <!-- /SLIDER ROSTER ITEM -->
                        
                                    <!-- SLIDER ROSTER ITEM -->
                                    <div class="slider-roster-item">
                                        <h6 class="slider-footer-title"><span class="current-slide">5</span>/<span class="max-slide">5</span>
                                            Jessica Tam to star in the new "Charlotte" series</h6>
                                        <p class="slider-footer-text">Check out the latest news in our post</p>
                                    </div>
                                    <!-- /SLIDER ROSTER ITEM -->
                                </div>
                                <!-- /SLIDER ROSTER -->
                        
                                <!-- SLIDER CONTROLS -->
                                <div id="po-slideshow1-controls" class="slider-controls hover-yellow">
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
                            <!-- /SLIDER FOOTER -->
                        </div>
                        <!-- /SLIDESHOW -->
                        <!-- BULLET LIST -->
                        <div class="bullet-list">
                            <!-- BULLET LIST ITEM -->
                            <div class="bullet-list-item">
                                <!-- BULLET LIST ITEM ICON -->
                                <div class="bullet-list-item-icon">
                                    <!-- BUBBLE ORNAMENT -->
                                    <div class="bubble-ornament small red no-link">
                                        <p class="bubble-ornament-info">01</p>
                                    </div>
                                    <!-- /BUBBLE ORNAMENT -->
                                </div>
                                <!-- /BULLET LIST ITEM ICON -->
                        
                                <!-- BULLET LIST ITEM TEXT -->
                                <p class="bullet-list-item-text">Dolorem ipsum quia dolor sit ametoru</p>
                                <!-- /BULLET LIST ITEM TEXT -->
                            </div>
                            <!-- /BULLET LIST ITEM -->
                        
                            <!-- BULLET LIST ITEM -->
                            <div class="bullet-list-item">
                                <!-- BULLET LIST ITEM ICON -->
                                <div class="bullet-list-item-icon">
                                    <!-- BUBBLE ORNAMENT -->
                                    <div class="bubble-ornament small red no-link">
                                        <p class="bubble-ornament-info">02</p>
                                    </div>
                                    <!-- /BUBBLE ORNAMENT -->
                                </div>
                                <!-- /BULLET LIST ITEM ICON -->
                        
                                <!-- BULLET LIST ITEM TEXT -->
                                <p class="bullet-list-item-text">Nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                <!-- /BULLET LIST ITEM TEXT -->
                            </div>
                            <!-- /BULLET LIST ITEM -->
                        
                            <!-- BULLET LIST ITEM -->
                            <div class="bullet-list-item">
                                <!-- BULLET LIST ITEM ICON -->
                                <div class="bullet-list-item-icon">
                                    <!-- BUBBLE ORNAMENT -->
                                    <div class="bubble-ornament small red no-link">
                                        <p class="bubble-ornament-info">03</p>
                                    </div>
                                    <!-- /BUBBLE ORNAMENT -->
                                </div>
                                <!-- /BULLET LIST ITEM ICON -->
                        
                                <!-- BULLET LIST ITEM TEXT -->
                                <p class="bullet-list-item-text">Dolorem ipsum quia dolor sit</p>
                                <!-- /BULLET LIST ITEM TEXT -->
                            </div>
                            <!-- /BULLET LIST ITEM -->
                        
                            <!-- BULLET LIST ITEM -->
                            <div class="bullet-list-item">
                                <!-- BULLET LIST ITEM ICON -->
                                <div class="bullet-list-item-icon">
                                    <!-- BUBBLE ORNAMENT -->
                                    <div class="bubble-ornament small red no-link">
                                        <p class="bubble-ornament-info">04</p>
                                    </div>
                                    <!-- /BUBBLE ORNAMENT -->
                                </div>
                                <!-- /BULLET LIST ITEM ICON -->
                        
                                <!-- BULLET LIST ITEM TEXT -->
                                <p class="bullet-list-item-text">Nostrud exercitation ullamco laboris nisi ut</p>
                                <!-- /BULLET LIST ITEM TEXT -->
                            </div>
                            <!-- /BULLET LIST ITEM -->
                        </div>
                        <!-- /BULLET LIST -->
                        <!-- POST OPEN MEDIA WRAP -->
                        <div class="post-open-media-wrap">
                            <!-- POST OPEN MEDIA -->
                            <div class="post-open-media small">
                                <iframe src="../embed/zUGZYh2HxHM.html"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                            </div>
                            <!-- /POST OPEN MEDIA -->
                        </div>
                        <!-- /POST OPEN MEDIA WRAP -->
                        <!-- POST OPEN TEXT WRAP -->
                        <div class="post-open-text-wrap half">
                            <!-- POST OPEN TEXT -->
                            <p class="post-open-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore na aliqua. enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit ess cillum dolore eu fugiat nulla pariatur. Excepteur sint aecat cupidatat non
                                proident, sunt in culpa.</p>
                            <!-- /POST OPEN TEXT -->
                        
                            <!-- POST OPEN TEXT -->
                            <p class="post-open-text">Nemo enim ipsam e quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratitate sequi nesciunt. Neque porro quisquam est, qui dolorem
                                ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <!-- /POST OPEN TEXT -->
                        </div>
                        <!-- /POST OPEN TEXT WRAP -->
                        <!-- REVIEW BLOCK -->
                        <div class="review-block">
                            <!-- REVIEW BLOCK ITEM -->
                            <div class="review-block-item">
                                <!-- PROGRESS BAR -->
                                <div id="po-pbg-5" class="progress-bar">
                                    <!-- BAR PROGRESS WRAP -->
                                    <div class="bar-progress-wrap bubble tiny static">
                                        <p class="bar-progress-text"></p>
                                    </div>
                                    <!-- /BAR PROGRESS WRAP -->
                                </div>
                                <!-- /PROGRESS BAR -->
                        
                                <!-- PROGRESS BAR -->
                                <div id="po-pbg-6" class="progress-bar">
                                    <!-- BAR PROGRESS WRAP -->
                                    <div class="bar-progress-wrap bubble tiny static">
                                        <p class="bar-progress-text"></p>
                                    </div>
                                    <!-- /BAR PROGRESS WRAP -->
                                </div>
                                <!-- /PROGRESS BAR -->
                        
                                <!-- PROGRESS BAR -->
                                <div id="po-pbg-7" class="progress-bar">
                                    <!-- BAR PROGRESS WRAP -->
                                    <div class="bar-progress-wrap bubble tiny static">
                                        <p class="bar-progress-text"></p>
                                    </div>
                                    <!-- /BAR PROGRESS WRAP -->
                                </div>
                                <!-- /PROGRESS BAR -->
                        
                                <!-- PROGRESS BAR -->
                                <div id="po-pbg-8" class="progress-bar">
                                    <!-- BAR PROGRESS WRAP -->
                                    <div class="bar-progress-wrap bubble tiny static">
                                        <p class="bar-progress-text"></p>
                                    </div>
                                    <!-- /BAR PROGRESS WRAP -->
                                </div>
                                <!-- /PROGRESS BAR -->
                            </div>
                            <!-- /REVIEW BLOCK ITEM -->
                        
                            <!-- REVIEW BLOCK ITEM -->
                            <div class="review-block-item">
                                <!-- ARC -->
                                <div id="po-arc-1" class="arc big negative"></div>
                                <!-- /ARC -->
                            </div>
                            <!-- /REVIEW BLOCK ITEM -->
                        </div>
                        <!-- /REVIEW BLOCK -->

                        <div class="post-open-card-game">
                            <img src="{{ asset('/frontend/assets/img/posts/22.jpg')}}" alt="">
                            <!-- FEATURE LIST -->
                            <div class="feature-list">
                                <!-- FEATURE LIST BLOCK -->
                                <div class="feature-list-block">
                            
                                    <!-- FEATURE LIST ITEM -->
                                    <p class="feature-list-item"><span class="feature-title">Developer:</span><span class="feature-info">Broken
                                            Pixels</span></p>
                                    <!-- /FEATURE LIST ITEM -->
                                    <!-- FEATURE LIST ITEM -->
                                    <p class="feature-list-item"><span class="feature-title">Publisher:</span><span class="feature-info">Diamond
                                            Canada</span></p>
                                    <!-- /FEATURE LIST ITEM -->
                            
                                    <!-- FEATURE LIST ITEM -->
                                    <p class="feature-list-item"><span class="feature-title">Release Date:</span><span class="feature-info">October
                                            15th, 2018</span></p>
                                    <!-- /FEATURE LIST ITEM -->
                                </div>
                                <!-- /FEATURE LIST BLOCK -->
                            </div>
                            <!-- /FEATURE LIST -->
                        </div>
                    </div>
                    <!-- /POST OPEN BODY -->

                    <div class="game-card-wrap grid-limit">
                        <img class="gambar-gantung" src="{{ asset('/frontend/assets/img/posts/02_tall.jpg')}}" alt="">
                        <div class="card-profil-game centered">
                            <div class="section-title-wrap">
                                <div style="padding-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.15)" class="section-title medium">Game Database</div>
                            </div>
                            <ul class="profil-game-text">
                                <li class="text-judul">Platform:</li>
                                <li class="text-isi">asdghjkl</li>
                                <li class="text-judul">Tanggal Rilis:</li>
                                <li class="text-isi">12 Bulan 1234 (UK), 12 Bulan 1234 (UK)</li>
                                <li class="text-judul">Publisher:</li>
                                <li class="text-isi">Publisher 1</li>
                                <li class="text-judul">Developer:</li>
                                <li class="text-isi">Developer</li>
                                <li class="text-judul">Genre:</li>
                                <li class="text-isi">Game</li>
                                <a style="width: 100%; margin-top: 15px;" href="#" class="button disable">Selengkapnya
                                    <!-- BUTTON ORNAMENT -->
                                    <div class="button-ornament">
                                        <!-- ARROW ICON -->
                                        <svg class="arrow-icon medium">
                                            <use xlink:href="#svg-arrow-medium"></use>
                                        </svg>
                                        <!-- /ARROW ICON -->
                                    </div>
                                    <!-- /BUTTON ORNAMENT -->
                                </a>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="fb-comments" data-href="https://localhost:8000/post/third" data-numposts="3" data-width=""></div>
    
                    <!-- {{-- <div class="post-comment-form-wrap">
                        <div class="section-title-wrap blue">
                            <h2 class="section-title medium">Write a comment</h2>
                            <div class="section-title-separator"></div>
                        </div>
                        <form class="post-comment-form">
                            <div class="form-row">
                                <div class="form-item half blue">
                                    <label for="pcf_name" class="rl-label">Your Name</label>
                                    <input type="text" id="pcf_name" name="pcf_name" placeholder="Enter your first name here...">
                                </div>
                                <div class="form-item half blue">
                                    <label for="pcf_email" class="rl-label">Your Email</label>
                                    <input type="text" id="pcf_email" name="pcf_email" placeholder="Enter your email here...">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-item blue">
                                    <label for="pcf_comment" class="rl-label">Your Comment</label>
                                    <textarea name="pcf_comment" id="pcf_comment" class="violet"
                                        placeholder="Write you comment here..."></textarea>
                                </div>
                            </div>
                            <div style="text-align:center" class="submit-button-wrap">
                                <button class="submit-button button blue">
                                    Post your comment
                                    <span class="button-ornament">
                                        <svg class="arrow-icon medium">
                                            <use xlink:href="#svg-arrow-medium"></use>
                                        </svg>
                                        <svg class="cross-icon small">
                                            <use xlink:href="#svg-cross-small"></use>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div id="op-comments" class="post-comment-thread">
                        <div class="section-title-wrap blue">
                            <h2 class="section-title medium">Comments (174)</h2>
                            <div class="section-title-separator"></div>
                        </div>
                        <div class="post-comment">
                            <figure class="user-avatar medium liquid">
                                <img src="{{ asset('/frontend/assets/img/users/09.jpg')}}" alt="user-09">
                            </figure>
                            <p class="post-comment-username">Elizabeth Valentine</p>
                            <p class="post-comment-timestamp">25 mins ago</p>
                            <a href="#" class="report-button">Report</a>
                            <p class="post-comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="post-comment-actions">
                                <div class="reply-button bubble-ornament blue">
                                    <i class="fas fa-reply icon-action-undo reply-icon"></i>
                                </div>
                                <div class="like-button bubble-ornament hoverable cyan">
                                    <i class="fas fa-thumbs-up icon-like like-icon"></i>
                                </div>
                                <p class="likes-count">12 Thumbs Up</p>
                            </div>
                        </div>
                        <div class="post-comment">
                            <figure class="user-avatar medium liquid">
                                <img src="{{ asset('/frontend/assets/img/users/07.jpg')}}" alt="user-07">
                            </figure>
                            <p class="post-comment-username">Thomas Stevens</p>
                            <p class="post-comment-timestamp">49 mins ago</p>
                            <a href="#" class="report-button">Report</a>
                            <p class="post-comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="post-comment-actions">
                                <div class="reply-button bubble-ornament blue">
                                    <i class="fas fa-reply icon-action-undo reply-icon"></i>
                                </div>
                                <div class="like-button bubble-ornament hoverable cyan">
                                    <i class="fas fa-thumbs-up icon-like like-icon"></i>
                                </div>
                                <p class="likes-count">36 Thumbs Up</p>
                            </div>
                            <div class="post-comment">
                                <figure class="user-avatar medium liquid">
                                    <img src="{{ asset('/frontend/assets/img/users/06.jpg')}}" alt="user-06">
                                </figure>
                                <p class="post-comment-username">Megan Lebeau</p>
                                <p class="post-comment-timestamp">6 mins ago</p>
                                <a href="#" class="report-button">Report</a>
                                <p class="post-comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <div class="post-comment-actions">
                                    <div class="reply-button bubble-ornament blue">
                                        <i class="fas fa-reply icon-action-undo reply-icon"></i>
                                    </div>
                                    <div class="like-button bubble-ornament hoverable cyan">
                                        <i class="fas fa-thumbs-up icon-like like-icon"></i>
                                    </div>
                                    <p class="likes-count">6 Thumbs Up</p>
                                </div>
                            </div>
                        </div>
                        <div class="post-comment">
                            <figure class="user-avatar medium liquid">
                                <img src="{{ asset('/frontend/assets/img/users/01.jpg')}}" alt="user-01">
                            </figure>
                            <p class="post-comment-username text-tag staff">Dexter Danvers</p>
                            <p class="post-comment-timestamp">2 hours ago</p>
                            <a href="#" class="report-button">Report</a>
                            <p class="post-comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="post-comment-actions">
                                <div class="reply-button bubble-ornament blue">
                                    <i class="fas fa-reply icon-action-undo reply-icon"></i>
                                </div>
                                <div class="like-button bubble-ornament hoverable cyan">
                                    <i class="fas fa-thumbs-up icon-like like-icon"></i>
                                </div>
                                <p class="likes-count">47 Thumbs Up</p>
                            </div>
                        </div>
                    </div> --}} -->
                </div>
                <!-- /POST OPEN CONTENT -->
            </div>
            <!-- /POST OPEN -->

            <!-- WIDGET NEWS -->
            <div class="widget-news">
                <!-- SECTION TITLE WRAP -->
                <div class="section-title-wrap blue">
                    <h2 class="section-title medium">Related News</h2>
                <div class="section-title-separator"></div>
            </div>
            <div class="post-preview-showcase grid-2col centered">
                <!-- POST PREVIEW -->
                <div class="post-preview gaming-news">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-v1.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/09.jpg')}}" alt="post-09">
                            </figure>
                            <!-- /POST PREVIEW IMG -->
                        </div>
                    </a>
                    <!-- /POST PREVIEW IMG WRAP -->
        
                    <!-- TAG ORNAMENT -->
                    <a href="news-v1.html" class="tag-ornament">Gaming news</a>
                    <!-- /TAG ORNAMENT -->
        
                    <!-- POST PREVIEW TITLE -->
                    <a href="post-v1.html" class="post-preview-title">New "Rizen" game is gonna be released in summer 2019</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                        <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>December 15th, 2018</p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                </div>
                <!-- /POST PREVIEW -->
                <!-- POST PREVIEW -->
                <div class="post-preview video gaming-news no-hover">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-video.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img2 liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/02.jpg')}}" alt="post-31">
                            </figure>
                            <!-- /POST PREVIEW IMG -->
                
                            <!-- POST PREVIEW OVERLAY -->
                            <div class="post-preview-overlay">
                                <!-- PLAY BUTTON -->
                                <div class="play-button">
                                    <!-- PLAY BUTTON ICON -->
                                    <svg class="play-button-icon">
                                        <use xlink:href="#svg-play"></use>
                                    </svg>
                                    <!-- /PLAY BUTTON ICON -->
                                </div>
                                <!-- /PLAY BUTTON -->
                            </div>
                            <!-- /POST PREVIEW OVERLAY -->
                        </div>
                    </a>
                    <!-- /POST PREVIEW IMG WRAP -->
        
                    <!-- TAG ORNAMENT -->
                    <a href="news-v1.html" class="tag-ornament">Gaming news</a>
                    <!-- /TAG ORNAMENT -->
        
                    <!-- POST PREVIEW TITLE -->
                    <a href="post-v1.html" class="post-preview-title">New "Rizen" game is gonna be released in summer 2019</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                        <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>December 15th, 2018</p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                </div>
                <!-- /POST PREVIEW -->
                
                <!-- POST PREVIEW -->
                <div class="post-preview e-sport">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-v1.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/09.jpg')}}" alt="post-09">
                            </figure>
                            <!-- /POST PREVIEW IMG -->
                        </div>
                    </a>
                    <!-- /POST PREVIEW IMG WRAP -->
        
                    <!-- TAG ORNAMENT -->
                    <a href="news-v1.html" class="tag-ornament">Gaming news</a>
                    <!-- /TAG ORNAMENT -->
        
                    <!-- POST PREVIEW TITLE -->
                    <a href="post-v1.html" class="post-preview-title">New "Rizen" game is gonna be released in summer 2019</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                        <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>December 15th, 2018</p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                </div>
                <!-- /POST PREVIEW -->
                
                <!-- POST PREVIEW -->
                <div class="post-preview game-review">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-v2.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/08.jpg')}}" alt="post-05">
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
                    <a href="news-v1.html" class="tag-ornament">Gaming news</a>
                    <!-- /TAG ORNAMENT -->
        
                    <!-- POST PREVIEW TITLE -->
                    <a href="post-v1.html" class="post-preview-title">New "Rizen" game is gonna be released in summer 2019</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                        <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>December 15th, 2018</p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                </div>
                <!-- /POST PREVIEW -->
    
                <!-- POST PREVIEW -->
                <div class="post-preview geeky-news">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-v4.html">
                    <div class="post-preview-img-wrap">
                        <!-- POST PREVIEW IMG -->
                        <figure class="post-preview-img liquid">
                        <img src="{{ asset('/frontend/assets/img/posts/02.jpg')}}" alt="post-02">
                        </figure>
                        <!-- /POST PREVIEW IMG -->
                    </div>
                    </a>
                    <!-- /POST PREVIEW IMG WRAP -->
        
                    <!-- TAG ORNAMENT -->
                    <a href="news-v4.html" class="tag-ornament">Geeky news</a>
                    <!-- /TAG ORNAMENT -->
        
                    <!-- POST PREVIEW TITLE -->
                    <a href="post-v4.html" class="post-preview-title">Jessica Tam to star in the new "Charlotte" series</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                    <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Vellatrix</a><span class="separator">|</span>December 15th, 2018</p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                </div>
                <!-- /POST PREVIEW -->
    
                <!-- POST PREVIEW -->
                <div class="post-preview movie-news">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-v3.html">
                    <div class="post-preview-img-wrap">
                        <!-- POST PREVIEW IMG -->
                        <figure class="post-preview-img liquid">
                        <img src="{{ asset('/frontend/assets/img/posts/12.jpg')}}" alt="post-12">
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
                            <svg class="rating-ornament-icon empty">
                            <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                        <!-- /RATING ORNAMENT ITEM -->
                        
                            <!-- RATING ORNAMENT ITEM -->
                        <div class="rating-ornament-item">
                            <!-- RATING ORNAMENT ICON -->
                            <svg class="rating-ornament-icon empty">
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
                    <a href="news-v3.html" class="tag-ornament">Movie news</a>
                    <!-- /TAG ORNAMENT -->
        
                    <!-- POST PREVIEW TITLE -->
                    <a href="post-v3.html" class="post-preview-title">We reviewed the "Guardians of the Universe" movie</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                    <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Faye V.</a><span class="separator">|</span>December 15th, 2018</p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                </div>
                <!-- /POST PREVIEW -->
                </div>
                <!-- /POST PREVIEW SHOWCASE -->
            </div>
            <!-- /WIDGET NEWS -->
        </div>
        <!-- /LAYOUT BODY -->

        @include('front.layouts.sidebar-right')
    </div>
    <!-- /LAYOUT CONTENT 2 -->
@endsection