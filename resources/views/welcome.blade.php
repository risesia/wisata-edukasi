
  @include("component.navbar")
  @include("component.konten")


<div>
  <button id="to-top-button" onclick="goToTop()" title="Go To Top"
      class="hidden fixed z-50 bottom-10 right-10 p-4 border-0 w-14 h-14 rounded-full shadow-md bg-orange-500 hover:bg-blue-950 text-white text-lg font-semibold transition-colors duration-300">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
          <path d="M12 4l8 8h-6v8h-4v-8H4l8-8z" />
      </svg>
      <span class="sr-only">Go to top</span>
  </button>

  <script>
      // Get the 'to top' button element by ID
      var toTopButton = document.getElementById("to-top-button");

      // Check if the button exists
      if (toTopButton) {

          // On scroll event, toggle button visibility based on scroll position
          window.onscroll = function() {
              if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                  toTopButton.classList.remove("hidden");
              } else {
                  toTopButton.classList.add("hidden");
              }
          };

          // Function to scroll to the top of the page smoothly
          window.goToTop = function() {
              window.scrollTo({
                  top: 0,
                  behavior: 'smooth'
              });
          };
      }

      window.goToBawah = function() {
        window.scrollTo({
          top: document.getElementById('bawah').offsetTop,
          behaviour: 'smooth'
        });
      }
  </script>
</div>

<section class="blog-post text-gray-600 body-font bg-gray-100">
  <div class="container mx-auto flex px-10 py-10  md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/4 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left md:mb-0">
      <h1 class="sm:text-5xl text-3xl mb-4 font-bold text-blue-950">Blog Kegiatan </h1>
      <p class="mb-8 leading-relaxed text-blue-950"> Siapa saja ya yang sudah pernah berkunjung ke Wisata Edukasi ini? Yuk dilihat!</p>

        <button>
          <a href="/blogpage" class="inline-block text-center text-lg font-medium text-white bg-blue-950 py-4 px-10 hover:bg-gray-500 hover:shadow-md md:w-flex p-4 ">Lebih Lanjut </a>
        </button>
    </div>
      
  <div class="container py-24 mx-auto">
    <div class="flex flex-wrap -m-4">

    @foreach ($posts as $post)
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ $post->banner_url ? $post->banner_url : 'https://dummyimage.com/720x400' }}" alt="{{ $post->title }}">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{ $post->date }}</h2>
            <h1 class="title-font text-lg font-bold text-gray-900 mb-3">{{ $post->title }}</h1>
            <p class="leading-relaxed mb-3">{{ $post->excerpt }}</p>
            <div class="flex items-center flex-wrap ">
              <a class="text-blue-500 inline-flex items-center md:mb-2 lg:mb-0" href="{{ route('blog-show', $post->id) }} ">Read More
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
</section>

@include("component.footer")