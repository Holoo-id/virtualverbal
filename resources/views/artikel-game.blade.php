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
        @include('layouts.sidebar-left')
    
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

        @include('layouts.sidebar-right')
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