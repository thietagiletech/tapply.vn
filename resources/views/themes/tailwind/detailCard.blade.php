@extends('theme::layouts.frontend')

@section('content')

@include('theme::layouts.includes.menu',
['menu' => 'detail']
)

<section class="tapply-card-details">
<style>
        .container-loader{
            top: 0;
            left: 0;
            position: fixed;
            display: flex;      
            z-index: 99;                  
            width: 100vw;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }
        .container-loader .layer{
            position: fixed;
            background: rgba(0,0,0,.5);
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
            }

            @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
            }
            @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
            }
            .container-loader .loader{
                margin: auto;
                margin-top: calc(40vh - 60px );
                border: 16px solid white;
                border-radius: 50%;
                border-top: 16px solid transparent;
                width: 120px;
                height: 120px;
                -webkit-animation: spin 2s linear infinite; /* Safari */
                animation: spin 2s linear infinite;            
            }
    </style>
    <div class="container-loader" style='display:none;'>
        <div class="loader"></div>
        <div class="layer"></div>
    </div>
    <div class="tapply-container">       
        <aside class="left small-to-big-window">
            <ul class="small">
                {{-- @if($data->is_name_on_card === 1)
                <li>
                    <div class="small-item main-card">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="265" height="158" viewBox="0 0 265 158" fill="none">
                            <g clip-path="url(#clip0)">
                                <rect x="0.63208" width="263.571" height="157.747" rx="14" fill="white"></rect>
                                <rect class="card-color" x="0.63208" width="263.571" height="157.747" rx="14" fill="black" style="fill: rgb(13, 12, 34);"></rect>
                                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="265" height="158">
                                    <rect x="0.63208" width="263.571" height="157.747" rx="14" fill="white"></rect>
                                </mask>
                                <g mask="url(#mask0)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63208 0H35.4088L90.3194 157.747H18.9356L0.63208 105.164V0Z" fill="url(#paint0_linear)"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M101.301 0H44.5605L99.4711 157.747H156.212L101.301 0Z" fill="url(#paint1_linear)"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M150.721 0H55.5427L110.453 157.747H205.632L150.721 0Z" fill="url(#paint2_linear)"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M225.766 0H170.855L225.766 157.747H264.203V110.423L225.766 0Z" fill="url(#paint3_linear)"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M264.203 73.6151V157.747H247.73L192.819 0H238.578L264.203 73.6151Z" fill="url(#paint4_linear)"></path>
                                    <g filter="url(#filter0_ii)">
                                        <rect x="0.63208" width="263.571" height="157.747" rx="14" fill="black" fill-opacity="0.01"></rect>
                                    </g>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M231.673 67.9197L234.234 65.4854C242.008 72.8858 242.008 84.875 234.234 92.2633L231.673 89.829C238.038 83.7796 238.038 73.9691 231.673 67.9197ZM220.146 78.8743L223.988 75.2227C226.114 77.2433 226.114 80.5175 223.988 82.5258L220.146 78.8743ZM226.55 72.7883L229.111 70.354C234.055 75.0644 234.055 82.6962 229.111 87.3945L226.55 84.9601C230.085 81.6007 230.085 76.1477 226.55 72.7883Z" fill="white" fill-opacity="0.8" class="invent-color" style="fill: white;"></path>
                                    <rect x="24.6321" y="24" width="88" height="30" fill="url(#pattern0)" class="invent-img" style="filter: invert(0);"></rect>
                                </g>
                            </g>
                            <defs>
                                <filter id="filter0_ii" x="0.63208" y="0" width="263.571" height="158.247" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dy="1"></feOffset>
                                    <feGaussianBlur stdDeviation="0.25"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.05 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset></feOffset>
                                    <feGaussianBlur stdDeviation="0.25"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.02 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect1_innerShadow" result="effect2_innerShadow"></feBlend>
                                </filter>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0" transform="translate(0 -0.00297791) scale(0.00288184 0.00845341)"></use>
                                </pattern>
                                <linearGradient id="paint0_linear" x1="-44.2116" y1="0" x2="-44.2116" y2="157.747" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.101961"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0.01"></stop>
                                </linearGradient>
                                <linearGradient id="paint1_linear" x1="-55.1937" y1="0" x2="-55.1937" y2="157.747" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.101961"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0.01"></stop>
                                </linearGradient>
                                <linearGradient id="paint2_linear" x1="-74.4124" y1="0" x2="-74.4124" y2="157.747" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.101961"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0.01"></stop>
                                </linearGradient>
                                <linearGradient id="paint3_linear" x1="-46.042" y1="0" x2="-46.042" y2="157.747" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.101961"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0.01"></stop>
                                </linearGradient>
                                <linearGradient id="paint4_linear" x1="-35.0599" y1="0" x2="-35.0599" y2="157.747" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.101961"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0.01"></stop>
                                </linearGradient>
                                <clipPath id="clip0">
                                    <rect x="0.63208" width="263.571" height="157.747" rx="14" fill="white"></rect>
                                </clipPath>
                                <image id="image0" width="347" height="119" xlink:href="data:image/png;base64,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"></image>
                            </defs>
                        </svg>
                        <span style="color: white;"></span>
                    </div>
                </li>
                @else
                <li>
                    <div class="small-item main-card">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="265" height="158" viewBox="0 0 265 158" fill="none">
                            <g clip-path="url(#clip0)">
                                <rect x="0.63208" width="263.571" height="157.747" rx="14" fill="white"></rect>
                                <rect class="card-color" x="0.63208" width="263.571" height="157.747" rx="14" fill="black" style="fill: rgb(13, 12, 34);"></rect>
                                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="265" height="158">
                                    <rect x="0.63208" width="263.571" height="157.747" rx="14" fill="white"></rect>
                                </mask>
                                <g mask="url(#mask0)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.63208 0H35.4088L90.3194 157.747H18.9356L0.63208 105.164V0Z" fill="url(#paint0_linear)"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M101.301 0H44.5605L99.4711 157.747H156.212L101.301 0Z" fill="url(#paint1_linear)"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M150.721 0H55.5427L110.453 157.747H205.632L150.721 0Z" fill="url(#paint2_linear)"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M225.766 0H170.855L225.766 157.747H264.203V110.423L225.766 0Z" fill="url(#paint3_linear)"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M264.203 73.6151V157.747H247.73L192.819 0H238.578L264.203 73.6151Z" fill="url(#paint4_linear)"></path>
                                    <g filter="url(#filter0_ii)">
                                        <rect x="0.63208" width="263.571" height="157.747" rx="14" fill="black" fill-opacity="0.01"></rect>
                                    </g>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M231.673 67.9197L234.234 65.4854C242.008 72.8858 242.008 84.875 234.234 92.2633L231.673 89.829C238.038 83.7796 238.038 73.9691 231.673 67.9197ZM220.146 78.8743L223.988 75.2227C226.114 77.2433 226.114 80.5175 223.988 82.5258L220.146 78.8743ZM226.55 72.7883L229.111 70.354C234.055 75.0644 234.055 82.6962 229.111 87.3945L226.55 84.9601C230.085 81.6007 230.085 76.1477 226.55 72.7883Z" fill="white" fill-opacity="0.8" class="invent-color" style="fill: white;"></path>
                                    <rect x="24.6321" y="24" width="88" height="30" fill="url(#pattern0)" class="invent-img" style="filter: invert(0);"></rect>
                                </g>
                            </g>
                            <defs>
                                <filter id="filter0_ii" x="0.63208" y="0" width="263.571" height="158.247" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dy="1"></feOffset>
                                    <feGaussianBlur stdDeviation="0.25"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.05 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="shape" result="effect1_innerShadow"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset></feOffset>
                                    <feGaussianBlur stdDeviation="0.25"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.02 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect1_innerShadow" result="effect2_innerShadow"></feBlend>
                                </filter>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0" transform="translate(0 -0.00297791) scale(0.00288184 0.00845341)"></use>
                                </pattern>
                                <linearGradient id="paint0_linear" x1="-44.2116" y1="0" x2="-44.2116" y2="157.747" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.101961"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0.01"></stop>
                                </linearGradient>
                                <linearGradient id="paint1_linear" x1="-55.1937" y1="0" x2="-55.1937" y2="157.747" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.101961"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0.01"></stop>
                                </linearGradient>
                                <linearGradient id="paint2_linear" x1="-74.4124" y1="0" x2="-74.4124" y2="157.747" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.101961"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0.01"></stop>
                                </linearGradient>
                                <linearGradient id="paint3_linear" x1="-46.042" y1="0" x2="-46.042" y2="157.747" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.101961"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0.01"></stop>
                                </linearGradient>
                                <linearGradient id="paint4_linear" x1="-35.0599" y1="0" x2="-35.0599" y2="157.747" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.101961"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0.01"></stop>
                                </linearGradient>
                                <clipPath id="clip0">
                                    <rect x="0.63208" width="263.571" height="157.747" rx="14" fill="white"></rect>
                                </clipPath>
                                <image id="image0" width="347" height="119" xlink:href="data:image/png;base64,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"></image>
                            </defs>
                        </svg>
                        <span style="color: white;"></span>
                    </div>
                </li>
                @endif --}}

                @if($data->image_front && $data->is_name_on_card === 1)
                    <li class='main-card-small' data-color="{{$data->text_color ?? ''}}">               
                        <img src="{{ setting('site.api_url').'/storage/'.$data->image_front }}" alt="" class="small-item">
                    </li>
                @endif

                {{-- @if($data->image_back)
                    <li>
                        <img src="{{ setting('site.api_url').'/storage/'.$data->image_back }}" alt="" class="small-item">
                    </li>
                @endif --}}

                @if($data->image_1)
                    <li>
                        <img src="{{ setting('site.api_url').'/storage/'.$data->image_1 }}" alt="" class="small-item">
                    </li>
                @endif

                @if($data->image_2)
                    <li>
                        <img src="{{ setting('site.api_url').'/storage/'.$data->image_2 }}" alt="" class="small-item">
                    </li>
                @endif

                @if($data->image_3)
                    <li>
                        <img src="{{ setting('site.api_url').'/storage/'.$data->image_3 }}" alt="" class="small-item">
                    </li>
                @endif

                @if($data->image_4)
                    <li>
                        <img src="{{ setting('site.api_url').'/storage/'.$data->image_4 }}" alt="" class="small-item">
                    </li>
                @endif

                @if($data->image_5)
                    <li>
                        <img src="{{ setting('site.api_url').'/storage/'.$data->image_5 }}" alt="" class="small-item">
                    </li>
                @endif
            </ul>
            <div class="big">
                <figure class="big-window">
                    <img src="{{ $data->is_name_on_card === 1 ? setting('site.api_url').'/storage/'.$data->image_front : setting('site.api_url').'/storage/'.$data->image_1 }}" alt="" class="small-item" />
                </figure>
            </div>
        </aside>
        <aside class="right">
            <h1 class="h1 ">
                {{ $data->name }}
            </h1>
            <table>
                <tbody>
                    <tr>
                        <th>
                            <span class="price">
                                {{ product_price(($data->price)) }}
                            </span>
                        </th>
                        <td>
                            @if($data->old_price)
                            <del class="old-price">{{ product_price($data->old_price) }}</del>
                            @endif
                            <!-- <span class="discount">
                                -37%
                            </span> -->
                        </td>
                    </tr>
                    <!-- <tr>
                        <th>Tình trạng:</th>
                        <td>{{ $data->quantity > 0 ? 'Còn hàng' : 'Hết hàng' }}</td>
                    </tr>                    -->
                    <tr>
                        <th>Số lượng:</th>
                        <td>
                            <div class="cart-item-quantity">
                                <button class="minus-button abstract" id="decrease" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M3.75 12H20.25" stroke="#616161" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <input type="number" name="quantity" min="1" value="1" class="number quantity">
                                <button class="plush-button plus" type="button" id="increase">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M3.75 12H20.25" stroke="#616161" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12 3.75V20.25" stroke="#616161" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    {{-- <tr>
                        <th>Màu sắc:</th>
                        <td>
                            <label class="container-checkbox select-color" data-color="black">
                                <!-- Dat_edit_color -->
                                <span class='color-name'>Màu đen </span>
                                <input type="radio" name="select-color" id="select_color_black" value="0"/>
                                <span class="checkmark" style="background-color: #0d0c22; color: #0d0c22;"></span>
                            </label>
                            <label class="container-checkbox select-color" data-color="while">
                            <span class='color-name'>Màu trắng </span>
                                <input type="radio" name="select-color" id="select_color_while" value="0" />
                                <span class="checkmark" style="background-color: ghostwhite; color: ghostwhite;"></span>
                            </label>
                            <p class="error_color_card" style="color:red;"></p>                       
                        </td>
                    </tr> --}}
                </tbody>
            </table>
            @if($data->is_name_on_card === 1)
            <input type="hidden" id="status_card" value="1" />
            <input class='tapply-name' type="text" id="name_on_card" name="name_on_card" placeholder="Nhập tên của bạn ..." />
            <p class="error_name_on_card" style="color:red;"></p>
            @endif
            <div class=""></div>
            <button class="btn-buy cardBtn" data-card="{{ json_encode($data) }}" data-url="{{ route('add.cart') }}">
                ĐẶT HÀNG
            </button>
        </aside>
    </div>
