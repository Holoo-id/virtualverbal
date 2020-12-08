@extends('front.layouts.base')

@section('content')
    <div class="layout-item gutter-big">
        <div class="post-open game-review">
            <div class="post-open-img-wrap">
                <figure class="post-open-img2 liquid">
                    <img src="{{ asset('/frontend/assets/img/posts/18.jpg')}}" alt="post-12">
                </figure>
            </div>
        </div>
    </div>
    <div class="layout-content-2 layout-item-1-2-1 own-grid centered">
        @include('front.layouts.sidebar-left')
    
        <!-- LAYOUT BODY -->
        <div class="layout-body layout-item">
            <div class="post-open 
                @if($content->category_id == 2)
                    gaming-news
                @elseif($content->category_id == 1)
                    e-sport
                @else
                    ''
                @endif">
                <div class="post-open-content v5">
                    <div class="post-open-body">
                        <div class="tag-list">
                            <a href="news-v4.html" class="tag-ornament">{{ $content->formatContent->name }}</a>
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
                            <a href="search-results.html">
                                <figure class="user-avatar tiny liquid">
                                    <img src="{{ asset('/frontend/assets/img/users/01.jpg')}}" alt="user-01">
                                </figure>
                            </a>
                            <p style="display: flex; justify-content: center; align-items: center" class="post-author-info small light">Oleh 
                                <a href="search-results.html" class="post-author" style="margin-left:2px"> {{ $content->writer->name }}</a>
                                <span class="separator">-</span>{{ $date }}
                                <!-- Senin, 19 Oktober 2020, 14:29 WIB -->
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
                            <?php echo($content->konten) ?>
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
@endsection