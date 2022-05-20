@extends('layouts.user')

@section('title')
Mimi Kost | Alamat Kamar Kost
@endsection

@section('header')

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

@endsection

@section('body')
<div class="container mx-auto xl:p-6">

    {{-- Swiper --}}
    <div id="swiper" class="bg-blue-200 m-4 h-[30vh] lg:h-[40vh]">
        <div class="bg-center bg-cover" style="background-image: url(https://api.lorem.space/image/house);">
        </div>
        <div class="bg-center bg-cover" style="background-image: url(https://api.lorem.space/image/house);">
        </div>
        <div class="bg-center bg-cover" style="background-image: url(https://api.lorem.space/image/house);">
        </div>
    </div>

    <div class="grid grid-cols-1 mx-4 lg:grid-cols-3">
        {{-- Harga --}}
        <div class="stats shadow">

            <div class="stat">
                <div class="stat-figure text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="h-8 w-8"
                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M0 64c0-17.67 14.33-32 32-32h80c79.5 0 144 64.47 144 144c0 58.8-35.2 109.3-85.7 131.7l51.4 128.4c6.6 16.4-1.4 35-17.8 41.6c-16.4 6.6-35-1.4-41.6-17.8l-56-139.9H64v128c0 17.7-14.33 32-32 32S0 465.7 0 448V64zm64 192h48c44.2 0 80-35.8 80-80s-35.8-80-80-80H64v160zm336-96c61.9 0 112 50.1 112 112s-50.1 112-112 112h-48v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V192c0-17.7 14.3-32 32-32h80zm48 112c0-26.5-21.5-48-48-48h-48v96h48c26.5 0 48-21.5 48-48z" />
                    </svg>
                </div>
                <div class="stat-title">Harga</div>
                <div class="stat-value text-primary">25.6K</div>
                <div class="stat-desc">Per bulan</div>
            </div>
        </div>

        {{-- Isi --}}
        <div class="bg-base-100 my-4 rounded-xl p-2 gap-4 lg:order-first lg:col-span-2 lg:row-span-3">
            {{-- Judul --}}
            <div class="text-3xl font-bold">Judul</div>
            <div class="text-gray-600 ">sub judul</div>

            {{-- Fasilitas --}}
            <div class="flex gap-4 w-full overflow-x-auto mt-6">
                <div class="flex gap-2">
                    <div class="hidden">Judul</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                    <div>10</div>
                </div>

                <div class="flex gap-2">
                    <div class="hidden">Judul</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                    <div>10</div>
                </div>

                <div class="flex gap-2">
                    <div class="hidden">Judul</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                    <div>10</div>
                </div>

            </div>

            @include('components.divider')

            {{-- Deskripsi --}}
            <div class="text-xl font-bold mb-2">Deskripsi</div>
            <div class="prose">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, consequuntur rerum! Excepturi officia
                    libero doloremque quis. Nesciunt debitis qui, fuga voluptate tempora a nisi, consequatur temporibus
                    aspernatur incidunt est perspiciatis!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, consequuntur rerum! Excepturi officia
                    libero doloremque quis. Nesciunt debitis qui, fuga voluptate tempora a nisi, consequatur temporibus
                    aspernatur incidunt est perspiciatis!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, consequuntur rerum! Excepturi officia
                    libero doloremque quis. Nesciunt debitis qui, fuga voluptate tempora a nisi, consequatur temporibus
                    aspernatur incidunt est perspiciatis!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, consequuntur rerum! Excepturi officia
                    libero doloremque quis. Nesciunt debitis qui, fuga voluptate tempora a nisi, consequatur temporibus
                    aspernatur incidunt est perspiciatis!</p>

            </div>
        </div>

        {{-- Profile --}}
        <div class="w-full my-4 lg:sticky top-5">
            <div class="card w-full bg-base-100 shadow-xl">
                <div class="card-body">
                    <div class="avatar mx-auto">
                        <div class="w-24 rounded-full">
                            <img src="https://api.lorem.space/image/face?hash=92310" />
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="text-gray-800">Pemilik</p>
                        <div class="text-xl font-bold">Ibu Mimi</div>
                    </div>

                    <div class="stats shadow">

                        <div class="stat">
                            <div class="stat-figure text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="w-8 h-8"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                    <path fill="currentColor"
                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144l-2.494.654l.666-2.433l-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931a6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646c-.182-.065-.315-.099-.445.099c-.133.197-.513.646-.627.775c-.114.133-.232.148-.43.05c-.197-.1-.836-.308-1.592-.985c-.59-.525-.985-1.175-1.103-1.372c-.114-.198-.011-.304.088-.403c.087-.088.197-.232.296-.346c.1-.114.133-.198.198-.33c.065-.134.034-.248-.015-.347c-.05-.099-.445-1.076-.612-1.47c-.16-.389-.323-.335-.445-.34c-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654c0 .977.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992c.47.205.84.326 1.129.418c.475.152.904.129 1.246.08c.38-.058 1.171-.48 1.338-.943c.164-.464.164-.86.114-.943c-.049-.084-.182-.133-.38-.232z" />
                                </svg>
                            </div>
                            <div class="stat-title">Whatsapp</div>
                            <div class="text-lg text-primary">0812-3456-7890</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
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