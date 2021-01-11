<div id="banner-slider-2" class="banner-slider v2">
    <div class="slider-items">
        @foreach($feature_contents as $feature)
            <div class="slider-item slider-item-1" 
                style="
                    background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url({{ asset($feature->image_path)}}) no-repeat center;
                    background-size: cover;
                ">
                <div class="slider-item-wrap">
                    <div class="post-preview huge centered game-review">
                        <a class="tag-ornament">{{ $feature->formatContent->name }}</a>
                        <a href="{{ route('detail', ['permalink' => $feature->permalink]) }}" class="post-preview-title">{{ $feature->judul }}</a>
                        <div class="post-author-info-wrap">
                            <a href="{{ url('front/content/search?author='.$feature->writer->id) }}">
                                <figure class="user-avatar tiny liquid">
                                    <img src="{{ asset($feature->writer->image)}}" alt="{{ $feature->writer->name }}">
                                </figure>
                            </a>
                            <p class="post-author-info small light">Oleh 
                                <a href="{{ url('front/content/search?author='.$feature->writer->id) }}" class="post-author">{{ $feature->writer->name }}</a>
                                <span class="separator">|</span>{{ $feature->publish_at }}
                                <span class="separator">|</span>
                                <a class="post-comment-count">{{ $feature->views }} Dilihat</a>
                            </p>
                        </div>
                        <div class="break"></div>
                        <a href="{{ route('detail', ['permalink' => $feature->permalink]) }}" class="button red">
                            Go to the article 
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
            </div>
        @endforeach
    </div>
    <div class="banner-slider-preview-wrap">
        <div id="sliderb2-controls" class="banner-slider-controls">
            <div class="control-previous">
                <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                </svg>
            </div>
            <div class="control-next">
                <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                </svg>
            </div>
        </div>

        <!-- BANNER SLIDER PREVIEW -->
        <div id="banner-slider-2-thumbs" class="banner-slider-preview">
            <!-- BANNER SLIDER PREVIEW ROSTER -->
            <div class="banner-slider-preview-roster">
                <!-- POST PREVIEW -->
                @foreach($feature_contents as $feature)
                    <div class="post-preview tiny negative no-img game-review">
                        <p class="post-preview-title">{{ $feature->judul }}</p>
                        <div class="post-author-info-wrap">
                            <p class="post-author-info small light">
                                <span class="post-author">{{ $feature->writer->name }}</span>
                                <span class="separator">|</span>{{ $feature->publish_at }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>