@include("component.navbar")
@include("component.konten")


<div>
    <button id="to-top-button" onclick="goToTop()" title="Go To Top"
            class="hidden fixed z-50 bottom-10 right-10 p-4 border-0 w-14 h-14 rounded-full shadow-md bg-pink1 hover:bg-blue1 text-white text-lg font-semibold transition-colors duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path d="M12 4l8 8h-6v8h-4v-8H4l8-8z"/>
        </svg>
        <span class="sr-only">Go to top</span>
    </button>

    <script>
        // Get the 'to top' button element by ID
        var toTopButton = document.getElementById("to-top-button");

        // Check if the button exists
        if (toTopButton) {

            // On scroll event, toggle button visibility based on scroll position
            window.onscroll = function () {
                if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                    toTopButton.classList.remove("hidden");
                } else {
                    toTopButton.classList.add("hidden");
                }
            };

            // Function to scroll to the top of the page smoothly
            window.goToTop = function () {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            };
        }

        window.goToBawah = function () {
            window.scrollTo({
                top: document.getElementById('bawah').offsetTop,
                behaviour: 'smooth'
            });
        }
    </script>
</div>

<section class="text-gray-600 body-font" style="background-image: url('/images/apa3.svg'); background-size: cover">
    <div class="container mx-auto flex px-10 py-10  md:flex-row flex-col items-center">
        <div class="lg:flex-grow md:w-1/4 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left md:mb-0">
            <h1 class="sm:text-5xl text-3xl mb-4 font-bold text-darkblue">Blog Kegiatan</h1>
            <p class="mb-8 leading-relaxed text-purple1"> Siapa saja ya yang sudah pernah berkunjung ke Wisata Edukasi
                ini? Yuk dilihat!</p>

            <button>
                <a href="/blog"
                   class="inline-block text-center text-lg font-medium text-white bg-softpink py-4 px-10 hover:bg-softblue hover:shadow-md md:w-flex p-4 ">Lebih
                    Lanjut </a>
            </button>
        </div>


        <div class="container py-24 mx-auto">
            <div class="flex flex-wrap -m-4">

                @foreach ($posts as $post)
                    <div class="p-4 md:w-1/3">
                        <div
                            class="h-full border-2 border-softblue border-opacity-60 rounded-lg overflow-hidden bg-white">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                 src="{{ $post->banner_url ? $post->banner_url : 'https://dummyimage.com/720x400' }}"
                                 alt="{{ $post->title }}">
                            <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray mb-1">{{ strftime('%d/%m/%Y', strtotime($post->published_at)) }}</h2>
                                <h1 class="title-font text-lg font-bold text-purple1 mb-3">{{ $post->title }}</h1>
                                <p class="leading-relaxed mb-3 text-purple1">{{ Illuminate\Support\Str::words(strip_tags($post->excerpt), 10,'...') }}</p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-blue1 inline-flex items-center md:mb-2 lg:mb-0"
                                       href="{{ route('blog-show', $post->id) }} ">Read More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                             stroke-width="2" fill="none" stroke-linecap="round"
                                             stroke-linejoin="round">
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

<div class="p-10 bg-white">
    <p class="text-2xl font-bold tracking-tight text-darkblue sm:text-4xl text-center">Kenapa memilih Program Wisata
        Edukasi Kami?</p>
    <p class="lg:mx-48 mx-5 my-10 leading-7 text-purple1 text-justify">

    <section>
        <div class="container px-5 mx-auto">
            <div class="flex flex-wrap -m-4">

                <div class="p-4 lg:w-1/3">
                    <div
                        class="text-white hover:text-darkblue h-full bg-pink1 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative transition duration-300 ease-in-out hover:scale-110 hover:bg-softblue">
                        <a class="text-2xl leading-10 font-bold">Instruktur Berpengalaman</a>
                        <p class="leading-relaxed mt-10">Dibimbing oleh Instruktur kami yang ahli dan
                            berpengalaman dalam seni, desain, dan teknologi, siap memberikan bimbingan yang memadai
                            selama seluruh program.</p>
                    </div>
                </div>

                <div class="p-4 lg:w-1/3">
                    <div
                        class="text-white hover:text-darkblue h-full bg-pink1 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative transition duration-300 ease-in-out hover:scale-110 hover:bg-softblue">
                        <a class="text-2xl leading-10 font-bold">Fasilitas yang sudah Modern</a>
                        <p class="leading-relaxed mt-10">Fasilitas modern yang kami sediakan menjamin
                            peserta mendapatkan pengalaman belajar yang optimal, dengan menggunakan peralatan terkini
                            dalam setiap kegiatan.</p>
                    </div>
                </div>

                <div class="p-4 lg:w-1/3">
                    <div
                        class="h-full text-white hover:text-darkblue bg-pink1 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative transition duration-300 ease-in-out hover:scale-110 hover:bg-softblue">
                        <a class="text-2xl leading-10 font-bold">Kesenangan & Pembelajaran</a>
                        <p class="leading-relaxed mt-10">Kami yakin bahwa kombinasi antara pembelajaran dan
                            kesenangan dalam lingkungan yang mendukung dan inspiratif akan menciptakan kenangan tak
                            terlupakan dan memberikan nilai tambah yang signifikan bagi setiap peserta.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="fixed bottom-10 left-1/2 transform -translate-x-1/2">
    <a href="https://api.whatsapp.com/send/?phone=6281370177719&text=Selamat%20Siang,%20Saya%20ingin%20menanyakan%20informasi%20mengenai%20Wisata%20Edukasi%20lebih%20lanjut,%20t Terima%20Kasih.&type=phone_number&app_absent=0"
       target="_blank">
        <button class="bg-green1 hover:bg-green2 text-white font-bold py-4 px-6 rounded-full shadow-lg"> Hubungi Admin
        </button>
    </a>
</div>

@include("component.footer")

