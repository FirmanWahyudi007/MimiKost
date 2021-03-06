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
    <div class="relative lg:grid lg:grid-cols-3 lg:gap-4 lg:p-2">
        {{-- Maps --}}
        <div class="relative h-[85vh] w-full lg:h-screen lg:sticky lg:top-0">
            <div id="map" class="relative w-full h-full -z-0"></div>
        </div>

        {{-- Filter Button Trigger --}}
        <label for="my-modal-3" class="btn modal-button absolute top-0 right-0 m-4 lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
            </svg>
        </label>

        {{-- Filter Modal --}}
        <input type="checkbox" id="my-modal-3" class="modal-toggle">
        <div class="modal">
            <div class="modal-box">
                <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>

                @include('user.tempatKostFilter')
            </div>
        </div>

        {{-- Dekstop Item View --}}
        <div class="hidden lg:block lg:col-span-2">

            {{-- Filter Collapse --}}
            <div tabindex="0" class="collapse collapse-open collapse-arrow bg-white rounded-lg lg:col-span-2 mb-4">
                <input type="checkbox" class="peer" />
                <div
                    class="collapse-title text-lg font-medium">
                    Filter
                </div>
                <div
                    class="collapse-content">
                    @include('user.tempatKostFilter')
                </div>
            </div>

            {{-- List --}}
            <div id="list" class="lg:bg-white p-2 rounded-lg max-w-full absolute bottom-0 lg:static lg:col-span-2">

                <div id="view-control" class="w-full mb-4 lg:flex justify-between hidden px-4 pt-2">
                    <div id="urut" class="flex gap-4 prose">
                        <p class="inline-block">Urut</p>
                        <div class="form-control">
                            <select class="select select-bordered select-ghost select-sm" id="urutkan" name="urutkan">
                                <option disabled selected>----</option>
                                <option value="DESC">Harga Termahal</option>
                                <option value="ASC">Harga Termurah</option>
                            </select>
                        </div>
                    </div>

                    <div id="view" class="flex gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 inline-block hover:cursor-pointer"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>

                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 inline-block hover:cursor-pointer"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg> --}}

                    </div>
                </div>

                {{-- Gallery View --}}
                <div id="listItem" class="flex gap-2 overflow-x-auto lg:grid lg:grid-cols-3 lg:gap-4 px-2">
                    @include('user.tempatKostItem')
                </div>
            </div>
        </div>

        {{-- Mobile Item View --}}
        <div id="listMobile" class="lg:bg-white p-2 rounded-lg max-w-full absolute bottom-0 lg:hidden lg:col-span-2">

            {{-- Gallery View --}}
            <div id="listMobileItem" class="flex gap-2 overflow-x-auto lg:grid lg:grid-cols-3 lg:gap-4">
                @include('user.tempatKostItem')
            </div>
        </div>

    </div>

    {{-- Tempat menyimpan value form filter --}}
    <input type="hidden" placeholder="..." id="maxHarga"/>
    <input type="hidden" placeholder="..." id="minHarga"/>

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

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<script>

    // Script untuk maps
    var pins = {!! json_encode($pin_points->toArray()) !!};
    var map = L.map('map').setView([pins[0]['latitude'], pins[0]['longitude']], 15);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'your.mapbox.access.token'
    }).addTo(map);
    

    for (const item of pins){
        // TODO: Hapus console log setelah development
        console.log("lat: " + item['latitude'] + ", long: " + item['longitude']);
        L.marker([item['latitude'], item['longitude']]).addTo(map)
        .bindPopup('<a href="/tempat-kost/view/' + item['id'] + '"> <b>Lihat tempat</b> </a>');

    }

    // Script untuk sorting
    $("#urutkan").on('change',function(){

        var tipe = $('#urutkan').val();
        var maxHarga = $('#maxHarga').val();
        var minHarga = $('#minHarga').val();

        var data = "maxHarga=" + maxHarga + "&";
        data += "minHarga=" + minHarga + "&";
        data += "urut=" + tipe;

        // var data = "tipe=" + tipe + "&";
        // data += "sertifikasi=" + sertifikasi + "&";
        // data += "region=" + region;

        $("#listItem").load("{{ route('tempat-kost-item') }}", data);
    });

    // Script untuk Filter
    $('body').on('click', '#filter', function () {
        
        var tipe = $('#urutkan').val();
        var maxHarga = $('#maxHarga').val();
        var minHarga = $('#minHarga').val();

        var data = "maxHarga=" + maxHarga + "&";
        data += "minHarga=" + minHarga + "&";
        data += "urut=" + tipe;

        console.log(data)

        $("#listItem, #listMobileItem").load("{{ route('tempat-kost-item') }}", data);
    });

    $(".max-harga").keyup(function(){
        $('#maxHarga').val($(this).val());
        // console.log($('#maxHarga').val());
    });

    $(".min-harga").keyup(function(){
        $('#minHarga').val($(this).val());
        // console.log($('#minHarga').val());
    });
    
</script>

@endsection