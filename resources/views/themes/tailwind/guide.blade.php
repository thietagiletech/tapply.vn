@extends('theme::layouts.frontend')

@section('content')

@include('theme::layouts.includes.menu',
    ['menu' => 'detail']
)

<section class='guides'>
    <div class='tapply-container'>
        <h1 class='titlesection'>
            HƯỚNG DẪN
        </h1>
        <div class='tapply-row'>
            @foreach($posts as $post)
                <div class='tapply-col-6 tapply-col-md-4'>
                    <figure class='guide'>
                        <picture>
                            <a target="_blank" style="text-decoration: none;color:#292929;" href="{{ $post->link }}">
                                <img src="{{ asset('storage/'.$post->image) }}" alt="">
                            </a>
                        </picture>
                        <figcaption>
                            <h5>
                                <a target="_blank" style="text-decoration: none;color:#292929;" href="{{ $post->link }}">
                                    {{ $post->title }}
                                </a>
                            </h5>
                        </figcaption>
                    </figure>
                </div>
            @endforeach
        </div>        
    </div>
</section>



@include('theme::layouts.includes.listCart')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

@endsection