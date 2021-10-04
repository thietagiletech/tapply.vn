@extends('theme::layouts.frontend')

@section('content')

@include('theme::layouts.includes.menu',
    ['menu' => 'detail']
)
<section class='term payment'>
    <div class='tapply-container'>
        <h1 class='titlesection tapply-color-primary'>
            ĐĂNG KÝ THÀNH CÔNG
        </h1>
        <h2 class='tapply-text-center' style='font-weight: 700;font-size: 16px;'>
            THẺ CỦA BẠN SẼ ĐƯỢC SẢN XUẤT TRONG VÒNG 5-7 NGÀY. SAU ĐÓ SẼ ĐƯỢC TAPPLY CHUYỂN PHÁT TẬN NHÀ CHO QUÝ KHÁCH.
        <br>
        <br>
        <span class='span'>
            TRONG THẺ ĐÃ BAO GỒM TỜ HƯỚNG DẪN SỬ DỤNG & KÍCH HOẠT THẺ ĐỂ BẠN TỰ THAY ĐỔI THÔNG TIN.
        </span>
        </h2>
        <h3 class='tapply-text-center' style='font-weight: 500;font-size: 14px;margin-bottom: 0.5rem;color: #555;'>
            Bạn có thể thanh toán trước theo các hình thức sau, hoặc có thể thanh toán khi nhận thẻ.
        </h3>
        <div class='tapply-flex'>
            <div class='tapply-row'>
                <div class='tapply-col-md-4 click-show-payment' data-block-id='ladi-element1'>
                    <figure class='tapply-box-icon-vertical'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 24 24" class="" fill="#000"> <path d="M20,14H4V8H9.08L7,10.83L8.62,12L11,8.76L12,7.4L13,8.76L15.38,12L17,10.83L14.92,8H20M20,19H4V17H20M9,4A1,1 0 0,1 10,5A1,1 0 0,1 9,6A1,1 0 0,1 8,5A1,1 0 0,1 9,4M15,4A1,1 0 0,1 16,5A1,1 0 0,1 15,6A1,1 0 0,1 14,5A1,1 0 0,1 15,4M20,6H17.82C17.93,5.69 18,5.35 18,5A3,3 0 0,0 15,2C13.95,2 13.04,2.54 12.5,3.35L12,4L11.5,3.34C10.96,2.54 10.05,2 9,2A3,3 0 0,0 6,5C6,5.35 6.07,5.69 6.18,6H4C2.89,6 2,6.89 2,8V19C2,20.11 2.89,21 4,21H20C21.11,21 22,20.11 22,19V8C22,6.89 21.11,6 20,6Z"></path> </svg>
                        <figcaption>
                            Thanh toán khi nhận hàng 
                            <b>
                                COD
                            </b>
                        </figcaption>
                    </figure>
                </div>       
                <div class='tapply-col-md-4 click-show-payment' data-block-id='ladi-element2'>
                    <figure class='tapply-box-icon-vertical'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 24 24" class="" fill="#000"> <path d="M21,8V6H7V8H21M21,16V11H7V16H21M21,4A2,2 0 0,1 23,6V16A2,2 0 0,1 21,18H7C5.89,18 5,17.1 5,16V6C5,4.89 5.89,4 7,4H21M3,20H18V22H3A2,2 0 0,1 1,20V9H3V20Z"></path> </svg>
                        <figcaption>
                            Thanh toán qua TK ngân hàng
                        </figcaption>
                    </figure>
                </div>        
                <div class='tapply-col-md-4 click-show-payment' data-block-id='ladi-element3'>
                    <figure class='tapply-box-icon-vertical'>
                        <img src="data:image/png;base64,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" alt="">
                        <figcaption>
                            Thanh toán qua ví điện tử MOMO
                        </figcaption>
                    </figure>
                </div>   
            </div> 
        </div>
        <div class='Paymentmethod'>
            <div class="ladi-element tapply-d-none ladi-element1">
                <div class="ladi-group">                   
                    <div id="HEADLINE210">
                        <p class="ladi-headline">
                            HỆ THỐNG MẶC ĐỊNH 
                            <b>
                                "THANH TOÁN KHI NHẬN HÀNG (COD).
                            </b>
                            BẠN CŨNG CÓ THỂ THANH TOÁN BẰNG 2 PHƯƠNG THỨC THANH TOÁN CÒN LẠI 
                            <b>
                                (Vietcombank &amp; Momo)
                            </b>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="ladi-element tapply-d-none ladi-element2">
                <div class="ladi-group">                                      
                    <p class="ladi-headline">
                        Sử dụng ứng dụng
                        <b> 
                            Vietcombank 
                        </b>
                        quét mã để chuyển tiền. Hoặc bạn cũng có thể chuyển khoản theo số tài khoản bên dưới:
                    </p>
                    <img src="{{ asset('themes/' . $theme->folder . '/img/home/vcb-20210322145431.jpg') }}" alt="">                
                </div>
            </div>
            <div class="ladi-element tapply-d-none ladi-element3">
                <div class="ladi-group">                                      
                    <h2 class="ladi-headline">
                        Nhấn thanh toán để tiếp tục
                    </h2>
                    <a href="https://nhantien.momo.vn/0366868913" class='btn btn-Tumbleweed'>
                        THANH TOÁN NGAY
                    </a>
                    <p>
                        Nội dung:_
                    </p>
                </div>
            </div>
        </div>       
    </div>
</section>
<style>
    .tapply-d-none{
        display:none !important;
    }
    .term.payment .btn-Tumbleweed{
        background:#AF3E6C;
        text-decoration:none;
        padding:1em 3rem; 
        display: inline-block;   
        margin:1.5rem auto;
        transition:0.3s ease-in-out;
        border:1px solid transparent;
    }
    @media (max-width:768px) {        
        .term.payment .btn-Tumbleweed{
            font-size:14px;
            padding:0.5em 1.5em;
        }
    }
    .term.payment .btn-Tumbleweed:hover{
        border:1px solid #AF3E6C;
        background:white;
        color:#AF3E6C;
    }
    .term.payment .btn-Tumbleweed img{        
        height:3em;
    }
    .tapply-row{
        max-width:800px;
        margin:auto auto 1rem;        
    }    
    @media (max-width:768px) {
        .tapply-row{
            margin:auto -5px 1rem;            
        }
    }
    .tapply-row .tapply-col-md-4{
        padding:0;
        max-width:33.33%;
    }
    .tapply-row .tapply-col-md-4 figure{
        margin:5px;
        font-size:12px
    }
    .Paymentmethod{
        display: flex;
        justify-content:center;
    }
    .ladi-element {
        max-width: 687px;
        width:100%;
        display: block;
    }
    .ladi-group img{
        max-width:100%;
    }
    .ladi-group {
        width: 100%;
        border-style: solid;
        border-color: rgb(0, 0, 0);
        border-width: 1px;
        border-radius: 15px;
        padding:3rem;        
        box-sizing:border-box;
        color:black !important;
        text-align:center;
    }
    .ladi-group b{
        font-weight:700;
    }
</style>

@include('theme::layouts.includes.listCart')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

@endsection