<li><a href="{{ route('home') }}" {!! (request()->routeIs('home')) ?
    'class="font-bold"' : '' !!}>
    Home</a></li>

<li><a href="{{ route('tempat-kost') }}" {!! (request()->routeIs('tempat-kost')) ?
    'class="font-bold"' : '' !!}>
    Tempat Kost</a></li>

<li><a href="{{ route('tentang') }}" {!! (request()->routeIs('tentang')) ?
    'class="font-bold"' : '' !!}>
    Tentang</a></li>

<li><a href="{{ route('review') }}" {!! (request()->routeIs('review')) ?
    'class="font-bold"' : '' !!}>
    Review</a></li>

<li><a href="{{ route('fasilitas') }}" {!! (request()->routeIs('fasilitas')) ?
    'class="font-bold"' : '' !!}>
    Fasilitas/Kontak</a></li>