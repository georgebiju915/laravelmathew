@include('header')

<div class="heading">
    <h3>home</h3>
    <p> <a href="{{ url('home') }}">home</a> </p>
</div>

<section class="home">
    <div class="content">
        <h3>welcome to our bookstore</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet voluptatibus aut hic molestias, reiciendis natus fuga, cumque excepturi veniam ratione iure. Excepturi fugiat placeat ...</p>
        <a href="{{ url('shop') }}" class="btn">shop now</a>
    </div>
    <div class="image">
        <img src="{{ asset('images/home-img.jpg') }}" alt="">
    </div>
</section>

@include('footer')

<script src="{{ asset('js/script.js') }}"></script>