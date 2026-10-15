@extends('layout')

@section('title', 'Product')

@section('content')
<div class="card">
    <h2>Product Details</h2>
    <p><strong>Product ID:</strong> {{ $id }}</p>
    <p><strong>Name:</strong> {{ $product['name'] }}</p>
    <p><strong>Price:</strong> ₹{{ $product['price'] }}</p>
    <p>The wildcard ID chooses which product details are displayed.</p>
</div>
@endsection
