@extends('theme::layouts.frontend')

@section('content')

@include('theme::layouts.includes.menu',
['menu' => 'detail']
)
<section class='show-list-card'>
    <!-- Viết list sản phẩm ở đây nha -->
    <div class='tapply-container'>
        <h1 class='h1 titleSection tapply-text-center'>TẤT CẢ SẢN PHẨM</h1>  
        <ul class='filter d-desktop'>
            <b>Xếp theo :</b>
            <li>
                <label>
                    <input type="radio" class="card-filter" value="asc" data-name="name" data-url="{{ route('card.list') }}" name=filter>
                    <span>
                        Tên A-Z
                    </span>
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" class="card-filter" value="desc" data-name="name" data-url="{{ route('card.list') }}" name=filter>
                    <span>
                        Tên Z-A
                    </span>
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" class="card-filter" value="desc" data-name="id" data-url="{{ route('card.list') }}" name=filter>
                    <span>
                        Hàng mới
                    </span>
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" class="card-filter" value="asc" data-name="price" data-url="{{ route('card.list') }}" name=filter>
                    <span>
                        Giá thấp đến cao
                    </span>
                </label>
            </li>
            <li>
                <label>
                    <input type="radio"  class="card-filter" value="desc" data-name="price" data-url="{{ route('card.list') }}" name=filter>
                    <span>
                        Giá cao đến thấp
                    </span>
                </label>
            </li>
        </ul>
        <label class='d-mobie filter-mobie'>
            <b >
                Xếp theo :
            </b>
            <select name="filter" data-url="{{ route('card.list') }}" class="card-filter-mobile">
                <option  value="asc" data-name="name" >
                    Tên A-Z
                </option>
                <option  value="desc" data-name="name">
                    Tên Z-A
                </option>
                <option  value="desc" data-name="id">
                    Hàng mới
                </option>
                <option  value="asc" data-name="price">
                    Giá thấp đến cao
                </option>
                <option  value="desc" data-name="price">
                    Giá cao đến thấp
                </option>
            </select>
        </label>
        <div class="tapply-row" id="card-load">
            @include('theme::cardFilter')
        </div>
        <div class="ajax-load text-center" style="display:none">
            <p><img style="margin:auto;display:block;" src="{{ asset('themes/' . $theme->folder . '/img/home/filter.gif') }}"></p>
        </div>
    </div>
</section>

@include('theme::layouts.includes.listCart')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $('.card-filter').click(function(e) {
        var url = $(this).attr('data-url');
        var order = $(this).attr('data-name');
        var direction = $(this).val();
        loadMoreData(url, order, direction);
    });

    $('.card-filter-mobile').change(function(e) {
        var url = $(this).attr('data-url');
        var order = $(this).find(":selected").attr('data-name');
        var direction = $(this).val();
        loadMoreData(url, order, direction);
    });
    function loadMoreData(url, order, direction){
        $.ajax(
        {
            url: url,
            type: "get",
            data: {
                order,
                direction
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
            $('#card-load div').remove();
            $("#card-load").append(data.html);
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('server not responding...');
        });
	}
</script>
@endsection