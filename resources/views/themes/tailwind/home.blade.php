@extends('theme::layouts.frontend')

@section('content')
@include('theme::layouts.includes.menu',
['menu' => 'homepage']
)
<!-- ====================== -->
<!-- HƯỚNG DẪN SỬ DỤNG -->
<!-- ====================== -->
<section class="tapply-tutorial">
    <img class='bg' src="{{ asset('themes/' . $theme->folder . '/img/home/bg-section02.png') }}" alt="">
    <div class="tapply-container">
        <h3 class="h1 d-desktop">{{ setting('site.title') }}</h3>
        <h3 class="h1 d-mobie">{{ setting('site.title') }}</h3>
        <div class="tapply-row">
            <aside class="tapply-col-md-left">
                <img src="{{ asset('storage/' . setting('site.landing_page_session_2_image')) }}" alt="" class="tapply-maxw-100">
            </aside>
            <aside class="tapply-col-md-right ">
                <div class="features">
                    <span>
                         <img src="{{ asset('storage/' . setting('site.landing_page_session_2_icon_2')) }}" alt="">
                    </span>
                    <p class="title">
                        {{ setting('site.title') }}
                    </p>
                    <p class="content">
                        {{ setting('site.title') }}
                    </p>
                </div>
                <div class="features">
                    <span>
                        <img src="{{ asset('storage/' . setting('site.landing_page_session_2_icon_2')) }}" alt="">
                    </span>
                    <p class="title">
                        {{ setting('site.title') }}
                    </p>
                    <p class="content">
                        {{ setting('site.description') }}
                    </p>
                </div>
            </aside>
        </div>
    </div>
</section>
<section class="tapply-can">
    <div class="tapply-container">
        <p class="h1">
            {{ setting('site.landing_page_session_3_title') }}
        </p>
        <p class="decription">
            {!! setting('site.landing_page_session_2_description') !!}
        </p>
        <div class="tapply-row">
            <aside class="tapply-col-md-left">
                <img src="{{ asset('storage/' . setting('site.landing_page_session_3_background')) }}" alt="" class="tapply-maxw-100">
                <!--đấy dữ liệu -->
                <p class="tapply-text-center">
                    <b>
                        {{ setting('site.landing_page_session_3_title_button') }}
                    </b>
                </p>
            </aside>
            <aside class="tapply-col-md-right">
                <div class="features">
                    <div>
                        <figure>
                            <img src="{{ asset('storage/' . setting('site.landing_page_session_3_icon_1')) }}" alt="">
                        </figure>
                    </div>
                    <div>
                        <p class="title">
                            {{ setting('site.landing_page_session_3_title_child_1') }}
                        </p>
                        <p class="decription">
                            {{ setting('site.landing_page_session_3_description_child_1') }}
                        </p>
                    </div>
                </div>
                <div class="features">
                    <div>
                        <figure>
                            <img src="{{ asset('storage/' . setting('site.landing_page_session_3_icon_2')) }}" alt="">
                        </figure>
                    </div>
                    <div>
                        <p class="title">
                            {{ setting('site.landing_page_session_3_title_child_2') }}
                        </p>
                        <p class="decription">
                            {{ setting('site.landing_page_session_3_description_child_2') }}
                        </p>
                    </div>
                </div>
                <div class="features">
                    <div>
                        <figure>
                            <img src="{{ asset('storage/' . setting('site.landing_page_session_3_icon_3')) }}" alt="">
                        </figure>
                    </div>
                    <div>
                        <p class="title">
                            {{ setting('site.landing_page_session_3_title_child_3') }}
                        </p>
                        <p class="decription">
                            {{ setting('site.landing_page_session_3_description_child_3') }}
                        </p>
                    </div>
                </div>
                <div class="features">
                    <div>
                        <figure>
                            <img src="{{ asset('storage/' . setting('site.landing_page_session_3_icon_4')) }}" alt="">
                        </figure>
                    </div>
                    <div>
                        <p class="title">
                            {{ setting('site.landing_page_session_3_title_child_4') }}
                        </p>
                        <p class="decription">
                            {{ setting('site.landing_page_session_3_description_child_4') }}
                        </p>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<section class="you-can">
    <img class='bg' src="{{ asset('themes/' . $theme->folder . '/img/home/bg-section03.png') }}" alt="">
    <div class="tapply-container">
        <p class="h1">
            {{ setting('site.landing_page_session_4_title') }}
        </p>
        <div class="tapply-flex">
            <p class="decription">
                {{ setting('site.landing_page_session_4_description') }}
            </p>
        </div>
        <div class="tapply-row">
            <aside class="tapply-col-md-25">
                <div class="features">
                    <img src="{{ asset('storage/' . setting('site.landing_page_session_4_icon_1')) }}" alt="">
                    <div>
                        <p class="title">
                            {{ setting('site.landing_page_session_4_title_child_1') }}
                        </p>
                        <p class="description">
                            {{ setting('site.landing_page_session_4_description_child_1') }}
                        </p>
                    </div>
                </div>
                <div class="features">
                    <img src="{{ asset('storage/' . setting('site.landing_page_session_4_icon_2')) }}" alt="">
                    <div>
                        <p class="title">
                            {{ setting('site.landing_page_session_4_title_child_2') }}
                        </p>
                        <p class="description">
                            {{ setting('site.landing_page_session_4_description_child_2') }}
                        </p>
                    </div>
                </div>
            </aside>
            <main class="tapply-col-md-50">
                <img src="{{ asset('storage/' . setting('site.landing_page_session_4_background')) }}" alt="" class="tapply-maxw-100">
            </main>
            <aside class="tapply-col-md-25">
                <div class="features">
                    <img src="{{ asset('storage/' . setting('site.landing_page_session_4_icon_3')) }}" alt="">
                    <div>
                        <p class="title">
                            {{ setting('site.landing_page_session_4_title_child_3') }}
                        </p>
                        <p class="description">
                            {{ setting('site.landing_page_session_4_description_child_3') }}
                        </p>
                    </div>
                </div>
                <div class="features">
                    <img src="{{ asset('storage/' . setting('site.landing_page_session_4_icon_4')) }}" alt="">
                    <div>
                        <p class="title">
                            {{ setting('site.landing_page_session_4_title_child_4') }}
                        </p>
                        <p class="description">
                            {{ setting('site.landing_page_session_4_description_child_4') }}
                        </p>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- ppeding -->
