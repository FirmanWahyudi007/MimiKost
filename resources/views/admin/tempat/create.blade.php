@extends('admin.layouts.admin')
@section('title')
MimiKost - Tambah Tempat
@endsection
@section('content')
<!-- Sales Overview -->
<div class="card mt-6">

    <!-- header -->
    <div class="card-header flex flex-row justify-between">
        <h1 class="h6">Tambah Tempat Kost</h1>
        <div class="flex flex-row justify-center items-center">

            <a href="{{route('tempat.index')}}" class="btn-bs-primary">
                Back
            </a>
        </div>
    </div>
    <!-- end header -->

    <!-- body -->
    <div class="card-body">
        <div class="w-full max-w-xl">
            <form class="px-8 pt-6 pb-8 mb-6" action="{{isset($tempat) ? route('tempat.update',$tempat->id) : route('tempat.store') }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                {!! isset($tempat) ? method_field('PUT'):'' !!}
                <div class="lg:col-span-3 h-screen static lg:sticky top-0 -z-10">
                    <div id="map" class="h-full rounded-lg"></div>
                </div>
                <input type="hidden" name="id" value="{{ isset($tempat) ? $tempat->id : '' }}"> <br>
                @if (count($errors) > 0)
                <div class="alert alert-error">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                        Latitude
                    </label>
                    <input
                        class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline @error('latitude') is-invalid @enderror"
                        id="latitude" name="latitude" type="text" placeholder="Masukkan latitude kost" value="{{ isset($kamar) ? $kamar->latitude : Request::old('latitude') }}">
                    @error('latitude')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                        Longtitude
                    </label>
                    <input
                        class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline @error('longitude') is-invalid @enderror"
                        id="longitude" name="longitude" type="text" placeholder="Masukkan longitude kost" value="{{ isset($kamar) ? $kamar->longitude : Request::old('longtitude') }}">
                    @error('longtitude')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                        Alamat
                    </label>
                    <input
                        class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline @error('street') is-invalid @enderror"
                        id="street" name="street" type="text" placeholder="Masukkan alamat kost" value="{{ isset($kamar) ? $kamar->street : Request::old('street') }}">
                    @error('street')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-2">
                    @include('admin.kamar.upload')
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        {{ isset($tempat) ? "Update" : "Create" }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- end body -->

</div>
<!-- end Sales Overview -->
@endsection
@section('css-custom')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
@endsection
@section('js')
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
<script>
    var map = L.map('map').setView([-8.15895,113.71602], 15);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'your.mapbox.access.token'
    }).addTo(map);
    
    // buat variabel berisi fugnsi L.popup 
    var popup = L.popup();
    // buat fungsi popup saat map diklik
    function onMapClick(e) {
        const reverseGeocodingUrl = `https://api.geoapify.com/v1/geocode/reverse?lat=${e.latlng.lat}&lon=${e.latlng.lng}&apiKey=4c784f4265424c4385fbbf68a7ecc22f`;
        popup
            .setLatLng(e.latlng)
            .setContent("koordinatnya adalah " + e.latlng
                .toString()
                ) //set isi konten yang ingin ditampilkan, kali ini kita akan menampilkan latitude dan longitude
            .openOn(map);
        
        document.getElementById('latitude').value = e.latlng.lat //value pada form latitde, longitude akan berganti secara otomatis
        document.getElementById('longitude').value = e.latlng.lng //value pada form longtitde, longitude akan berganti secara otomatis
        L.marker([e.latlng.lat,e.latlng.lng]).addTo(map);
        // fetch(reverseGeocodingUrl).then(result => result.json())
        //     .then(featureCollection => {
        //         const foundAddress = featureCollection.features[0];
        //         console.log('foundAddress', foundAddress);
        //         console.log('street', foundAddress.properties.street);

        //         document.getElementById("street").value = foundAddress.properties.street
        //     });
    }
    map.on('click', onMapClick); //jalankan fungsi
        
</script>
@endsection