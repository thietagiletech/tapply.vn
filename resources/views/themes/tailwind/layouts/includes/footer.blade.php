<footer id="footer-contact">   
    <img class='bg-footer' src="{{ asset('storage/' . setting('site.footer_background')) }}" alt="">   
    <!-- <img class='bg-footer-mobile' src="{{ asset('themes/' . $theme->folder . '/img/home/bg_footer_mobile.png') }}" alt="">    -->
    <div class="tapply-container">
        <div class="tapply-row">
            <div class="tapply-col">
                <img src="{{ asset('themes/' . $theme->folder . '/img/home/logo_footer_2.png') }}" alt="" class="logo">
                <div class="tapply-text-center">
                    <p>Theo dõi chúng tôi qua</p>
                    <div>
                        <a href="#">
                            <img src="{{ asset('themes/' . $theme->folder . '/img/home/icons_facebook_footer.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('themes/' . $theme->folder . '/img/home/icon_messenger_footer.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>    
            <address class="tapply-col">                    
                <p>Thông tin liên hệ</p>
                <div class="icon-text">
                    <img src="{{ asset('themes/' . $theme->folder . '/img/home/2560px-Gmail_icon_(2020) .svg') }}" alt="">
                    <a href="mailto:tapplyvietnam@gmail.com">
                        {{ setting('site.footer_info_1') }}
                    </a>
                </div>
                <div class="icon-text">
                    <img src="{{ asset('themes/' . $theme->folder . '/img/home/icon_phone.png') }}" alt="">
                    <a href="tel:+0763795674">
                        {{ setting('site.footer_info_2') }}
                    </a>
                </div>
                <div class="icon-text">
                    <img src="{{ asset('themes/' . $theme->folder . '/img/home/icon_MapPin.png') }}" alt="">
                    <a href="https://goo.gl/maps/d2P5FjP6NGGpYC977">
                        {{ setting('site.footer_info_4') }}
                    </a>
                </div>
                <div class="icon-text">
                    <img src="{{ asset('themes/' . $theme->folder . '/img/home/icon_Timer.png') }}" alt="">
                    <p>
                        {{ setting('site.footer_info_3') }}
                    </p>
                </div>
            </address>          
            <div class="tapply-col">                    
                <p>Điều khoản - Chính sách</p>
                <a href="{{ route('term.list') }}">
                    Điều khoản dịch vụ
                </a>
                <a href="{{ route('privacy') }}">
                    Chính sách bảo mật &amp; quyền riêng tư
                </a>
                <a href="{{ route('shipping_payment') }}">
                    Chính sách thanh toán &amp; giao hàng
                </a>
            </div>      
            <div class="tapply-col">                    
                <p>Tin tức - Hướng dẫn</p>
                <a href="{{ route('news.list') }}">
                    Tin tức
                </a>
                <a href="{{ route('guide.list') }}">
                    Hướng dẫn
                </a>
            </div> 
        </div>
        <hr>
        <div class="coppyright">
            <p>
                ©2021 All rights reserved Tapply Vietnam
            </p>
        </div>
    </div>
</footer>