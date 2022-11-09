@extends('layout.master')

@section('content')
    @foreach ($product as $item)
        <a href="{{ route('store.product', $item) }}">
            {{ $item->name }}
        </a>
        <i class="ci-arrow-down"></i>
    @endforeach
@endsection
