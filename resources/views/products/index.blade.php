@extends('layouts.app')

@section('title', 'Katalog Produk')

@section('content')
    <div class="text-2xl font-bold mb-4">Katalog Thrif</div>

    @forelse ($products as $id => $product)
        <a href="{{ route('products.show', $id) }}" class="block bg-white p-4 rounded-lg shadow mb-3">
            <p class="font-semibold">{{ $product['name'] }}</p>
            <p class="text-red-600">Rp {{ $product['price'] }}</p>
        </a>
    @empty
        <p>Belum ada produk.</p>
    @endforelse
@endsection