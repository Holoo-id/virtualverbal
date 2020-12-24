@include('front.layouts.components.search-popup')
<!-- POPUP LOGIN -->
<div id="popup-login" class="popup-wrap medium">
    <div class="form-box-wrap">
        <div class="form-box-heading login">
            <div class="form-box-heading-title-wrap">
                <p class="form-box-heading-title">Hi!</p>
                <p class="form-box-heading-subtitle">Kami Senang akhirnya kamu kembali lagi!</p>
            </div>
            <p class="form-box-heading-text">Belum punya akun? <a href="#">Daftar Disini!</a> Gabung bersama komunitas kami!</p>
        </div>
        <div class="form-box-body">
            <div class="form-box">
                <div class="section-title-wrap blue">
                    <h2 class="section-title medium">Login dulu ke akun kamu</h2>
                    <div class="section-title-separator"></div>
                </div>
                <form class="form-wrap" method='POST' action="{{ route('login') }}">
                    @csrf
                    <div id="login-form" class="form-row">
                        <div class="form-item blue">
                            <label for="login_email" class="rl-label">E-Mail:</label>
                            <input type="text" id="login_email" name="email"
                                placeholder="Masukkan E-Mail kamu...">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-item blue">
                            <label for="login_pwd" class="rl-label">Password</label>
                            <input type="password" id="login_pwd" name="password"
                                placeholder="Masukkan Password kamu...">
                        </div>
                    </div>
                    <div class="form-confirm-row">
                        <div class="checkbox-item">
                            <input type="checkbox" id="login_remember_ep" name="remember" value="remember"
                                checked>
                            <div class="checkbox-box blue">
                                <svg class="cross-cb-icon small">
                                    <use xlink:href="#svg-cross-cb-small"></use>
                                </svg>
                            </div>
                            <label for="login_remember_ep" class="rl-label">Simpan E-Mail dan Password</label>
                        </div>
                        <a href="#" class="link-text-form blue">Lupa Password?</a>
                    </div>
                    <div class="form-actions full">
                        <button type="submit" class="button blue full disabled" id="login_btn" disabled="true">Masuk!</button>
                        <div class="social-buttons">
                            {{-- <div style="padding-top: 20px; padding-left: 17%" class="fb-login-button" data-size="large" data-button-type="login_with" data-layout="rounded" data-auto-logout-link="false" data-use-continue-as="false" data-width="50"></div> --}}
                            <a href="/login-by/facebook" class="button-social fb">Facebook Login</a>
                            <a href="/login-by/google" class="button-social gplus">Google Login</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-form-buttons">
                <p class="tab-form-button selected ">Login</p>
                <p class="tab-form-button">Daftar</p>
            </div>
        </div>
    </div>
</div>

<!-- POPUP Register -->
<div id="popup-register" class="popup-wrap medium">
    <div class="form-box-wrap">
        <div class="form-box-heading register">
            <div class="form-box-heading-title-wrap">
                <p class="form-box-heading-title">Hi!</p>
                <p class="form-box-heading-subtitle">Ayo daftar dan bergabung bersama komunitas kami!</p>
            </div>
            <p class="form-box-heading-text">Setelah mendaftar, kamu akan menerima E-Mail konfirmasi yang terdapat link untuk mengaktifkan akun kamu!</p>
        </div>
        <div class="form-box-body">
            <div class="form-box">
                <div class="section-title-wrap red">
                    <h2 class="section-title medium">Daftar Sekarang</h2>
                    <div class="section-title-separator"></div>
                </div>
            <form class="form-wrap" method="POST" action="{{ route('register') }}">
                @csrf
                    <div id="register-form" class="form-row">
                        <div class="form-item red">
                            <label for="register_email" class="rl-label">E-Mail:</label>
                            <input type="text" id="register_email" name="email"
                                placeholder="Masukkan E-Mail kamu...">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-item red">
                            <label for="register_pwd" class="rl-label">Password</label>
                            <input type="password" id="register_pwd" name="password"
                                placeholder="Masukkan Password kamu...">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-item red">
                            <label for="register_pwd_repeat" class="rl-label">Ulangi Password</label>
                            <input type="password" id="register_pwd_repeat" name="password_confirmation"
                                placeholder="Tulis kembali Password kamu...">
                        </div>
                    </div>
                    <div class="form-actions full">
                        <button id="register_btn" class="button red full disabled" disabled="true">Buat akun!</button>
                        <p class="form-info-text">Cek E-Mail kamu setelah mendaftar!</p>
                    </div>
                </form>
            </div>
            <div class="tab-form-buttons">
                <p class="tab-form-button">Login</p>
                <p class="tab-form-button selected">Daftar</p>
            </div>
        </div>
    </div>
</div>

