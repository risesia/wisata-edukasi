<h1>Blog Posts</h1>

@foreach ($posts as $post)
    <article class="blog-post">
        <h2><a href="{{ route('blog-show', $post->id) }}">{{ $post->title }}</a></h2>
        <p>{{ $post->excerpt }}</p>
        @if ($post->banner_url)
            <img src="{{ $post->banner_url }}" alt="{{ $post->title }}">
        @endif
    </article>
@endforeach

<div class="pagination">
    {!! $posts->links() !!}
</div>
