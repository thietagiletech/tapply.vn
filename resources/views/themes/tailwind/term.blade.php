@extends('theme::layouts.frontend')

@section('content')

@include('theme::layouts.includes.menu',
    ['menu' => 'detail']
)
<section class='term'>
    <div class='tapply-container'>
        <h1 class='titlesection'>
            {{ $term->title }}
        </h1>
        <br>

        {!! $term->content !!}
    </div>
</section>

@include('theme::layouts.includes.listCart')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

@endsection