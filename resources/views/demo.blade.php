<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mimi Kost | Home</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav class="shadow-md lg:mt-4 container mx-auto">
        <div class="navbar bg-base-100">
            <div class="navbar-start">
                <div class="dropdown">
                    <label tabindex="0" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </label>
                    <ul tabindex="0"
                        class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a>Home</a></li>
                        <li><a>Tempat Kost</a></li>
                        <li><a>Tentang</a></li>
                        <li><a>Review</a></li>
                        <li><a>Fasilitas</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost normal-case text-xl">Mimi Kost</a>
            </div>
            <div class="navbar-center hidden lg:flex">

            </div>
            <div class="navbar-end hidden lg:flex">
                {{-- <a class="btn">Get started</a> --}}
                <ul class="menu menu-horizontal p-0">
                    {{-- <li tabindex="0">
                        <a>
                            Parent
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24">
                                <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li> --}}
                    <li><a>Home</a></li>
                    <li><a>Tempat Kost</a></li>
                    <li><a>Tentang</a></li>
                    <li><a>Review</a></li>
                    <li><a>Fasilitas</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mx-auto">

        {{-- Hero --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 mt-8">
            <div class="prose p-4">
                <h1>Solusi Singgah Untuk Anak Rantau</h1>
                <p>Kami akan membantu anda untuk menemukan rumah singgah secara lebih mudah, praktis, dan menghemat
                    biaya survey.</p>
                <a href="#">
                    <button class="btn btn-primary">Pesan Sekarang</button>
                </a>

                <div class="h-2 w-32 bg-black my-8"></div>
            </div>
            <div class="p-4 lg:p-0">
                <img src="https://asset.kompas.com/crops/icva5Lwu8mguAdL-ZHNbwHT-eZ0=/0x0:1200x800/750x500/data/photo/2020/10/26/5f96aecd62a38.jpg"
                    alt="">
            </div>
        </div>

        {{-- Apa yang kami lakukan --}}
        <div class="hero bg-base-200 mt-16 py-8">
            <div class="hero-content text-center">
                <div class="max-w-md">
                    <h1 class="text-5xl font-bold">Apa Yang Akan Kami Berikan</h1>
                    <p class="py-6">Kami akan memberikan pelayanan sepenuh hati
                        Bagi kami anak kost seperti anak kami sendiri
                        Orang tua tidak perlu khawatir InshaAllah kami
                        memberikan service terbaik kepada putri - putri
                        harapan keluarga. </p>
                    {{-- <button class="btn btn-primary">Get Started</button> --}}
                </div>
            </div>
        </div>

        {{-- Quick Galery --}}
        <div class="mt-16 py-8 px-4">
            <div class="flex flex-wrap gap-4 ">
                <div class="shrink grow basis-52 lg:basis-96">
                    <img class="object-cover"
                        src="https://asset.kompas.com/crops/icva5Lwu8mguAdL-ZHNbwHT-eZ0=/0x0:1200x800/750x500/data/photo/2020/10/26/5f96aecd62a38.jpg"
                        alt="">
                </div>
                <div class="shrink grow basis-52 lg:basis-96">
                    <img class="object-cover"
                        src="https://i.pinimg.com/736x/43/cf/55/43cf55e67d603f3a4088eaaf16b6b0fb.jpg" alt="">
                </div>
                <div class="shrink grow basis-52 lg:basis-96">
                    <img class="object-cover"
                        src="https://www.gogetyourself.com/wp-content/uploads/2022/01/Small-Bedroom-Ideas.jpg" alt="">
                </div>
                <div class="shrink grow basis-52 lg:basis-96">
                    <img class="object-cover"
                        src="https://cdn.decoist.com/wp-content/uploads/2013/07/Modern-loft-bed-perfect-for-small-bedrooms.jpg"
                        alt="">
                </div>
                <div class="shrink grow basis-52 lg:basis-96">
                    <img class="object-cover"
                        src="https://res.cloudinary.com/indonesiadesign/image/upload/f_auto,fl_progressive,q_auto:best/Small-Bedroom-Design-Ideas-That-Right-your-Dream-Home-33.jpg"
                        alt="">
                </div>
            </div>
        </div>

        <div class="h-px w-full bg-black my-8 mx-auto"></div>


    </div>

    {{-- Footer Hero --}}
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 mt-8 p-4">
            <div class="prose p-4">
                <h1>Tempat Istirahat Ternyaman Ketika Pulang Ngampus</h1>

                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div>
                        <h2>8</h2>
                        <p>Lorem Ipsum</p>
                    </div>
                    <div>
                        <h2>8</h2>
                        <p>Lorem Ipsum</p>
                    </div>
                    <div>
                        <h2>8</h2>
                        <p>Lorem Ipsum</p>
                    </div>
                    <div>
                        <h2>8</h2>
                        <p>Lorem Ipsum</p>
                    </div>

                </div>

                <a href="#">
                    <button class="btn btn-primary">Pesan Sekarang</button>
                </a>

                <div class="h-2 w-32 bg-black my-8"></div>
            </div>
            <div class="p-4 lg:p-0">
                <img src="https://asset.kompas.com/crops/icva5Lwu8mguAdL-ZHNbwHT-eZ0=/0x0:1200x800/750x500/data/photo/2020/10/26/5f96aecd62a38.jpg"
                    alt="">
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <div class="w-full bg-neutral">
        <footer class="footer items-center p-4 bg-neutral text-neutral-content container mx-auto">
            <div class="items-center grid-flow-col">
                <svg width="36" height="36" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                    clip-rule="evenodd" class="fill-current">
                    <path
                        d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z">
                    </path>
                </svg>
                <p>Copyright © 2022 - All right reserved</p>
            </div>
            <div class="grid-flow-col gap-4 md:place-self-center md:justify-self-end">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                        </path>
                    </svg>
                </a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                        </path>
                    </svg></a>
            </div>
        </footer>
    </div>
</body>

</html>