</section>
<section class='description-card tapply-mb-4'>
    <div class='tapply-container'>
        <h2 class='h1 titleSection tapply-text-left'>
            MÔ TẢ SẢN PHẨM
        </h2>
        <main>
            {{ $data->description }}
        </main>
    </div>
</section>
<div id="detailsp"></div>
<section class="cards d-desktop bg-2">       
    <div class="tapply-container">
        <p class="titleSection">
            SẢN PHẨM LIÊN QUAN
        </p>
        <div class="swiper-container tapply-cards">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach($cardList as $cart)
                <div class="swiper-slide">
                    <!-- Dat_edit_link -->
                    <!-- thêm thẻ a boc ngoài div.card -->
                <a href="{{ route('card.show', $cart->slug) }}" class='non-decoration'>  
                    <div class="card">
                        <figure>
                            @if($cart->is_on_sale === 1)
                            <span class="hashtag">
                                SALE
                            </span>
                            @endif

                            <div class="demo">
                                <img src="{{ setting('site.api_url').'/storage/'.$cart->image_1 }}" alt="" class="font">
                                <img src="{{ setting('site.api_url').'/storage/'.$cart->image_2 }}" alt="" class="back">                                    
                            </div>
                            <figcaption>
                                <div class="font">
                                    <h3 class="card-name">{{ $cart->name }}</h3>
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
                </a>
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
</section>
<section class="cards2 d-mobie bg-2">
    <div class="tapply-container">
        <p class="titleSection">
            SẢM PHẨM LIÊN QUAN
        </p>
        <div class="tapply-row">
            @foreach($cardList as $cart)
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
                                    <img src="{{ setting('site.api_url').'/storage/'.$cart->image_1 }}" alt="" class="back">                                    
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
@include('theme::layouts.includes.listCart')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav',
    });
    $('.slider-nav').slick({
        vertical: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                vertical: false,
                dots: true,
                slidesToShow: 1,
                arrows: true
            }
        }]
    });
