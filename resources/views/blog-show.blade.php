<article class="blog-post">
    @if ($post)
        <h1>{{ $post->title }}</h1>
        {!! $post->content !!}
    @else
        <p>Not Found</p>
    @endif
</article>
 
