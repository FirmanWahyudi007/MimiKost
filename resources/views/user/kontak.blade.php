@extends('layouts.user')

@section('title')
Mimi Kost | Kontak
@endsection

@section('header')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
    integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
    crossorigin="" />

@endsection

@section('body')
<div class="container mx-auto">
    {{-- Head --}}
    <div class="my-4 prose p-4 text-center mx-auto">
        <h1>
            Kontak Kami
        </h1>
        <p class="text-xl">
            Ada pertanyaan atua kesan-pesan? Silahkan hubungi kami disini
        </p>
    </div>

    {{-- Kontak --}}
    <div class="grid grid-cols-1 lg:grid-cols-10 min-h-80 p-2 bg-white text-white rounded-xl gap-2 mx-2 lg:m-0  ">
        {{-- List Kontak --}}
        <div class="bg-accent lg:col-span-4 p-8 lg:p-12 rounded-xl relative overflow-hidden">
            <div class="prose text-white">
                <h1 class="text-white">Kontak Informasi</h1>
                <p class="text-lg -mt-4">Gunakan kontak dibawah ini atau form disamping</p>
            </div>

            <div id="list-kontak" class="mt-12 grid grid-cols-1 gap-y-12">

                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-8 w-8 text-white mr-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <p class="inline-block">081-456-789-012</p>
                </div>

                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-8 w-8 text-white mr-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <p class="inline-block">email@email.com</p>
                </div>

                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-8 w-8 text-white mr-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <p class="inline-block">alamat</p>
                </div>
            </div>

            <img src="{{ asset('images/whir-whil-thingy.png') }}" alt=""
                class="absolute w-72 h-64 -right-1/4 -bottom-1/4">
        </div>

        {{-- Form Kontak --}}
        <div class="lg:col-span-6 p-8 lg:p-12">
            <form action="#" method="POST">
                @csrf
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Nama</span>
                    </label>
                    <input type="text" name="nama" autofocus placeholder="Type here"
                        class="input input-bordered w-full max-w-full lg:max-w-xs">
                    {{--
                    !Tempat pesan error
                    <label class="label">
                        <span class="label-text-alt">Alt label</span>
                        <span class="label-text-alt">Alt label</span>
                    </label> --}}
                </div>

                <div class="grid gap-x-4 grid-cols-1 lg:grid-cols-2 mt-4">
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" name="email" id="email" autofocus placeholder="Type here"
                            class="input input-bordered w-full max-w-xs">
                        <label class="label">
                            <p class="label-text-alt text-red-600 italic">*Optional</p>
                        </label>
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Telepon</span>
                        </label>
                        <input type="text" name="telp" id="telp" autofocus placeholder="Type here"
                            class="input input-bordered w-full max-w-xs">
                        <label class="label">
                            <p class="label-text-alt text-red-600 italic">*Kalau boleh</p>
                        </label>
                    </div>
                </div>

                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Pesan</span>
                    </label>
                    <textarea name="pesan" id="pesan" class="textarea textarea-bordered h-24"
                        placeholder="Bio"></textarea>
                    <label class="label">
                    </label>
                </div>

                <button type="submit" class="btn btn-primary w-full hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                    Kirim Pesan
                </button>
            </form>
        </div>

    </div>

    @include('components.divider')

    {{-- Maps --}}

    <div class="prose text-center mx-auto">
        <h1>
            Temui Kami Disini
        </h1>
    </div>

    <div id="map" class="h-96 p-4 my-8 mx-4 lg:mx-0"></div>

</div>

{{-- Footer --}}
<div class="w-full bg-neutral">
    @include('components.footer')
</div>
@endsection

@section('script')
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
    integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
    crossorigin=""></script>

<script>
    var map = L.map('map').setView([-8.1688563,113.7021772], 15);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'your.mapbox.access.token'
    }).addTo(map);
    
    var marker = L.marker([-8.1688563,113.7021772]).addTo(map);
</script>

@endsection