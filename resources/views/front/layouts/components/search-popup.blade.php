<div class="search-popup">
    <svg class="cross-icon big close-button search-popup-close">
        <use xlink:href="#svg-cross-big"></use>
    </svg>
    <form method="GET" action="{{ route('search') }}" class="search-popup-form centered">
        <input type="text" id="search" class="input-line" name="search" placeholder="Mau Cari Apa?" value="{{ old('search') }}">
    </form>
    <p class="search-popup-text">Tulis kata kunci yang kamu mau lalu tekan ENTER untuk memulai pencarian!</p>
</div>