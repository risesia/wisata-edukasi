

<div>
    @include("component.navbar")
</div>

<div class="bg-babyblue">
  <div class="container px-5 pt-20 mx-auto">
    <div class="flex flex-wrap w-full flex-col items-center text-center">
      <h1 class="sm:text-4xl text-3xl mb-2 text-darkblue font-bold">BLOG</h1>
      <p class="lg:w-3/4 w-full leading-relaxed text-purple1">
        Temukan Cerita di Setiap Sudut! Melalui blog ini, Kami mengajak Anda untuk terlibat lebih dalam dalam perjalanan edukasi kami. Jadikan setiap kunjungan ke tempat wisata edukasi kami sebagai pengalaman yang berarti.</p>
    </div>
  </div>

<section class="text-slate">

  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">

    @foreach ($posts as $post)
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-softblue border-opacity-60 rounded-lg overflow-hidden bg-white">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ $post->banner_url ? $post->banner_url : 'https://dummyimage.com/720x400' }}" alt="{{ $post->title }}">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-pink1 mb-1">{{ strftime('%d/%m/%Y', strtotime($post->published_at)) }}</h2>
            <h1 class="title-font text-lg font-medium text-purple1 mb-3">{{ $post->title }}</h1>
            <p class="leading-relaxed mb-3 text-purple1 ">{{ $post->excerpt }}</p>
            <div class="flex items-center flex-wrap ">
              <a class="text-blue1 inline-flex items-center md:mb-2 lg:mb-0" href="{{ route('blog-show', $post->id) }}">Read More
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    @endforeach


    </div>

    </div>
  </div>
</section>
</div>

    @include("component.footer")
