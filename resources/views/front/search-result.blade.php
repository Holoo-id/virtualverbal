@extends('front.layouts.base')

@section('content')
    <div class="layout-content-1 layout-item-3-1 own-grid centered">
        <div class="layout-body layout-item centered">
            <div class="section-title-wrap blue">
                <h2 class="section-title medium">Search Results</h2>
                <div class="section-title-separator"></div>
            </div>
            <div class="filter-heading">
                <p class="filter-heading-text"><span class="highlight">12</span> Results found for: "<span class="highlight">Esports
                        Japan game team</span>"</p>
            </div>
            <div class="filters-row">
                <div class="dropdown-simple-wrap">
                    <div id="filter-01-dropdown-trigger" class="dp-current-option">
                        <div id="filter-01-dropdown-option-value" class="dp-current-option-value">
                            <p class="dp-option-text">All Categories</p>
                        </div>
                        <svg class="arrow-icon">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                    </div>
                    <div id="filter-01-dropdown" class="dp-options small">
                        <div class="dp-option">
                            <p class="dp-option-text">All Categories</p>
                        </div>
                        @foreach($categories as $category)
                            <div class="dp-option">
                                <p class="dp-option-text">{{ $category->name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="dropdown-simple-wrap">
                    <div id="filter-02-dropdown-trigger" class="dp-current-option">
                        <div id="filter-02-dropdown-option-value" class="dp-current-option-value">
                            <p class="dp-option-text">All Authors</p>
                        </div>
                        <svg class="arrow-icon">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                    </div>
                    <div id="filter-02-dropdown" class="dp-options small">
                        <div class="dp-option">
                            <p class="dp-option-text">All Authors</p>
                        </div>
                        @foreach($authors as $author)
                            <div class="dp-option">
                                <p class="dp-option-text">{{ $author->name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="dropdown-simple-wrap">
                    <div id="filter-03-dropdown-trigger" class="dp-current-option">
                        <div id="filter-03-dropdown-option-value" class="dp-current-option-value">
                            <p class="dp-option-text">Order By Date</p>
                        </div>
                        <svg class="arrow-icon">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                    </div>
                    <div id="filter-03-dropdown" class="dp-options small">
                        <div class="dp-option">
                            <p class="dp-option-text">Order By Date</p>
                        </div>
                        <div class="dp-option">
                            <p class="dp-option-text">Order By Popularity</p>
                        </div>
                    </div>
                </div>
                <div class="dropdown-simple-wrap">
                    <div id="filter-04-dropdown-trigger" class="dp-current-option">
                        <div id="filter-04-dropdown-option-value" class="dp-current-option-value">
                            <p class="dp-option-text">Descending</p>
                        </div>
                        <svg class="arrow-icon">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                    </div>
                    <div id="filter-04-dropdown" class="dp-options small">
                        <div class="dp-option">
                            <p class="dp-option-text">Descending</p>
                        </div>
                        <div class="dp-option">
                            <p class="dp-option-text">Ascending</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layout-item">
                <!-- POST PREVIEW -->
                @foreach($contents as $content)
                    <div class="post-preview landscape 
                        @if($content->category_id == 2)
                            gaming-news
                        @elseif($content->category_id == 1)
                            e-sport
                        @else
                            ''
                        @endif ">
                        <a href="{{ $content->permalink }}">
                            <div class="post-preview-img-wrap">
                                <figure class="post-preview-img liquid">
                                    <img src="{{ asset('/frontend/assets/img/posts/47.jpg')}}" alt="post-45">
                                </figure>
                            </div>
                        </a>
                        <a href="esports-news.html" class="tag-ornament">{{ $content->formatContent->name }}</a>
                        <a href="{{ $content->permalink }}" class="post-preview-title">{{ $content->judul }}</a>
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">Ditulis oleh <a href="search-results.html"
                                    class="post-author">{{ $content->writer->name }}</a><span class="separator">|</span>{{ $content->publish_at }}<span
                                    class="separator">|</span><a href="post-v1.html#op-comments" class="post-comment-count">{{ $content->views }}
                                    Komentar</a></p>
                        </div>
                        <p class="post-preview-text">{{ $content->sub_judul }}</p>
                    </div>
                @endforeach

                <!-- POST PREVIEW -->
                {{--<div class="post-preview landscape video e-sport no-hover">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-video.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/48.jpg')}}" alt="post-31">
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
                <div class="post-preview landscape game-review">
                    <!-- POST PREVIEW IMG WRAP -->
                    <a href="post-v2.html">
                        <div class="post-preview-img-wrap">
                            <!-- POST PREVIEW IMG -->
                            <figure class="post-preview-img liquid">
                                <img src="{{ asset('/frontend/assets/img/posts/01.jpg')}}" alt="post-05">
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
                                <img src="{{ asset('/frontend/assets/img/posts/07.jpg')}}" alt="post-03">
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
                <!-- /POST PREVIEW -->
            </div>
            <div class="layout-item centered padded load-more-wrap">
                <!-- BUTTON -->
                <a href="{{ $contents->links() }}" class="button big blue">
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
    
        @include('front.layouts.sidebar')
    </div>
@endsection