<!-- MENU MOBILE -->
<div class="mobile-menu-wrap">
    <svg class="cross-icon big mobile-menu-close">
        <use xlink:href="#svg-cross-big"></use>
    </svg>
    <!-- SEARCH POPUP OPEN -->
    <svg style="fill: #363636" class="search-popup-open search-icon">
      <use xlink:href="#svg-search"></use>
    </svg>

    <figure class="logo-img">
        <img src="{{ asset('/frontend/assets/img/brand/logovv.png')}}" alt="Logo">
    </figure>

    <ul class="mobile-menu">
        @if ((Auth::Guest()))
        <li class="mobile-menu-item">
                <p class="mobile-menu-item-link pd-dropdown-handler">Profile</p>
                <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                </svg>
                <ul class="mobile-dropdown pd-dropdown">
                    <li class="mobile-dropdown-item">
                        <a href="#" class="mobile-dropdown-item-link popup-login-trigger">Login</a>
                    </li>
                    <li class="mobile-dropdown-item">
                        <a href="#" class="mobile-dropdown-item-link popup-register-trigger">Register</a>
                    </li> 
                </ul> 
        </li>
        @else
        <li class="mobile-menu-item">
                <p class="mobile-menu-item-link pd-dropdown-handler">
                    <img class="widget-option-img user-avatar micro" src="{{ asset(Auth::user()->image)}}" alt="Avatar for {{Auth::user()->name}}">
                    {{Auth::user()->name}}
                </p>
                <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                </svg>
                <ul class="mobile-dropdown pd-dropdown">
                    <li class="mobile-dropdown-item">
                        <p class="mobile-dropdown-item-link pd-dropdown-handler">Main Account</p>
                        <svg class="arrow-icon medium">
                            <use xlink:href="#svg-arrow-medium"></use>
                        </svg>
                        <ul class="mobile-dropdown pd-dropdown">
                            <li class="mobile-dropdown-item">
                                <a href="account-settings.html" class="mobile-dropdown-item-link">Account Settings</a>
                            </li>
                            <li class="mobile-dropdown-item">
                                <a href="#" class="mobile-dropdown-item-link">Shipping Details</a>
                            </li>
                            <li class="mobile-dropdown-item">
                                <a href="#" class="mobile-dropdown-item-link">Billing Details</a>
                            </li>
                            <li class="mobile-dropdown-item">
                                <a href="orders-history.html" class="mobile-dropdown-item-link">Orders History</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mobile-dropdown-item">
                        <p class="mobile-dropdown-item-link pd-dropdown-handler">Pixel Forums</p>
                        <svg class="arrow-icon medium">
                            <use xlink:href="#svg-arrow-medium"></use>
                        </svg>
                        <ul class="mobile-dropdown pd-dropdown">
                            <li class="mobile-dropdown-item">
                                <a href="profile-summary.html" class="mobile-dropdown-item-link">Summary</a>
                            </li>
                            <li class="mobile-dropdown-item">
                                <a href="profile-activity.html" class="mobile-dropdown-item-link">Activity</a>
                            </li>
                            <li class="mobile-dropdown-item">
                                <a href="profile-notifications.html" class="mobile-dropdown-item-link">Notifications</a>
                            </li>
                            <li class="mobile-dropdown-item">
                                <a href="profile-messages.html" class="mobile-dropdown-item-link">Messages</a>
                            </li>
                            <li class="mobile-dropdown-item">
                                <a href="profile-badges.html" class="mobile-dropdown-item-link">Profile Badges</a>
                            </li>
                            <li class="mobile-dropdown-item">
                                <a href="profile-settings.html" class="mobile-dropdown-item-link">Settings</a>
                            </li>
                        </ul>
                    </li>
                </ul>
        </li>
        @endif
        {{--<li class="mobile-menu-item">
            <a href="#" class="mobile-menu-item-link">Games</a>
        </li>
        <li class="mobile-menu-item">
            <a href="#" class="mobile-menu-item-link">Tech</a>
        </li>
        <li class="mobile-menu-item">
            <a href="#" class="mobile-menu-item-link">Culture</a>
        </li>
        <li class="mobile-menu-item">
            <p class="mobile-menu-item-link pd-dropdown-handler">eSports</p>
            <svg class="arrow-icon medium">
                <use xlink:href="#svg-arrow-medium"></use>
            </svg>
            <ul class="mobile-dropdown pd-dropdown">
                <li class="mobile-dropdown-item">
                    <p class="mobile-dropdown-item-link pd-dropdown-handler">Main Pages</p>
                    <svg class="arrow-icon medium">
                        <use xlink:href="#svg-arrow-medium"></use>
                    </svg>
                    <ul class="mobile-dropdown pd-dropdown">
                        <li class="mobile-dropdown-item">
                            <a href="esports-home.html" class="mobile-dropdown-item-link">eSports Home</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="esports-news.html" class="mobile-dropdown-item-link">eSports News</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="esports-post.html" class="mobile-dropdown-item-link">eSports Post Page</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="esports-tournament.html" class="mobile-dropdown-item-link">Tournament Page</a>
                        </li>
                    </ul>
                </li>
                <li class="mobile-dropdown-item">
                    <p class="mobile-dropdown-item-link pd-dropdown-handler">Match Overviews</p>
                    <svg class="arrow-icon medium">
                        <use xlink:href="#svg-arrow-medium"></use>
                    </svg>
                    <ul class="mobile-dropdown pd-dropdown">
                        <li class="mobile-dropdown-item">
                            <a href="esports-match-overview-v1.html" class="mobile-dropdown-item-link">Match Overview
                                V1</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="esports-match-overview-v2.html" class="mobile-dropdown-item-link">Match Overview
                                V2</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="esports-match-overview-v3.html" class="mobile-dropdown-item-link">Match Overview
                                V3</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="esports-match-overview-v4.html" class="mobile-dropdown-item-link">Match Overview
                                V4</a>
                        </li>
                    </ul>
                </li>
                <li class="mobile-dropdown-item">
                    <p class="mobile-dropdown-item-link pd-dropdown-handler">Teams &amp; Players</p>
                    <svg class="arrow-icon medium">
                        <use xlink:href="#svg-arrow-medium"></use>
                    </svg>
                    <ul class="mobile-dropdown pd-dropdown">
                        <li class="mobile-dropdown-item">
                            <a href="esports-team.html" class="mobile-dropdown-item-link">eSports Team Page</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="esports-player.html" class="mobile-dropdown-item-link">eSports Player Page</a>
                        <li class="mobile-dropdown-item">
                            <a href="esports-streamers.html" class="mobile-dropdown-item-link">Streamers Page</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="esports-calendar.html" class="mobile-dropdown-item-link">Scores with Calendar</a>
                        </li>
                    </ul>
                </li>
                <li class="mobile-dropdown-item">
                    <p class="mobile-dropdown-item-link pd-dropdown-handler">eSports Widgets</p>
                    <svg class="arrow-icon medium">
                        <use xlink:href="#svg-arrow-medium"></use>
                    </svg>
                    <ul class="mobile-dropdown pd-dropdown">
                        <li class="mobile-dropdown-item">
                            <a href="esports-widgets-v1.html" class="mobile-dropdown-item-link">Widgets Page 01</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="esports-widgets-v2.html" class="mobile-dropdown-item-link">Widgets Page 02</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="esports-widgets-v3.html" class="mobile-dropdown-item-link">Widgets Page 03</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="mobile-menu-item">
            <a href="#" class="mobile-menu-item-link">Videos</a>
        </li>
        <li class="mobile-menu-item">
            <a href="#" class="mobile-menu-item-link">Database</a>
        </li>
        <li class="mobile-menu-item">
            <a href="#" class="mobile-menu-item-link">Apps</a>
        </li>
        <li class="mobile-menu-item">
            <a href="#" class="mobile-menu-item-link">Community</a>
        </li>
        <li class="mobile-menu-item">
            <p class="mobile-menu-item-link pd-dropdown-handler">Shop</p>
            <svg class="arrow-icon medium">
                <use xlink:href="#svg-arrow-medium"></use>
            </svg>
            <ul class="mobile-dropdown pd-dropdown">
                <li class="mobile-dropdown-item">
                    <p class="mobile-dropdown-item-link pd-dropdown-handler">New Releases</p>
                    <svg class="arrow-icon medium">
                        <use xlink:href="#svg-arrow-medium"></use>
                    </svg>
                    <ul class="mobile-dropdown pd-dropdown">
                        <li class="mobile-dropdown-item">
                            <a href="shop-v1-grid.html" class="mobile-dropdown-item-link">Shop 3 Columns Grid</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="shop-v1-list.html" class="mobile-dropdown-item-link">Shop 3 Columns List</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="shop-v2.html" class="mobile-dropdown-item-link">Shop 4 Columns</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-page.html" class="mobile-dropdown-item-link">Product Description</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-page.html" class="mobile-dropdown-item-link">Product Reviews</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-page.html" class="mobile-dropdown-item-link">Product Specifications</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="inventory-bag.html" class="mobile-dropdown-item-link">Inventory Bag (Cart)</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="checkout.html" class="mobile-dropdown-item-link">Checkout Page</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="order-confirmation.html" class="mobile-dropdown-item-link">Order Confirmation</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="wishlist.html" class="mobile-dropdown-item-link">Wishlist</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-compare.html" class="mobile-dropdown-item-link">Product Compare</a>
                        </li>
                    </ul>
                </li>
                <li class="mobile-dropdown-item">
                    <p class="mobile-dropdown-item-link pd-dropdown-handler">Shop Features</p>
                    <svg class="arrow-icon medium">
                        <use xlink:href="#svg-arrow-medium"></use>
                    </svg>
                    <ul class="mobile-dropdown pd-dropdown">
                        <li class="mobile-dropdown-item">
                            <a href="shop-v1-grid.html" class="mobile-dropdown-item-link">Shop 3 Columns Grid</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="shop-v1-list.html" class="mobile-dropdown-item-link">Shop 3 Columns List</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="shop-v2.html" class="mobile-dropdown-item-link">Shop 4 Columns</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-page.html" class="mobile-dropdown-item-link">Product Description</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-page.html" class="mobile-dropdown-item-link">Product Reviews</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-page.html" class="mobile-dropdown-item-link">Product Specifications</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="inventory-bag.html" class="mobile-dropdown-item-link">Inventory Bag (Cart)</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="checkout.html" class="mobile-dropdown-item-link">Checkout Page</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="order-confirmation.html" class="mobile-dropdown-item-link">Order Confirmation</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="wishlist.html" class="mobile-dropdown-item-link">Wishlist</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-compare.html" class="mobile-dropdown-item-link">Product Compare</a>
                        </li>
                    </ul>
                </li>
                <li class="mobile-dropdown-item">
                    <p class="mobile-dropdown-item-link pd-dropdown-handler">Powerstation</p>
                    <svg class="arrow-icon medium">
                        <use xlink:href="#svg-arrow-medium"></use>
                    </svg>
                    <ul class="mobile-dropdown pd-dropdown">
                        <li class="mobile-dropdown-item">
                            <a href="shop-v1-grid.html" class="mobile-dropdown-item-link">Shop 3 Columns Grid</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="shop-v1-list.html" class="mobile-dropdown-item-link">Shop 3 Columns List</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="shop-v2.html" class="mobile-dropdown-item-link">Shop 4 Columns</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-page.html" class="mobile-dropdown-item-link">Product Description</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-page.html" class="mobile-dropdown-item-link">Product Reviews</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-page.html" class="mobile-dropdown-item-link">Product Specifications</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="inventory-bag.html" class="mobile-dropdown-item-link">Inventory Bag (Cart)</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="checkout.html" class="mobile-dropdown-item-link">Checkout Page</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="order-confirmation.html" class="mobile-dropdown-item-link">Order Confirmation</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="wishlist.html" class="mobile-dropdown-item-link">Wishlist</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-compare.html" class="mobile-dropdown-item-link">Product Compare</a>
                        </li>
                    </ul>
                </li>
                <li class="mobile-dropdown-item">
                    <p class="mobile-dropdown-item-link pd-dropdown-handler">X-Rock</p>
                    <svg class="arrow-icon medium">
                        <use xlink:href="#svg-arrow-medium"></use>
                    </svg>
                    <ul class="mobile-dropdown pd-dropdown">
                        <li class="mobile-dropdown-item">
                            <a href="shop-v1-grid.html" class="mobile-dropdown-item-link">Shop 3 Columns Grid</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="shop-v1-list.html" class="mobile-dropdown-item-link">Shop 3 Columns List</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="shop-v2.html" class="mobile-dropdown-item-link">Shop 4 Columns</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-page.html" class="mobile-dropdown-item-link">Product Description</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-page.html" class="mobile-dropdown-item-link">Product Reviews</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-page.html" class="mobile-dropdown-item-link">Product Specifications</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="inventory-bag.html" class="mobile-dropdown-item-link">Inventory Bag (Cart)</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="checkout.html" class="mobile-dropdown-item-link">Checkout Page</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="order-confirmation.html" class="mobile-dropdown-item-link">Order Confirmation</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="wishlist.html" class="mobile-dropdown-item-link">Wishlist</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-compare.html" class="mobile-dropdown-item-link">Product Compare</a>
                        </li>
                    </ul>
                </li>
                <li class="mobile-dropdown-item">
                    <p class="mobile-dropdown-item-link pd-dropdown-handler">Funtendo</p>
                    <svg class="arrow-icon medium">
                        <use xlink:href="#svg-arrow-medium"></use>
                    </svg>
                    <ul class="mobile-dropdown pd-dropdown">
                        <li class="mobile-dropdown-item">
                            <a href="shop-v1-grid.html" class="mobile-dropdown-item-link">Shop 3 Columns Grid</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="shop-v1-list.html" class="mobile-dropdown-item-link">Shop 3 Columns List</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="shop-v2.html" class="mobile-dropdown-item-link">Shop 4 Columns</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-page.html" class="mobile-dropdown-item-link">Product Description</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-page.html" class="mobile-dropdown-item-link">Product Reviews</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-page.html" class="mobile-dropdown-item-link">Product Specifications</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="inventory-bag.html" class="mobile-dropdown-item-link">Inventory Bag (Cart)</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="checkout.html" class="mobile-dropdown-item-link">Checkout Page</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="order-confirmation.html" class="mobile-dropdown-item-link">Order Confirmation</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="wishlist.html" class="mobile-dropdown-item-link">Wishlist</a>
                        </li>
                        <li class="mobile-dropdown-item">
                            <a href="product-compare.html" class="mobile-dropdown-item-link">Product Compare</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>--}}
        <li class="mobile-menu-item2">
            <a href="{{ route('about') }}" class="mobile-menu-item2-link">Hubungi Kami</a>
        </li>
        {{--<li class="mobile-menu-item2">
            <a href="#" class="mobile-menu-item2-link">Kebijakan Privasi</a>
        </li>
        <li class="mobile-menu-item2">
            <a href="#" class="mobile-menu-item2-link">Syarat dan Ketentuan</a>
        </li>
        <li class="mobile-menu-item2">
            <a href="#" class="mobile-menu-item2-link">Kode Etik Jurnalistik</a>
        </li>--}}
    </ul>
</div>

<!-- INVENTORY BAG PREVIEW -->
{{--<div class="inventory-bag-preview">
    <svg class="inventory-close-button cross-icon big">
        <use xlink:href="#svg-cross-big"></use>
    </svg>
    <p class="items-in-inventory"><span class="quantity">8</span> items in inventory</p>
    <div class="line-separator"></div>
    <div class="inventory-items-preview">
        <div class="inventory-item-preview">
            <div class="product-preview small">
                <div class="product-preview-img-wrap">
                    <a href="product-page.html">
                        <figure class="product-preview-img liquid">
                            <img src="{{ asset('/frontend/assets/img/products/01.jpg')}}" alt="product-01">
                        </figure>
                    </a>
                </div>
                <div class="bubble-ornament small red remove">
                    <svg class="cross-cb-icon small">
                        <use xlink:href="#svg-cross-cb-small"></use>
                    </svg>
                </div>
                <div class="tag-quantity">
                    <p class="tag-quantity-text">x <span class="value">2</span></p>
                </div>
                <a href="product-page.html" class="product-preview-title">New Funtendo 3XSD - black</a>
                <div class="product-preview-info">
                    <div class="rating-ornament small void yellow">
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="product-price-wrap">
                    <p class="product-preview-price current"><span class="currency">$</span>199.00</p>
                </div>
            </div>
        </div>
        <div class="inventory-item-preview">
            <div class="product-preview small">
                <div class="product-preview-img-wrap">
                    <a href="product-page.html">
                        <figure class="product-preview-img liquid">
                            <img src="{{ asset('/frontend/assets/img/products/06.jpg')}}" alt="product-06">
                        </figure>
                    </a>
                </div>
                <div class="bubble-ornament small red remove">
                    <svg class="cross-cb-icon small">
                        <use xlink:href="#svg-cross-cb-small"></use>
                    </svg>
                </div>
                <div class="tag-quantity">
                    <p class="tag-quantity-text">x <span class="value">1</span></p>
                </div>
                <a href="product-page.html" class="product-preview-title">Crimson red joystick</a>
                <div class="product-preview-info">
                    <div class="rating-ornament small void yellow">
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon empty">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon empty">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="product-price-wrap">
                    <p class="product-preview-price current"><span class="currency">$</span>32.50</p>
                </div>
            </div>
        </div>
        <div class="inventory-item-preview">
            <div class="product-preview small">
                <div class="product-preview-img-wrap">
                    <a href="product-page.html">
                        <figure class="product-preview-img liquid">
                            <img src="{{ asset('/frontend/assets/img/products/05.jpg')}}" alt="product-05">
                        </figure>
                    </a>
                </div>
                <div class="bubble-ornament small red remove">
                    <svg class="cross-cb-icon small">
                        <use xlink:href="#svg-cross-cb-small"></use>
                    </svg>
                </div>
                <div class="tag-quantity">
                    <p class="tag-quantity-text">x <span class="value">4</span></p>
                </div>
                <a href="product-page.html" class="product-preview-title">Carbon black joystick</a>
                <div class="product-preview-info">
                    <div class="rating-ornament small void yellow">
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon empty">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="product-price-wrap">
                    <p class="product-preview-price current"><span class="currency">$</span>55.00</p>
                </div>
            </div>
        </div>
        <div class="inventory-item-preview">
            <div class="product-preview small">
                <div class="product-preview-img-wrap">
                    <a href="product-page.html">
                        <figure class="product-preview-img liquid">
                            <img src="{{ asset('/frontend/assets/img/products/14.jpg')}}" alt="product-14">
                        </figure>
                    </a>
                </div>
                <div class="bubble-ornament small red remove">
                    <svg class="cross-cb-icon small">
                        <use xlink:href="#svg-cross-cb-small"></use>
                    </svg>
                </div>
                <div class="tag-quantity">
                    <p class="tag-quantity-text">x <span class="value">1</span></p>
                </div>
                <a href="product-page.html" class="product-preview-title">Magimons black framed print</a>
                <div class="product-preview-info">
                    <div class="rating-ornament small void yellow">
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                        <div class="rating-ornament-item">
                            <svg class="rating-ornament-icon">
                                <use xlink:href="#svg-star"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="product-price-wrap">
                    <p class="product-preview-price current"><span class="currency">$</span>20.00</p>
                </div>
            </div>
        </div>
        <div class="inventory-item-preview empty">
            <svg class="inventory-icon">
                <use xlink:href="#svg-inventory-light"></use>
            </svg>
        </div>
        <div class="inventory-item-preview empty">
            <svg class="inventory-icon">
                <use xlink:href="#svg-inventory-light"></use>
            </svg>
        </div>
        <div class="inventory-item-preview empty">
            <svg class="inventory-icon">
                <use xlink:href="#svg-inventory-light"></use>
            </svg>
        </div>
        <div class="inventory-item-preview empty">
            <svg class="inventory-icon">
                <use xlink:href="#svg-inventory-light"></use>
            </svg>
        </div>
        <div class="inventory-item-preview empty">
            <svg class="inventory-icon">
                <use xlink:href="#svg-inventory-light"></use>
            </svg>
        </div>
        <div class="inventory-item-preview empty">
            <svg class="inventory-icon">
                <use xlink:href="#svg-inventory-light"></use>
            </svg>
        </div>
        <div class="inventory-item-preview empty">
            <svg class="inventory-icon">
                <use xlink:href="#svg-inventory-light"></use>
            </svg>
        </div>
        <div class="inventory-item-preview empty">
            <svg class="inventory-icon">
                <use xlink:href="#svg-inventory-light"></use>
            </svg>
        </div>
    </div>
    <div class="line-separator"></div>
    <p class="inventory-subtotal"><span class="subtotal-text">Inventory subtotal:</span> <span
            class="subtotal-value"><span class="currency">$</span><span class="value">670.50</span></span></p>
    <div class="line-separator"></div>
    <div class="inventory-actions">
        <a href="inventory-bag.html" class="button full blue">Go to the inventory bag</a>
        <a href="checkout.html" class="button full violet">Proceed to checkout</a>
    </div>
</div>--}}

