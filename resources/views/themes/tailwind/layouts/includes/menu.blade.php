<header class="{{ $menu == 'homepage' ? '' : 'header-detail' }}">
    @if($menu == 'homepage')
        <div class="background">
            <!-- Slider main container -->
            <div class="swiper-container swiper-1-slide">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('storage/' .setting('site.landing_page_session_1_background_1')) }}">
                            <img src="{{ asset('storage/' .setting('site.landing_page_session_1_background_1')) }}" alt="">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('storage/' .setting('site.landing_page_session_1_background_2')) }}" alt="">
                    </div>
                    ...
                </div>
                <!-- If we need navigation buttons -->
                <!-- <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>             -->
            </div>
        </div>
    @endif
    <nav class="tapply-container">
        <aside>
            <button class="btn-outline-white toogle-menu-mobie click-show" data-block-id='links'>
                @if($menu == 'homepage')
                    <img src="{{ asset('themes/' . $theme->folder . '/img/home/List.png') }}" alt="">
                @else
                    <img src="{{ asset('themes/' . $theme->folder . '/img/home/List.png') }}" alt="" style="filter:brightness(0)">
                @endif
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                    </svg> -->
            </button>
            <!-- thêm class mobi-on khi ở dt để mở navbar-->
            <!-- <div class="links mobie-on ">  -->
            <div class="links">
                <button class="btn-outline-black d-mobie toogle-menu-mobie click-show" data-block-id='links'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                    </svg>
                </button>
                <hr class="d-mobie ">
                <a class="logo ClickToShow" href="#">
                    <img src="{{ asset('themes/' . $theme->folder . '/img/home/logo_header2.png') }}" alt="">
                </a>
                <ul class="tapply-navbar-collapse ClickToShow">
                    <li class="nav-item">
                        <a href="{{ route('wave.home') }}" class="nav-link active">
                            TRANG CHỦ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('guide.list') }}" class="nav-link">
                            HƯỚNG DẪN
                        </a>
                    </li>
                    <li class="nav-item">
                        @if($menu == 'homepage')
                            <a id="menu-link" href="/list/card" class="nav-link">
                                SẢN PHẨM
                            </a>
                        @else
                            <a id="menu-link" href="/list/card" class="nav-link">
                                SẢN PHẨM
                            </a>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('news.list') }}" class="nav-link">
                            TIN TỨC
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#footer-contact" class="nav-link">
                            LIÊN HỆ
                        </a>
                    </li>
                </ul>
                <div class="tapply-flex ClickToShow">
                    <a href="https://app.tapply.me/auth/cardactive">
                        <button class="btn-outline-black">
                            Đăng ký mở thẻ
                        </button>
                    </a>
                    <a href="https://app.tapply.me">
                        <button class="btn-outline-black sign-in">
                            Đăng nhập
                        </button>
                    </a>
                </div>
            </div>
        </aside>
        <div class="logo-container">
            <a class="tapply-logo" href="/">
                @if($menu == 'homepage')
                    <img src="{{ asset('themes/' . $theme->folder . '/img/home/logo_header.png') }}" alt="">
                @else
                    <img  src="{{ asset('themes/' . $theme->folder . '/img/home/logo_header2.png') }}" alt="">
                @endif
            </a>
        </div>
        <div class="cart-search">
            <div class="search ">
                 @if($menu == 'homepage')
                    <img src="{{ asset('themes/' . $theme->folder . '/img/home/MagnifyingGlass.svg') }}" alt="">
                @else
                    <img  src="{{ asset('themes/' . $theme->folder . '/img/home/MagnifyingGlass.svg') }}" alt="" style="filter:brightness(0)">
                @endif
            </div>
            <div class="cart toggle-cart">
                <!-- <button class="toggle-cart btn-outline-black">
                        <svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.96 22"> <title>Cart</title> <g data-name="Layer 2"> <g data-name="Layer 1"> <path d="M22.7,8l-3,13H4.3l-3-13H22.7M24,7H0L3.51,22H20.45L24,7Z"></path> <rect x="11.48" width="1" height="7"></rect> </g> </g></svg>
                    </button>   -->
                @if($menu == 'homepage')
                    <img src="{{ asset('themes/' . $theme->folder . '/img/home/ShoppingCartSimple.svg') }}" alt="">
                @else
                    <img src="{{ asset('themes/' . $theme->folder . '/img/home/ShoppingCartSimple.svg') }}" alt="" style="filter:brightness(0)">
                @endif
                
                <sub class="amount">{{ \Cart::session('cart')->getContent()->count() }}</sub>
            </div>
        </div>
    </nav>
    
    @if($menu == 'homepage')
        <div class="content tapply-container">
            <h1 class="h1">
                {{ setting('site.landing_page_session_1_title') }}
            </h1>
            <!-- <img src="img/logo_header.png" alt=""> -->
            <h2 class="h2">
                {!! setting('site.landing_page_session_1_description') !!}
                </h3>
                <!-- <p class="h3">
                    “CHẠM” hoặc “QUÉT”
                </p> -->
                <div class="container-btn">
                    <a id="buy-now-click" style="text-decoration: none;" href="#sp">
                        <button class="btn-Tumbleweed">
                                <span class="d-mobie">
                                    ĐẶT
                                </span>
                            MUA NGAY
                            <!-- <img class="sticker" src="img/home/bg-oval.png" alt=""> -->
                        </button>
                    </a>
                </div>
                <ul class="tips">
                    <!-- <li>
                        <div>
                            <span>
                                Không cần cài đặt ứng dụng
                            </span>
                            <img src="img/home/not-down.svg" alt="">
                        </div>
                    </li> -->
                    <li>
                        <div>
                            <p>
                                <img src="{{ asset('themes/' . $theme->folder . '/img/home/apple.svg') }}" alt="">
                                <span>
                                    Không cần cài đặt ứng dụng
                                    <br>
                                    Tương thích với cả iOS và Android
                                </span>
                                <img src="{{ asset('themes/' . $theme->folder . '/img/home/androd.svg') }}" alt="">
                            </p>
                        </div>
                    </li>
                </ul>
        </div>
    @endif
</header>