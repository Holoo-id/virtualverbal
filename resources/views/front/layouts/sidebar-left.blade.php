<!-- LAYOUT SIDEBAR 1 -->
<div class="layout-sidebar1 layout-item">
    <!-- App Articles Only -->
    <div class="widget-sidebar">
        <div class="game-card-wrap">
            @foreach($games as $game)
                <img class="gambar-gantung" src="https://images.igdb.com/igdb/image/upload/t_cover_big/{{ $game->cover->image_id }}.jpg" alt="">
                <div class="card-profil-game centered">
                    <div class="section-title-wrap">
                        <div style="padding-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.15)" class="section-title medium">{{ $game->name }}</div>
                    </div>
                    <ul class="profil-game-text">
                        <li class="text-judul">Platform:</li>
                        <li class="text-isi">
                            @foreach($game->platforms as $platform)
                                {{$platform->name}}
                            @endforeach
                        </li>
                        <li class="text-judul">Tanggal Rilis:</li>
                        <li class="text-isi">{{ $game->first_release_date }}</li>
                        <li class="text-judul">Publisher:</li>
                        <li class="text-isi">
                            @foreach($publishers as $publisher)
                                {{ $publisher->name }}
                            @endforeach
                        </li>
                        <li class="text-judul">Developer:</li>
                        <li class="text-isi">
                            @foreach($developers as $developer)
                                {{ $developer->name }}
                            @endforeach
                        </li>
                        <li class="text-judul">Genre:</li>
                        <li class="text-isi">
                            @foreach($game->genres as $genre)
                                {{ $genre->name }}
                            @endforeach
                        </li>
                        <!-- <a style="width: 100%; margin-top: 15px;" href="#" class="button disable">Selengkapnya
                            <div class="button-ornament">
                                <svg class="arrow-icon medium">
                                    <use xlink:href="#svg-arrow-medium"></use>
                                </svg>
                            </div>
                        </a> -->
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

    <div class="widget-sidebar">
        <div class="section-title-wrap blue">
            <h2 class="section-title medium">topik</h2>
            <div class="section-title-separator"></div>
        </div>

        <ul class="custom-tags-wrap">
           @foreach($content->tags as $tag)
                <ul class="custom-tags">
                    <li class="custom-tag">
                        <a href="{{ $tag->url }}">{{ $tag->name }}</a>
                    </li>
                </ul>
            @endforeach
        </ul>
    </div>
</div>
<!-- /LAYOUT SIDEBAR 1 -->