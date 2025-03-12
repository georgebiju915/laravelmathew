@include('header')

<div class="heading">
    <h3>about us</h3>
    <p> <a href="{{ url('home') }}">home</a> / about </p>
</div>

<section class="about">
    <div class="flex">
        <div class="image">
            <img src="{{ asset('images/about-img.jpg') }}" alt="">
        </div>
        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet voluptatibus aut hic molestias, reiciendis natus fuga, cumque excepturi veniam ratione iure. Excepturi fugiat placeat ...</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quos enim minima ipsa dicta officia corporis ratione saepe sed adipisci?</p>
            <a href="{{ url('contact') }}" class="btn">contact us</a>
        </div>
    </div>
</section>

<section class="reviews">
    <h1 class="title">client's reviews</h1>
    <div class="box-container">
        <div class="box">
            <img src="{{ asset('images/pic-1.png') }}" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>
        <!-- Add other review boxes similarly -->
    </div>
</section>

<section class="authors">
    <h1 class="title">greate authors</h1>
    <div class="box-container">
        <div class="box">
            <img src="{{ asset('images/author-1.jpg') }}" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
        </div>
        <!-- Add other author boxes similarly -->
    </div>
</section>

@include('footer')

<script src="{{ asset('js/script.js') }}"></script>