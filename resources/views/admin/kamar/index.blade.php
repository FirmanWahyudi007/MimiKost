@extends('admin.layouts.admin')
@section('title')
    MimiKost - Kamar Kost
@endsection
@section('content')
    <!-- Sales Overview -->
    <div class="card mt-6">

        <!-- header -->
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Kamar Kost</h1>
            <div class="flex flex-row justify-center items-center">

            <a href="{{route('kamar.create')}}" class="btn-bs-primary">
                Create
            </a>
        </div>
        </div>
        <!-- end header -->

        <!-- body -->
        <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">
            <table class="table-fixed">
                <thead>
                    <tr>
                    <th>Type Kamar</th>
                    <th>Lokasi</th>
                    <th>Harga</th>
                    <th>Fasilitas</th>
                    <th>Gambar</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kamar Mandi Dalam</td>
                        <td>Tidar 1</td>
                        <td>Rp.1000.000,00</td>
                        <td>-</td>
                        <td>a</td>
                        <td>
                            {{-- <div class="grid grid-cols-3"> --}}
                                <a href="#" class="btn-bs-info">Update</a>
                                <a href="#" class="btn-bs-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
                </table>
        </div>
        <!-- end body -->

    </div>
    <!-- end Sales Overview -->
@endsection