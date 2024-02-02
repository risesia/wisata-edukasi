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

<div>
    @include("component.navbar")
</div>

<section class="bg-babyblue">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
        <div class="max-w-2xl lg:max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-extrabold text-darkblue">Kunjungi Lokasi Kami</h2>
            <p class="mt-4 text-lg text-purple1"> Anda dapat berkunjung ke lokasi untuk menanyakan secara langsung. </p>
        </div>
        <div class="mt-16 lg:mt-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="rounded-lg overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.284199468926!2d98.6177311938598!3d3.521646233192488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031256a8ff195fd%3A0xa2d1ebda702b803d!2sTempat%20Edukasi%20TK%20(Saparunesia%20Trip)!5e0!3m2!1sid!2sid!4v1706156958741!5m2!1sid!2sid"
                        width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div>
                    <div class="max-w-full mx-auto rounded-lg overflow-hidden">
                        <div class="px-6 py-4">
                            <h3 class="text-lg font-medium text-darkblue">Alamat</h3>
                            <p class="mt-1 text-purple1"> Perum puri Zahara2, Jl. Bunga Rinte No.Raya blok R 3, Simpang
                                Selayang, Kec. Medan Tuntungan, Kota Medan, Sumatera Utara 20135</p>
                        </div>
                        <div class="border-t border-gray-200 px-6 py-4">
                            <h3 class="text-lg font-medium text-darkblue">Hours</h3>
                            <p class="mt-1 text-purple1">Monday - Friday: 9am - 5pm</p>
                            <p class="mt-1 text-purple1">Saturday: 10am - 4pm</p>
                            <p class="mt-1 text-purple1">Sunday: Closed</p>
                        </div>
                        <div class="border-t border-gray-200 px-6 py-4">
                            <h3 class="text-lg font-medium text-darkblue">Kontak Lainnya</h3>
                            <p class="mt-1 text-purple1">Email: info@example.com</p>
                            <p class="mt-1 text-purple1">Phone: <a
                                    href="https://api.whatsapp.com/send/?phone=6281370177719&text=Selamat%20Siang,%20Saya%20ingin%20menanyakan%20informasi%20mengenai%20Wisata%20Edukasi%20lebih%20lanjut,%20t%20Terima%20Kasih.&type=phone_number&app_absent=0"
                                    class="text-blue1 underline">
                                    +62 813-7017-7719</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div>
    @include("component.footer")
</div>

</body>

</html>
