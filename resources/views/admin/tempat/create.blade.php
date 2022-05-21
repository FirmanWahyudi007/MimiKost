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
            <form class="px-8 pt-6 pb-8 mb-6" action="{{isset($tempat) ? route('tempat.update',$tempat->id) : route('tempat.store') }}" method="POST">
                {!! csrf_field() !!}
                {!! isset($tempat) ? method_field('PUT'):'' !!}
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
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="alamat">
                        Alamat
                    </label>
                    <textarea name="alamat" id="alamat" placeholder="Alamat..."
                        class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline @error('alamat') is-invalid @enderror"
                        cols="30" rows="10">{{ isset($tempat) ? $tempat->lokasi_tempat : Request::old('alamat') }}</textarea>
                    @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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