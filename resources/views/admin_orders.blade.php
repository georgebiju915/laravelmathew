@include('admin_header')

<section class="orders">
    <h1 class="title">placed orders</h1>
    <div class="box-container">
        @foreach ($orders as $order)
            <div class="box">
                <p> user id : <span>{{ $order->user_id }}</span> </p>
                <p> placed on : <span>{{ $order->placed_on }}</span> </p>
                <p> name : <span>{{ $order->name }}</span> </p>
                <p> number : <span>{{ $order->number }}</span> </p>
                <p> email : <span>{{ $order->email }}</span> </p>
                <p> address : <span>{{ $order->address }}</span> </p>
                <p> total products : <span>{{ $order->total_products }}</span> </p>
                <p> total price : <span>${{ $order->total_price }}/-</span> </p>
                <p> payment method : <span>{{ $order->method }}</span> </p>
                <form action="{{ url('admin_orders') }}" method="post">
                    @csrf
                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                    <select name="update_payment">
                        <option value="" selected disabled>{{ $order->payment_status }}</option>
                        <option value="pending">pending</option>
                        <option value="completed">completed</option>
                    </select>
                    <input type="submit" value="update" name="update_order" class="option-btn">
                    <a href="{{ url('admin_orders?delete=' . $order->id) }}" onclick="return confirm('delete this order?');" class="delete-btn">delete</a>
                </form>
            </div>
        @endforeach
    </div>
</section>

<script src="{{ asset('js/admin_script.js') }}"></script>