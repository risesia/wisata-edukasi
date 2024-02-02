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

<section class="pt-10 overflow-hidden bg-blue1 md:pt-0 sm:pt-16 2xl:pt-16">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="grid items-center grid-cols-1 md:grid-cols-2">

            <div>
                <h2 class="text-3xl font-bold leading-tight text-white sm:text-4xl lg:text-5xl sm:center">Hey 👋 I am
                    <br class="block sm:hidden" />Sugianto, S.T., M.Kom
                </h2>
                <p class="max-w-lg mt-3 text-xl leading-relaxed text-white md:mt-8">
                    Amet minim mollit non deserunt
                    ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
                    Exercitation veniam consequat sunt nostrud amet.
                </p>
            </div>

            <div class="relative">
                <img class="absolute inset-x-0 bottom-0 -mb-48 -translate-x-1/2 left-1/2" src="https://cdn.rareblocks.xyz/collection/celebration/images/team/1/blob-shape.svg" alt="" />

                <img class="relative w-full xl:max-w-lg xl:mx-auto 2xl:origin-bottom 2xl:scale-110" src="images/11.png" alt="" />
            </div>

        </div>
    </div>
</section>

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
        <div class="max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tight text-darkblue sm:text-4xl">Meet our Team</h2>
            <p class="mt-6 text-xl leading-8 text-purple1">Selamat datang untuk mengenal lebih dekat dengan Tim Kami!</p>
        </div>
        <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">

            <li>
                <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full" src="images/paksugi.jpg" alt="">
                    <div>
                        <h3 class="text-lg font-semibold leading-7 tracking-tight text-darkblue">Sugianto, S.T., M.Kom</h3>
                        <p class="text-sm leading-6 text-purple1">Direktur</p>
                    </div>
                </div>
            </li>

            <li>
                <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full" src="images/pakasrul.jpg" alt="">
                    <div>
                        <h3 class="text-lg font-semibold leading-7 tracking-tight text-darkblue">Asrul Helmandi, S.Kom</h3>
                        <p class="text-sm leading-6 text-purple1">Manajer</p>
                    </div>
                </div>
            </li>

            <li>
                <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full" src="images/kksindy.png" alt="">
                    <div>
                        <h3 class="text-lg font-semibold leading-7 tracking-tight text-darkblue">Sindy Anggraini, S.TP</h3>
                        <p class="text-sm leading-6 text-purple1">Admin</p>
                    </div>
                </div>
            </li>

            <li>
                <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full" src="images/kknadira.jpg" alt="">
                    <div>
                        <h3 class="text-lg font-semibold leading-7 tracking-tight text-darkblue">Nadira Natalie Kuechler</h3>
                        <p class="text-sm leading-6 text-purple1">Fasilitator</p>
                    </div>
                </div>
            </li>

            <li>
                <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full" src="images/bgsandi.jpg" alt="">
                    <div>
                        <h3 class="text-lg font-semibold leading-7 tracking-tight text-darkblue">Sandi Nayoan Wijaya</h3>
                        <p class="text-sm leading-6 text-purple1">Fasilitator</p>
                    </div>                </div>
            </li>

            <li>
                <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full" src="images/rizky.jpg" alt="">
                    <div>
                        <h3 class="text-lg font-semibold leading-7 tracking-tight text-darkblue">Rizky Ramadhan</h3>
                        <p class="text-sm leading-6 text-purple1">Back-end</p>
                    </div>
                </div>
            </li>

            <li>
                <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full" src="images/wenny.jpg" alt="">
                    <div>
                        <h3 class="text-lg font-semibold leading-7 tracking-tight text-darkblue">Wenny Jodana</h3>
                        <p class="text-sm leading-6 text-purple1">Front-end</p>
                    </div>
                </div>
            </li>

            <!-- More people... -->
        </ul>
    </div>
</div>


<div>
    @include("component.footer")
</div>

</body>

</html>
