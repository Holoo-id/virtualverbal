@foreach($contents as $content)
    {{--dd($content->writer)--}}
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
                    <img src="{{ !empty($content->image_path) ? asset($content->image_path) : asset('/frontend/assets/img/brand/virtual_banner.jpg')}}" alt="{{ $content->image_name }}">
                </figure>
            </div>
        </a>
        <a href="{{ url('front/content/search?kategori='.$content->category_id) }}" class="tag-ornament">{{ $content->formatContent->name }}</a>
        <a href="{{ route('detail', $content->permalink) }}" class="post-preview-title">{{ $content->judul }}</a>
        <div class="post-author-info-wrap">
            <p class="post-author-info small light">Ditulis oleh
                <a href="{{ url('front/content/search?penulis='.$content->created_by) }}" class="post-author">{{ $content->writer->name }}</a>
                    <span class="separator">|</span>{{ $content->publish_at }}
                    <span class="separator">|</span>
                    <a href="post-v1.html#op-comments" class="post-comment-count">{{ $content->views }} Dilihat</a>
                </p>
        </div>
        <p class="post-preview-text">{{ $content->sub_judul }}</p>
    </div>
@endforeach