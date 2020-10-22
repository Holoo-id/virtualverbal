@extends('front.layouts.base')

@section('content')
    <!-- LAYOUT CONTENT 1 -->
    <div class="layout-content-1 layout-item-3-1 search-pad grid-limit">
        <!-- LAYOUT BODY -->
        <div class="layout-body layout-item centered">
            <!-- SECTION TITLE WRAP -->
            <div class="section-title-wrap blue">
                <h2 class="section-title medium">Search Results</h2>
                <div class="section-title-separator"></div>
            </div>
            <!-- /SECTION TITLE WRAP -->

            <!-- FILTER HEADING -->
            <div class="filter-heading">
                <!-- FILTER HEADING TEXT -->
                <p class="filter-heading-text"><span class="highlight">12</span> Results found for: "<span class="highlight">Esports
                        Japan game team</span>"</p>
                <!-- /FILTER HEADING TEXT -->
            </div>
            <!-- /FILTER HEADING -->
            <!-- FILTERS ROW -->
            <div class="filters-row">
                <!-- DROPDOWN SIMPLE WRAP -->
                <div class="dropdown-simple-wrap">
                    <!-- DP CURRENT OPTION -->
                    <div id="filter-01-dropdown-trigger" class="dp-current-option">
                        <!-- DP CURRENT OPTION VALUE -->
                        <div id="filter-01-dropdown-option-value" class="dp-current-option-value">
                            <p class="dp-option-text">All Categories</p>
                        </div>
                        <!-- /DP CURRENT OPTION VALUE -->
            
                        <!-- ARROW ICON -->
                        <svg class="arrow-icon">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /ARROW ICON -->
                    </div>
                    <!-- /DP CURRENT OPTION -->
            
                    <!-- DP OPTIONS -->
                    <div id="filter-01-dropdown" class="dp-options small">
                        <!-- DP OPTION -->
                        <div class="dp-option">
                            <p class="dp-option-text">All Categories</p>
                        </div>
                        <!-- /DP OPTION -->
            
                        <!-- DP OPTION -->
                        <div class="dp-option">
                            <p class="dp-option-text">News</p>
                        </div>
                        <!-- /DP OPTION -->
            
                        <!-- DP OPTION -->
                        <div class="dp-option">
                            <p class="dp-option-text">Reviews</p>
                        </div>
                        <!-- /DP OPTION -->
                    </div>
                    <!-- /DP OPTIONS -->
                </div>
                <!-- /DROPDOWN SIMPLE WRAP -->
            
                <!-- DROPDOWN SIMPLE WRAP -->
                <div class="dropdown-simple-wrap">
                    <!-- DP CURRENT OPTION -->
                    <div id="filter-02-dropdown-trigger" class="dp-current-option">
                        <!-- DP CURRENT OPTION VALUE -->
                        <div id="filter-02-dropdown-option-value" class="dp-current-option-value">
                            <p class="dp-option-text">All Authors</p>
                        </div>
                        <!-- /DP CURRENT OPTION VALUE -->
            
                        <!-- ARROW ICON -->
                        <svg class="arrow-icon">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /ARROW ICON -->
                    </div>
                    <!-- /DP CURRENT OPTION -->
            
                    <!-- DP OPTIONS -->
                    <div id="filter-02-dropdown" class="dp-options small">
                        <!-- DP OPTION -->
                        <div class="dp-option">
                            <p class="dp-option-text">All Authors</p>
                        </div>
                        <!-- /DP OPTION -->
            
                        <!-- DP OPTION -->
                        <div class="dp-option">
                            <p class="dp-option-text">Vellatrix</p>
                        </div>
                        <!-- /DP OPTION -->
            
                        <!-- DP OPTION -->
                        <div class="dp-option">
                            <p class="dp-option-text">Dexter</p>
                        </div>
                        <!-- /DP OPTION -->
                    </div>
                    <!-- /DP OPTIONS -->
                </div>
                <!-- /DROPDOWN SIMPLE WRAP -->
            
                <!-- DROPDOWN SIMPLE WRAP -->
                <div class="dropdown-simple-wrap">
                    <!-- DP CURRENT OPTION -->
                    <div id="filter-03-dropdown-trigger" class="dp-current-option">
                        <!-- DP CURRENT OPTION VALUE -->
                        <div id="filter-03-dropdown-option-value" class="dp-current-option-value">
                            <p class="dp-option-text">Order By Date</p>
                        </div>
                        <!-- /DP CURRENT OPTION VALUE -->
            
                        <!-- ARROW ICON -->
                        <svg class="arrow-icon">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /ARROW ICON -->
                    </div>
                    <!-- /DP CURRENT OPTION -->
            
                    <!-- DP OPTIONS -->
                    <div id="filter-03-dropdown" class="dp-options small">
                        <!-- DP OPTION -->
                        <div class="dp-option">
                            <p class="dp-option-text">Order By Date</p>
                        </div>
                        <!-- /DP OPTION -->
            
                        <!-- DP OPTION -->
                        <div class="dp-option">
                            <p class="dp-option-text">Order By Popularity</p>
                        </div>
                        <!-- /DP OPTION -->
                    </div>
                    <!-- /DP OPTIONS -->
                </div>
                <!-- /DROPDOWN SIMPLE WRAP -->
            
                <!-- DROPDOWN SIMPLE WRAP -->
                <div class="dropdown-simple-wrap">
                    <!-- DP CURRENT OPTION -->
                    <div id="filter-04-dropdown-trigger" class="dp-current-option">
                        <!-- DP CURRENT OPTION VALUE -->
                        <div id="filter-04-dropdown-option-value" class="dp-current-option-value">
                            <p class="dp-option-text">Descending</p>
                        </div>
                        <!-- /DP CURRENT OPTION VALUE -->
            
                        <!-- ARROW ICON -->
                        <svg class="arrow-icon">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /ARROW ICON -->
                    </div>
                    <!-- /DP CURRENT OPTION -->
            
                    <!-- DP OPTIONS -->
                    <div id="filter-04-dropdown" class="dp-options small">
                        <!-- DP OPTION -->
                        <div class="dp-option">
                            <p class="dp-option-text">Descending</p>
                        </div>
                        <!-- /DP OPTION -->
            
                        <!-- DP OPTION -->
                        <div class="dp-option">
                            <p class="dp-option-text">Ascending</p>
                        </div>
                        <!-- /DP OPTION -->
                    </div>
                    <!-- /DP OPTIONS -->
                </div>
                <!-- /DROPDOWN SIMPLE WRAP -->
            </div>
            <!-- /FILTERS ROW -->

            <!-- LAYOUT ITEM -->
            <div class="layout-item">
                <!-- POST PREVIEW -->
                <div class="post-preview landscape gaming-news">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-v1.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/01.jpg')}}" alt="post-01">
                            </figure>
                            <!-- POST PREVIEW IMG -->
                        </div>
                    </a>
                    <!-- /POST PREVIEW IMG WRAP -->

                    <!-- TAG ORNAMENT -->
                    <a href="news-v1.html" class="tag-ornament">Gaming News</a>
                    <!-- /TAG ORNAMENT -->

                    <!-- POST PREVIEW TITLE -->
                    <a href="post-v1.html" class="post-preview-title">The Clash of Dragons is breaking record sales in
                        Japan</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                        <!-- USER AVATAR -->
                        <a href="search-results.html">
                            <figure class="user-avatar tiny liquid">
                                <img src="{{ asset('/frontend/assets/img/users/01.jpg')}}" alt="user-01">
                            </figure>
                        </a>
                        <!-- /USER AVATAR -->
                        <p class="post-author-info small light">By <a href="search-results.html"
                                class="post-author">Dexter</a><span class="separator">|</span>December 15th, 2018<span
                                class="separator">|</span><a href="post-v1.html#op-comments"
                                class="post-comment-count">174
                                Comments</a></p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                    <!-- POST PREVIEW TEXT -->
                    <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod
                        tempor incididunt dutor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation
                        loso laboris tempora aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore...</p>
                </div>
                <!-- /POST PREVIEW -->
                <!-- POST PREVIEW -->
                <div class="post-preview landscape video gaming-news no-hover">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-video.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
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
                
                    <!-- TAG LIST -->
                    <div class="tag-list">
                        <a href="browse-videos.html" class="tag-ornament video">Video</a>
                        <a href="news-v1.html" class="tag-ornament">Gaming News</a>
                    </div>
                    <!-- /TAG LIST -->
                
                    <!-- POST PREVIEW TITLE -->
                    <a href="post-video.html" class="post-preview-title">Galaxy Aventure RX peek at the new weapons</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                        <!-- USER AVATAR -->
                        <a href="search-results.html">
                            <figure class="user-avatar tiny liquid">
                                <img src="{{ asset('/frontend/assets/img/users/02.jpg')}}" alt="user-01">
                            </figure>
                        </a>
                        <!-- /USER AVATAR -->
                        <p class="post-author-info small light">By <a href="search-results.html"
                                class="post-author">Dexter</a><span class="separator">|</span>December 15th, 2018<span
                                class="separator">|</span><a href="post-v1.html#op-comments"
                                class="post-comment-count">174
                                Comments</a></p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                    <!-- POST PREVIEW TEXT -->
                    <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur bere adipisicing elit, sed do eiusmod tempor...
                    </p>
                </div>
                <!-- /POST PREVIEW -->

                <!-- POST PREVIEW -->
                <div class="post-preview landscape esports-news">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-v1.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/03.jpg')}}" alt="post-01">
                            </figure>
                            <!-- POST PREVIEW IMG -->
                        </div>
                    </a>
                    <!-- /POST PREVIEW IMG WRAP -->
                
                    <!-- TAG ORNAMENT -->
                    <a href="news-v1.html" class="tag-ornament">Esports News</a>
                    <!-- /TAG ORNAMENT -->
                
                    <!-- POST PREVIEW TITLE -->
                    <a href="post-v1.html" class="post-preview-title">The Clash of Dragons is breaking record sales in
                        Japan</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                        <!-- USER AVATAR -->
                        <a href="search-results.html">
                            <figure class="user-avatar tiny liquid">
                                <img src="{{ asset('/frontend/assets/img/users/03.jpg')}}" alt="user-01">
                            </figure>
                        </a>
                        <!-- /USER AVATAR -->
                        <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Dexter</a><span
                                class="separator">|</span>December 15th, 2018<span class="separator">|</span><a
                                href="post-v1.html#op-comments" class="post-comment-count">174
                                Comments</a></p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                    <!-- POST PREVIEW TEXT -->
                    <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod
                        tempor incididunt dutor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation
                        loso laboris tempora aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore...</p>
                </div>
                <!-- /POST PREVIEW -->
                <!-- POST PREVIEW -->
                <div class="post-preview landscape video esports-news no-hover">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-video.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/05.jpg')}}" alt="post-31">
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
                
                    <!-- TAG LIST -->
                    <div class="tag-list">
                        <a href="browse-videos.html" class="tag-ornament video">Video</a>
                        <a href="news-v1.html" class="tag-ornament">Esports News</a>
                    </div>
                    <!-- /TAG LIST -->
                
                    <!-- POST PREVIEW TITLE -->
                    <a href="post-video.html" class="post-preview-title">Galaxy Aventure RX peek at the new weapons</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                        <!-- USER AVATAR -->
                        <a href="search-results.html">
                            <figure class="user-avatar tiny liquid">
                                <img src="{{ asset('/frontend/assets/img/users/04.jpg')}}" alt="user-01">
                            </figure>
                        </a>
                        <!-- /USER AVATAR -->
                        <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Dexter</a><span
                                class="separator">|</span>December 15th, 2018<span class="separator">|</span><a
                                href="post-v1.html#op-comments" class="post-comment-count">174
                                Comments</a></p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                    <!-- POST PREVIEW TEXT -->
                    <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur bere adipisicing elit, sed do eiusmod tempor...
                    </p>
                </div>
                <!-- /POST PREVIEW -->

                <!-- POST PREVIEW -->
                <div class="post-preview landscape e-sport">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="esports-post.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/06.jpg')}}" alt="post-45">
                            </figure>
                            <!-- POST PREVIEW IMG -->
                        </div>
                    </a>
                    <!-- /POST PREVIEW IMG WRAP -->

                    <!-- TAG ORNAMENT -->
                    <a href="esports-news.html" class="tag-ornament">Esports News</a>
                    <!-- /TAG ORNAMENT -->

                    <!-- POST PREVIEW TITLE -->
                    <a href="esports-post.html" class="post-preview-title">Thomas Howlett joins the Wolves Xenowatch
                        esports
                        team</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                        <!-- USER AVATAR -->
                        <a href="search-results.html">
                            <figure class="user-avatar tiny liquid">
                                <img src="{{ asset('/frontend/assets/img/users/05.jpg')}}" alt="user-08">
                            </figure>
                        </a>
                        <!-- /USER AVATAR -->
                        <p class="post-author-info small light">By <a href="search-results.html"
                                class="post-author">Morgana</a><span class="separator">|</span>December 15th, 2018<span
                                class="separator">|</span><a href="esports-post.html#op-comments"
                                class="post-comment-count">342 Comments</a></p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                    <!-- POST PREVIEW TEXT -->
                    <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod
                        tempor incididunt dutor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation
                        loso laboris tempora aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore...</p>
                </div>
                <!-- /POST PREVIEW -->
                <!-- POST PREVIEW -->
                <div class="post-preview landscape video e-sport no-hover">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-video.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/07.jpg')}}" alt="post-31">
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
                
                    <!-- TAG LIST -->
                    <div class="tag-list">
                        <a href="browse-videos.html" class="tag-ornament video">Video</a>
                        <a href="news-v1.html" class="tag-ornament">Esports News</a>
                    </div>
                    <!-- /TAG LIST -->
                
                    <!-- POST PREVIEW TITLE -->
                    <a href="post-video.html" class="post-preview-title">Galaxy Aventure RX peek at the new weapons</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                        <!-- USER AVATAR -->
                        <a href="search-results.html">
                            <figure class="user-avatar tiny liquid">
                                <img src="{{ asset('/frontend/assets/img/users/06.jpg')}}" alt="user-01">
                            </figure>
                        </a>
                        <!-- /USER AVATAR -->
                        <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Dexter</a><span
                                class="separator">|</span>December 15th, 2018<span class="separator">|</span><a
                                href="post-v1.html#op-comments" class="post-comment-count">174
                                Comments</a></p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                    <!-- POST PREVIEW TEXT -->
                    <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur bere adipisicing elit, sed do eiusmod tempor...
                    </p>
                </div>
                <!-- /POST PREVIEW -->

                <!-- POST PREVIEW -->
                <div class="post-preview landscape game-review">
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
                    <a href="news-v2.html" class="tag-ornament">Game Reviews</a>
                    <!-- /TAG ORNAMENT -->

                    <!-- POST PREVIEW TITLE -->
                    <a href="post-v2.html" class="post-preview-title">We reviewed the new and exciting fantasy game
                        "Olympus"</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                        <!-- USER AVATAR -->
                        <a href="search-results.html">
                            <figure class="user-avatar tiny liquid">
                                <img src="{{ asset('/frontend/assets/img/users/07.jpg')}}" alt="user-08">
                            </figure>
                        </a>
                        <!-- /USER AVATAR -->
                        <p class="post-author-info small light">By <a href="search-results.html"
                                class="post-author">Morgana</a><span class="separator">|</span>December 15th, 2018<span
                                class="separator">|</span><a href="post-v2.html#op-comments"
                                class="post-comment-count">258
                                Comments</a></p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                    <!-- POST PREVIEW TEXT -->
                    <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod
                        tempor incididunt dutor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation
                        loso laboris tempora aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore...</p>
                </div>
                <!-- /POST PREVIEW -->
                <!-- POST PREVIEW -->
                <div class="post-preview landscape video game-review no-hover">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-video.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/09.jpg')}}" alt="post-31">
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
                
                    <!-- TAG LIST -->
                    <div class="tag-list">
                        <a href="browse-videos.html" class="tag-ornament video">Video</a>
                        <a href="news-v1.html" class="tag-ornament">Game Reviews</a>
                    </div>
                    <!-- /TAG LIST -->
                
                    <!-- POST PREVIEW TITLE -->
                    <a href="post-video.html" class="post-preview-title">Galaxy Aventure RX peek at the new weapons</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                        <!-- USER AVATAR -->
                        <a href="search-results.html">
                            <figure class="user-avatar tiny liquid">
                                <img src="{{ asset('/frontend/assets/img/users/08.jpg')}}" alt="user-01">
                            </figure>
                        </a>
                        <!-- /USER AVATAR -->
                        <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Dexter</a><span
                                class="separator">|</span>December 15th, 2018<span class="separator">|</span><a
                                href="post-v1.html#op-comments" class="post-comment-count">174
                                Comments</a></p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                    <!-- POST PREVIEW TEXT -->
                    <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur bere adipisicing elit, sed do eiusmod tempor...
                    </p>
                </div>
                <!-- /POST PREVIEW -->

                <!-- POST PREVIEW -->
                <div class="post-preview landscape geeky-news">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-v4.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/10.jpg')}}" alt="post-21">
                            </figure>
                            <!-- POST PREVIEW IMG -->
                        </div>
                    </a>
                    <!-- /POST PREVIEW IMG WRAP -->

                    <!-- TAG ORNAMENT -->
                    <a href="news-v4.html" class="tag-ornament">Geeky News</a>
                    <!-- /TAG ORNAMENT -->

                    <!-- POST PREVIEW TITLE -->
                    <a href="post-v4.html" class="post-preview-title">"Steamboat" anime will have a preview event in
                        May</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                        <!-- USER AVATAR -->
                        <a href="search-results.html">
                            <figure class="user-avatar tiny liquid">
                                <img src="{{ asset('/frontend/assets/img/users/09.jpg')}}" alt="user-08">
                            </figure>
                        </a>
                        <!-- /USER AVATAR -->
                        <p class="post-author-info small light">By <a href="search-results.html"
                                class="post-author">Morgana</a><span class="separator">|</span>December 15th, 2018<span
                                class="separator">|</span><a href="post-v4.html#op-comments"
                                class="post-comment-count">342
                                Comments</a></p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                    <!-- POST PREVIEW TEXT -->
                    <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod
                        tempor incididunt dutor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation
                        loso laboris tempora aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore...</p>
                </div>
                <!-- /POST PREVIEW -->
                <!-- POST PREVIEW -->
                <div class="post-preview landscape video geeky-news no-hover">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-video.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/12.jpg')}}" alt="post-31">
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
                
                    <!-- TAG LIST -->
                    <div class="tag-list">
                        <a href="browse-videos.html" class="tag-ornament video">Video</a>
                        <a href="news-v1.html" class="tag-ornament">Geeky News</a>
                    </div>
                    <!-- /TAG LIST -->
                
                    <!-- POST PREVIEW TITLE -->
                    <a href="post-video.html" class="post-preview-title">Galaxy Aventure RX peek at the new weapons</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                        <!-- USER AVATAR -->
                        <a href="search-results.html">
                            <figure class="user-avatar tiny liquid">
                                <img src="{{ asset('/frontend/assets/img/users/10.jpg')}}" alt="user-01">
                            </figure>
                        </a>
                        <!-- /USER AVATAR -->
                        <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Dexter</a><span
                                class="separator">|</span>December 15th, 2018<span class="separator">|</span><a
                                href="post-v1.html#op-comments" class="post-comment-count">174
                                Comments</a></p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                    <!-- POST PREVIEW TEXT -->
                    <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur bere adipisicing elit, sed do eiusmod tempor...
                    </p>
                </div>
                <!-- /POST PREVIEW -->

                <!-- POST PREVIEW -->
                <div class="post-preview landscape movie-news">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-v3.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/13.jpg')}}" alt="post-03">
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
                    <a href="post-v3.html" class="post-preview-title">"The Sandbender II" break the bad sequel spell
                        with a
                        great movie</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                        <!-- USER AVATAR -->
                        <a href="search-results.html">
                            <figure class="user-avatar tiny liquid">
                                <img src="{{ asset('/frontend/assets/img/users/11.jpg')}}" alt="user-03">
                            </figure>
                        </a>
                        <!-- /USER AVATAR -->
                        <p class="post-author-info small light">By <a href="search-results.html"
                                class="post-author">Greyson</a><span class="separator">|</span>December 15th, 2018<span
                                class="separator">|</span><a href="post-v3.html#op-comments"
                                class="post-comment-count">174
                                Comments</a></p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                    <!-- POST PREVIEW TEXT -->
                    <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod
                        tempor incididunt dutor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation
                        loso laboris tempora aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore...</p>
                </div>
                <!-- /POST PREVIEW -->
                <!-- POST PREVIEW -->
                <div class="post-preview landscape video movie-news no-hover">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-video.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/14.jpg')}}" alt="post-31">
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
                
                    <!-- TAG LIST -->
                    <div class="tag-list">
                        <a href="browse-videos.html" class="tag-ornament video">Video</a>
                        <a href="news-v1.html" class="tag-ornament">Movie News</a>
                    </div>
                    <!-- /TAG LIST -->
                
                    <!-- POST PREVIEW TITLE -->
                    <a href="post-video.html" class="post-preview-title">Galaxy Aventure RX peek at the new weapons</a>
                    <!-- POST AUTHOR INFO -->
                    <div class="post-author-info-wrap">
                        <!-- USER AVATAR -->
                        <a href="search-results.html">
                            <figure class="user-avatar tiny liquid">
                                <img src="{{ asset('/frontend/assets/img/users/12.jpg')}}" alt="user-01">
                            </figure>
                        </a>
                        <!-- /USER AVATAR -->
                        <p class="post-author-info small light">By <a href="search-results.html" class="post-author">Dexter</a><span
                                class="separator">|</span>December 15th, 2018<span class="separator">|</span><a
                                href="post-v1.html#op-comments" class="post-comment-count">174
                                Comments</a></p>
                    </div>
                    <!-- /POST AUTHOR INFO -->
                    <!-- POST PREVIEW TEXT -->
                    <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur bere adipisicing elit, sed do eiusmod tempor...
                    </p>
                </div>
                <!-- /POST PREVIEW -->

                <!-- BUTTON -->
                <div style="display: flex; justify-content: center">
                    <a href="" class="button blue centered">
                        Load More
                        <!-- BUTTON ORNAMENT -->
                        <div class="button-ornament">
                            <!-- ARROW ICON -->
                            <svg class="arrow-icon big">
                                <use xlink:href="#svg-arrow-big"></use>
                            </svg>
                            <!-- /ARROW ICON -->
                    
                            <!-- CROSS ICON -->
                            <svg class="cross-icon big">
                                <use xlink:href="#svg-cross-big"></use>
                            </svg>
                            <!-- /CROSS ICON -->
                        </div>
                        <!-- /BUTTON ORNAMENT -->
                    </a>
                </div>
                <!-- /BUTTON -->
            </div>
            <!-- /LAYOUT ITEM -->
        </div>
        <!-- /LAYOUT BODY -->
    
        @include('front.layouts.sidebar')
    </div>
    <!-- /LAYOUT CONTENT 1 -->
@endsection