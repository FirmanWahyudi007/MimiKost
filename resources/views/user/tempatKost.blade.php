@extends('layouts.user')

@section('title')
Mimi Kost | Tempat Kost
@endsection

@section('body')
<div class="container mx-auto">
    <div class="my-4 prose">
        <h1>
            Tempat Kost
        </h1>
    </div>
</div>

{{-- Footer --}}
<div class="w-full bg-neutral">
    @include('components.footer')
</div>
@endsection