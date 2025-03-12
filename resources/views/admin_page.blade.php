@include('admin_header')

<section class="dashboard">
    <h1 class="title">dashboard</h1>
    <div class="box-container">
        <div class="box">
            <h3>welcome!</h3>
            <p>{{ session('admin_name') }}</p>
            <a href="{{ url('admin_login') }}" class="btn">login</a>
        </div>
        <div class="box">
            <h3>{{ $total_pending }}</h3>
            <p>pending orders</p>
            <a href="{{ url('admin_orders') }}" class="btn">see orders</a>
        </div>
        <div class="box">
            <h3>{{ $total_completed }}</h3>
            <p>completed orders</p>
            <a href="{{ url('admin_orders') }}" class="btn">see orders</a>
        </div>
        <div class="box">
            <h3>{{ $total_products }}</h3>
            <p>products added</p>
            <a href="{{ url('admin_products') }}" class="btn">see products</a>
        </div>
        <div class="box">
            <h3>{{ $total_users }}</h3>
            <p>users</p>
            <a href="{{ url('admin_users') }}" class="btn">see users</a>
        </div>
        <div class="box">
            <h3>{{ $total_messages }}</h3>
            <p>new messages</p>
            <a href="{{ url('admin_contacts') }}" class="btn">see messages</a>
        </div>
    </div>
</section>

<script src="{{ asset('js/admin_script.js') }}"></script>