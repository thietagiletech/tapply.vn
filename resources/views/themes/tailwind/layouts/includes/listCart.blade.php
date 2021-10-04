
<div class="OTC-cart-sidebar">
        <div class="cart-sidebar-top">
            <h2>
                Giỏ hàng
            </h2>
            <button type="button" class="f-button toggle-cart">  
                <img src="{{ asset('themes/' . $theme->folder . '/img/home/Frame 3599.png') }}" alt="">
            </button>
        </div>
        <div class="cart-sidebar-mid">
            <div class="cart-sidebar-mid-yes data-cart">
                @if(\Cart::session('cart')->getContent()->count() === 0)
                    <span>Hiện chưa có sản phẩm nào</span>
                @endif
                @foreach(\Cart::session('cart')->getContent() as $item)
                    <div class="cart-item">
                        <div class="cart-item-left">
                            <a href="#">
                                <img src="{{ setting('site.api_url').'/storage/'.$item['associatedModel']->image_front }}" alt="{{ $item['name'] }}">
                            </a>
                        </div>
                        <div class="cart-item-right">
                            <h4>{{ $item['name'] }}</h4>
                            <div class="cart-item-right-action">
                                <div class="cart-item-right-action-quantity">
                                    <button class="f-button decrease" type="button" data-price="{{ $item['price'] }}" data-url="{{ route('update.cart') }}" data-id="{{ $item['id'] }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M3.75 12H20.25" stroke="#616161" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    <input name="quantity" class="quantity" min="1" value="{{ $item['quantity'] }}">
                                    <button class="f-button add"  type="button" data-price="{{ $item['price'] }}" data-url="{{ route('update.cart') }}" data-id="{{ $item['id'] }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M3.75 12H20.25" stroke="#616161" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M12 3.75V20.25" stroke="#616161" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="cart-item-right-action-price">
                                    <p>{{ product_price($item['price']) }}</p>
                                </div>
                            </div>
                            <div class="cart-item-right-remove">
                                <button class="f-button rm-cart" data-url="{{ route('delete.cart') }}" data-id="{{ $item['id'] }}">                                    
                                    <img src="{{ asset('themes/' . $theme->folder . '/img/home/Trash.png') }}" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>
        </div>
        <div class="cart-sidebar-bot">
            <span>
                <label>Tổng</label>
                <h3 class="total-price">{{ product_price(\Cart::session('cart')->getTotal()) }}</h3>
            </span>
            <p>Thuế và phí vận chuyển được tính khi thanh toán.</p>

            @if(\Cart::session('cart')->getContent()->count() > 0)
                <a href="/checkout" class="add-to-cartProduct button dark btn-addtocart card-checkout">  
                    <span>TIẾN HÀNH ĐẶT HÀNG</span>
                </a>
            @else
                <a id="card-empty" class="add-to-cartProduct button dark btn-addtocart card-checkout">  
                    <span>TIẾN HÀNH ĐẶT HÀNG</span>
                </a>
            @endif

            <a href="">Xem giỏ hàng</a>
            <a href="javascript:void(0);" class="continue-shopping">Hoặc tiếp tục mua sắm</a>
        </div>
    </div>