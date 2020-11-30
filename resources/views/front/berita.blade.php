@extends('front.layouts.base')

@section('content')
    <div class="layout-item gutter-big">
        <!-- POST OPEN -->
        <div class="post-open game-review">
            <!-- POST OPEN IMG WRAP -->
            <div class="post-open-img-wrap">
                <!-- POST OPEN IMG -->
                <figure class="post-open-img2 liquid">
                    <img src="{{ asset('/frontend/assets/img/posts/16_flat.jpg')}}" alt="post-12">
                </figure>
                <!-- /POST OPEN IMG -->
            </div>
            <!-- /POST OPEN IMG WRAP -->
        </div>
        <!-- /POST OPEN -->
    </div>

    <div class="layout-content-2 layout-item-1-2-1 own-grid centered">
        @include('front.layouts.sidebar-left')
        <div class="layout-body layout-item">
            <div class="post-open gaming-news">
                <div class="post-open-content v5">
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
                                <!-- tambahkan link halaman sekarang pada link share -->
                                <a href="https://www.facebook.com/sharer/sharer.php?u=" class="bubble-ornament fb">
                                    <!-- FACEBOOK ICON -->
                                    <svg class="facebook-icon">
                                        <use xlink:href="#svg-facebook"></use>
                                    </svg>
                                    <!-- /FACEBOOK ICON -->
                                </a>
                                <!-- /BUBBLE ORNAMENT -->
    
                                <!-- BUBBLE ORNAMENT -->
                                <!-- tambahkan link halaman sekarang pada link share -->
                                <a href="https://twitter.com/intent/tweet?text=" class="bubble-ornament twt">
                                    <!-- TWITTER ICON -->
                                    <svg class="twitter-icon">
                                        <use xlink:href="#svg-twitter"></use>
                                    </svg>
                                    <!-- /TWITTER ICON -->
                                </a>
                                <!-- /BUBBLE ORNAMENT -->
    
                                <!-- BUBBLE ORNAMENT -->
                                <!-- tambahkan link halaman sekarang pada link share -->
                                <a href="whatsapp://send?text=" class="bubble-ornament gplus">
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

                        <p class="post-open-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                            in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <!-- /POST OPEN IMG -->
                    </div>
                
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
            </div>

            <div class="widget-news">
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
        </div>

        @include('front.layouts.sidebar-right')
    </div>
@endsection