<!-- NAVIGATION WRAP -->
<nav class="navigation-wrap">
    <div class="navigation">
        <div class="logo">
            <div class="mobile-menu-pull mobile-menu-open">
                <svg class="menu-pull-icon">
                    <use xlink:href="#svg-menu-pull"></use>
                </svg>
            </div>
            <figure class="logo-img">
                <img src="{{ asset('/frontend/assets/img/brand/logoputihvv.png')}}" alt="Logo">
            </figure>
        </div>
        {{--<ul class="main-menu">
            <li class="main-menu-item">
                <a href="index.html" class="main-menu-item-link">
                    <i class="fas fa-play fa-2x"></i>
                    <p>
                        Games
                    </p>
                </a>
            </li>
            <li class="main-menu-item">
                <a href="index.html" class="main-menu-item-link">
                    <i class="fas fa-tv fa-2x"></i>
                    <p>
                        Tech
                    </p>
                </a>
            </li>
            <li class="main-menu-item">
                <a href="index.html" class="main-menu-item-link">
                    <i class="fas fa-palette fa-2x"></i>
                    <p>
                        Culture
                    </p>
                </a>
            </li>
            <li class="main-menu-item">
                <a href="esports-home.html" class="main-menu-item-link">
                    <i class="fas fa-gamepad fa-2x"></i>
                    <p>
                        e-Sports
                        <svg class="arrow-icon">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                    </p>
                </a>

                <!-- SUBMENU -->
                <ul class="submenu">
                    <li class="submenu-item grid-limit centered">
                        <div class="link-sections-wrap">
                            <div class="link-sections">
                                <div class="link-section">
                                    <div class="section-title-wrap violet">
                                        <h2 class="section-title small">Main Pages</h2>
                                        <div class="section-title-separator"></div>
                                    </div>
                                    <ul class="link-list medium">
                                        <li class="link-list-item">
                                            <a href="esports-home.html">eSports Home</a>
                                        </li>
                                        <li class="link-list-item">
                                            <a href="esports-news.html">eSports News</a>
                                        </li>
                                        <li class="link-list-item">
                                            <a href="esports-post.html">eSports Post Page</a>
                                        </li>
                                        <li class="link-list-item">
                                            <a href="esports-tournament.html">Tournament Page</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="link-section">
                                    <div class="section-title-wrap violet">
                                        <h2 class="section-title small">Match Overviews</h2>
                                        <div class="section-title-separator"></div>
                                    </div>
                                    <ul class="link-list medium">
                                        <li class="link-list-item">
                                            <a href="esports-match-overview-v1.html">Match Overview V1</a>
                                        </li>
                                        <li class="link-list-item">
                                            <a href="esports-match-overview-v2.html">Match Overview V2</a>
                                        </li>
                                        <li class="link-list-item">
                                            <a href="esports-match-overview-v3.html">Match Overview V3</a>
                                        </li>
                                        <li class="link-list-item">
                                            <a href="esports-match-overview-v4.html">Match Overview V4</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="link-section">
                                    <div class="section-title-wrap violet">
                                        <h2 class="section-title small">Teams &amp; Players</h2>
                                        <div class="section-title-separator"></div>
                                    </div>
                                    <ul class="link-list medium">
                                        <li class="link-list-item">
                                            <a href="esports-team.html">eSports Team Page</a>
                                        </li>
                                        <li class="link-list-item">
                                            <a href="esports-player.html">eSports Player Page</a>
                                        </li>
                                        <li class="link-list-item">
                                            <a href="esports-streamers.html">Streamers Page</a>
                                        </li>
                                        <li class="link-list-item">
                                            <a href="esports-calendar.html">Scores with Calendar</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="link-sections">
                                <div class="link-section">
                                    <div class="section-title-wrap violet">
                                        <h2 class="section-title small">Esports Widgets</h2>
                                        <div class="section-title-separator"></div>
                                    </div>
                                    <ul class="link-list medium">
                                        <li class="link-list-item">
                                            <a href="esports-widgets-v1.html">Widgets Page 01</a>
                                        </li>
                                    </ul>
                                    <ul class="link-list medium">
                                        <li class="link-list-item">
                                            <a href="esports-widgets-v2.html">Widgets Page 02</a>
                                        </li>
                                    </ul>
                                    <ul class="link-list medium">
                                        <li class="link-list-item">
                                            <a href="esports-widgets-v3.html">Widgets Page 03</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="link-sections">
                                <div class="link-section full">
                                    <div class="section-title-wrap violet">
                                        <h2 class="section-title small">Pixel Streamers</h2>
                                        <div class="section-title-separator"></div>
                                    </div>
                                    <div class="streamer-avatars">
                                        <div class="streamer-avatar">
                                            <a href="esports-streamers.html">
                                                <div class="pp-hexagon">
                                                    <svg class="hexagon-icon hexagon-border">
                                                        <use xlink:href="#svg-hexagon"></use>
                                                    </svg>
                                                    <svg class="hexagon-icon hexagon-fill">
                                                        <use xlink:href="#svg-hexagon"></use>
                                                    </svg>
                                                </div>
                                                <div class="streamer-avatar-img-wrap">
                                                    <img class="streamer-avatar-img"
                                                        src="{{ asset('/frontend/assets/img/streamers/streamer-hex-01.png')}}"
                                                        alt="st-avatar-01">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="streamer-avatar">
                                            <a href="esports-streamers.html">
                                                <div class="pp-hexagon">
                                                    <svg class="hexagon-icon hexagon-border">
                                                        <use xlink:href="#svg-hexagon"></use>
                                                    </svg>
                                                    <svg class="hexagon-icon hexagon-fill">
                                                        <use xlink:href="#svg-hexagon"></use>
                                                    </svg>
                                                </div>
                                                <div class="streamer-avatar-img-wrap">
                                                    <img class="streamer-avatar-img"
                                                        src="{{ asset('/frontend/assets/img/streamers/streamer-hex-02.png')}}"
                                                        alt="st-avatar-02">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="streamer-avatar">
                                            <a href="esports-streamers.html">
                                                <div class="pp-hexagon">
                                                    <svg class="hexagon-icon hexagon-border">
                                                        <use xlink:href="#svg-hexagon"></use>
                                                    </svg>
                                                    <svg class="hexagon-icon hexagon-fill">
                                                        <use xlink:href="#svg-hexagon"></use>
                                                    </svg>
                                                </div>
                                                <div class="streamer-avatar-img-wrap">
                                                    <img class="streamer-avatar-img"
                                                        src="{{ asset('/frontend/assets/img/streamers/streamer-hex-03.png')}}"
                                                        alt="st-avatar-03">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="streamer-avatar">
                                            <a href="esports-streamers.html">
                                                <div class="pp-hexagon">
                                                    <svg class="hexagon-icon hexagon-border">
                                                        <use xlink:href="#svg-hexagon"></use>
                                                    </svg>
                                                    <svg class="hexagon-icon hexagon-fill">
                                                        <use xlink:href="#svg-hexagon"></use>
                                                    </svg>
                                                </div>
                                                <div class="streamer-avatar-img-wrap">
                                                    <img class="streamer-avatar-img"
                                                        src="{{ asset('/frontend/assets/img/streamers/streamer-hex-04.png')}}"
                                                        alt="st-avatar-04">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="streamer-avatar">
                                            <a href="esports-streamers.html">
                                                <div class="pp-hexagon">
                                                    <svg class="hexagon-icon hexagon-border">
                                                        <use xlink:href="#svg-hexagon"></use>
                                                    </svg>
                                                    <svg class="hexagon-icon hexagon-fill">
                                                        <use xlink:href="#svg-hexagon"></use>
                                                    </svg>
                                                </div>
                                                <div class="streamer-avatar-img-wrap">
                                                    <img class="streamer-avatar-img"
                                                        src="{{ asset('/frontend/assets/img/streamers/streamer-hex-05.png')}}"
                                                        alt="st-avatar-05">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="link-sections-wrap">
                            <div class="link-sections">
                                <div class="link-section">
                                    <div class="section-title-wrap violet">
                                        <h2 class="section-title small">Featured Match</h2>
                                        <div class="section-title-separator"></div>
                                    </div>
                                    <div class="widget-match-box">
                                        <div class="widget-title-wrap">
                                            <h6 class="widget-title">Xenowatch league finals</h6>
                                            <p class="widget-text">August 28th, 2018</p>
                                        </div>
                                        <div class="widget-team-vs">
                                            <div class="widget-team-vs-item">
                                                <div class="team-info-wrap medium">
                                                    <img class="team-logo" src="{{ asset('/frontend/assets/img/teams/logos/01.png')}}"
                                                        alt="logo-01">
                                                    <div class="team-info">
                                                        <p class="team-name">The Lone Wolves</p>
                                                        <p class="team-country">United States</p>
                                                    </div>
                                                </div>
                                                <p class="team-score">12</p>
                                            </div>
                                            <div class="widget-team-vs-item">
                                                <div class="team-info-wrap medium">
                                                    <img class="team-logo" src="{{ asset('/frontend/assets/img/teams/logos/02.png')}}"
                                                        alt="logo-02">
                                                    <div class="team-info">
                                                        <p class="team-name">Raging Rhinos</p>
                                                        <p class="team-country">South Africa</p>
                                                    </div>
                                                </div>
                                                <p class="team-score">10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-match-box">
                                        <div class="widget-title-wrap">
                                            <h6 class="widget-title">Match Stats</h6>
                                            <div class="stats-reference">
                                                <div class="stat-reference blue">
                                                    <p class="stat-reference-text">TLW</p>
                                                </div>
                                                <div class="stat-reference yellow">
                                                    <p class="stat-reference-text">RRH</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-team-stats">
                                            <div class="progress-stat-wrap">
                                                <p class="bar-progress-info">Total Kills</p>
                                                <div id="mn-pg-1" class="progress-bar-wrap">
                                                    <div class="bar-progress-wrap left">
                                                        <p id="tlw-kills-stat" class="bar-progress-text"></p>
                                                    </div>
                                                    <div class="bar-progress-wrap right">
                                                        <p id="rrh-kills-stat" class="bar-progress-text"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-stat-wrap">
                                                <p class="bar-progress-info">Total Deaths</p>
                                                <div id="mn-pg-2" class="progress-bar-wrap">
                                                    <div class="bar-progress-wrap left">
                                                        <p id="tlw-deaths-stat" class="bar-progress-text"></p>
                                                    </div>
                                                    <div class="bar-progress-wrap right">
                                                        <p id="rrh-deaths-stat" class="bar-progress-text"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-stat-wrap">
                                                <p class="bar-progress-info">Total Assists</p>
                                                <div id="mn-pg-3" class="progress-bar-wrap">
                                                    <div class="bar-progress-wrap left">
                                                        <p id="tlw-assists-stat" class="bar-progress-text"></p>
                                                    </div>
                                                    <div class="bar-progress-wrap right">
                                                        <p id="rrh-assists-stat" class="bar-progress-text"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="link-sections-wrap">
                            <div class="link-sections">
                                <div class="link-section">
                                    <div class="section-title-wrap violet">
                                        <h2 class="section-title small">Featured Articles</h2>
                                        <div class="section-title-separator"></div>
                                    </div>
                                    <div class="post-preview-showcase grid-1col_1 gutter-small">
                                        <div class="post-preview tiny e-sport">
                                            <a href="esports-post.html">
                                                <div class="post-preview-img-wrap">
                                                    <figure class="post-preview-img liquid">
                                                        <img src="{{ asset('/frontend/assets/img/posts/05.jpg')}}" alt="post-36">
                                                    </figure>
                                                </div>
                                            </a>
                                            <a href="esports-post.html" class="post-preview-title">Gwen Parker is
                                                leading her team to the semifinals</a>
                                            <div class="post-author-info-wrap">
                                                <p class="post-author-info small light">By <a
                                                        href="search-results.html"
                                                        class="post-author">Dexter</a><span
                                                        class="separator">|</span>Dec 15th, 2018</p>
                                            </div>
                                        </div>
                                        <div class="post-preview tiny e-sport">
                                            <a href="esports-post.html">
                                                <div class="post-preview-img-wrap">
                                                    <figure class="post-preview-img liquid">
                                                        <img src="{{ asset('/frontend/assets/img/posts/06.jpg')}}" alt="post-38">
                                                    </figure>
                                                </div>
                                            </a>
                                            <a href="esports-post.html" class="post-preview-title">Pro Soccer 2018
                                                world
                                                league kicked off today!</a>
                                            <div class="post-author-info-wrap">
                                                <p class="post-author-info small light">By <a
                                                        href="search-results.html" class="post-author">Faye
                                                        V.</a><span class="separator">|</span>Dec 15th, 2018</p>
                                            </div>
                                        </div>
                                        <div class="post-preview tiny e-sport">
                                            <a href="esports-post.html">
                                                <div class="post-preview-img-wrap">
                                                    <figure class="post-preview-img liquid">
                                                        <img src="{{ asset('/frontend/assets/img/posts/07.jpg')}}" alt="post-37">
                                                    </figure>
                                                </div>
                                            </a>
                                            <a href="esports-post.html" class="post-preview-title">Last night the
                                                wolves
                                                beat the rhinos 12-10</a>
                                            <div class="post-author-info-wrap">
                                                <p class="post-author-info small light">By <a
                                                        href="search-results.html" class="post-author">Faye
                                                        V.</a><span class="separator">|</span>Dec 15th, 2018</p>
                                            </div>
                                        </div>
                                        <div class="post-preview tiny e-sport">
                                            <a href="esports-post.html">
                                                <div class="post-preview-img-wrap">
                                                    <figure class="post-preview-img liquid">
                                                        <img src="{{ asset('/frontend/assets/img/posts/08.jpg')}}" alt="post-39">
                                                    </figure>
                                                </div>
                                            </a>
                                            <a href="esports-post.html" class="post-preview-title">We had an
                                                interview
                                                with the great Emily Danniels</a>
                                            <div class="post-author-info-wrap">
                                                <p class="post-author-info small light">By <a
                                                        href="search-results.html"
                                                        class="post-author">Vellatrix</a><span
                                                        class="separator">|</span>Dec 15th, 2018</p>
                                            </div>
                                        </div>
                                        <div class="post-preview tiny e-sport">
                                            <a href="esports-post.html">
                                                <div class="post-preview-img-wrap">
                                                    <figure class="post-preview-img liquid">
                                                        <img src="{{ asset('/frontend/assets/img/posts/09.jpg')}}" alt="post-40">
                                                    </figure>
                                                </div>
                                            </a>
                                            <a href="esports-post.html" class="post-preview-title">The Siberian
                                                Tigers
                                                arrived at New York for the finals</a>
                                            <div class="post-author-info-wrap">
                                                <p class="post-author-info small light">By <a
                                                        href="search-results.html"
                                                        class="post-author">Vellatrix</a><span
                                                        class="separator">|</span>Dec 15th, 2018</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="main-menu-item">
                <a href="news-v1.html" class="main-menu-item-link">
                    <i class="fas fa-video fa-2x"></i>
                    <p>
                        Videos
                    </p>
                </a>
            </li>
            <li class="main-menu-item">
                <a href="news-v2.html" class="main-menu-item-link">
                    <i class="fas fa-database fa-2x"></i>
                    <p>
                        Database
                    </p>
                </a>
            </li>
            <li class="main-menu-item">
                <a href="index.html" class="main-menu-item-link">
                    <i class="fas fa-mobile fa-2x"></i>
                    <p>
                        Apps
                    </p>
                </a>
            </li>
            <li class="main-menu-item">
                <a href="index.html" class="main-menu-item-link">
                    <i class="fas fa-comment-alt fa-2x"></i>
                    <p>
                        Community
                    </p>
                </a>
            </li>
            <li class="main-menu-item">
                <a href="shop-v1-grid.html" class="main-menu-item-link">
                    <i class="fas fa-shopping-bag fa-2x"></i>
                    <p>
                        Shop
                        <svg class="arrow-icon">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                    </p>
                </a>
                <ul class="submenu void">
                    <li class="submenu-item v2">
                        <div id="submenu-slider-1" class="submenu-slider">
                            <ul class="dropdown-list submenu-slider-options">
                                <li class="dropdown-list-item">
                                    <p class="dropdown-list-item-link">New Releases</p>
                                    <svg class="arrow-icon medium">
                                        <use xlink:href="#svg-arrow-medium"></use>
                                    </svg>
                                </li>
                                <li class="dropdown-list-item">
                                    <p class="dropdown-list-item-link">Shop Features</p>
                                    <svg class="arrow-icon medium">
                                        <use xlink:href="#svg-arrow-medium"></use>
                                    </svg>
                                </li>
                                <li class="dropdown-list-item">
                                    <p class="dropdown-list-item-link">Powerstation</p>
                                    <svg class="arrow-icon medium">
                                        <use xlink:href="#svg-arrow-medium"></use>
                                    </svg>
                                </li>
                                <li class="dropdown-list-item">
                                    <p class="dropdown-list-item-link">Funtendo</p>
                                    <svg class="arrow-icon medium">
                                        <use xlink:href="#svg-arrow-medium"></use>
                                    </svg>
                                </li>
                                <li class="dropdown-list-item">
                                    <p class="dropdown-list-item-link">X-Rock</p>
                                    <svg class="arrow-icon medium">
                                        <use xlink:href="#svg-arrow-medium"></use>
                                    </svg>
                                </li>
                                <li class="dropdown-list-item">
                                    <p class="dropdown-list-item-link">Clothing &amp; Hats</p>
                                    <svg class="arrow-icon medium">
                                        <use xlink:href="#svg-arrow-medium"></use>
                                    </svg>
                                </li>
                                <li class="dropdown-list-item">
                                    <p class="dropdown-list-item-link">Merchandise</p>
                                    <svg class="arrow-icon medium">
                                        <use xlink:href="#svg-arrow-medium"></use>
                                    </svg>
                                </li>
                            </ul>
                            <div class="submenu-slider-items-wrap">
                                <div class="submenu-slider-items">
                                    <div class="submenu-slider-item submenu-slider-item-1">
                                        <div class="product-preview short">
                                            <div class="product-preview-img-wrap">
                                                <a href="product-page.html">
                                                    <figure class="product-preview-img liquid">
                                                        <img src="{{ asset('/frontend/assets/img/products/04.jpg')}}" alt="product-04">
                                                    </figure>
                                                </a>
                                            </div>
                                            <a href="product-page.html" class="product-preview-title">Mee U - kawai
                                                8
                                                bundle</a>
                                            <div class="product-preview-info">
                                                <a href="shop-v1-grid.html"
                                                    class="product-preview-category">Funtendo</a>
                                                <div class="rating-ornament small void yellow">
                                                    <div class="rating-ornament-item">
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="rating-ornament-item">
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="rating-ornament-item">
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="rating-ornament-item">
                                                        <svg class="rating-ornament-icon empty">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="rating-ornament-item">
                                                        <svg class="rating-ornament-icon empty">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-price-wrap">
                                                <p class="product-preview-price before"><span
                                                        class="currency">$</span>310.00</p>
                                                <p class="product-preview-price current"><span
                                                        class="currency">$</span>280.00</p>
                                            </div>
                                            <div class="button small violet add-to-bag">Add to bag</div>
                                        </div>
                                        <div class="link-sections">
                                            <div class="link-section">
                                                <div class="section-title-wrap violet">
                                                    <h2 class="section-title small">New Releases</h2>
                                                    <div class="section-title-separator"></div>
                                                </div>
                                                <ul class="link-list">
                                                    <li class="link-list-item">
                                                        <a href="shop-v1-grid.html">Shop 3 Columns Grid</a>
                                                    </li>
                                                    <li class="link-list-item">
                                                        <a href="shop-v1-list.html">Shop 3 Columns List</a>
                                                    </li>
                                                    <li class="link-list-item">
                                                        <a href="shop-v2.html">Shop 4 Columns</a>
                                                    </li>
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Description</a>
                                                    </li>
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Reviews</a>
                                                    </li>
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Specifications</a>
                                                    </li>
                                                    <li class="link-list-item">
                                                        <a href="inventory-bag.html">Inventory Bag (Cart)</a>
                                                    </li>
                                                    <li class="link-list-item">
                                                        <a href="checkout.html">Checkout Page</a>
                                                    </li>
                                                    <li class="link-list-item">
                                                        <a href="order-confirmation.html">Order Confirmation</a>
                                                    </li>
                                                </ul>
                                                <ul class="link-list">
                                                    <li class="link-list-item">
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    <li class="link-list-item">
                                                        <a href="product-compare.html">Product Compare</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submenu-slider-item submenu-slider-item-2">
                                        <div class="product-preview short">
                                            
                                            <div class="product-preview-img-wrap">
                                                
                                                <a href="product-page.html">
                                                    <figure class="product-preview-img liquid">
                                                        <img src="{{ asset('/frontend/assets/img/products/11.jpg')}}" alt="product-11">
                                                    </figure>
                                                </a>
                                                
                                            </div>
                                            

                                            
                                            <a href="product-page.html" class="product-preview-title">Diamond men's
                                                black...</a>
                                            
                                            <div class="product-preview-info">
                                                <!-- PRODUCT PREVIEW CATEGORY -->
                                                <a href="shop-v1-grid.html"
                                                    class="product-preview-category">Clothing
                                                    &amp; Hats</a>
                                                
                                                <div class="rating-ornament small void yellow">
                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                           

                                            
                                            <div class="product-price-wrap">
                                                <p class="product-preview-price current"><span
                                                        class="currency">$</span>16.00</p>
                                            </div>
                                            

                                            <!-- ADD TO BAG -->
                                            <div class="button small violet add-to-bag">Add to bag</div>
                                        </div>
                                        

                                        
                                        <div class="link-sections">
                                            
                                            <div class="link-section">
                                                
                                                <div class="section-title-wrap violet">
                                                    <h2 class="section-title small">Shop Features</h2>
                                                    <div class="section-title-separator"></div>
                                                </div>
                                                

                                                
                                                <ul class="link-list">
                                                    
                                                    <li class="link-list-item">
                                                        <a href="shop-v1-grid.html">Shop 3 Columns Grid</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="shop-v1-list.html">Shop 3 Columns List</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="shop-v2.html">Shop 4 Columns</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Description</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Reviews</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Specifications</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="inventory-bag.html">Inventory Bag (Cart)</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="checkout.html">Checkout Page</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="order-confirmation.html">Order Confirmation</a>
                                                    </li>
                                                    
                                                </ul>
                                                

                                                
                                                <ul class="link-list">
                                                    
                                                    <li class="link-list-item">
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-compare.html">Product Compare</a>
                                                    </li>
                                                    
                                                </ul>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    <!-- /SUBMENU SLIDER ITEM -->

                                    <!-- SUBMENU SLIDER ITEM -->
                                    <div class="submenu-slider-item submenu-slider-item-3">
                                        
                                        <div class="product-preview short">
                                            
                                            <div class="product-preview-img-wrap">
                                                
                                                <a href="product-page.html">
                                                    <figure class="product-preview-img liquid">
                                                        <img src="{{ asset('/frontend/assets/img/products/09.jpg')}}" alt="product-09">
                                                    </figure>
                                                </a>
                                                
                                            </div>
                                            

                                            
                                            <a href="product-page.html" class="product-preview-title">Galaxy
                                                Adventure
                                                RX...</a>
                                            
                                            <div class="product-preview-info">
                                                <!-- PRODUCT PREVIEW CATEGORY -->
                                                <a href="shop-v1-grid.html"
                                                    class="product-preview-category">Powerstation</a>
                                                
                                                <div class="rating-ornament small void yellow">
                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                           

                                            
                                            <div class="product-price-wrap">
                                                <p class="product-preview-price current"><span
                                                        class="currency">$</span>59.99</p>
                                            </div>
                                            

                                            <!-- ADD TO BAG -->
                                            <div class="button small violet add-to-bag">Add to bag</div>
                                        </div>
                                        

                                        
                                        <div class="link-sections">
                                            
                                            <div class="link-section">
                                                
                                                <div class="section-title-wrap violet">
                                                    <h2 class="section-title small">Powerstation</h2>
                                                    <div class="section-title-separator"></div>
                                                </div>
                                                

                                                
                                                <ul class="link-list">
                                                    
                                                    <li class="link-list-item">
                                                        <a href="shop-v1-grid.html">Shop 3 Columns Grid</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="shop-v1-list.html">Shop 3 Columns List</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="shop-v2.html">Shop 4 Columns</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Description</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Reviews</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Specifications</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="inventory-bag.html">Inventory Bag (Cart)</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="checkout.html">Checkout Page</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="order-confirmation.html">Order Confirmation</a>
                                                    </li>
                                                    
                                                </ul>
                                                

                                                
                                                <ul class="link-list">
                                                    
                                                    <li class="link-list-item">
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-compare.html">Product Compare</a>
                                                    </li>
                                                    
                                                </ul>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    <!-- /SUBMENU SLIDER ITEM -->

                                    <!-- SUBMENU SLIDER ITEM -->
                                    <div class="submenu-slider-item submenu-slider-item-4">
                                        
                                        <div class="product-preview short">
                                            
                                            <div class="product-preview-img-wrap">
                                                
                                                <a href="product-page.html">
                                                    <figure class="product-preview-img liquid">
                                                        <img src="{{ asset('/frontend/assets/img/products/08.jpg')}}" alt="product-08">
                                                    </figure>
                                                </a>
                                                
                                            </div>
                                            

                                            
                                            <a href="product-page.html" class="product-preview-title">Tales of Odd
                                                Dimensions</a>
                                            
                                            <div class="product-preview-info">
                                                <!-- PRODUCT PREVIEW CATEGORY -->
                                                <a href="shop-v1-grid.html"
                                                    class="product-preview-category">Funtendo</a>
                                                
                                                <div class="rating-ornament small void yellow">
                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon empty">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon empty">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                           

                                            
                                            <div class="product-price-wrap">
                                                <p class="product-preview-price current"><span
                                                        class="currency">$</span>59.99</p>
                                            </div>
                                            

                                            <!-- ADD TO BAG -->
                                            <div class="button small violet add-to-bag">Add to bag</div>
                                        </div>
                                        

                                        
                                        <div class="link-sections">
                                            
                                            <div class="link-section">
                                                
                                                <div class="section-title-wrap violet">
                                                    <h2 class="section-title small">Funtendo</h2>
                                                    <div class="section-title-separator"></div>
                                                </div>
                                                

                                                
                                                <ul class="link-list">
                                                    
                                                    <li class="link-list-item">
                                                        <a href="shop-v1-grid.html">Shop 3 Columns Grid</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="shop-v1-list.html">Shop 3 Columns List</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="shop-v2.html">Shop 4 Columns</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Description</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Reviews</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Specifications</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="inventory-bag.html">Inventory Bag (Cart)</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="checkout.html">Checkout Page</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="order-confirmation.html">Order Confirmation</a>
                                                    </li>
                                                    
                                                </ul>
                                                

                                                
                                                <ul class="link-list">
                                                    
                                                    <li class="link-list-item">
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-compare.html">Product Compare</a>
                                                    </li>
                                                    
                                                </ul>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    <!-- /SUBMENU SLIDER ITEM -->

                                    <!-- SUBMENU SLIDER ITEM -->
                                    <div class="submenu-slider-item submenu-slider-item-5">
                                        
                                        <div class="product-preview short">
                                            
                                            <div class="product-preview-img-wrap">
                                                
                                                <a href="product-page.html">
                                                    <figure class="product-preview-img liquid">
                                                        <img src="{{ asset('/frontend/assets/img/products/07.jpg')}}" alt="product-07">
                                                    </figure>
                                                </a>
                                                
                                            </div>
                                            

                                            
                                            <a href="product-page.html" class="product-preview-title">XRock One
                                                Bundle +
                                                Cam</a>
                                            
                                            <div class="product-preview-info">
                                                <!-- PRODUCT PREVIEW CATEGORY -->
                                                <a href="shop-v1-grid.html"
                                                    class="product-preview-category">Funtendo</a>
                                                
                                                <div class="rating-ornament small void yellow">
                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon empty">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                           

                                            
                                            <div class="product-price-wrap">
                                                <p class="product-preview-price current"><span
                                                        class="currency">$</span>399.00</p>
                                            </div>
                                            

                                            <!-- ADD TO BAG -->
                                            <div class="button small violet add-to-bag">Add to bag</div>
                                        </div>
                                        

                                        
                                        <div class="link-sections">
                                            
                                            <div class="link-section">
                                                
                                                <div class="section-title-wrap violet">
                                                    <h2 class="section-title small">X-Rock</h2>
                                                    <div class="section-title-separator"></div>
                                                </div>
                                                

                                                
                                                <ul class="link-list">
                                                    
                                                    <li class="link-list-item">
                                                        <a href="shop-v1-grid.html">Shop 3 Columns Grid</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="shop-v1-list.html">Shop 3 Columns List</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="shop-v2.html">Shop 4 Columns</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Description</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Reviews</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Specifications</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="inventory-bag.html">Inventory Bag (Cart)</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="checkout.html">Checkout Page</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="order-confirmation.html">Order Confirmation</a>
                                                    </li>
                                                    
                                                </ul>
                                                

                                                
                                                <ul class="link-list">
                                                    
                                                    <li class="link-list-item">
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-compare.html">Product Compare</a>
                                                    </li>
                                                    
                                                </ul>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    <!-- /SUBMENU SLIDER ITEM -->

                                    <!-- SUBMENU SLIDER ITEM -->
                                    <div class="submenu-slider-item submenu-slider-item-6">
                                        
                                        <div class="product-preview short">
                                            
                                            <div class="product-preview-img-wrap">
                                                
                                                <a href="product-page.html">
                                                    <figure class="product-preview-img liquid">
                                                        <img src="{{ asset('/frontend/assets/img/products/12.jpg')}}" alt="product-12">
                                                    </figure>
                                                </a>
                                                
                                            </div>
                                            

                                            
                                            <a href="product-page.html" class="product-preview-title">Diamond men's
                                                white...</a>
                                            
                                            <div class="product-preview-info">
                                                <!-- PRODUCT PREVIEW CATEGORY -->
                                                <a href="shop-v1-grid.html"
                                                    class="product-preview-category">Clothing
                                                    &amp; Hats</a>
                                                
                                                <div class="rating-ornament small void yellow">
                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                           

                                            
                                            <div class="product-price-wrap">
                                                <p class="product-preview-price current"><span
                                                        class="currency">$</span>16.00</p>
                                            </div>
                                            

                                            <!-- ADD TO BAG -->
                                            <div class="button small violet add-to-bag">Add to bag</div>
                                        </div>
                                        

                                        
                                        <div class="link-sections">
                                            
                                            <div class="link-section">
                                                
                                                <div class="section-title-wrap violet">
                                                    <h2 class="section-title small">Clothing &amp; Hats</h2>
                                                    <div class="section-title-separator"></div>
                                                </div>
                                                

                                                
                                                <ul class="link-list">
                                                    
                                                    <li class="link-list-item">
                                                        <a href="shop-v1-grid.html">Shop 3 Columns Grid</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="shop-v1-list.html">Shop 3 Columns List</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="shop-v2.html">Shop 4 Columns</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Description</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Reviews</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Specifications</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="inventory-bag.html">Inventory Bag (Cart)</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="checkout.html">Checkout Page</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="order-confirmation.html">Order Confirmation</a>
                                                    </li>
                                                    
                                                </ul>
                                                

                                                
                                                <ul class="link-list">
                                                    
                                                    <li class="link-list-item">
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-compare.html">Product Compare</a>
                                                    </li>
                                                    
                                                </ul>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    <!-- /SUBMENU SLIDER ITEM -->

                                    <!-- SUBMENU SLIDER ITEM -->
                                    <div class="submenu-slider-item submenu-slider-item-7">
                                        
                                        <div class="product-preview short">
                                            
                                            <div class="product-preview-img-wrap">
                                                
                                                <a href="product-page.html">
                                                    <figure class="product-preview-img liquid">
                                                        <img src="{{ asset('/frontend/assets/img/products/13.jpg')}}" alt="product-13">
                                                    </figure>
                                                </a>
                                                
                                            </div>
                                            

                                            
                                            <a href="product-page.html" class="product-preview-title">Diamond white
                                                enamel...</a>
                                            
                                            <div class="product-preview-info">
                                                <!-- PRODUCT PREVIEW CATEGORY -->
                                                <a href="shop-v1-grid.html"
                                                    class="product-preview-category">Merchandise</a>
                                                
                                                <div class="rating-ornament small void yellow">
                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    

                                                    
                                                    <div class="rating-ornament-item">
                                                        
                                                        <svg class="rating-ornament-icon empty">
                                                            <use xlink:href="#svg-star"></use>
                                                        </svg>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                           

                                            
                                            <div class="product-price-wrap">
                                                <p class="product-preview-price current"><span
                                                        class="currency">$</span>10.99</p>
                                            </div>
                                            

                                            <!-- ADD TO BAG -->
                                            <div class="button small violet add-to-bag">Add to bag</div>
                                        </div>
                                        

                                        
                                        <div class="link-sections">
                                            
                                            <div class="link-section">
                                                
                                                <div class="section-title-wrap violet">
                                                    <h2 class="section-title small">Merchandise</h2>
                                                    <div class="section-title-separator"></div>
                                                </div>
                                                

                                                
                                                <ul class="link-list">
                                                    
                                                    <li class="link-list-item">
                                                        <a href="shop-v1-grid.html">Shop 3 Columns Grid</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="shop-v1-list.html">Shop 3 Columns List</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="shop-v2.html">Shop 4 Columns</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Description</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Reviews</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-page.html">Product Specifications</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="inventory-bag.html">Inventory Bag (Cart)</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="checkout.html">Checkout Page</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="order-confirmation.html">Order Confirmation</a>
                                                    </li>
                                                    
                                                </ul>
                                                

                                                
                                                <ul class="link-list">
                                                    
                                                    <li class="link-list-item">
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    

                                                    
                                                    <li class="link-list-item">
                                                        <a href="product-compare.html">Product Compare</a>
                                                    </li>
                                                    
                                                </ul>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    <!-- /SUBMENU SLIDER ITEM -->
                                </div>
                                <!-- /SUBMENU SLIDER ITEMS -->
                            </div>
                            <!-- SUBMENU SLIDER ITEMS WRAP -->
                        </div>
                        <!-- /SUBMENU ITEM SLIDER -->
                    </li>
                    <!-- /SUBMENU ITEM -->
                </ul>
                <!-- /SUBMENU -->
            </li>
            

            <!-- MAIN MENU ITEM 
            <li class="main-menu-item">
                <a href="esports-home.html" class="main-menu-item-link">
                    <i class="fas fa-shopping-bag fa-2x"></i>
                    <p>
                        Dropdown1
                        <svg class="arrow-icon">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                    </p>
                </a>
                <ul class="dropdown-list dropdown violet">
                    <li class="dropdown-list-item">
                        <a href="#" class="dropdown-list-item-link">Esports News</a>
                    </li>
                    <li class="dropdown-list-item">
                        <a href="#" class="dropdown-list-item-link">Match Overviews</a>
                        <svg class="arrow-icon medium">
                            <use xlink:href="#svg-arrow-medium"></use>
                        </svg>
                        <ul class="dropdown-list dropdown violet">
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-item-link">Match Overview V1</a>
                            </li>
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-item-link">Match Overview V2</a>
                            </li>
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-item-link">Match Overview V3</a>
                            </li>
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-item-link">Match Overview V4</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown-list-item">
                        <a href="#" class="dropdown-list-item-link">Esports Results</a>
                    </li>
                    <li class="dropdown-list-item">
                        <a href="#" class="dropdown-list-item-link">Esports Widgets</a>
                    </li>
                    <li class="dropdown-list-item">
                        <a href="#" class="dropdown-list-item-link">Streamers</a>
                    </li>
                    <li class="dropdown-list-item">
                        <a href="#" class="dropdown-list-item-link">Esports Team Page</a>
                    </li>
                    <li class="dropdown-list-item">
                        <a href="#" class="dropdown-list-item-link">Esports Player Page</a>
                    </li>
                    <li class="dropdown-list-item">
                        <a href="#" class="dropdown-list-item-link">Torunament</a>
                    </li>
                </ul>
            </li>
            /MAIN MENU ITEM -->

            <!-- MAIN MENU ITEM
            <li class="main-menu-item">
                <a href="#" class="main-menu-item-link">
                    <i class="fas fa-shopping-bag fa-2x"></i>
                    <p>
                        Dropdown2
                        <svg class="arrow-icon">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                    </p>
                </a>
                <ul class="submenu void">
                    <li class="submenu-item padded">
                        <div class="link-sections">
                            <div class="link-section">
                                <div class="section-title-wrap blue">
                                    <h2 class="section-title small">Pixel Main Features</h2>
                                    <div class="section-title-separator"></div>
                                </div>
                                <ul class="link-list">
                                    <li class="link-list-item">
                                        <a href="index.html">Main Homepage</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="home-v2.html">Homepage V2</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="home-v3.html">Homepage V3</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="news-v1.html">News Page V1</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="news-v2.html">News Page V2</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="news-v3.html">News Page V3</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="news-v4.html">News Page V4</a>
                                    </li>
                                </ul>
                                <ul class="link-list">
                                    <li class="link-list-item">
                                        <a href="post-v1.html">Post Page V1</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="post-v2.html">Post Page V2</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="post-v3.html">Post Page V3</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="post-v4.html">Post Page V4</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="browse-videos.html">Browse Videos</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="post-video.html">Video Post Page</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="search-results.html">Search Results</a>
                                    </li>
                                </ul>
                                <ul class="link-list">
                                    <li class="link-list-item">
                                        <a href="calendar.html">Events Calendar</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="event.html">Open Event</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="404.html">404 Error Page</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="shortcodes.html">Shortcodes</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="menu-dropdowns.html">Menu &amp; Dropdowns</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="headers-dividers.html">Headers &amp; Dividers</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="pixel-popups.html">Pixel Popups</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="link-section">
                                <div class="section-title-wrap blue">
                                    <h2 class="section-title small">Account &amp; Company</h2>
                                    <div class="section-title-separator"></div>
                                </div>
                                <ul class="link-list">
                                    <li class="link-list-item">
                                        <a href="login-register.html">Login &amp; Register</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="login-register-popups.html">Login &amp; Register Popups</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="account-settings.html">Account Settings</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="orders-history.html">Account Orders</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="faq.html">FAQs Page</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="contact.html">Contact Page</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="sponsors.html">Sponsors Page</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="link-section">
                                <div class="section-title-wrap red">
                                    <h2 class="section-title small">Pixel Forums</h2>
                                    <div class="section-title-separator"></div>
                                </div>
                                <ul class="link-list">
                                    <li class="link-list-item">
                                        <a href="forum.html">Main Page</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="forum-categories.html">Category Page</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="topic.html">Main Topic</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="forum-badges.html">Badges Big &amp; Small</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="profile-summary.html">Profile Summary</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="profile-activity.html">Profile Activity</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="profile-notifications.html">Profile Notifications</a>
                                    </li>
                                </ul>
                                <ul class="link-list">
                                    <li class="link-list-item">
                                        <a href="profile-messages.html">Profile Messages</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="profile-badges.html">Profile Badges</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="profile-settings.html">Profile Settings</a>
                                    </li>
                                    <li class="link-list-item">
                                        <a href="forum-search-results.html">Forum Results</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="line-separator"></div>
                        <div class="news-items-preview">
                            <div class="post-preview gaming-news">
                                <a href="post-v1.html">
                                    <div class="post-preview-img-wrap">
                                        <figure class="post-preview-img liquid">
                                            <img src="assets/img/posts/09.jpg" alt="post-09">
                                        </figure>
                                    </div>
                                </a>
                                <a href="news-v1.html" class="tag-ornament">Gaming News</a>
                                <a href="post-v1.html" class="post-preview-title">New "Rizen" game is gonna be released
                                    in summer 2019</a>
                                <div class="post-author-info-wrap">
                                    <p class="post-author-info small light">By <a href="search-results.html"
                                            class="post-author">Vellatrix</a><span class="separator">|</span>December
                                        15th, 2018</p>
                                </div>
                                <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur bere adipisicing
                                    elit, sed do eiusmod por lorem incididunt ut labore.</p>
                            </div>
                            <div class="post-preview game-review">
                                <a href="post-v2.html">
                                    <div class="post-preview-img-wrap">
                                        <figure class="post-preview-img liquid">
                                            <img src="assets/img/posts/08.jpg" alt="post-08">
                                        </figure>
                                        <div class="review-rating">
                                            <div id="menu-rate-08-1" class="arc small"></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="news-v2.html" class="tag-ornament">Game Reviews</a>
                                <a href="post-v2.html" class="post-preview-title">The new mecha cyborg game is breaking
                                    barriers</a>
                                <div class="post-author-info-wrap">
                                    <p class="post-author-info small light">By <a href="search-results.html"
                                            class="post-author">Vellatrix</a><span class="separator">|</span>December
                                        15th, 2018</p>
                                </div>
                                <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur bere adipisicing
                                    elit, sed do eiusmod por lorem incididunt ut labore.</p>
                            </div>
                            <div class="post-preview e-sport">
                                <a href="esports-post.html">
                                    <div class="post-preview-img-wrap">
                                        <figure class="post-preview-img liquid">
                                            <img src="assets/img/posts/38.jpg" alt="post-38">
                                        </figure>
                                    </div>
                                </a>
                                <a href="esports-news.html" class="tag-ornament">Esports</a>
                                <a href="esports-post.html" class="post-preview-title">Pro Soccer 2017 world league
                                    kicked off today!</a>
                                <div class="post-author-info-wrap">
                                    <p class="post-author-info small light">By <a href="search-results.html"
                                            class="post-author">Faye V.</a><span class="separator">|</span>December
                                        15th, 2018</p>
                                </div>
                                <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur bere adipisicing
                                    elit, sed do eiusmod por lorem incididunt ut labore.</p>
                            </div>
                            <div class="post-preview geeky-news">
                                <a href="post-v4.html">
                                    <div class="post-preview-img-wrap">
                                        <figure class="post-preview-img liquid">
                                            <img src="assets/img/posts/02.jpg" alt="post-02">
                                        </figure>
                                    </div>
                                </a>
                                <a href="news-v4.html" class="tag-ornament">Geeky news</a>
                                <a href="post-v4.html" class="post-preview-title">Jessica Tam to star in the new
                                    "Charlotte" series</a>
                                <div class="post-author-info-wrap">
                                    <p class="post-author-info small light">By <a href="search-results.html"
                                            class="post-author">Vellatrix</a><span class="separator">|</span>December
                                        15th, 2018</p>
                                </div>
                                <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur bere adipisicing
                                    elit, sed do eiusmod por lorem incididunt ut labore.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>/MAIN MENU ITEM -->

            <!-- MAIN MENU ITEM
            <li class="main-menu-item">
                <a href="#" class="main-menu-item-link">
                    <i class="fas fa-shopping-bag fa-2x"></i>
                    <p>
                        Dropdown3
                        <svg class="arrow-icon">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                    </p>
                </a>
                <ul class="submenu">
                    <li class="submenu-item not-padded">
                        <div id="submenu-ns-news-slider" class="news-section-main-slider">
                            <div class="news-section-options-wrap">
                                <div class="news-section-options grid-limit">
                                    <div class="news-section-option blue">
                                        <h6 class="news-section-option-title">Gaming News</h6>
                                    </div>
                                    <div class="news-section-option red">
                                        <h6 class="news-section-option-title">Game Reviews</h6>
                                    </div>
                                    <div class="news-section-option yellow">
                                        <h6 class="news-section-option-title">Geeky News</h6>
                                    </div>
                                    <div class="news-section-option green">
                                        <h6 class="news-section-option-title">Movie Reviews</h6>
                                    </div>
                                    <div class="news-section-option violet">
                                        <h6 class="news-section-option-title">Esports</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="news-section-categories-wrap grid-limit">
                                <div class="news-section-categories">
                                    <div class="link-sections padded">
                                        <div class="link-section">
                                            <div class="section-title-wrap blue">
                                                <h2 class="section-title small">Main Sections</h2>
                                                <div class="section-title-separator"></div>
                                            </div>
                                            <ul class="link-list medium">
                                                <li class="link-list-item">
                                                    <a href="#">Featured Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Powerstation Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">X-Rock Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Funtendo Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">PC Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Mobile Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">VR Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Game Previews</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="news-section-slider">
                                            <div id="submenu-gn-controls" class="slider-controls blue">
                                                <div class="slider-control control-previous">
                                                    <svg class="arrow-icon medium">
                                                        <use xlink:href="#svg-arrow-medium"></use>
                                                    </svg>
                                                </div>
                                                <div class="slider-control control-next">
                                                    <svg class="arrow-icon medium">
                                                        <use xlink:href="#svg-arrow-medium"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div id="submenu-gn-slider1" class="news-section-items-wrap grid3-1col">
                                                <div class="news-section-items column">
                                                    <div class="post-preview gaming-news">
                                                        <a href="post-v1.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/13.jpg" alt="post-13">
                                                                </figure>
                                                            </div>
                                                        </a>
                                                        <a href="news-v1.html" class="tag-ornament">Gaming News</a>
                                                        <a href="post-v1.html" class="post-preview-title">The "Clash of
                                                            Eternity" new game was just released</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Dexter</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna..</p>
                                                    </div>
                                                    <div class="post-preview gaming-news">
                                                        <a href="post-v1.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/20.jpg" alt="post-20">
                                                                </figure>
                                                            </div>
                                                        </a>
                                                        <a href="news-v1.html" class="tag-ornament">Gaming News</a>
                                                        <a href="post-v1.html" class="post-preview-title">Legend of the
                                                            Temple is coming to all consoles</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Vellatrix</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview gaming-news">
                                                        <a href="post-v1.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/17.jpg" alt="post-17">
                                                                </figure>
                                                            </div>
                                                        </a>
                                                        <a href="news-v1.html" class="tag-ornament">Gaming News</a>
                                                        <a href="post-v1.html" class="post-preview-title">Jazzstar
                                                            announced that the GTE5 for PC is delayed</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Vellatrix</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview gaming-news">
                                                        <a href="post-v1.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/01.jpg" alt="post-01">
                                                                </figure>
                                                            </div>
                                                        </a>
                                                        <a href="news-v1.html" class="tag-ornament">Gaming News</a>
                                                        <a href="post-v1.html" class="post-preview-title">The Clash of
                                                            Dragons is breaking record sales</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Dexter</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview gaming-news">
                                                        <a href="post-v1.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/09.jpg" alt="post-09">
                                                                </figure>
                                                            </div>
                                                        </a>
                                                        <a href="news-v1.html" class="tag-ornament">Gaming News</a>
                                                        <a href="post-v1.html" class="post-preview-title">New "Rizen"
                                                            game is gonna be released in summer 2019</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Dexter</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview gaming-news">
                                                        <a href="post-v1.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/07.jpg" alt="post-07">
                                                                </figure>
                                                            </div>
                                                        </a>
                                                        <a href="news-v1.html" class="tag-ornament">Gaming News</a>
                                                        <a href="post-v1.html" class="post-preview-title">New Expansion
                                                            Pack coming to "Rise of Depredators"</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Dexter</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-sections padded">
                                        <div class="link-section">
                                            <div class="section-title-wrap red">
                                                <h2 class="section-title small">Main Sections</h2>
                                                <div class="section-title-separator"></div>
                                            </div>
                                            <ul class="link-list medium">
                                                <li class="link-list-item">
                                                    <a href="#">Featured Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Powerstation Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">X-Rock Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Funtendo Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">PC Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Mobile Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">VR Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Game Previews</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="news-section-slider">
                                            <div id="submenu-gr-controls" class="slider-controls red">
                                                <div class="slider-control control-previous">
                                                    <svg class="arrow-icon medium">
                                                        <use xlink:href="#svg-arrow-medium"></use>
                                                    </svg>
                                                </div>
                                                <div class="slider-control control-next">
                                                    <svg class="arrow-icon medium">
                                                        <use xlink:href="#svg-arrow-medium"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div id="submenu-gr-slider1" class="news-section-items-wrap grid3-1col">
                                                <div class="news-section-items column">
                                                    <div class="post-preview game-review">
                                                        <a href="post-v2.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/16.jpg" alt="post-16">
                                                                </figure>
                                                                <div class="review-rating">
                                                                    <div id="menu-rate-16-1" class="arc small"></div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="news-v2.html" class="tag-ornament">Game Reviews</a>
                                                        <a href="post-v2.html" class="post-preview-title">We reviewed
                                                            the new Magimons game</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Vellatrix</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna..</p>
                                                    </div>
                                                    <div class="post-preview game-review">
                                                        <a href="post-v2.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/08.jpg" alt="post-08">
                                                                </figure>
                                                                <div class="review-rating">
                                                                    <div id="menu-rate-08-3" class="arc small"></div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="news-v2.html" class="tag-ornament">Game Reviews</a>
                                                        <a href="post-v2.html" class="post-preview-title">The new mecha
                                                            cyborg game is breaking barriers</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Vellatrix</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview game-review">
                                                        <a href="post-v2.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/25.jpg" alt="post-25">
                                                                </figure>
                                                                <div class="review-rating">
                                                                    <div id="menu-rate-25-1" class="arc small"></div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="news-v2.html" class="tag-ornament">Game Reviews</a>
                                                        <a href="post-v2.html" class="post-preview-title">"Legend of
                                                            Kenshi II" is a bit green for now</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Vellatrix</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview game-review">
                                                        <a href="post-v2.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/05.jpg" alt="post-05">
                                                                </figure>
                                                                <div class="review-rating">
                                                                    <div id="menu-rate-05-1" class="arc small"></div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="news-v2.html" class="tag-ornament">Game Reviews</a>
                                                        <a href="post-v2.html" class="post-preview-title">We reviewed
                                                            the new and exciting game "Olympus"</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Morgana</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview game-review">
                                                        <a href="post-v2.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/10.jpg" alt="post-10">
                                                                </figure>
                                                                <div class="review-rating">
                                                                    <div id="menu-rate-10-1" class="arc small"></div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="news-v2.html" class="tag-ornament">Game Reviews</a>
                                                        <a href="post-v2.html" class="post-preview-title">Dragons and
                                                            Knights arrived with a big impression</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Vellatrix</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview game-review">
                                                        <a href="post-v2.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/31.jpg" alt="post-31">
                                                                </figure>
                                                                <div class="review-rating">
                                                                    <div id="menu-rate-31-1" class="arc small"></div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="news-v2.html" class="tag-ornament">Game Reviews</a>
                                                        <a href="post-v2.html" class="post-preview-title">Galaxy
                                                            Adventure RX is a boring remake of a classic</a>\
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Greyson</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-sections padded">
                                        <div class="link-section">
                                            <div class="section-title-wrap yellow">
                                                <h2 class="section-title small">Main Sections</h2>
                                                <div class="section-title-separator"></div>
                                            </div>
                                            <ul class="link-list medium">
                                                <li class="link-list-item">
                                                    <a href="#">Featured Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Powerstation Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">X-Rock Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Funtendo Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">PC Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Mobile Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">VR Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Game Previews</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="news-section-slider">
                                            <div id="submenu-gkn-controls" class="slider-controls yellow">
                                                <div class="slider-control control-previous">
                                                    <svg class="arrow-icon medium">
                                                        <use xlink:href="#svg-arrow-medium"></use>
                                                    </svg>
                                                </div>
                                                <div class="slider-control control-next">
                                                    <svg class="arrow-icon medium">
                                                        <use xlink:href="#svg-arrow-medium"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div id="submenu-gkn-slider1" class="news-section-items-wrap grid3-1col">
                                                <div class="news-section-items column">
                                                    <div class="post-preview geeky-news">
                                                        <a href="post-v4.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/02.jpg" alt="post-02">
                                                                </figure>
                                                            </div>
                                                        </a>
                                                        <a href="news-v4.html" class="tag-ornament">Geeky News</a>
                                                        <a href="post-v4.html" class="post-preview-title">Jessica Tam to
                                                            star in the new "Charlotte" series</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Vellatrix</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna..</p>
                                                    </div>
                                                    <div class="post-preview geeky-news">
                                                        <a href="post-v4.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/26.jpg" alt="post-26">
                                                                </figure>
                                                            </div>
                                                        </a>
                                                        <a href="news-v4.html" class="tag-ornament">Geeky News</a>
                                                        <a href="post-v4.html" class="post-preview-title">Sakura High
                                                            School anime will have it's own movie</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Vellatrix</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview geeky-news">
                                                        <a href="post-v4.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/19.jpg" alt="post-19">
                                                                </figure>
                                                            </div>
                                                        </a>
                                                        <a href="news-v4.html" class="tag-ornament">Geeky News</a>
                                                        <a href="post-v4.html" class="post-preview-title">Check out some
                                                            hearte bunny original design ideas</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Vellatrix</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview geeky-news">
                                                        <a href="post-v4.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/21.jpg" alt="post-21">
                                                                </figure>
                                                            </div>
                                                        </a>
                                                        <a href="news-v4.html" class="tag-ornament">Geeky News</a>
                                                        <a href="post-v4.html" class="post-preview-title">"Steamboat"
                                                            anime will have a preview event on May</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Morgana</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview geeky-news">
                                                        <a href="post-v4.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/18.jpg" alt="post-18">
                                                                </figure>
                                                            </div>
                                                        </a>
                                                        <a href="news-v4.html" class="tag-ornament">Geeky News</a>
                                                        <a href="post-v4.html" class="post-preview-title">"Ichigo Idol"
                                                            anime will have a new season in April</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Greyson</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview geeky-news">
                                                        <a href="post-v4.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/06.jpg" alt="post-06">
                                                                </figure>
                                                            </div>
                                                        </a>
                                                        <a href="news-v4.html" class="tag-ornament">Geeky News</a>
                                                        <a href="post-v4.html" class="post-preview-title">"Paper Cranes"
                                                            live-action movie is in development</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Greyson</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-sections padded">
                                        <div class="link-section">
                                            <div class="section-title-wrap green">
                                                <h2 class="section-title small">Main Sections</h2>
                                                <div class="section-title-separator"></div>
                                            </div>
                                            <ul class="link-list medium">
                                                <li class="link-list-item">
                                                    <a href="#">Featured Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Powerstation Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">X-Rock Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Funtendo Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">PC Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Mobile Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">VR Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Game Previews</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="news-section-slider">
                                            <div id="submenu-mn-controls" class="slider-controls green">
                                                <div class="slider-control control-previous">
                                                    <svg class="arrow-icon medium">
                                                        <use xlink:href="#svg-arrow-medium"></use>
                                                    </svg>
                                                </div>
                                                <div class="slider-control control-next">
                                                    <svg class="arrow-icon medium">
                                                        <use xlink:href="#svg-arrow-medium"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div id="submenu-mn-slider1" class="news-section-items-wrap grid3-1col">
                                                <div class="news-section-items column">
                                                    <div class="post-preview movie-news">
                                                        <a href="post-v3.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/12.jpg" alt="post-12">
                                                                </figure>
                                                                <div class="rating-ornament">
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon empty">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon empty">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="news-v3.html" class="tag-ornament">Movie News</a>
                                                        <a href="post-v3.html" class="post-preview-title">We reviewed
                                                            the "Guardians of the Universe" movie</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Faye
                                                                    V.</a><span class="separator">|</span>December 15th,
                                                                2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna..</p>
                                                    </div>
                                                    <div class="post-preview movie-news">
                                                        <a href="post-v3.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/42.jpg" alt="post-42">
                                                                </figure>
                                                                <div class="rating-ornament">
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon empty">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="news-v3.html" class="tag-ornament">Movie News</a>
                                                        <a href="post-v3.html" class="post-preview-title">"Bubblegum
                                                            Queen" is a really good dark drama</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Greyson</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview movie-news">
                                                        <a href="post-v3.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/30.jpg" alt="post-30">
                                                                </figure>
                                                                <div class="rating-ornament">
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon empty">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="news-v3.html" class="tag-ornament">Movie News</a>
                                                        <a href="post-v3.html" class="post-preview-title">"Tiger and
                                                            Serpent" is a great choice for kids</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Faye
                                                                    V.</a><span class="separator">|</span>December 15th,
                                                                2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview movie-news">
                                                        <a href="post-v3.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/03.jpg" alt="post-03">
                                                                </figure>
                                                                <div class="rating-ornament">
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="news-v3.html" class="tag-ornament">Movie News</a>
                                                        <a href="post-v3.html" class="post-preview-title">"The
                                                            Sandbenders II" break the bad sequel spell with a...</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Greyson</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview movie-news">
                                                        <a href="post-v3.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/43.jpg" alt="post-43">
                                                                </figure>
                                                                <div class="rating-ornament">
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="news-v3.html" class="tag-ornament">Movie News</a>
                                                        <a href="post-v3.html" class="post-preview-title">"The House of
                                                            Aquarium" is an animation masterpiece</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Greyson</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview movie-news">
                                                        <a href="post-v3.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/44.jpg" alt="post-44">
                                                                </figure>
                                                                <div class="rating-ornament">
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon empty">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon empty">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon empty">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="rating-ornament-item">
                                                                        <svg class="rating-ornament-icon empty">
                                                                            <use xlink:href="#svg-star"></use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="news-v3.html" class="tag-ornament">Movie News</a>
                                                        <a href="post-v3.html" class="post-preview-title">"Maxbass 2"
                                                            fails to capture the DJ's night world</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Faye
                                                                    V.</a><span class="separator">|</span>December 15th,
                                                                2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-sections padded">
                                        <div class="link-section">
                                            <div class="section-title-wrap violet">
                                                <h2 class="section-title small">Main Sections</h2>
                                                <div class="section-title-separator"></div>
                                            </div>
                                            <ul class="link-list medium">
                                                <li class="link-list-item">
                                                    <a href="#">Featured Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Powerstation Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">X-Rock Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Funtendo Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">PC Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Mobile Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">VR Reviews</a>
                                                </li>
                                                <li class="link-list-item">
                                                    <a href="#">Game Previews</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="news-section-slider">
                                            <div id="submenu-esn-controls" class="slider-controls violet">
                                                <div class="slider-control control-previous">
                                                    <svg class="arrow-icon medium">
                                                        <use xlink:href="#svg-arrow-medium"></use>
                                                    </svg>
                                                </div>
                                                <div class="slider-control control-next">
                                                    <svg class="arrow-icon medium">
                                                        <use xlink:href="#svg-arrow-medium"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div id="submenu-esn-slider1" class="news-section-items-wrap grid3-1col">
                                                <div class="news-section-items column">
                                                    <div class="post-preview e-sport">
                                                        <a href="esports-post.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/36.jpg" alt="post-36">
                                                                </figure>
                                                            </div>
                                                        </a>
                                                        <a href="esports-news.html" class="tag-ornament">Esports</a>
                                                        <a href="esports-post.html" class="post-preview-title">Gwen
                                                            Parker is leading her team to the semifinals</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Vellatrix</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview e-sport">
                                                        <a href="esports-post.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/37.jpg" alt="post-37">
                                                                </figure>
                                                            </div>
                                                        </a>
                                                        <a href="esports-news.html" class="tag-ornament">Esports</a>
                                                        <a href="esports-post.html" class="post-preview-title">Last
                                                            night the Wolves beat the Rhinos 12-10</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Faye
                                                                    V.</a><span class="separator">|</span>December 15th,
                                                                2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview e-sport">
                                                        <a href="esports-post.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/38.jpg" alt="post-38">
                                                                </figure>
                                                            </div>
                                                        </a>
                                                        <a href="esports-news.html" class="tag-ornament">Esports</a>
                                                        <a href="esports-post.html" class="post-preview-title">Pro
                                                            Soccer 2018 world league kicked off today!</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Faye
                                                                    V.</a><span class="separator">|</span>December 15th,
                                                                2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview e-sport">
                                                        <a href="esports-post.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/39.jpg" alt="post-39">
                                                                </figure>
                                                            </div>
                                                        </a>
                                                        <a href="esports-news.html" class="tag-ornament">Esports</a>
                                                        <a href="esports-post.html" class="post-preview-title">We had an
                                                            interview with the great Emily Danniels</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Vellatrix</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview e-sport">
                                                        <a href="esports-post.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/40.jpg" alt="post-40">
                                                                </figure>
                                                            </div>
                                                        </a>
                                                        <a href="esports-news.html" class="tag-ornament">Esports</a>
                                                        <a href="esports-post.html" class="post-preview-title">The
                                                            Siberian Tigers arrived at New York for the finals</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Vellatrix</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                    <div class="post-preview e-sport">
                                                        <a href="esports-post.html">
                                                            <div class="post-preview-img-wrap">
                                                                <figure class="post-preview-img liquid">
                                                                    <img src="img/posts/24.jpg" alt="post-24">
                                                                </figure>
                                                            </div>
                                                        </a>
                                                        <a href="esports-news.html" class="tag-ornament">Esports</a>
                                                        <a href="esports-post.html" class="post-preview-title">Jennifer
                                                            "Jean-G" Grey is destroying her enemies...</a>
                                                        <div class="post-author-info-wrap">
                                                            <p class="post-author-info small light">By <a href="search-results.html"
                                                                    class="post-author">Dexter</a><span
                                                                    class="separator">|</span>December 15th, 2018</p>
                                                        </div>
                                                        <p class="post-preview-text">Lorem ipsum dolor sit amet,
                                                            consectetur bere adipisicing elit, sed do eiusmod tempor
                                                            lorem incididunt ut labore et dolore magna.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            /MAIN MENU ITEM -->
        </ul>--}}
        <!-- Profil Menu -->
        <div class="profil-menu">
            <div class="log-link">
                <!-- Kalo Belum Login -->
                @if (Auth::guest())
                <div class="belum-login">
                    <a class="popup-login-trigger" href="#">login</a> | <a class="popup-register-trigger" href="#">daftar</a>
                </div>
            </div>
                @else
                <div class="sudah-login">
                    <a href="esports-home.html" class="main-menu-item-link">
                        <p>
                            {{Auth::user()->name}}
                            <svg class="arrow-icon">
                                <use xlink:href="#svg-arrow"></use>
                            </svg>
                        </p>
                    </a>
                    <ul class="dropdown-list dropdown violet">
                        <li class="dropdown-list-item">
                            <a href="#" class="dropdown-list-item-link">Histori</a>
                        </li>
                        @if(Auth::user()->role_id >= 3)
                        <li class="dropdown-list-item">
                            <a href="{{ route('dashboard') }}" class="dropdown-list-item-link">Admin Panel</a>
                        </li>
                        @endif
                        <li class="dropdown-list-item">
                            <a href="#" class="dropdown-list-item-link">Profil</a>
                        </li>
                        <li class="dropdown-list-item">
                        <a href="{{ route('logout') }}" class="dropdown-list-item-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="gambar">
                <img class="widget-option-img user-avatar" src="{{ asset(Auth::user()->image)}}" alt="Avatar for {{Auth::user()->name}}">
            </div>
            @endif
            <!-- INVENTORY BUTTON -->
            {{--<div class="inventory-button" style="margin-left: 35px;">
                <svg class="inventory-icon">
                    <use xlink:href="#svg-inventory"></use>
                </svg>
                <div class="inventory-item-quantity-wrap">
                    <p class="inventory-item-quantity">2</p>
                </div>
            </div>--}}
            <!-- SEARCH BUTTON -->
            <div class="search-button search-popup-open">
                <svg class="search-icon">
                    <use xlink:href="#svg-search"></use>
                </svg>
            </div>
        </div>
    </div>
    <!-- NAVIGATION -->
