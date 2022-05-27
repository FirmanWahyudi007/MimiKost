@foreach ($tempatKosts as $tempatKost)
<a href="{{ route('tempat-kost-view', $tempatKost->id) }}">
    <div class="card card-compact bg-base-100 shadow-sm" style="min-width: 180px">
        <figure><img src="https://api.lorem.space/image/shoes?w=400&h=225" alt="Shoes" class="" />
        </figure>
        <div class="card-body">
            {{-- <h3 class="text-xs">Lorem Ipsum</h3> --}}
            <div class="h-px w-full block bg-gray-400 my-1"></div>

            <h2 class="card-title">{{ $tempatKost->lokasi_tempat }}</h2>
    
    
            {{-- <div id="desc" class="flex gap-4">
                <div class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                    </svg>
                    <p class="inline-block">kamar m<sup>2</sup></p>
                </div>
                <div class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                    </svg>
                    <p class="inline-block">jenis</p>
                </div>
            </div>
    
            <div class="h-px w-full hidden lg:block bg-gray-400 my-4"></div>
    
            <h3 class="text-sm hidden lg:block">Lorem Ipsum</h3>
            <h2 class="card-title hidden lg:block">Lorem Ipsum!</h2> --}}
    
        </div>
    </div>
</a>
@endforeach