@extends('layout.master')

@section('content')
    @php
        $product = \App\Models\Store\Product::all();
    @endphp

    @foreach ($product as $item)
        <a href="{{ route('store.product', $item) }}">
            {{ $item->name }}
        </a>
    @endforeach
@endsection
