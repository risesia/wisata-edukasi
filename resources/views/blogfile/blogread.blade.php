@include("component.navbar")


<section class="text-darkblue bg-babyblue">
    <div class="container mx-auto flex px-5 py-10 items-center justify-center flex-col">
        <img class="lg:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="{{ $post->title }}"
             src="{{$post->banner_url ? $post->banner_url : 'https://dummyimage.com/720x400'}}">
        <div class="text-center lg:w-2/3 w-full">
            <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-2">{{ strftime('%d/%m/%Y', strtotime($post->published_at)) }}</h2>
            <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-2">Ditulis
                oleh {{ $author }}</h2>
            <h1 class="title-font sm:text-4xl text-3xl mb-5 font-medium text-gray-900">{{ $post->title }}</h1>
            <div class="mb-8 leading-relaxed">
                {!! $post->content !!}
            </div>
        </div>
    </div>
</section>


@include("component.footer")
