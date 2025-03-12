@include('header')

<div class="heading">
    <h3>register</h3>
    <p> <a href="{{ url('home') }}">home</a> / register </p>
</div>

<section class="register-form">
    <form action="{{ url('register') }}" method="post">
        @csrf
        <h3>register now</h3>
        <input type="text" name="name" placeholder="your name" class="box" required>
        <input type="email" name="email" placeholder="your email" class="box" required>
        <input type="password" name="password" placeholder="your password" class="box" required>
        <input type="password" name="password_confirmation" placeholder="confirm your password" class="box" required>
        <input type="submit" value="register now" class="btn">
        <p>already have an account? <a href="{{ url('login') }}">login now</a></p>
    </form>
</section>

@include('footer')

<script src="{{ asset('js/script.js') }}"></script>