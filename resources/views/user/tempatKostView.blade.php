@extends('layouts.user')

@section('title')
Mimi Kost | Alamat Tempat Kost
@endsection

@section('header')

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

@endsection

@section('body')
<div class="container mx-auto ">
    {{-- Swiper --}}
    <div id="swiper" class="bg-blue-200 m-4 h-[30vh] lg:h-[40vh]">
        <div class="bg-center bg-cover"
            style="background-image: url(https://api.lorem.space/image/shoes);">
        </div>
        <div class="bg-center bg-cover"
            style="background-image: url(https://api.lorem.space/image/shoes);">
        </div>
        <div class="bg-center bg-cover"
            style="background-image: url(https://api.lorem.space/image/shoes);">
        </div>
    </div>


    {{-- Jendela Status --}}
    <div
        class="m-4 grid grid-cols-1 gap-y-2 lg:bg-white lg:shadow-md lg:mx-auto lg:grid-cols-3 lg:p-4 lg:rounded-xl lg:w-[50vw]">
        <div class="flex gap-2 lg:flex-col">
            <h2 class="hidden lg:block text-xl font-bold">Lokasi</h2>
            <svg xmlns="http://www.w3.org/2000/svg" class="lg:hidden h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                    clip-rule="evenodd" />
            </svg>
            <div class="">Lorem Ipsum</div>
        </div>
        <div class="flex gap-2 lg:flex-col">
            <h2 class="hidden lg:block text-xl font-bold">Jumlah Kamar</h2>
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="lg:hidden h-5 w-5"
                fill="currentColor" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 20">
                <path fill="currentColor"
                    d="M20 9.557V3h-2v2H6V3H4v6.557C2.81 10.25 2 11.525 2 13v4a1 1 0 0 0 1 1h1v4h2v-4h12v4h2v-4h1a1 1 0 0 0 1-1v-4c0-1.475-.811-2.75-2-3.443zM18 7v2h-5V7h5zM6 7h5v2H6V7zm14 9H4v-3c0-1.103.897-2 2-2h12c1.103 0 2 .897 2 2v3z" />
            </svg>
            <div class="">Lorem Ipsum</div>
        </div>
        <div class="flex gap-2 lg:flex-col">
            <h2 class="hidden lg:block text-xl font-bold">Sisa kamar</h2>
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="lg:hidden h-5 w-5"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 20">
                <path fill="currentColor"
                    d="M20 9.556V3h-2v2H6V3H4v6.557C2.81 10.25 2 11.526 2 13v4a1 1 0 0 0 1 1h1v4h2v-4h12v4h2v-4h1a1 1 0 0 0 1-1v-4c0-1.474-.811-2.75-2-3.444zM11 9H6V7h5v2zm7 0h-5V7h5v2z" />
            </svg>
            <div class="">Lorem Ipsum</div>
        </div>
    </div>

    {{-- Kategori --}}
    <div class="prose m-4 lg:mx-auto lg:items-center">
        <h3 class="lg:text-center">Kategori</h3>
        <div id="kategori-item" class="flex gap-2 lg:justify-center w-full overflow-x-auto">
            <div
                class="bg-black p-2 text-white h-20 w-20 flex flex-col gap-y-2 justify-center items-center hover:bg-accent focus:bg-accent">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                </svg>
                <div class="text-sm">Kategori</div>
            </div>

            <div
                class="bg-black p-2 text-white h-20 w-20 flex flex-col gap-y-2 justify-center items-center hover:bg-accent focus:bg-accent">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                </svg>
                <div class="text-sm">Kategori</div>
            </div>

            <div
                class="bg-black p-2 text-white h-20 w-20 flex flex-col gap-y-2 justify-center items-center hover:bg-accent focus:bg-accent">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                </svg>
                <div class="text-sm">Kategori</div>
            </div>

            <div
                class="bg-black p-2 text-white h-20 w-20 flex flex-col gap-y-2 justify-center items-center hover:bg-accent focus:bg-accent">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                </svg>
                <div class="text-sm">Kategori</div>
            </div>

        </div>
    </div>

    @include('components.divider')

    <div id="list" class="gap-2 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:gap-4 m-4">
        @for ($i = 1; $i < 8; $i++) <a href="{{ route('tempat-kost-view') }}">
            <div class="card card-compact bg-base-100 shadow-sm" style="min-width: 180px">
                <figure><img src="https://api.lorem.space/image/shoes?w=400&h=225" alt="Shoes" class="" />
                </figure>
                <div class="card-body">
                    <h3 class="text-xs">Lorem Ipsum</h3>
                    <h2 class="card-title text-sm">Lorem Ipsum!</h2>

                    <div class="h-px w-full block bg-gray-400 my-1"></div>

                    <div id="desc" class="flex gap-4">
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                            </svg>
                            <p class="inline-block">kamar m<sup>2</sup></p>
                        </div>
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                            </svg>
                            <p class="inline-block">jenis</p>
                        </div>
                    </div>

                    <div class="h-px w-full bg-gray-400 my-4"></div>

                    <h3 class="text-sm">Lorem Ipsum</h3>
                    <h2 class="card-title">Lorem Ipsum!</h2>

                </div>
            </div>
            </a>
            @endfor
    </div>


</div>

{{-- Footer --}}
<div class="w-full bg-neutral">
    @include('components.footer')
</div>

@endsection
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function(){
        $('#swiper').slick({
            arrows: false,
        });
    });
</script>
@section('script')

@endsection