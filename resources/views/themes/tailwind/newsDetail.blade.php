@extends('theme::layouts.frontend')

@section('content')

@include('theme::layouts.includes.menu',
    ['menu' => 'detail']
)

<style>
.tapply-container-detail img{
    width: auto;
    height: auto;
    max-width: 100%;
    margin: auto;
}
/* .tapply-container.tapply-container-detail,div{
    display: flex;
    flex-direction: column;
} */
</style>
<section class='term'>
    <div class='tapply-container tapply-container-detail'>
        <h1 class='titlesection'>
           {{ $post->title }}
        </h1>

        {!! $post->body !!}
    </div>
</section>

@include('theme::layouts.includes.listCart')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

@endsection