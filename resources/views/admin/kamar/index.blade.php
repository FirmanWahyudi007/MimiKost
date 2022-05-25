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
    <div class="card-body">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-close mb-5">
                <button class="alert-btn-close">
                    <i class="fad fa-times"></i>
                </button>
                <span>{{ $message }}</span>
            </div>
        @elseif ($message = Session::get('error'))
            <div class="alert alert-error alert-close">
                <button class="alert-btn-close">
                    <i class="fad fa-times"></i>
                </button>
                <span>{{ $message }}</span>
            </div>
        @elseif ($message = Session::get('info'))
            <div class="alert alert-default alert-close mb-5">
                <button class="alert-btn-close">
                    <i class="fad fa-times"></i>
                </button>
                <span>{{ $message }}</span>
            </div>
        @endif
        <table class="w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Nama Kamar</th>
                    <th class="px-4 py-2">Lokasi</th>
                    <th class="px-4 py-2">Jumlah</th>
                    <th class="px-4 py-2">Harga</th>
                    <th class="px-4 py-2">Fasilitas</th>
                    <th class="px-4 py-2">Gambar</th>
                    <th class="px-4 py-2 w-3/12">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kamar as $key => $value)
                    <tr class="hover:bg-gray-200">
                        <td class="border px-4 py-2">{{ $key+1 }}</td>
                        <td class="border px-4 py-2">{{$value->nama}}</td>
                        <td class="border px-4 py-2">{{$value->lokasi->lokasi_tempat}}</td>
                        <td class="border px-4 py-2">{{$value->jumlah}}</td>
                        <td class="border px-4 py-2">Rp.{{number_format($value->harga,2) }}</td>
                        <td class="border px-4 py-2 ">
                            @foreach ($value->fasilitas as $item)
                                <div class="bg-black text-white px-2 py-1 text-sm rounded-full inline-block mb-1">{{$item}}</div>
                            @endforeach
                        </td>
                        <td class="border px-4 py-2">
                            @foreach ($value->gambarkamars as $item)
                                <div class="w-16 h-16 bg-center bg-cover rounded-lg mx-auto" style="background-image: url({{asset('storage/'.$item->path)}})" />
                            @endforeach
                        </td>
                        <td class="border px-4 py-2">
                            <div class="grid grid-cols-2 gap-4">
                                <a href="{{route('kamar.show',$value->id)}}"
                                    class="btn bg-blue-500 hover:bg-blue-700 hover:text-white text-white font-bold py-2 px-4 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                    Update
                                </a>
                                <form action="{{route('kamar.destroy',$value->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('Kamar kost juga akan terhapus')"
                                    class="btn bg-red-500 hover:bg-red-700 hover:text-white text-white font-bold py-2 px-4 rounded">
                                         <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                        Delete
                                    </button>
                                </form>
                                {{-- <a href="#" onclick="return confirm('Kamar kost juga akan terhapus')"
                                    class="btn bg-red-500 hover:bg-red-700 hover:text-white text-white font-bold py-2 px-4 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    Delete
                                </a> --}}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <!-- end body -->

</div>
<!-- end Sales Overview -->
@endsection