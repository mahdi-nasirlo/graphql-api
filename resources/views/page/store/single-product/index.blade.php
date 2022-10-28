@extends('layout.master')

@section('content')
    @include('page.store.single-product.title')
    <div class="container">
        @include('page.store.single-product.gallery')

        @include('page.store.single-product.description')

    </div>
    @include('page.store.single-product.review')
    {{-- @include('page.store.single-product.related') --}}
@endsection
