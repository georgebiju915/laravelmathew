@include('header')

<div class="heading">
    <h3>search page</h3>
    <p> <a href="{{ url('home') }}">home</a> / search </p>
</div>

<section class="search-form">
    <form action="{{ url('search') }}" method="post">
        @csrf
        <input type="text" name="search" placeholder="search products..." class="box">
        <input type="submit" name="submit" value="search" class="btn">
    </form>
</section>

<section class="products" style="padding-top: 0;">
    <div class="box-container">
        @if (isset($products))
            @foreach ($products as $product)
                <form action="{{ url('add_to_cart') }}" method="post" class="box">
                    @csrf
                    <img src="{{ asset('uploaded_img/' . $product->image) }}" alt="" class="image">
                    <div class="name">{{ $product->name }}</div>
                    <div class="price">${{ $product->price }}/-</div>
                    <input type="number" class="qty" name="product_quantity" min="1" value="1">
                    <input type="hidden" name="product_name" value="{{ $product->name }}">
                    <input type="hidden" name="product_price" value="{{ $product->price }}">
                    <input type="hidden" name="product_image" value="{{ $product->image }}">
                    <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                </form>
            @endforeach
            @if ($products->isEmpty())
                <p class="empty">no result found!</p>
            @endif
        @else
            <p class="empty">search something!</p>
        @endif
    </div>
</section>

@include('footer')

<script src="{{ asset('js/script.js') }}"></script>