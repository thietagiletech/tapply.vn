@extends('theme::layouts.frontend')

@section('content')

@include('theme::layouts.includes.menu',
    ['menu' => 'detail']
)
<section class='term'>
    <div class='tapply-container'>
        <h1 class='titlesection'>
            CHÍNH SÁCH BẢO MẬT & QUYỀN RIÊNG TƯ
        </h1>
        <br>

        <h2>
            1. Chúng tôi thu thập những thông tin gì?
        </h2>
        <p>Chúng tôi thu nhập thông tin từ bạn khi bạn đăng ký trên trang web của chúng tôi. Khi bạn đăng ký tài khoản trên trang của chúng tôi, bạn sẽ cần nhập những thông tin sau: họ tên đầy đủ, email chính xác. Bạn vẫn có thể truy cập vào trang web của chúng tôi một cách không định danh.</p>

        <h2>
            2. Chúng tôi sẽ làm gì với thông tin của bạn?
        </h2>
        <p>Tapply sử dụng thông tin chúng tôi thu thập cho các mục đích chung: xác định và xác thực tài khoản, cải thiện dịch vụ, chăm sóc khách hàng và nghiên cứu. Thông tin và tài khoản này của bạn sẽ được lưu trữ không thời hạn để bạn có thể gia hạn dịch vụ bất cứ lúc nào.</p>
        
        <h2>
            4. Chúng tôi có cung cấp thông tin cho bên khác không?
        </h2>
        <p>
            Chúng tôi không bán, trao đổi, hoặc sử dụng các hình thức thương mại khác với những thông tin cá nhân của bạn. Tuy nhiên, thông tin không định danh của những người truy cập vào trang web có thể được sử dụng và cung cấp cho các bên khác nhằm mục đích marketing, quảng cáo hoặc mục đích sử dụng khác.
        </p>
    </div>
</section>

@include('theme::layouts.includes.listCart')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

@endsection