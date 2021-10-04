@extends('theme::layouts.frontend')

@section('content')

@include('theme::layouts.includes.menu',
    ['menu' => 'detail']
)
<section class='term'>
    <div class='tapply-container'>
        <h1 class='titlesection'>
            CHÍNH SÁCH THANH TOÁN & GIAO HÀNG
        </h1>
        <br>

        <h2>
            1. Chính sách thanh toán
        </h2>
        <p>
            Chúng tôi chấp nhận 2 hình thức thanh toán
        </p>
        <p>
            - Thanh toán khi nhận hàng (COD).
        </p>
        <p>
            - Thanh toán qua Ngân hàng hoặc Ví điện tử (Chuyển khoản)
        </p>

        <h2>
            2. Chính sách giao hàng
        </h2>
        <p>
            Tapply sử dụng thông tin đặt hàng của quý khách trên Website bao gồm: tên, số điện thoại, địa chỉ để cung cấp với đơn vị vận chuyển.
        </p>
    </div>
</section>

@include('theme::layouts.includes.listCart')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

@endsection