</nav>

@include('front.layouts.components.livenews')

<div id="forValidationFail" style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8); position: fixed; top: 0px; left: 0px; z-index: 100000; opacity: 0; visibility: hidden; transition: opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
</div>
<div id="popup-login-fail" class="popup-wrap medium" style="position: absolute; left: 50%; z-index: 100001; opacity: 0; visibility: hidden; transform: translate(0px, 100px); display: block; transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s; top: 180px; margin-left: -400px;">
    <div class="form-box-wrap">
        <div class="form-box-heading login">
            <div class="form-box-heading-title-wrap">
                <p class="form-box-heading-title">Hi!</p>
                <p class="form-box-heading-subtitle">Kami Senang akhirnya kamu kembali lagi!</p>
            </div>
            <p class="form-box-heading-text">Belum punya akun? <a href="#">Daftar Disini!</a> Gabung bersama komunitas kami!</p>
        </div>
        <div class="form-box-body">
            <div class="form-box">
                <div class="section-title-wrap blue">
                    <h2 class="section-title medium">Login dulu ke akun kamu</h2>
                    <div class="section-title-separator"></div>
                </div>
                <form class="form-wrap" method='POST' action="{{ route('login') }}">
                    @csrf
                    <div id="login-form-fail" class="form-row">
                        <div class="form-item blue">
                            <label for="login_email" class="rl-label">E-Mail:</label>
                            <input type="text" id="login_email" name="email"
                                placeholder="Masukkan E-Mail kamu...">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-item blue">
                            <label for="login_pwd" class="rl-label">Password</label>
                            <input type="password" id="login_pwd" name="password"
                                placeholder="Masukkan Password kamu...">
                        </div>
                    </div>
                    <div class="form-confirm-row">
                        <div class="checkbox-item">
                            <input type="checkbox" id="login_remember_ep" name="remember" value="remember"
                                checked>
                            <div class="checkbox-box blue">
                                <svg class="cross-cb-icon small">
                                    <use xlink:href="#svg-cross-cb-small"></use>
                                </svg>
                            </div>
                            <label for="login_remember_ep" class="rl-label">Simpan E-Mail dan Password</label>
                        </div>
                        <a href="#" class="link-text-form blue">Lupa Password?</a>
                    </div>
                    <div class="form-actions full">
                        <button type="submit" class="button blue full disabled" id="login_btn" disabled="true">Masuk!</button>
                        <div class="social-buttons">
                            {{-- <div style="padding-top: 20px; padding-left: 17%" class="fb-login-button" data-size="large" data-button-type="login_with" data-layout="rounded" data-auto-logout-link="false" data-use-continue-as="false" data-width="50"></div> --}}
                            <a href="/login-by/facebook" class="button-social fb fb-login-button">Facebook Login</a>
                            <a href="/login-by/google" class="button-social gplus gplus-login-button">Google Login</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-form-buttons">
                <p class="tab-form-button selected ">Login</p>
                <p class="tab-form-button">Daftar</p>
            </div>
        </div>
    </div>
