@extends('layouts.base')

@section('content')
    <!-- LAYOUT ITEM -->
    <div class="layout-item gutter-big">
        <!-- POST OPEN -->
        <div class="post-open game-review">
            <!-- POST OPEN IMG WRAP -->
            <div class="post-open-img-wrap">
                <!-- POST OPEN IMG -->
                <figure class="post-open-img2 liquid">
                    <img src="{{ asset('/frontend/assets/img/posts/02.jpg')}}" alt="post-12">
                </figure>
                <!-- /POST OPEN IMG -->
            </div>
            <!-- /POST OPEN IMG WRAP -->
        </div>
        <!-- /POST OPEN -->
    </div>
    <!-- /LAYOUT ITEM -->
    <!-- LAYOUT CONTENT 2 -->
    <div class="layout-content-2 layout-item-1-2-1 centered">
        <!-- LAYOUT SIDEBAR 1 -->
        <div class="layout-sidebar1 layout-item">
            <!-- POST OPEN AUTHOR WRAP -->
            <div class="post-open-author-wrap">
                <!-- USER AVATAR -->
                <a href="search-results.html">
                    <figure class="user-avatar tiny liquid">
                        <img src="{{ asset('/frontend/assets/img/users/05.jpg')}}" alt="user-04">
                    </figure>
                </a>
                <!-- /USER AVATAR -->
            
                <!-- POST OPEN AUTHOR INFO -->
                <div class="post-open-author-info">
                    <!-- POST OPEN AUTHOR -->
                    <p class="post-open-author">By <a href="search-results.html" class="post-open-author-name">Vellatrix</a></p>
                    <!-- /POST OPEN AUTHOR -->
            
                    <!-- POST OPEN TIMESTAMP -->
                    <p class="post-open-timestamp">December 15th, 2018</p>
                    <!-- /POST OPEN TIMESTAMP -->
                </div>
                <!-- /POST OPEN AUTHOR INFO -->
            </div>
            <!-- /POST OPEN AUTHOR WRAP -->
            
            <!-- BUTTON SOCIAL LIST -->
            <div class="button-social-list">
                <!-- BUTTON SOCIAL -->
                <a href="#" class="button-social fb">
                    <!-- FACEBOOK ICON -->
                    <svg class="facebook-icon big">
                        <use xlink:href="#svg-facebook"></use>
                    </svg>
                    <!-- /FACEBOOK ICON -->
                    Share on Facebook
                </a>
                <!-- /BUTTON SOCIAL -->
            
                <!-- BUTTON SOCIAL -->
                <a href="#" class="button-social twt">
                    <!-- TWITTER ICON -->
                    <svg class="twitter-icon big">
                        <use xlink:href="#svg-twitter"></use>
                    </svg>
                    <!-- /TWITTER ICON -->
                    Share on Twitter
                </a>
                <!-- /BUTTON SOCIAL -->
            
                <!-- BUTTON SOCIAL -->
                <a href="#" class="button-social gplus">
                    <!-- GPLUS ICON -->
                    <svg class="gplus-icon big">
                        <use xlink:href="#svg-gplus"></use>
                    </svg>
                    <!-- /GPLUS ICON -->
                    Share on Google +
                </a>
                <!-- /BUTTON SOCIAL -->
            </div>
            <!-- /BUTTON SOCIAL LIST -->

            <!-- WIDGET SIDEBAR -->
            <div class="widget-sidebar">
                <!-- SECTION TITLE WRAP -->
                <div class="section-title-wrap blue">
                    <h2 class="section-title medium">Related News</h2>
                    <div class="section-title-separator"></div>
                </div>
                <!-- /SECTION TITLE WRAP -->
            
                <!-- POST PREVIEW SHOWCASE -->
                <div class="post-preview-showcase grid-1col centered gutter-medium">
                    <!-- POST PREVIEW -->
                    <div class="post-preview tiny padded gaming-news">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="post-v1.html">
                            <div class="post-preview-img-wrap">
                                <!-- POST PREVIEW IMG -->
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/01.jpg')}}" alt="post-01">
                                </figure>
                                <!-- /POST PREVIEW IMG -->
                            </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
            
                        <!-- BUBBLE ORNAMENT -->
                        <div class="bubble-ornament small black no-link">
                            <p class="bubble-ornament-info">01</p>
                        </div>
                        <!-- /BUBBLE ORNAMENT -->
            
                        <!-- POST PREVIEW TITLE -->
                        <a href="post-v1.html" class="post-preview-title">The Clash of Dragons is breaking record sales
                            in USA and
                            Japan</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html"
                                    class="post-author">Dexter</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
            
                    <!-- POST PREVIEW -->
                    <div class="post-preview tiny padded geeky-news">
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
            
                        <!-- BUBBLE ORNAMENT -->
                        <div class="bubble-ornament small black no-link">
                            <p class="bubble-ornament-info">02</p>
                        </div>
                        <!-- /BUBBLE ORNAMENT -->
            
                        <!-- POST PREVIEW TITLE -->
                        <a href="post-v4.html" class="post-preview-title">Jessica Tam to star in the new "Charlotte"
                            series</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html"
                                    class="post-author">Vellatrix</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
            
                    <!-- POST PREVIEW -->
                    <div class="post-preview tiny padded e-sport">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="esports-post.html">
                            <div class="post-preview-img-wrap">
                                <!-- POST PREVIEW IMG -->
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/41.jpg')}}" alt="post-41">
                                </figure>
                                <!-- /POST PREVIEW IMG -->
                            </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
            
                        <!-- BUBBLE ORNAMENT -->
                        <div class="bubble-ornament small black no-link">
                            <p class="bubble-ornament-info">03</p>
                        </div>
                        <!-- /BUBBLE ORNAMENT -->
            
                        <!-- POST PREVIEW TITLE -->
                        <a href="esports-post.html" class="post-preview-title">The Xenowatch semifinals were truly
                            incredible</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Faye
                                    V.</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
            
                    <!-- POST PREVIEW -->
                    <div class="post-preview tiny padded game-review">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="post-v2.html">
                            <div class="post-preview-img-wrap">
                                <!-- POST PREVIEW IMG -->
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/25.jpg')}}" alt="post-25">
                                </figure>
                                <!-- /POST PREVIEW IMG -->
            
                                <!-- REVIEW RATING -->
                                <div class="review-rating">
                                    <div id="sidebar-rate-6" class="arc tiny"></div>
                                </div>
                                <!-- /REVIEW RATING -->
                            </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
            
                        <!-- BUBBLE ORNAMENT -->
                        <div class="bubble-ornament small black no-link">
                            <p class="bubble-ornament-info">04</p>
                        </div>
                        <!-- /BUBBLE ORNAMENT -->
            
                        <!-- POST PREVIEW TITLE -->
                        <a href="post-v2.html" class="post-preview-title">"Legend of Kenshii II" is a bit green for
                            now</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html"
                                    class="post-author">Vellatrix</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
            
                    <!-- POST PREVIEW -->
                    <div class="post-preview tiny padded movie-news">
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
            
                        <!-- BUBBLE ORNAMENT -->
                        <div class="bubble-ornament small black no-link">
                            <p class="bubble-ornament-info">05</p>
                        </div>
                        <!-- /BUBBLE ORNAMENT -->
            
                        <!-- POST PREVIEW TITLE -->
                        <a href="post-v3.html" class="post-preview-title">We reviewed the "Guardians of the Universe"
                            movie</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Faye
                                    V.</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
                </div>
                <!-- /POST PREVIEW SHOWCASE -->
            </div>
            <!-- /WIDGET SIDEBAR -->
            
            <!-- WIDGET SIDEBAR -->
            <div class="widget-sidebar">
                <!-- SECTION TITLE WRAP -->
                <div class="section-title-wrap blue">
                    <h2 class="section-title medium">Top 5 News</h2>
                    <div class="section-title-separator"></div>
                </div>
                <!-- /SECTION TITLE WRAP -->
            
                <!-- POST PREVIEW SHOWCASE -->
                <div class="post-preview-showcase grid-1col centered gutter-medium">
                    <!-- POST PREVIEW -->
                    <div class="post-preview tiny padded gaming-news">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="post-v1.html">
                            <div class="post-preview-img-wrap">
                                <!-- POST PREVIEW IMG -->
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/01.jpg')}}" alt="post-01">
                                </figure>
                                <!-- /POST PREVIEW IMG -->
                            </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
            
                        <!-- BUBBLE ORNAMENT -->
                        <div class="bubble-ornament small black no-link">
                            <p class="bubble-ornament-info">01</p>
                        </div>
                        <!-- /BUBBLE ORNAMENT -->
            
                        <!-- POST PREVIEW TITLE -->
                        <a href="post-v1.html" class="post-preview-title">The Clash of Dragons is breaking record sales
                            in USA and
                            Japan</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html"
                                    class="post-author">Dexter</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
            
                    <!-- POST PREVIEW -->
                    <div class="post-preview tiny padded geeky-news">
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
            
                        <!-- BUBBLE ORNAMENT -->
                        <div class="bubble-ornament small black no-link">
                            <p class="bubble-ornament-info">02</p>
                        </div>
                        <!-- /BUBBLE ORNAMENT -->
            
                        <!-- POST PREVIEW TITLE -->
                        <a href="post-v4.html" class="post-preview-title">Jessica Tam to star in the new "Charlotte"
                            series</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html"
                                    class="post-author">Vellatrix</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
            
                    <!-- POST PREVIEW -->
                    <div class="post-preview tiny padded e-sport">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="esports-post.html">
                            <div class="post-preview-img-wrap">
                                <!-- POST PREVIEW IMG -->
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/41.jpg')}}" alt="post-41">
                                </figure>
                                <!-- /POST PREVIEW IMG -->
                            </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
            
                        <!-- BUBBLE ORNAMENT -->
                        <div class="bubble-ornament small black no-link">
                            <p class="bubble-ornament-info">03</p>
                        </div>
                        <!-- /BUBBLE ORNAMENT -->
            
                        <!-- POST PREVIEW TITLE -->
                        <a href="esports-post.html" class="post-preview-title">The Xenowatch semifinals were truly
                            incredible</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Faye
                                    V.</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
            
                    <!-- POST PREVIEW -->
                    <div class="post-preview tiny padded game-review">
                        <!-- POST PREVIEW IMG WRAP -->
                        <a href="post-v2.html">
                            <div class="post-preview-img-wrap">
                                <!-- POST PREVIEW IMG -->
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/25.jpg')}}" alt="post-25">
                                </figure>
                                <!-- /POST PREVIEW IMG -->
            
                                <!-- REVIEW RATING -->
                                <div class="review-rating">
                                    <div id="sidebar-rate-6" class="arc tiny"></div>
                                </div>
                                <!-- /REVIEW RATING -->
                            </div>
                        </a>
                        <!-- /POST PREVIEW IMG WRAP -->
            
                        <!-- BUBBLE ORNAMENT -->
                        <div class="bubble-ornament small black no-link">
                            <p class="bubble-ornament-info">04</p>
                        </div>
                        <!-- /BUBBLE ORNAMENT -->
            
                        <!-- POST PREVIEW TITLE -->
                        <a href="post-v2.html" class="post-preview-title">"Legend of Kenshii II" is a bit green for
                            now</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html"
                                    class="post-author">Vellatrix</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
            
                    <!-- POST PREVIEW -->
                    <div class="post-preview tiny padded movie-news">
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
            
                        <!-- BUBBLE ORNAMENT -->
                        <div class="bubble-ornament small black no-link">
                            <p class="bubble-ornament-info">05</p>
                        </div>
                        <!-- /BUBBLE ORNAMENT -->
            
                        <!-- POST PREVIEW TITLE -->
                        <a href="post-v3.html" class="post-preview-title">We reviewed the "Guardians of the Universe"
                            movie</a>
                        <!-- POST AUTHOR INFO -->
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Faye
                                    V.</a><span class="separator">|</span>Dec 15th, 2018</p>
                        </div>
                        <!-- /POST AUTHOR INFO -->
                    </div>
                    <!-- /POST PREVIEW -->
                </div>
                <!-- /POST PREVIEW SHOWCASE -->
            </div>
            <!-- /WIDGET SIDEBAR -->
        </div>
        <!-- /LAYOUT SIDEBAR 1 -->
    
        <!-- LAYOUT BODY -->
        <div class="layout-body layout-item">
            <!-- POST OPEN -->
            <div class="post-open gaming-news">
                <!-- POST OPEN CONTENT -->
                <div class="post-open-content">
                    <!-- POST OPEN BODY  -->
                    <div class="post-open-body">
                        <a class="tag-ornament" href="#">Berita Coba Lebih Panjang</a>

                        <p class="post-open-title">Game 1: Penjelasan - Lebih Detail</p>

                        <div class="post-open-card-game">
                            <img src="{{ asset('/frontend/assets/img/posts/07.jpg')}}" alt="">
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
                        <p class="post-open-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                            in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <!-- /POST OPEN IMG -->
                    </div>
                    <!-- /POST OPEN BODY -->
                </div>
                <!-- /POST OPEN CONTENT -->
            
                <!-- POST OPEN TAGS -->
                <div class="post-open-tags">
                    <!-- TAG LIST -->
                    <div class="tag-list">
                        <!-- TAG ITEM -->
                        <a href="search-results.html" class="tag-item">Gaming</a>
                        <!-- /TAG ITEM -->
            
                        <!-- TAG ITEM -->
                        <a href="search-results.html" class="tag-item">Video Reviews</a>
                        <!-- /TAG ITEM -->
            
                        <!-- TAG ITEM -->
                        <a href="search-results.html" class="tag-item">Previews</a>
                        <!-- /TAG ITEM -->
            
                        <!-- TAG ITEM -->
                        <a href="search-results.html" class="tag-item">Movie Reviews</a>
                        <!-- /TAG ITEM -->
            
                        <!-- TAG ITEM -->
                        <a href="search-results.html" class="tag-item">Movie News</a>
                        <!-- /TAG ITEM -->
            
                        <!-- TAG ITEM -->
                        <a href="search-results.html" class="tag-item">Critic</a>
                        <!-- /TAG ITEM -->
            
                        <!-- TAG ITEM -->
                        <a href="search-results.html" class="tag-item">Ratings</a>
                        <!-- /TAG ITEM -->
            
                        <!-- TAG ITEM -->
                        <a href="search-results.html" class="tag-item">Funtendo</a>
                        <!-- /TAG ITEM -->
                    </div>
                    <!-- /TAG LIST -->
                </div>
                <!-- /POST OPEN TAGS -->
            </div>
            <!-- /POST OPEN -->
        </div>
        <!-- /LAYOUT BODY -->
    
        <!-- LAYOUT SIDEBAR 2 -->
        <div class="layout-sidebar2 layout-item">
            <!-- WIDGET SIDEBAR-->
            <div class="widget-sidebar">
                <div class="card-profil-game">
                    <div class="section-title-wrap">
                        <div class="section-title medium">Profil Game</div>
                    </div>
                    <img src="{{ asset('/frontend/assets/img/posts/02_tall.jpg')}}" alt="">
                    <ul class="profil-game-text">
                        <li class="text-judul">Judul :</li>
                        <li class="text-isi">Game 1</li>
                        <li class="text-judul">Publisher :</li>
                        <li class="text-isi">Publisher 1</li>
                        <li class="text-judul">Pengembang :</li>
                        <li class="text-isi">Developer</li>
                        <li class="text-judul">Genre :</li>
                        <li class="text-isi">Game</li>
                        <li class="text-judul">Tanggal Release :</li>
                        <li class="text-isi">12 Bulan 1234 (UK), 12 Bulan 1234 (UK)</li>
                        <li class="text-judul">Official Website :</li>
                        <li class="text-isi">asdfghjkl.com</li>
                        <li class="text-judul">Link :</li>
                        <a style="width: 100%; margin-top: 5px;" href="#" class="button disable">Beli
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
            <!-- /WIDGET SIDEBAR-->

            <!-- WIDGET SIDEBAR-->
            <div class="widget-sidebar">
                <div class="card-langganan">
                    <div class="section-title-wrap">
                        <div class="section-title medium">Langganan Artikel</div>
                    </div>
                    <p style="color: #eeffee; margin-bottom: 10px">Temukan Tips dan Berita Menarik Setiap Harinya.
                        GRATIS!</p>
                    <a style="width: 100%;" href="#" class="button disable">Langganan
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
                </div>
            </div>
            <!-- /WIDGET SIDEBAR-->

            <!-- WIDGET SIDEBAR -->
            <div class="widget-sidebar">
                <!-- SECTION TITLE WRAP -->
                <div class="section-title-wrap blue">
                    <h2 class="section-title medium">Pixel Tags</h2>
                    <div class="section-title-separator"></div>
                </div>
                <!-- /SECTION TITLE WRAP -->
            
                <!-- TAG LIST -->
                <div class="tag-list">
                    <!-- TAG ITEM -->
                    <a href="search-results.html" class="tag-item">Gaming</a>
                    <!-- /TAG ITEM -->
            
                    <!-- TAG ITEM -->
                    <a href="search-results.html" class="tag-item">Video Reviews</a>
                    <!-- /TAG ITEM -->
            
                    <!-- TAG ITEM -->
                    <a href="search-results.html" class="tag-item">Previews</a>
                    <!-- /TAG ITEM -->
            
                    <!-- TAG ITEM -->
                    <a href="search-results.html" class="tag-item">Movie Reviews</a>
                    <!-- /TAG ITEM -->
            
                    <!-- TAG ITEM -->
                    <a href="search-results.html" class="tag-item">Movie News</a>
                    <!-- /TAG ITEM -->
            
                    <!-- TAG ITEM -->
                    <a href="search-results.html" class="tag-item">Critic</a>
                    <!-- /TAG ITEM -->
            
                    <!-- TAG ITEM -->
                    <a href="search-results.html" class="tag-item">Ratings</a>
                    <!-- /TAG ITEM -->
            
                    <!-- TAG ITEM -->
                    <a href="search-results.html" class="tag-item">Funtendo</a>
                    <!-- /TAG ITEM -->
                </div>
                <!-- /TAG LIST -->
            </div>
            <!-- /WIDGET SIDEBAR -->
            
            <!-- WIDGET SIDEBAR -->
            <div class="widget-sidebar">
                <!-- PROMO AD -->
                <div class="promo-ad">
                    <a href="#">
                        <img class="promo-ad-img" src="{{ asset('/frontend/assets/img/banners/promo-ad-1.jpg')}}" alt="promo-ad-1">
                    </a>
                </div>
                <!-- /PROMO AD -->
            </div>
            <!-- /WIDGET SIDEBAR -->
        </div>
        <!-- /LAYOUT SIDEBAR 2 -->
    </div>
    <!-- /LAYOUT CONTENT 2 -->
    <!-- POST COMMENT FORM WRAP -->
    <div class="layout-content layout-item-3-1">
        <div style="margin-left: 100px;" class="post-comment-form-wrap">
            <!-- SECTION TITLE WRAP -->
            <div class="section-title-wrap blue">
                <h2 class="section-title medium">Write a comment</h2>
                <div class="section-title-separator"></div>
            </div>
            <!-- /SECTION TITLE WRAP -->
        
            <!-- POST COMMENT FORM -->
            <form class="post-comment-form">
                <!-- FORM ROW -->
                <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item half blue">
                        <label for="pcf_name" class="rl-label">Your Name</label>
                        <input type="text" id="pcf_name" name="pcf_name" placeholder="Enter your first name here...">
                    </div>
                    <!-- /FORM ITEM -->
        
                    <!-- FORM ITEM -->
                    <div class="form-item half blue">
                        <label for="pcf_email" class="rl-label">Your Email</label>
                        <input type="text" id="pcf_email" name="pcf_email" placeholder="Enter your email here...">
                    </div>
                    <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->
        
                <!-- FORM ROW -->
                <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item blue">
                        <label for="pcf_comment" class="rl-label">Your Comment</label>
                        <textarea name="pcf_comment" id="pcf_comment" class="violet"
                            placeholder="Write you comment here..."></textarea>
                    </div>
                    <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->
        
                <!-- SUBMIT BUTTON WRAP -->
                <div class="submit-button-wrap right">
                    <!-- SUBMIT BUTTON -->
                    <button class="submit-button button blue">
                        Post your comment
                        <!-- BUTTON ORNAMENT -->
                        <span class="button-ornament">
                            <!-- ARROW ICON -->
                            <svg class="arrow-icon medium">
                                <use xlink:href="#svg-arrow-medium"></use>
                            </svg>
                            <!-- /ARROW ICON -->
        
                            <!-- CROSS ICON -->
                            <svg class="cross-icon small">
                                <use xlink:href="#svg-cross-small"></use>
                            </svg>
                            <!-- /CROSS ICON -->
                        </span>
                        <!-- /BUTTON ORNAMENT -->
                    </button>
                    <!-- /SUBMIT BUTTON -->
                </div>
                <!-- /SUBMIT BUTTON WRAP -->
            </form>
            <!-- /POST COMMENT FORM -->
        </div>
    </div>
    <!-- /POST COMMENT FORM WRAP -->
@endsection