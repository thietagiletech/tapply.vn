$(document).ready(function() {
    $('.click-show').click(
        function () {
            // tìm khối cần hiển thị
            // kiểm tra tình trạng hiện, ẩn
            $blockId = $('.' + $(this).attr('data-block-id'));
            $blockId.toggleClass('mobie-on');
        }
    )
    // khi di chuot vào khối thì tắt uwwindown listentd
    $('.ClickToShow,button,.click-show').mouseover(
        function () {
            // console.log('chuot hover button');
            $(window).off('mousedown');
        }
    )
    $('.ClickToShow , button,.click-show').mouseleave(
        function () {
            // console.log('chuot ben ngoai button');
            // khi di chuột    
            $(window).mousedown(
                function () {
                    $blockId = $('.' + $('.click-show').attr('data-block-id'));
                    if($('.links').hasClass('mobie-on')){
                        $blockId.toggleClass('mobie-on');
                    }                    
                }
            );
        }
    )
    $('.toggle-cart').click(function(){
            $('.OTC-cart-sidebar').toggleClass('active');
        }
    )  
    $('.toggle-cart,.OTC-cart-sidebar').mouseover(
        function () {
            // console.log('chuot hover button');
            $(window).off('mousedown');
        }
    )
    $('.toggle-cart,.OTC-cart-sidebar').mouseleave(
        function () {
            // console.log('chuot ben ngoai button');
            // khi di chuột    
            $(window).mousedown(
                function () {
                    $blockId = $('.OTC-cart-sidebar');
                    $blockId.removeClass('active');                                    
                }
            );
        }
    )
    $('.click-show-payment').click(
        function () {
            // tìm khối cần hiển thị
            // kiểm tra tình trạng hiện, ẩn
            $blockId = $('.' + $(this).attr('data-block-id'));
            $('.ladi-element').addClass('tapply-d-none');
            $blockId.toggleClass('tapply-d-none');
        }
    )    
    // click tang giá trị
    // $(" button.plush-button").click(
    //     function () {
    //         var $button = $(this);
    //         var oldValue = $button.parent().find("input").val();
    //         var newVal = parseFloat(oldValue) + 1;
    //         $button.parent().find("input").val(newVal);
    //     }
    // );
    // // click giam gia tri
    // $(" button.minus-button").click(
    //     function () {
    //         var $button = $(this);
    //         var oldValue = $button.parent().find("input").val();
    //         var newVal = parseFloat(oldValue) - 1;
    //         $button.parent().find("input").val(newVal);
    //     }
    // );
})