<section class="order">
</section>
<div id="sp"></div>
<section class="cards d-desktop">
    <div class="tapply-container">
        <p class="titleSection">
            Đặt mua thẻ cá nhân thông minh Tapply
        </p>
        <div class="swiper-container tapply-cards">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach($data as $cart)
                <div class="swiper-slide">
                    <div class="card">
                        <figure>
                            @if($cart->is_on_sale === 1)
                            <span class="hashtag">
                                SALE
                            </span>
                            @endif
                            <a href="{{ route('card.show', $cart->slug) }}">
                                <div class="demo">
                                    <img src="{{ setting('site.api_url').'/storage/'.$cart->image_1 }}" alt="" class="font">
                                    <img src="{{ setting('site.api_url').'/storage/'.$cart->image_2 }}" alt="" class="back">
                                </div>
                            </a>
                            <figcaption>
                                <div class="font">
                                    <a style="text-decoration: none;" href="{{ route('card.show', $cart->slug) }}">
                                        <h3 class="card-name">{{ $cart->name }}</h3>
                                    </a>
                                    <div class="tapply-text-center">
                                        <p>
                                            <span class="price">{{ product_price(($cart->price)) }}</span>
                                            @if($cart->old_price)
                                            <del class="old-price">{{ product_price($cart->old_price) }}</del>
                                            <!-- <span class="discount"></span> -->
                                            @endif
                                            <!-- <span class="discount">-37%</span> -->
                                        </p>
                                    </div>
                                </div>
                                <div class="back">
                                    <a href="{{ route('card.show', $cart->slug) }}" class="btn-Tumbleweed">
                                        Chi tiết
                                    </a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination d-mobie"></div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev">
                <img src="{{ asset('themes/' . $theme->folder . '/img/home/Frame 3600.png') }}" alt="">
            </div>
            <div class="swiper-button-next">
                <img src="{{ asset('themes/' . $theme->folder . '/img/home/Frame 3600.png') }}" alt="">
            </div>
        </div>

        <div class="tapply-align-center" style="margin-top: 2em;">
            <a href="{{ route('card.list') }}">
                <button class="btn-outline-black" style=" color: black;border-color: black;">
                    XEM TẤT CẢ
                </button>
            </a>
        </div>
    </div>
