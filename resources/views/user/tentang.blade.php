@extends('layouts.user')

@section('title')
Mimi Kost | Tentang
@endsection

@section('body')

<section class="pt-8 pb-4 px-8">
    <div class="hero rounded-3xl" style="background-image: url(https://api.lorem.space/image/fashion?w=1000&h=800); min-height: 80vh">
        <div class="hero-overlay bg-opacity-60 rounded-3xl"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Tentang Kami</h1>
                <button class="btn btn-primary">Lihat lebih banyak</button>
            </div>
        </div>
    </div>
</section>

<div class="h-1 w-32 bg-black my-8 mx-auto"></div>

<div class="container mx-auto my-8 grid grid-cols-1 md:grid-cols-2 gap-4">
    <div class="p-8 prose">
        <h1>Mimi Kost</h1>
        <p class="text-lg lg:text-xl">Mimi Kost merupakan website yang mengelola dan menyajikan daftar kos dengan
            penjelasan fasilitas secara
            terperinci dan dilengkapi dengan foto serta detail dari setiap kos.
        </p>
        <p class="text-lg lg:text-xl">
            Mamikos berusaha untuk bisa terus menyajikan data ketersediaan kamar yang akurat, agar calon penghuni
            mendapatkan kemudahan dalam pencarian kos.</p>
    </div>
    <div class="p-4 lg:p-8">
        <img class="w-full rounded-lg"
            src="https://binabangunbangsa.com/wp-content/uploads/2020/03/tips-Manajemen-Rumah-Kost-yang-Baik-dan-Benar-.jpg"
            alt="">
    </div>
</div>

@include('components.divider')

<div class="container mx-auto my-8 grid grid-cols-1 md:grid-cols-2 gap-4 ">
    <div class="p-4 lg:p-8">
        <img class="w-full rounded-lg"
            src="https://binabangunbangsa.com/wp-content/uploads/2020/03/tips-Manajemen-Rumah-Kost-yang-Baik-dan-Benar-.jpg"
            alt="">
    </div>
    <div class="p-8 prose">
        <h1>Pemilik</h1>
        <p class="text-lg lg:text-xl">Mimi Kost merupakan website yang mengelola dan menyajikan daftar kos dengan
            penjelasan fasilitas secara
            terperinci dan dilengkapi dengan foto serta detail dari setiap kos.
        </p>
        <p class="text-lg lg:text-xl">
            Mamikos berusaha untuk bisa terus menyajikan data ketersediaan kamar yang akurat, agar calon penghuni
            mendapatkan kemudahan dalam pencarian kos.</p>
    </div>

</div>


{{-- Footer --}}
<div class="w-full bg-neutral">
    @include('components.footer')
</div>
@endsection