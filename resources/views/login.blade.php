@include('header')

<div class="heading">
    <h3>login</h3>
    <p> <a href="{{ url('home') }}">home</a> / login </p>
</div>

<section class="login-form">
    <form action="{{ url('login') }}" method="post">
        @csrf
        <h3>login now</h3>
        <input type="email" name="email" placeholder="your email" class="box" required>
        <input type="password" name="password" placeholder="your password" class="box" required>
        <input type="submit" value="login now" class="btn">
        <p>don't have an account? <a href="{{ url('register') }}">register now</a></p>
    </form>
</section>

@include('footer')

<script src="{{ asset('js/script.js') }}"></script>