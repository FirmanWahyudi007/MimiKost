<li><a href="{{ route('home') }}" class="{!! (request()->routeIs('home')) ?
    'font-bold' : '' !!}">
    Home</a></li>

<li><a href="{{ route('tempat-kost') }}" class="{!! (request()->routeIs('tempat-kost')) ?
    'font-bold' : '' !!}">
    Tempat Kost</a></li>

<li><a href="{{ route('tentang') }}" class="{!! (request()->routeIs('tentang')) ?
    'font-bold' : '' !!}">
    Tentang</a></li>

<li><a href="{{ route('fasilitas') }}" class="{!! (request()->routeIs('fasilitas')) ?
    'font-bold' : '' !!}">
    Fasilitas/Kontak</a></li>