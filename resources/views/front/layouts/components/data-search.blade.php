@foreach($contents as $content)
    <div class="post-preview landscape 
        @if($content->category_id == 2)
            gaming-news
        @elseif($content->category_id == 1)
            e-sport
        @elseif($content->category_id == 4)
            movie-news
        @else
            ''
        @endif ">
        <a href="{{ route('detail', ['permalink' => $content->permalink]) }}">
            <div class="post-preview-img-wrap">
                <figure class="post-preview-img liquid">
                    <img src="{{ asset('/frontend/assets/img/posts/41.jpg')}}" alt="post-01">
                </figure>
            </div>
        </a>
        <a href="{{ url('front/content/search?category='.$content->formatContent->id) }}" class="tag-ornament">{{ $content->formatContent->name }}</a>
        <a href="{{ route('detail', $content->permalink) }}" class="post-preview-title">{{ $content->judul }}</a>
        <div class="post-author-info-wrap">
            <p class="post-author-info small light">Ditulis oleh <a href="{{ url('front/content/search?author='.$content->writer->id) }}"
                    class="post-author">{{ $content->writer->name }}</a><span class="separator">|</span>{{ $content->publish_at }}<span
                    class="separator">|</span><a href="post-v1.html#op-comments" class="post-comment-count">{{ $content->views }}
                    Dilihat</a></p>
        </div>
        <p class="post-preview-text">{{ $content->sub_judul }}</p>
    </div>
@endforeach