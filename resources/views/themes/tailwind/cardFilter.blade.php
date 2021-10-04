@foreach($cardList as $card)
    <div class='tapply-col-md-4 tapply-col-6'>                    
        <div class="card">
            <figure>
                <!-- <span class="hashtag">
                    SALE
                </span>    -->
                <!-- back-end-link -->
                <a href="{{ route('card.show', ['slug'=> $card->slug]) }}">
                    <div class="demo">
                        <!-- back-end-link -->
                        <img src="{{ setting('site.api_url').'/storage/'.$card->image_1 }}" alt="" class="font">
                        <!-- back-end-link -->
                        <img src="{{ setting('site.api_url').'/storage/'.$card->image_2 }}" alt="" class="back">                                    
                    </div>
                </a>
                <figcaption>
                    <div class="font">
                        <!-- back-end-link -->
                        <a style="text-decoration: none;" href="{{ route('card.show', $card->slug) }}">
                            <!-- back-end-link -->
                            <h3 class="card-name">{{ $card->name }}</h3>
                        </a>
                        <div class="tapply-text-center">
                            <p>
                                <!-- back-end-link -->
                                <span class="price">{{ product_price(($card->price)) }}</span>
                                @if($card->old_price)
                                <del class="old-price">{{ product_price($card->old_price) }}</del>
                                <!-- <span class="discount"></span> -->
                                @endif                                                                                 
                            </p>                                        
                        </div>
                    </div>
                    <div class="back">
                        <!-- back-end-link -->
                        <a href="{{ route('card.show', $card->slug) }}" class="btn-Tumbleweed">
                            Chi tiết
                        </a>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>
@endforeach
