<li><a href="{{ route('home') }}" class="{!! (request()->routeIs('home')) ?
    'font-bold' : '' !!}">
    Home</a></li>

<li><a href="{{ route('tempat-kost') }}" class="{!! (request()->routeIs('tempat-kost')) ?
    'font-bold' : '' !!}">
    Kostan</a></li>

<li><a href="{{ route('tentang') }}" class="{!! (request()->routeIs('tentang')) ?
    'font-bold' : '' !!}">
    Tentang</a></li>

<li><a href="{{ route('kontak') }}" class="{!! (request()->routeIs('kontak')) ?
    'font-bold' : '' !!}">
    Kontak</a></li>