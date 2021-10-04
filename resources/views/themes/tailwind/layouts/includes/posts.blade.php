@foreach($posts as $post)
    <article class='new'>
        <figure>
            <a href="{{ route('news.show', $post->slug) }}">
                <img src="{{ asset('storage/'.$post->image) }}" alt="">
            </a>
            
        </figure>
        <div class='content'>
            <h3>
                <a style="text-decoration: none;color:#292929;" href="{{ route('news.show', $post->slug) }}">
                    {{ $post->title }}
                </a>
            </h3>
            <div class='date-type'>
                <p>
                    <img src="{{ asset('themes/' . $theme->folder . '/img/home/Notebook (1).png') }}" alt="">
                    <span>{{ $post->category->name }}</span>
                </p>
                <p>
                    <img src="{{ asset('themes/' . $theme->folder . '/img/home/Calendar.svg') }}" alt="">
                    <span>{{ date('d/m/Y', strtotime( $post->created_at )) }}</span>
                </p>
            </div>
            <p>
                {{ $post->excerpt }}                                
            </p>
        </div>
    </article>
@endforeach