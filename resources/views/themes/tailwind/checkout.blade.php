@extends('theme::layouts.frontend')

@section('content')
<link href="{{ asset('themes/' . $theme->folder . '/css/style_checkout.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<div class="section01">
    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
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
    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div class="container">
        <div class="row">
            <div class="col-md-7 ">
                <div class="paymentLogo">
                    <img style="float: right;" class="img-fluid" src="{{ asset('themes/' . $theme->folder . '/img/home/logo_header2.png') }}">
                    <div style="margin-top: 20px;"><a style="text-decoration: none;text-decoration: none;font-size: 16px;color: #000;" href="{{ route('wave.home') }}">< Quay lại giỏ hàng</div>
                </div>
                <div class=" paymentContent">
                    <div class=" paymentMobile">
                        <div class="paymentMobile01">
                            <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="">
                                <i class="bi bi-cart2"></i>Thông tin đơn hàng
                            </a>
                            <!-- ==============Price============= -->
                            <div class="paymentPrice">
                                <!-- {{ product_price(\Cart::session('cart')->getTotal()) }} -->
                            </div>
                        </div>
                        <div class="collapse show " id="collapseExample">
                            @foreach(\Cart::session('cart')->getContent() as $item)
                            <div class="paymentItems">
                                <!-- ===================Items=============== -->
                                <div class="paymentItems01">
                                    <img class="img-fluid" src="{{ setting('site.api_url').'/storage/'.$item['associatedModel']->image_front }}" alt="{{ $item['name'] }}">
                                </div>
                                <div class="paymentItems02">
                                    <p style="font-weight: 500;margin-bottom: .5rem;">{{ $item['name'] }}</p>
                                    <div class="cart-item-right-action-quantity">
                                        <button style="border: 1px solid #ccc;" class="f-button decrease" type="button" data-price="{{ $item['price'] }}" data-url="{{ route('update.cart') }}" data-id="{{ $item['id'] }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M3.75 12H20.25" stroke="#616161" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                        <input style="width:40px;" name="quantity" class="quantity" min="1" value="{{ $item['quantity'] }}">
                                        <button style="border: 1px solid #ccc;" class="f-button add"  type="button" data-price="{{ $item['price'] }}" data-url="{{ route('update.cart') }}" data-id="{{ $item['id'] }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M3.75 12H20.25" stroke="#616161" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12 3.75V20.25" stroke="#616161" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="paymentItems03" style="text-align:center;margin: 0;">
                                <button style="border:none;background:none;" class="f-button rm-cart" data-url="{{ route('delete.cart') }}" data-id="{{ $item['id'] }}">                                    
                                    <img src="{{ asset('themes/' . $theme->folder . '/img/home/Trash.png') }}" alt="">
                                </button>
                                    <span style="color: #0D0C22;font-weight: bold;">{{ product_price($item['price']) }}</span>
                                </div>
                            </div>
                            @endforeach

                            <div class="paymentItems04">
                                <div class="paymentItems041" style="font-size: 24px;font-weight:bold;color:#0D0C22;">
                                    Tổng cộng:
                                </div>
                                <div class="paymentItems042" style="font-weight:bold;font-size:24px;">
                                    <!-- =============Total Price================ -->
                                    <span class="total-price">{{ product_price(\Cart::session('cart')->getTotal()) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <form id="form-payment" method="POST" target="#" class="paymentForm">
                            <h2 class="mb-3 mt-3">THÔNG TIN NHẬN HÀNG</h2>
                            <br>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" name="customer_name" placeholder="Họ và tên" required>
                                <small class="error_name" style="color:red;"></small>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-7 mb-3 col-6">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                        <small class="error_email" style="color:red;"></small>
                                    </div>
                                    <div class="col-md-5 mb-3 col-6">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại" required>
                                        <small class="error_phone" style="color:red;"></small>
                                    </div>
                                </div>

                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="address" name="shipping_address" placeholder="Địa chỉ" required>
                                <small class="error_address" style="color:red;"></small>
                            </div>
                            <div class="mb-3">
                                <textarea name="note" id="note" placeholder="Ghi chú" class="form-control" required></textarea>
                                <small class="error_note" style="color:red;"></small>
                            </div>

                            <div class="paymentBtn">
                                <div style="margin:auto;">
                                    <input type="hidden" value="{{ \Cart::session('cart')->getContent()->count() }}" id="card-count"/>
                                    <input type="submit" id="finish-order" data-url="{{ route('cart.order') }}" value="HOÀN TẤT ĐƠN HÀNG">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md paymentPC">
                <div>
                    @if(\Cart::session('cart')->getContent()->count() > 0)
                    @foreach(\Cart::session('cart')->getContent() as $item)
                    <div class="paymentItems">
                        <!-- ===================Items=============== -->
                        <div class="paymentItems01">
                            <img class="img-fluid" src="{{ setting('site.api_url').'/storage/'.$item['associatedModel']->image_front }}" alt="{{ $item['name'] }}">
                        </div>
                        <div class="paymentItems02">
                            <h6>{{ $item['name'] }}</h6>
                            <div class="cart-item-right-action-quantity">
                                <button style="border: 1px solid #ccc;" class="f-button decrease" type="button" data-price="{{ $item['price'] }}" data-url="{{ route('update.cart') }}" data-id="{{ $item['id'] }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M3.75 12H20.25" stroke="#616161" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                                <input style="width:40px;" name="quantity" class="quantity" min="1" value="{{ $item['quantity'] }}">
                                <button style="border: 1px solid #ccc;" class="f-button add"  type="button" data-price="{{ $item['price'] }}" data-url="{{ route('update.cart') }}" data-id="{{ $item['id'] }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M3.75 12H20.25" stroke="#616161" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 3.75V20.25" stroke="#616161" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                            <!-- <p>Số lượng: {{ $item['quantity'] }}</p> -->
                        </div>

                        <div class="paymentItems03" style="text-align:center;">
                            <button style="border:none;background:none;" class="f-button rm-cart" data-url="{{ route('delete.cart') }}" data-id="{{ $item['id'] }}">                                    
                                <img src="{{ asset('themes/' . $theme->folder . '/img/home/Trash.png') }}" alt="">
                            </button>
                            {{ product_price($item['price']) }}
                        </div>
                    </div>
                    @endforeach
                    @else
                    <h3> Bạn chưa có sản phẩm nào </h3>
                    @endif
                    <div class="paymentItems04">
                        <div style="font-size: 24px;font-weight:bold;color:#0D0C22;" class="paymentItems041">
                            Tổng cộng :
                        </div>
                        <div class="paymentItems042" style="font-weight:bold;font-size:24px;">
                            <!-- =============Total Price================ -->
                            <span class="total-price">{{ product_price(\Cart::session('cart')->getTotal()) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<br>
<br>

@endsection