</section>
<section class="cards2 d-mobie">
    <div class="tapply-container">
        <p class="titleSection">
            Đặt mua thẻ cá nhân thông minh Tapply
        </p>
        <div class="tapply-row">
            @foreach($data as $cart)
            <div class='tapply-col-50'>
                <div class="card">
                    <figure>
                        @if($cart->is_on_sale === 1)
                        <span class="hashtag">
                            {{ $cart->is_on_sale == 1 ? 'SALE' : '' }}
                        </span>
                        @endif
                        <a href="{{ route('card.show', $cart->slug) }}">
                            <div class="demo">
                                <img src="{{ setting('site.api_url').'/storage/'.$cart->image_1 }}" alt="" class="font">
                                <img src="{{ setting('site.api_url').'/storage/'.$cart->image_2 }}" alt="" class="back">
                            </div>
                        </a>
                        <figcaption>
                            <div class="font">
                                <a style="text-decoration: none;" href="{{ route('card.show', $cart->slug) }}">
                                    <h3 class="card-name">{{ $cart->name }}</h3>
                                </a>
                                <div class="tapply-text-center">
                                    <p>
                                        <span class="price">{{ product_price(($cart->price)) }}</span>
                                        @if($cart->old_price)
                                        <del class="old-price">{{ product_price($cart->old_price) }}</del>
                                        <!-- <span class="discount"></span> -->
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="back">
                                <a href="{{ route('card.show', $cart->slug) }}" class="btn-Tumbleweed">
                                    Chi tiết
                                </a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            @endforeach
        </div>
        <div class="tapply-align-center">
            <a href="{{ route('card.list') }}">
                <button class="btn-outline-black">
                    XEM TẤT CẢ
                </button>
            </a>
        </div>
    </div>
</section>
<section class="FAQ">
    <img class='bg' src="{{ asset('themes/' . $theme->folder . '/img/home/pricing.png') }}" alt="">
    <div class="tapply-container">
        <p class="titleSection">Những câu hỏi thường gặp</p>
        <div class="QA">
            <details>
                <summary class="question">1/ Dùng thẻ này có bị mất tài khoản Facebook, Instagram,Zalo,... không?</summary>
                <p class="answer">Chắc chắn là KHÔNG rồi. Các trang mạng xã hội bạn chia sẻ là các đường dẫn liên kết tới các trang đó. Tapply không yêu cầu khách hàng...
                </p>
            </details>
            <details>
                <summary class="question">
                    2/ Tôi có thể thêm/bớt thông tin theo ý muốn?
                </summary>
                <p class="answer">
                    Được chứ, bạn có thể thêm vô vàn mạng xã hộị của bạn mà không bị giới hạn.
                </p>
            </details>

            <details>
                <summary class="question">
                    3/ Khi bị đánh rơi thẻ, người khác có thể sửa thông tin của tôi không?
                </summary>
                <p class="answer">
                    - KHÔNG bạn nhé. Mỗi thẻ Tapply là một tài khoản riêng, được bảo mật bởi mật khẩu do chính các bạn sử dụng...
                </p>
            </details>

            <details>
                <summary class="question">

                    4/ Tôi có thể làm lại thẻ khi bị mất không?
                </summary>
                <p class="answer">
                    Được bạn nhé. Nếu mất thẻ, hãy liên hệ ngay với đội ngũ hỗ trợ của Tapply, bạn sẽ được cấp lại thẻ mới mà không cần phải thay đổi lại thông tin.
                </p>
            </details>
        </div>
    </div>
</section>

@include('theme::layouts.includes.listCart')
@endsection