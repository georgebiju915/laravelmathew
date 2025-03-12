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
         <p> new <a href="{{ route('register') }}">login</a> | <a href="{{ route('register') }}">register</a> </p>
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="{{ route('home') }}" class="logo">Bookly.</a>

         <nav class="navbar">
            <a href="{{ route('home') }}">home</a>
            <a href="{{ route('about') }}">about</a>
            <a href="{{ route('shop') }}">shop</a>
            <a href="{{ route('contact') }}">contact</a>
            <a href="{{ route('orders') }}">orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="{{ route('search') }}" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <a href="{{ route('cart') }}"> <i class="fas fa-shopping-cart"></i> <span>({{ $cart_count }})</span> </a>
         </div>

         <div class="user-box">
            <p>username : <span>{{ Auth::user()->name }}</span></p>
            <p>email : <span>{{ Auth::user()->email }}</span></p>
            <a href="{{ route('logout') }}" class="delete-btn">logout</a>
         </div>
      </div>
   </div>
</header>