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

            <a href="{{route('kamar.index')}}" class="btn-bs-primary">
                Back
            </a>
        </div>
    </div>
    <!-- end header -->

    <!-- body -->
    <div class="card-body">
        <div class="w-full max-w-xl">
           <form class="px-8 pt-6 pb-8 mb-6" action="{{isset($kamar) ? route('kamar.update',$kamar->id) : route('kamar.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                {!! csrf_field() !!}
                {!! isset($kamar) ? method_field('PUT'):'' !!}
                <input type="hidden" name="id" value="{{ isset($kamar) ? $kamar->id : '' }}"> <br>
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
                        Nama
                    </label>
                    <input
                        class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline @error('nama') is-invalid @enderror"
                        id="nama" name="nama" type="text" placeholder="Masukkan nama kost" value="{{ isset($kamar) ? $kamar->nama : Request::old('nama') }}">
                    @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="lokasi">
                        Lokasi
                    </label>
                    <select name="lokasi" id="lokasi"
                        class="shadow border rounded w-full py-2 px-3 focus:outline-none focus:shadow-outline">
                        @foreach ($lokasi as $item)
                            <option value="{{$item->id}}" {{ (isset($kamar) && $kamar->lokasi_kost_id == $item->id) ? 'selected' : ''}}>{{$item->lokasi_tempat}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="harga">
                        Harga
                    </label>
                    <input
                        class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline @error('harga') is-invalid @enderror"
                        id="harga" name="harga" type="number" placeholder="Massukkan harga" value="{{ isset($kamar) ? $kamar->harga : Request::old('harga') }}">
                    @error('harga')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="jumlah">
                        Jumlah
                    </label>
                    <input
                        class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline @error('jumlah') is-invalid @enderror"
                        id="jumlah" name="jumlah" type="number" placeholder="Massukkan jumlah" value="{{ isset($kamar) ? $kamar->jumlah : Request::old('jumlah') }}">
                    @error('jumlah')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fasilitas">
                        Fasilitas
                    </label>
                        <input class="mr-1"  type="checkbox" value="Kamar Mandi Dalam" @if ($kamar)   
                            @foreach ($kamar->fasilitas as $item)
                                {{$item == "Kamar Mandi Dalam" ? 'checked' : ''}}
                            @endforeach @endif  name="fasilitas[]" id="fasilitas"> Kamar Mandi Dalam
                        <input class="mr-1"  type="checkbox" value="Kamar Mandi Luar" @if ($kamar)   
                            @foreach ($kamar->fasilitas as $item)
                                {{$item == "Kamar Mandi Luar" ? 'checked' : ''}}
                            @endforeach @endif  name="fasilitas[]" id="fasilitas"> Kamar Mandi Luar
                        <input class="mr-1"  type="checkbox" value="Free Wifi" @if ($kamar)   
                            @foreach ($kamar->fasilitas as $item)
                                {{$item == "Free Wifi" ? 'checked' : ''}}
                            @endforeach @endif  name="fasilitas[]" id="fasilitas"> Free Wifi
                        <input class="mr-1"  type="checkbox" value="Dapur" @if ($kamar)   
                            @foreach ($kamar->fasilitas as $item)
                                {{$item == "Dapur" ? 'checked' : ''}}
                            @endforeach @endif  name="fasilitas[]" id="fasilitas"> Dapur <br>
                        <input class="mr-1"  type="checkbox" value="Kulkas" @if ($kamar)   
                            @foreach ($kamar->fasilitas as $item)
                                {{$item == "Kulkas" ? 'checked' : ''}}
                            @endforeach @endif  name="fasilitas[]" id="fasilitas"> Kulkas
                        <input class="mr-1"  type="checkbox" value="Free Listrik" @if ($kamar)   
                            @foreach ($kamar->fasilitas as $item)
                                {{$item == "Free Listrik" ? 'checked' : ''}}
                            @endforeach @endif  name="fasilitas[]" id="fasilitas"> Free Listrik
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="peraturan">
                        Peraturan
                    </label>
                    <textarea name="peraturan" id="peraturan" placeholder="Masukkan Peraturan..."
                        class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline @error('peraturan') is-invalid @enderror"
                        cols="30" rows="10">{{ isset($kamar) ? $kamar->peraturan : Request::old('peraturan') }}</textarea>
                    @error('peraturan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                @if ($kamar == null)
                    <div class="mb-2">
                        @include('admin.kamar.upload')
                    </div>
                @endif
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        {{isset($kamar) ? 'Update' : 'Create'}}
                    </button>
                </div>
            </form>
            {{-- @if ($kamar)
                <div class="row">
                @foreach ($kamar->gambarkamars as $item)
                    <div class="column">
                        <img src="{{asset('storage/'.$item->path)}}" alt="" style="width: 100%" srcset="">
                    </div>
                @endforeach
                </div>
            @endif --}}
        </div>
    </div>
    <!-- end body -->
</div>
{{-- <style>
    .column {
        float: left;
        width: 33.33%;
        padding: 5px;
    }

    /* Clear floats after image containers */
    .row::after {
        content: "";
        clear: both;
        display: table;
    }
</style> --}}
@endsection
