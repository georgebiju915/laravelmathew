@include('header')
@extends('layouts.app')
<div class="heading">
    <h3>our shop</h3>
    <p> <a href="{{ url('home') }}">home</a> / shop </p>
</div>

<section class="products">
    <h1 class="title">latest products</h1>
    <div class="box-container">
        @foreach ($products as $product)
            <div class="box">
                <img src="{{ asset('images/' . $product->image) }}" alt="">
                <h3>{{ $product->name }}</h3>
                <div class="price">${{ $product->price }}</div>
                <a href="{{ url('add_to_cart/' . $product->id) }}" class="btn">add to cart</a>
            </div>
        @endforeach
    </div>
</section>

@include('footer')

<script src="{{ asset('js/script.js') }}"></script>