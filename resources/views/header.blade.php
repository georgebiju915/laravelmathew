@if (session('message'))
    @foreach (session('message') as $message)
        <div class="message">
            <span>{{ $message }}</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
    @endforeach
@endif

<header class="header">
    <div class="header-1">
        <div class="flex">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <p> new <a href="{{ url('login') }}">login</a> | <a href="{{ url('register') }}">register</a> </p>
        </div>
    </div>

    <div class="header-2">
        <div class="flex">
            <a href="{{ url('home') }}" class="logo">Bookly.</a>
            <nav class="navbar">
                <a href="{{ url('home') }}">home</a>
                <a href="{{ url('about') }}">about</a>
                <a href="{{ url('shop') }}">shop</a>
                <a href="{{ url('contact') }}">contact</a>
                <a href="{{ url('orders') }}">orders</a>
            </nav>
            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                <a href="{{ url('search_page') }}" class="fas fa-search"></a>
                <div id="user-btn" class="fas fa-user"></div>
                <a href="{{ url('cart') }}"> <i class="fas fa-shopping-cart"></i> <span>({{ $cart_count }})</span> </a>
            </div>

            <div class="user-box">
                <p>username : <span>{{ session('user_name') }}</span></p>
                <p>email : <span>{{ session('user_email') }}</span></p>
                <a href="{{ url('logout') }}" class="delete-btn">logout</a>
            </div>
        </div>
    </div>
</header>