</script>

<script>
    $(document).ready(function() {
        $('.cardBtn').click(function(e) {
            e.preventDefault();
            var url = $(this).attr('data-url');
            var cart = $(this).attr('data-card');
            var quantity = $('.quantity').val();
            var nameOnCard = $('#name_on_card').val();
            var blackCard = $('#select_color_black').val();
            var whileCard = $('#select_color_while').val();
            var status = $('#status_card').val();
            if (status == 1) {
                if (nameOnCard == '') {
                    $('.error_name_on_card').text('Xin vui nhập tên cho thẻ');
                    return false;
                } else {
                    $('.error_name_on_card').text('');
                }
            }
            $('.container-loader').css('display','flex');
            // if (blackCard == 0 && whileCard == 0) {
            //     $('.error_color_card').text('Xin vui chọn màu');
            //     return false;
            // } else {
            //     $('.error_color_card').text('');
            // }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: url,
                method: 'post',
                data: {
                    cart: cart,
                    quantity: quantity,
                    nameOnCard,
                    blackCard,
                    whileCard
                },
                success: function(result) {
                    if (result.status === 'success') {
                        var url   = window.location.origin;
                        alertify.success('Thêm vào giỏ hàng thành công');
                        window.location.href= url+'/checkout';
                    }
                }
            });
        });
    });
</script>

<script>
    $(function() {
        $('.plus').on('click', function() {
            var $qty = $(this).parent().find('.quantity');
            var currentVal = parseInt($qty.val());
            if (!isNaN(currentVal)) {
                $qty.val(currentVal + 1);
            }
        });
        $('.abstract').on('click', function() {
            var $qty = $(this).parent().find('.quantity');
            var currentVal = parseInt($qty.val());
            if (!isNaN(currentVal) && currentVal > 0) {
                $qty.val(currentVal - 1);
            }
        });
    });
</script>


@endsection