</div>
<div id="popup-register-fail" class="popup-wrap medium" style="position: absolute; left: 50%; z-index: 100001; opacity: 0; visibility: hidden; transform: translate(0px, 100px); display: block; transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s; top: 116px; margin-left: -400px;">
    <div class="form-box-wrap">
        <div class="form-box-heading register">
            <div class="form-box-heading-title-wrap">
                <p class="form-box-heading-title">Hi!</p>
                <p class="form-box-heading-subtitle">Ayo daftar dan bergabung bersama komunitas kami!</p>
            </div>
            <p class="form-box-heading-text">Setelah mendaftar, kamu akan menerima E-Mail konfirmasi yang terdapat link untuk mengaktifkan akun kamu!</p>
        </div>
        <div class="form-box-body">
            <div class="form-box">
                <div class="section-title-wrap red">
                    <h2 class="section-title medium">Daftar Sekarang</h2>
                    <div class="section-title-separator"></div>
                </div>
            <form class="form-wrap" method="POST" action="{{ route('register') }}">
                @csrf
                    <div id="register-form-fail" class="form-row">
                        <div class="form-item red">
                            <label for="register_email" class="rl-label">E-Mail:</label>
                            <input type="text" id="register_email" name="email"
                                placeholder="Masukkan E-Mail kamu...">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-item red">
                            <label for="register_pwd" class="rl-label">Password</label>
                            <input type="password" id="register_pwd" name="password"
                                placeholder="Masukkan Password kamu...">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-item red">
                            <label for="register_pwd_repeat" class="rl-label">Ulangi Password</label>
                            <input type="password" id="register_pwd_repeat" name="password_confirmation"
                                placeholder="Tulis kembali Password kamu...">
                        </div>
                    </div>
                    <div class="form-actions full">
                        <button id="register_btn" class="button red full disabled" disabled="true">Buat akun!</button>
                        <p class="form-info-text">Cek E-Mail kamu setelah mendaftar!</p>
                    </div>
                </form>
            </div>
            <div class="tab-form-buttons">
                <p class="tab-form-button">Login</p>
                <p class="tab-form-button selected">Daftar</p>
            </div>
        </div>
    </div>
</div>