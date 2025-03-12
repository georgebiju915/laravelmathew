@include('header')

<div class="heading">
    <h3>checkout</h3>
    <p> <a href="{{ url('home') }}">home</a> / checkout </p>
</div>

<section class="checkout">
    <form action="{{ url('place_order') }}" method="post">
        @csrf
        <h3>place your order</h3>
        <div class="flex">
            <div class="inputBox">
                <span>your name :</span>
                <input type="text" name="name" required placeholder="enter your name">
            </div>
            <div class="inputBox">
                <span>your number :</span>
                <input type="number" name="number" required placeholder="enter your number">
            </div>
            <div class="inputBox">
                <span>your email :</span>
                <input type="email" name="email" required placeholder="enter your email">
            </div>
            <div class="inputBox">
                <span>payment method :</span>
                <select name="method">
                    <option value="cash on delivery">cash on delivery</option>
                    <option value="credit card">credit card</option>
                    <option value="paypal">paypal</option>
                </select>
            </div>
            <div class="inputBox">
                <span>address line 1 :</span>
                <input type="text" name="address_line_1" required placeholder="e.g. flat no.">
            </div>
            <div class="inputBox">
                <span>address line 2 :</span>
                <input type="text" name="address_line_2" required placeholder="e.g. street name">
            </div>
            <div class="inputBox">
                <span>city :</span>
                <input type="text" name="city" required placeholder="e.g. mumbai">
            </div>
            <div class="inputBox">
                <span>state :</span>
                <input type="text" name="state" required placeholder="e.g. maharashtra">
            </div>
            <div class="inputBox">
                <span>country :</span>
                <input type="text" name="country" required placeholder="e.g. india">
            </div>
            <div class="inputBox">
                <span>pin code :</span>
                <input type="text" name="pin_code" required placeholder="e.g. 400104">
            </div>
        </div>
        <input type="submit" value="order now" class="btn">
    </form>
</section>

@include('footer')

<script src="{{ asset('js/script.js') }}"></script>