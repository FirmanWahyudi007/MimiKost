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
        <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">
            <div class="w-full max-w-xs">
                <form class="px-8 pt-6 pb-8 mb-6">
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="alamat">
                            Alamat
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="alamat" name="alamat" type="text" placeholder="Alamat">
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                            Create
                        </button>
                    </div>
                </form>
                </div>
        </div>
        <!-- end body -->

    </div>
    <!-- end Sales Overview -->
@endsection