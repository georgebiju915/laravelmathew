@include('header')

<div class="heading">
    <h3>shopping cart</h3>
    <p> <a href="{{ url('home') }}">home</a> / cart </p>
</div>

<section class="shopping-cart">
    <h1 class="title">your products</h1>
    <div class="box-container">
        @foreach ($cartItems as $item)
            <div class="box">
                <a href="{{ url('cart?delete=' . $item->id) }}" class="fas fa-times" onclick="return confirm('delete this item?');"></a>
                <img src="{{ asset('images/' . $item->image) }}" alt="">
                <div class="name">{{ $item->name }}</div>
                <div class="price">${{ $item->price }}</div>
                <form action="{{ url('cart') }}" method="post">
                    @csrf
                    <input type="hidden" name="cart_id" value="{{ $item->id }}">
                    <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" class="qty">
                    <input type="submit" value="update" name="update_qty" class="option-btn">
                </form>
                <div class="sub-total"> sub total : <span>${{ $item->price * $item->quantity }}</span> </div>
            </div>
        @endforeach
    </div>
    <div class="cart-total">
        <p>grand total : <span>${{ $grandTotal }}</span></p>
        <a href="{{ url('shop') }}" class="option-btn">continue shopping</a>
        <a href="{{ url('checkout') }}" class="btn">proceed to checkout</a>
    </div>
</section>

@include('footer')

<script src="{{ asset('js/script.js') }}"></script>