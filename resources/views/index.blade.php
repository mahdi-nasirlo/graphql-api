@extends('layout.master')

@section('content')
    {{-- @php
        $product = \App\Models\Store\Product::all();
    @endphp

    @foreach ($products as $item)
    @endforeach --}}
    @foreach ($product as $item)
        <a href="{{ route('store.product', $item) }}">
            {{ $item->name }}
        </a>
        <i class="ci-arrow-down"></i>
    @endforeach
@endsection
