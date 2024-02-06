<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    @vite('resources/css/app.css')
    <title>Wisata Edukasi</title>
</head>

<body>
<div class="bg-pink1">
    <div class="relative flex flex-col items-center mx-auto lg:flex-row-reverse lg:max-w-5xl xl:max-w-7xl bg-softblue">

        <div class="w-full h-64 lg:w-1/2 lg:h-auto">
            <img class="h-full w-full object-cover" src="images\TWE.png" alt="Wisata Edukasi">
        </div>

        <div class="max-w-lg md:max-w-2xl md:middle md:top-0 md:mt-48 lg:w-3/5 lg:left-0 lg:mt-20 lg:ml-20 xl:mt-0 xl:ml-0">

            <div class="flex flex-col">
                <div class="flex flex-col items-center">
                    <img class="max-w-72 my-10 lg:max-w-md" src="images\logo1.png" alt="">
                    <p class="leading-8 text-white text-2xl text-center font-bold lg:text-left px-10">
                        Temukan Pesona Belajar dalam Setiap Petualangan: Wisata Edukasi, Pengalaman Rekreasi yang Mencerahkan!
                    </p>
                </div>

                <div class="flex py-10 px-10">
                    <div class="mr-4">
                        <a href="/pendaftaran" class="inline-block text-center text-lg font-bold text-white bg-blue1 py-4 px-10 hover:bg-slate hover:shadow-md md:w-flex p-4 ">Daftar Sekarang</a>
                    </div>

                    <div>
                        <a onClick="goToBawah()" class="inline-block text-center text-lg font-bold text-white py-3 hover:bg-slate hover:shadow-md md:w-flex p-4 border-solid border-4 border-blue1 ">Lihat Paketan</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div id="bawah" class="bg-white py-23 sm:py-32 pb-20 pr-10">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 md:mx-0 gap-x-10 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">

            <div>
                <h2 class="text-lg font-semibold leading-8 tracking-tight text-primary mt-10">Apa yang bisa Anda dapatkan dari program ini?</h2>
                <p class="mt-2 text-2xl font-bold tracking-tight text-darkblue sm:text-4xl">Program Kegiatan Wisata Edukasi</p>
                <p class="mt-6 text-base leading-7 text-purple1">Selamat datang di Program Wisata Edukasi Inovatif! Kami menawarkan pengalaman unik yang menggabungkan kesenangan dan pembelajaran melalui kegiatan kreatif seperti membuat Pin-Bross, Sablon Kaos dengan hasil desain sendiri, dan 3D printing. Peserta tidak hanya akan menikmati kegiatan mereka, tetapi juga mendapatkan keterampilan baru yang berharga dalam dunia seni dan teknologi.</p>
            </div>

            <dl class="col-span-2 grid grid-cols-1 gap-x-8 gap-y-10 text-base leading-7 text-gray-600 sm:grid-cols-2 lg:gap-y-16">

           @foreach($pakets as $paket)
                    <div class="relative pl-9">
                        <dt class="text-lg font-semibold text-darkblue">
                            {{ $paket->nama_paket }}
                        </dt>
                        <img src="$paket->gambar ? $paket->gambar : 'https://dummyimage.com/720x400' " class="lg:w-flex lg:h-auto rounded-lg shadow-none transition-shadow hover:shadow-lg hover:shadow-black/30" alt="" />
                        <dd class="mt-2 text-purple1 text-justify"> {!! $paket->deskripsi !!}</dd>
                    </div>
           @endforeach

                <div class="relative pl-9">
                    <dt class="text-lg font-semibold text-darkblue">
                        Pin-Tastic
                    </dt>
                    <img src="images\TWE.png" class="lg:w-flex lg:h-auto rounded-lg shadow-none transition-shadow hover:shadow-lg hover:shadow-black/30" />

                    <dd class="mt-2 text-purple1 text-justify"> Peserta akan diajak untuk merancang dan membuat pinbross sesuai dengan imajinasi mereka sendiri. Dengan bimbingan dari instruktur berpengalaman, mereka akan belajar tentang desain, warna, dan teknik pembuatan pinbross yang unik dan personal.</dd>
                </div>

                <div class="relative pl-9">
                    <dt class="text-lg font-semibold text-darkblue">
                        Kreasi Mode
                    </dt>
                    <img src="images\TWE.png" class="lg:w-flex lg:h-auto rounded-lg shadow-none transition-shadow hover:shadow-lg hover:shadow-black/30" alt="" />
                    <dd class="mt-2 text-purple1 text-justify"> Dalam sesi sablon kaos, peserta akan mendapatkan pengalaman langsung dalam menciptakan desain dan menerapkannya ke kaos mereka sendiri. Mereka akan belajar tentang proses sablon, pemilihan warna, dan bagaimana menciptakan pakaian yang mencerminkan kepribadian mereka.</dd>
                </div>
            </dl>
        </div>
    </div>
</div>
</body>

</html>
