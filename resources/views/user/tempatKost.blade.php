@extends('layouts.user')

@section('title')
Mimi Kost | Tempat Kost
@endsection

@section('header')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
    integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
    crossorigin="" />

@endsection

@section('body')
<div class="container mx-auto ">
    <div class="grid grid-cols-1 lg:grid-cols-10 gap-8 p-4">
        {{-- Maps --}}
        <div class="lg:col-span-3 h-screen static lg:sticky top-0">
            <div id="map" class="h-full rounded-lg"></div>
        </div>

        {{-- Filter & List --}}
        <div class="lg:col-span-7">
            {{-- Filter --}}
            <div id="filter" class="bg-white p-2 rounded-lg">filter</div>

            {{-- List --}}
            <div id="list" class="bg-white p-2 my-8 rounded-lg">

                <div id="view-control" class="w-full mb-4 flex justify-between">
                    <div id="urut" class="flex gap-4 prose">
                        <p class="inline-block">Urut</p>
                        <div class="form-control">
                            <select class="select select-bordered select-ghost select-sm">
                                <option disabled selected>----</option>
                                <option value="hargaAsc">Harga 🔝</option>
                                <option value="hargaDesc">Harga ⬇️</option>
                            </select>
                        </div>
                    </div>

                    <div id="view" class="flex gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 inline-block hover:cursor-pointer"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 inline-block hover:cursor-pointer"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>

                    </div>
                </div>

                {{-- Gallery View --}}
                <div id="list" class="grid grid-cols-3 gap-4">
                    @for ($i = 0; $i < 3; $i++) 
                    <div class="card card-compact bg-base-100 shadow-sm">
                        <figure><img src="https://api.lorem.space/image/shoes?w=400&h=225" alt="Shoes" class="" /></figure>
                        <div class="card-body">
                            <h3 class="text-sm">Lorem Ipsum</h3>
                            <h2 class="card-title">Lorem Ipsum!</h2>

                            <div class="h-px w-full block bg-gray-400 my-4"></div>

                            <div id="desc" class="flex gap-4">
                                <div class="flex gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                                    </svg>
                                    <p class="inline-block">kamar m<sup>2</sup></p>
                                </div>
                                <div class="flex gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                                    </svg>
                                    <p class="inline-block">jenis</p>
                                </div>
                            </div>

                            <div class="h-px w-full block bg-gray-400 my-4"></div>

                            <h3 class="text-sm">Lorem Ipsum</h3>
                            <h2 class="card-title">Lorem Ipsum!</h2>
                            
                        </div>
                    </div>
                    @endfor

                </div>

                {{-- List View --}}
                <div id="list" class="grid gap-4 mt-4">
                    @for ($i = 0; $i < 3; $i++) 
                    <div class="card card-side bg-base-100 shadow-sm">
                        <figure class="max-w-sm">
                            <img src="https://api.lorem.space/image/shoes?w=400&h=225" alt="Shoes" class="w-full h-full" />
                        </figure>
                        <div class="card-body">
                            <h3 class="text-sm">Lorem Ipsum</h3>
                            <h2 class="card-title">Lorem Ipsum!</h2>

                            <div class="h-px w-full block bg-gray-400 my-4"></div>

                            <div id="desc" class="flex gap-4">
                                <div class="flex gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                                    </svg>
                                    <p class="inline-block">kamar m<sup>2</sup></p>
                                </div>
                                <div class="flex gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                                    </svg>
                                    <p class="inline-block">jenis</p>
                                </div>
                            </div>

                            <div class="h-px w-full block bg-gray-400 my-4"></div>
                            
                            <h3 class="text-sm">Lorem Ipsum</h3>
                            <h2 class="card-title">Lorem Ipsum!</h2>

                        </div>
                    </div>
                    @endfor

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

@section('script')
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
    integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
    crossorigin=""></script>

<script>
    var map = L.map('map').setView([-8.1688563,113.7021772], 15);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'your.mapbox.access.token'
    }).addTo(map);
    
    L.marker([-8.1688563,113.7021772]).addTo(map);
    L.marker([-8.1688563,113.7011772]).addTo(map);
    L.marker([-8.1688563,113.7031772]).addTo(map);
</script>

@endsection