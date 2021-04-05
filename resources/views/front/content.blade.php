@extends('front.layouts.base')

@section('content')
    <div class="layout-item gutter-big">
        <div class="post-open game-review">
            <div class="post-open-img-wrap">
                <figure class="post-open-img2 liquid">
                    <img src="{{ !empty($content->image_path) ? asset($content->image_path) : asset('/frontend/assets/img/brand/virtual_banner.jpg')}}" alt="{{ $content->image_name }}">
                </figure>
            </div>
        </div>
    </div>

    <div class="layout-content-2 layout-item-1-2-1 own-grid centered">
        @include('front.layouts.sidebar-left')

        <div class="layout-body layout-item">
            <div class="layout-item">
                <div class="post-open 
                    @if($content->category_id == 2)
                        gaming-news
                    @elseif($content->category_id == 1)
                        e-sport
                    @elseif($content->category_id == 4)
                        movie-news
                    @elseif($content->category_id == 5)
                        game-review
                    @endif">
                    <div class="post-open-content v5">
                        <div class="post-open-body">
                            <div class="tag-list">
                                <a href="{{ url('front/content/search?category='.$content->formatContent->id) }}" class="tag-ornament">{{ $content->formatContent->name }}</a>
                            </div>
                            <p class="post-open-title">{{ $content->judul }}</p>
                            <p class="post-open-subtitle">{{ $content->sub_judul }}</p>
                            <div class="section-title-wrap 
                                @if($content->category_id == 2)
                                    blue
                                @elseif($content->category_id == 1)
                                    violet
                                @elseif($content->category_id == 4)
                                    green
                                @elseif($content->category_id == 5)
                                    red
                                @endif">
                                <div class="section-title-separator"></div>
                            </div>
                            <div style="margin-top: 5px;margin-bottom:40px;display: flex; justify-content: center; align-items: center;" class="post-author-info-wrap">
                                <a href="{{ url('front/content/search?author='.$content->writer->id) }}">
                                    <figure class="user-avatar tiny liquid">
                                        <img src="{{ asset($content->writer->image)}}" alt="{{ $content->writer->name }}">
                                    </figure>
                                </a>
                                <p style="display: flex; justify-content: center; align-items: center;" class="post-author-info small light">Oleh 
                                    <a href="search-results.html" class="post-author" style="margin-left:2px"> {{ $content->writer->name }}</a>
                                    <span class="separator">-</span>{{ $content->publish_at }}
                                    <span class="separator">-</span>

                                    <div style="display: flex; justify-content: space-around; width: 215px">
                                        <!-- Facebook -->
                                        <div class="fb-share-button" data-href="{{ url()->full() }}" data-layout="button" data-size="small">
                                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"></a>
                                        </div>

                                        <!-- Twitter -->
                                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-lang="id" data-show-count="false"></a>

                                        <!-- Line -->
                                        <div class="line-it-button" data-lang="id" data-type="share-a" data-ver="3" data-url="{{ url()->full() }}" data-color="default" data-size="small" data-count="false" style="display: none;"></div>
                                    </div>
                                </p>
                            </div>
                            <div class="post-open-text">
                                <?php echo($content->konten); ?>
                            </div>
                        </div>
                        
                        <div class="fb-comments" data-href="{{ env('APP_URL') }}/content/detail/{{ $content->permalink }}" data-numposts="3" data-order-by="social" data-colorscheme="light" data-width=""></div>
                    </div>
                </div>

                <div class="widget-news">
                    <div class="section-title-wrap green">
                        <h2 class="section-title medium">Konten Terkait</h2>
                        <div class="section-title-separator"></div>
                    </div>
                    @if(!empty($relates))
                        <div class="post-preview-showcase grid-2col centered">
                            @foreach($relates as $relate)
                                <div class="post-preview 
                                @if($relate->category_id == 2)
                                    gaming-news
                                @elseif($relate->category_id == 1)
                                    e-sport
                                @endif ">
                                    <a href="{{ route('detail', ['permalink' => $relate->permalink]) }}">
                                        <div class="post-preview-img-wrap">
                                            <figure class="post-preview-img liquid">
                                                <img src="{{ !empty($relate->image_path) ? asset($relate->image_path) : asset('/frontend/assets/img/brand/virtual_banner.jpg')}}" alt="{{ $relate->image_name }}">
                                            </figure>
                                        </div>
                                    </a>
                                    <a href="{{ url('front/content/search?category='.$relate->category_id) }}" class="tag-ornament">{{ $relate->format }}</a>
                                    <a href="{{ route('detail', ['permalink' => $relate->permalink]) }}" class="post-preview-title">{{ $relate->judul }}</a>
                                    <div class="post-author-info-wrap">
                                        <p class="post-author-info small light">By 
                                            <a href="{{ url('front/content/search?author='.$relate->created_by) }}" class="post-author">{{ $relate->author }}</a>
                                            <span class="separator">|</span>{{$relate->publish_at}}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

            </div>
        </div>

        @include('front.layouts.sidebar-right')
    </div>
@endsection