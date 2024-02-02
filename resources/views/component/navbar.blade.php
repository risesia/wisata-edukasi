<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=MaryKate&display=swap">
    @vite('resources/css/app.css')
    <title>Wisata Edukasi</title>
</head>
<body>

<div class="navbar bg-white">


    <div class="navbar bg-white">
        <div class="flex-1">
            <a href="/"> <img class="lg:max-h-10 max-h-8" src="/images/imgnav.png" alt=""></a>
        </div>
    </div>

    <div class="dropdown z-10">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="gray" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
            <div class=" w-full md:block md:w-auto">
                <ul tabindex="0"
                    class=" menu menu-sm absolute right-0 origin-right top-1 dropdown-content mt-3 p-2 shadow bg-slate rounded-box w-52 text-purple1">
                    <li><a href="/">Homepage</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/aboutus">About Us</a></li>
                </ul>
            </div>
        </div>
    </div>


</div>

</body>
</html>
