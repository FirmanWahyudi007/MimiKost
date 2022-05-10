@extends('layouts.user')

@section('title')
    Mimi Kost | Home
@endsection

@section('body')
<div class="container mx-auto">

    {{-- Hero --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 mt-8 content-end">
        <div class="prose p-4">
            <div class="relative">
                <h1 class="before:hidden before:xl:block before:absolute before:-inset-1 before:-z-10 before:bg-white/50 p-0 lg:p-4">
                    Solusi Singgah Untuk Anak Rantau</h1>
                <div class="absolute w-20 h-20 -top-5 -left-5 -z-20 bg-primary rounded-full hidden xl:block"></div>

            </div>
            <p class="text-lg lg:text-2xl ">Kami akan membantu anda untuk menemukan rumah singgah secara lebih mudah, praktis, dan menghemat
                biaya survey.</p>
            <a href="#" class="no-underline">
                <button class="btn btn-primary lg:btn-lg">Pesan Sekarang</button>
            </a>

            <div class="h-1 w-32 bg-black my-8"></div>
        </div>
        <div class="p-4 lg:p-0 relative">
            <img src="https://asset.kompas.com/crops/icva5Lwu8mguAdL-ZHNbwHT-eZ0=/0x0:1200x800/750x500/data/photo/2020/10/26/5f96aecd62a38.jpg"
                alt="">
            <div class="absolute w-24 h-24 -bottom-8 -right-4 -z-10 bg-primary hidden xl:block"></div>
        </div>
    </div>

    {{-- Apa yang kami lakukan --}}
    <div class="hero bg-base-200 mt-16 py-8">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">Apa Yang Akan Kami Berikan</h1>
                <p class="py-6 text-lg lg:text-xl">Kami akan memberikan pelayanan sepenuh hati
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
                <img class="object-cover" src="https://i.pinimg.com/736x/43/cf/55/43cf55e67d603f3a4088eaaf16b6b0fb.jpg"
                    alt="">
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

    <div class="px-8 lg:p-0">
        <div class="h-px w-full bg-black my-8 lg:mx-auto"></div>
    </div>

</div>

{{-- Footer Hero --}}
<div class="mt-16 py-16 px-4 bg-base-200">
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2">
        <div class="prose p-4">
            <h1 class="">Tempat Istirahat Ternyaman Ketika Pulang Ngampus</h1>

            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div>
                    <h2 class="">8</h2>
                    <p class="text-lg lg:text-2xl">Tipe Rumah Kost</p>
                </div>
                <div>
                    <h2 class="">8</h2>
                    <p class="text-lg lg:text-2xl">Kamar Tersedia</p>
                </div>
                <div>
                    <h2 class="">8</h2>
                    <p class="text-lg lg:text-2xl">Kamar Mandi Dalam</p>
                </div>
                <div>
                    <h2 class="">8</h2>
                    <p class="text-lg lg:text-2xl">Kamar Mandi Luar</p>
                </div>

            </div>

        </div>
        <div class="p-4 lg:p-0">
            <img src="https://asset.kompas.com/crops/icva5Lwu8mguAdL-ZHNbwHT-eZ0=/0x0:1200x800/750x500/data/photo/2020/10/26/5f96aecd62a38.jpg"
                alt="">
        </div>
    </div>
</div>

{{-- Footer --}}
<div class="w-full bg-neutral">
    @include('components.footer')
</div>
@endsection
