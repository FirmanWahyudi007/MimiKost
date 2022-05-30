@extends('layouts.user')

@section('title')
Mimi Kost | Alamat Tempat Kost
@endsection

@section('header')

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

@endsection

@section('body')
<div class="container mx-auto ">
    {{-- Swiper & Jendela status--}}
    <div class="relative">

        {{-- Swiper --}}
        {{-- * Disini bisa banyak foto --}}
        <div id="swiper" class="bg-blue-200 m-4 h-[30vh] lg:h-[40vh]">
            <div class="bg-center bg-cover" style="background-image: url('{{ asset('storage/'.$tempat->path_gambar)}}');">
            </div>
        </div>

        {{-- Jendela Status --}}
        <div
            class="m-4 grid grid-cols-1 gap-y-2 lg:bg-white lg:shadow-md lg:mx-auto lg:grid-cols-3 lg:p-4 lg:rounded-xl lg:w-[50vw] lg:absolute lg:-bottom-14 lg:right-0 lg:left-0">
            <div class="flex gap-2 lg:flex-col">
                <h2 class="hidden lg:block text-xl font-bold">Lokasi</h2>
                <svg xmlns="http://www.w3.org/2000/svg" class="lg:hidden h-5 w-5" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                        clip-rule="evenodd" />
                </svg>
                <div class="">{{ $tempat->lokasi_tempat }}</div>
            </div>
            <div class="flex gap-2 lg:flex-col">
                <h2 class="hidden lg:block text-xl font-bold">Jumlah Kamar</h2>
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="lg:hidden h-5 w-5"
                    fill="currentColor" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 20">
                    <path fill="currentColor"
                        d="M20 9.557V3h-2v2H6V3H4v6.557C2.81 10.25 2 11.525 2 13v4a1 1 0 0 0 1 1h1v4h2v-4h12v4h2v-4h1a1 1 0 0 0 1-1v-4c0-1.475-.811-2.75-2-3.443zM18 7v2h-5V7h5zM6 7h5v2H6V7zm14 9H4v-3c0-1.103.897-2 2-2h12c1.103 0 2 .897 2 2v3z" />
                </svg>
                <div class="">{{ $kamars->count() }}</div>
            </div>
            {{-- <div class="flex gap-2 lg:flex-col">
                <h2 class="hidden lg:block text-xl font-bold">Sisa kamar</h2>
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="lg:hidden h-5 w-5"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 20">
                    <path fill="currentColor"
                        d="M20 9.556V3h-2v2H6V3H4v6.557C2.81 10.25 2 11.526 2 13v4a1 1 0 0 0 1 1h1v4h2v-4h12v4h2v-4h1a1 1 0 0 0 1-1v-4c0-1.474-.811-2.75-2-3.444zM11 9H6V7h5v2zm7 0h-5V7h5v2z" />
                </svg>
                <div class="">Lorem Ipsum</div>
            </div> --}}
        </div>
    </div>

    @if ($kamars->isEmpty())
    {{-- Peringatan tidak ada kamar --}}
    <div class="card lg:w-[30vw] bg-primary text-primary-content m-4 lg:m-14">
        <div class="card-body">
            <h2 class="card-title">Maaf, kamar belum tersedia pada tempat ini</h2>
        </div>
    </div>

    @else
    {{-- Fasilitas All --}}
    <div class="prose m-4 lg:mx-auto lg:items-center lg:m-14">
        <h3 class="lg:text-center">Fasilitas Tempat</h3>
        <div id="kategori-item" class="flex gap-2 lg:justify-center w-full flex-wrap">

            @foreach ($fasilitas_unique as $item)
            <div
                class="bg-black p-2 text-white h-20 w-max flex flex-col gap-y-2 justify-center items-center hover:bg-accent focus:bg-accent">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                </svg>
                <div class="text-sm">{{ $item }}</div>
            </div>
            @endforeach

        </div>
    </div>
    
    @include('components.divider')

    <div id="list" class="gap-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:gap-4 m-4">
        @foreach ($kamars as $kamar)
        <a href="{{ route('kamar-kost', $kamar->id) }}">
            <div class="card card-compact shadow-sm bg-white" style="min-width: 180px">
                <figure class="w-full h-56 bg-center bg-cover"
                    style="background-image: url('{{ asset('storage/'.$kamar->gambarkamar->path)}}')">
                </figure>
                <div class="card-body">
                    <h3 class="text-xs">{{ $tempat->lokasi_tempat }}</h3>
                    <h2 class="card-title text-sm">{{ $kamar->nama }}</h2>

                    <div class="h-px w-full block bg-gray-400 my-1"></div>

                    <div id="desc">
                        {{-- Status kamar --}}
                        <div class="flex gap-4 mb-2">
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                                </svg>
                                {{-- Masih belum ada luas kamar --}}
                                <p class="inline-block">{{ $kamar->harga }} m<sup>2</sup></p>
                            </div>
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="h-6 w-6"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M21 10.78V8c0-1.65-1.35-3-3-3h-4c-.77 0-1.47.3-2 .78c-.53-.48-1.23-.78-2-.78H6C4.35 5 3 6.35 3 8v2.78c-.61.55-1 1.34-1 2.22v6h2v-2h16v2h2v-6c0-.88-.39-1.67-1-2.22zM14 7h4c.55 0 1 .45 1 1v2h-6V8c0-.55.45-1 1-1zM5 8c0-.55.45-1 1-1h4c.55 0 1 .45 1 1v2H5V8zm-1 7v-2c0-.55.45-1 1-1h14c.55 0 1 .45 1 1v2H4z" />
                                </svg>
                                <p class="inline-block">{{ $kamar->jumlah }} Kamar</p>
                            </div>
                        </div>
                        {{-- Fasilitas --}}
                        <div id="fasilitas" class="flex gap-x-4 gap-y-2 flex-wrap">
                            @foreach (array_slice($kamar->fasilitas, 0, 3) as $fasilitas)
                            <div class="flex gap-2">
                                <div class="hidden">Judul</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                                <div>{{ $fasilitas }}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="h-px w-full bg-gray-400 my-4"></div>

                    {{-- <h3 class="text-sm"></h3> --}}
                    <h2 class="card-title">Rp {{ $kamar->harga }},-</h2>

                </div>
            </div>
        </a>
        @endforeach
    </div>
    @endif


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