@extends('theme::layouts.frontend')

@section('content')

@include('theme::layouts.includes.menu',
['menu' => 'detail']
)

<!-- <div>
    Viết tin tức ở đây nha
</div> -->
<section class='banner-news'>
    <div class="swiper-container swiper-1-slide tapply-cards">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            @foreach($slides as $slide)            
                <div class="swiper-slide">
                    <img src="{{ asset('storage/'.$slide->image) }}" alt="" class='img-banner'>
                    <div class='tapply-container'>
                        <h4 style="text-transform: uppercase;">
                            {{ $slide->category->name }}
                        </h4>
                        <h2>
                            {{ $slide->title}}
                        </h2>
                        <h3>
                            {{ $slide->excerpt}}
                        </h3>
                        <a href="{{ route('news.show', $slide->slug) }}" class='btn-white'>
                            <span>
                                xem thêm 
                            </span>
                            <img src="{{ asset('themes/' . $theme->folder . '/img/home/chevron-right.svg') }}" alt="">
                        </a>
                    </div>
                </div>   
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev">
            <img src="{{ asset('themes/' . $theme->folder . '/img/home/chevron-right.svg') }}" alt="">
        </div>
        <div class="swiper-button-next">
            <img src="{{ asset('themes/' . $theme->folder . '/img/home/chevron-right.svg') }}" alt="">
        </div>
    </div>
</section>
<section class='news'>
    <div class='tapply-container'>
        <div class='tapply-breadcrumb'>
            <a href="{{ route('wave.home') }}">Trang chủ</a>        
            <img src="{{ asset('themes/' . $theme->folder . '/img/home/chevron-right.svg') }}" alt="">
            <a href="#">
                Tin Tức
            </a>
        </div>
        <div class='tapply-row'>
            <aside class='tapply-col-md-4'>
                <label class='news-catalog'>
                    <header class='title'>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M14 14H22" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 18H22" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M26 5H6C5.44772 5 5 5.44772 5 6V26C5 26.5523 5.44772 27 6 27H26C26.5523 27 27 26.5523 27 26V6C27 5.44772 26.5523 5 26 5Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 5V27" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <span> Chuyên mục</span>
                    </header>
                    <!-- <select name="news-catalog " class='d-mobie' id="" size=1>
                        @foreach($categories as $cate)
                            <option value="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M14 14H22" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14 18H22" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26 5H6C5.44772 5 5 5.44772 5 6V26C5 26.5523 5.44772 27 6 27H26C26.5523 27 27 26.5523 27 26V6C27 5.44772 26.5523 5 26 5Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10 5V27" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{ $cate->name }}
                            </option>
                        @endforeach
                    </select> -->
                    <div class='select'>                      
                        @foreach($categories as $cate)                        
                            <a href="javascript:void(0)" class="cate-post" data-value="{{ $cate->id }}" data-url="{{ route('news.list') }}">
                                {{ $cate->name }}
                            </a>
                        @endforeach                       
                    </div>                
            </aside>
             <aside class='tapply-col-md-8'>
                 <div class='tapply-row-col' id="post-load">
                    @include('theme::layouts.includes.posts')
                 </div>                
                <div class='tapply-text-center'>
                    @include('theme::layouts.includes.paginate', ['paginator' => $posts])
                </div>
             </aside>   
        </div>
    </div>    
</section>




@include('theme::layouts.includes.listCart')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $('.cate-post').click(function(e) {
        var url = $(this).attr('data-url');
        var cate =  $(this).attr('data-value');
        var $active = $(this);
        loadMoreData(url, cate, $active);
    });

    function loadMoreData(url, cate, $active){
        $.ajax(
        {
            url: url,
            type: "get",
            data: {
                cate
            },
            beforeSend: function()
            {
                $('.ajax-load').show();
            }
        })
        .done(function(data)
        {
            if(data.html == " "){
                $('.ajax-load').html("No more records found");
                return;
            }
            $('.ajax-load').hide();
            $('#post-load .new').remove();
            $("#post-load").append(data.html);
            $('.cate-post').removeClass('active');
            $active.addClass('active');
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('server not responding...');
        });
	}
</script>
@endsection