<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @if(isset($seo['title']))
        <title>{{ $seo['title'] }}</title>
    @else
        <title>{{ setting('site.title', 'Laravel Wave') . ' - ' . setting('site.description', 'The Software as a Service Starter Kit built on Laravel & Voyager') }}</title>
    @endif

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"> <!-- † -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ url('/') }}">

    <link rel="icon" href="{{ asset('storage/' . setting('site.favicon')) }}" type="image/x-icon">
    <meta property="og:title" content="{{ isset($seo['title']) ? $seo['title'] : '' }}">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:image" content="{{ isset($seo['image']) ? $seo['image'] : ''}}">
    <meta property="og:image:secure" content="{{ isset($seo['image']) ? $seo['image'] : ''}}" />

    <meta property="og:type" content="">
    <meta property="og:description" content="{{ isset($seo['description']) ? $seo['description'] : '' }}">
    <meta property="og:site_name" content="{{ setting('site.title') }}">
    <meta itemprop="name" content="{{ isset($seo['title']) ? $seo['title'] : '' }}">
    <meta property="og:image:width" content="1801">
    <meta property="og:image:height" content="946">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PH27ND1S32"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-PH27ND1S32');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1183955365428959');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1183955365428959&ev=PageView&noscript=1"
        />
    </noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '316378856926821');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=316378856926821&ev=PageView&noscript=1"
    />
    </noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '223342256345350');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=223342256345350&ev=PageView&noscript=1"
        />
    </noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('themes/' . $theme->folder . '/css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.css">
    
</head>
<body>
   

    @yield('content')

    @include('theme::layouts.includes.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js"></script>
    <script src="{{ asset('themes/' . $theme->folder . '/js/main.js') }}"></script>
    <script src="{{ asset('themes/' . $theme->folder . '/js/card-details.js') }}"></script>
    <!-- <script>
        const swiper = new Swiper('.swiper-container.tapply-cards', {
        // Optional parameters
        slidesPerView: 1,
        loop: true,
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },
        breakpoints: {
            768: {
            slidesPerView: 3
            }
        },
        });
    </script> -->

    <!-- <script>
        $(document).ready(
            function(){
                $('.toggle-cart').click(
                    function(){
                        $('.OTC-cart-sidebar').toggleClass('active');
                    }
                )
                $('.toogle-menu-mobie').click(
                    function(){
                        $('header nav .links').toggleClass('mobie-on');
                    }
                )
            }
        )
    </script> -->

    <script>
        $(function () {
            $('.add').on('click',function() {
                var url = $(this).attr('data-url');
                var id = $(this).attr('data-id');
                var price = $(this).attr('data-price');
                var plus = 'plus';
                var $qty=$(this).parent().find('.quantity');
                var currentVal = parseInt($qty.val());
                if (!isNaN(currentVal)) {
                    $qty.val(currentVal + 1);
                }
                updateCart(url, plus , id, price);
            });
            $('.decrease').on('click',function() {
                var url = $(this).attr('data-url');
                var id = $(this).attr('data-id');
                var price = $(this).attr('data-price');
                var decrease = 'decrease';
                var $qty=$(this).parent().find('.quantity');
                var currentVal = parseInt($qty.val());
                if (!isNaN(currentVal)) {
                    $qty.val(currentVal - 1);
                }
                updateCart(url, decrease , id, price);
            });

            function updateCart(url, status, id, price) {
                $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });
                jQuery.ajax({
                  url: url,
                  method: 'post',
                  data: {
                    status,
                    id,
                    price
                  },
                  success: function(result){
                        if(result.status === 'success') {
                            $('.total-price').text(result.total);
                        }
                  }});
               };
        });
    </script>
    <script>
        $('.rm-cart').on('click',function() {
            var url = $(this).attr('data-url');
            var id = $(this).attr('data-id');
            $('.container-loader').css('display','flex');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: url,
                method: 'post',
                data: {
                    id
                },
            success: function(result){
                if(result.status === 'success') {
                    alertify.success('Xóa sản phẩm thành công');
                    window.location.reload();
                }
            }});
        });
        $('#buy-now-click, #menu-link').on('click', function() {
            console.log("anc");
            $('.OTC-cart-sidebar').removeClass('active');
            if($('.links').hasClass('mobie-on')){
                $('.links').removeClass('mobie-on')
            }
        })

        $('#card-empty').on('click', function() {
            alertify.error('Bạn chưa có sản phẩm nào');
            window.location.reload();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#finish-order').click(function(e) {
                e.preventDefault();
                var url = $(this).attr('data-url');
                var name = $('#name').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var address = $('#address').val();
                var note = $('#note').val();
                var cardCount = parseInt($("#card-count").val());
                if(cardCount === 0) {
                    alertify.error('Bạn chưa có sản phẩm nào để đặt hàng');
                    return false;
                }
                if(!name) {
                    $('.error_name').text('Xin vui lòng nhập Tên');
                    return false;
                } else {
                    $('.error_name').text('');
                }
                if(!email) {
                    $('.error_email').text('Xin vui lòng nhập email');
                    return false;
                } else {
                    $('.error_email').text('');
                }
                if(!address) {
                    $('.error_address').text('Xin vui lòng nhập địa chỉ');
                    return false;
                } else {
                    $('.error_address').text('');
                }
                if(!phone) {
                    $('.error_phone').text('Xin vui lòng nhập phone');
                    return false;
                } else {
                    $('.error_phone').text('');
                }
                if(!note) {
                    $('.error_note').text('Xin vui lòng nhập note');
                    return false;
                } else {
                    $('.error_note').text('');
                }
                $('.container-loader').css('display','flex');
                $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });
               jQuery.ajax({
                  url: url,
                  method: 'post',
                  data: {
                    name,
                    email,
                    phone,
                    address,
                    note,
                  },
                  success: function(result){
                    if(result.status === 'success') {
                        alertify.success('Hoàn tất đơn hàng  thành công');
                        window.location.href = '/payment';
                    } else {
                        alertify.error('Có lỗi xảy ra');
                        $('.container-loader').css('display','none');
                    }
                  }});
               });
        });
    </script>


    <script>
        const swiper = new Swiper('.swiper-container.tapply-cards', {
            // Optional parameters
            direction: 'horizontal',            
            slidesPerView:'auto',
            spaceBetween: 20,
            // centeredSlides:true,
            grabCursor: true,
            // loop: true,
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,                
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }, 
            breakpoints: {                
                768: {
                slidesPerView: 4
                }
            },
        });
        const swiper2 = new Swiper('.swiper-container.swiper-1-slide', {
            // Optional parameters
            spaceBetween: 0,
            direction: 'horizontal',
            // slidesPerView: 1,
            loop: true,
            observer: true, 
            observeParents: true,            
            speed:1500,
            autoplay: {
                delay: 3500,
            },            
            breakpoints: {
                768: {
                slidesPerView: 1
                }
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>
</html>
