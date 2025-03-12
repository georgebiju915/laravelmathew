@include('header')

<div class="heading">
    <h3>contact us</h3>
    <p> <a href="{{ url('home') }}">home</a> / contact </p>
</div>

<section class="contact">
    <form action="{{ url('send_message') }}" method="post">
        @csrf
        <h3>get in touch</h3>
        <input type="text" name="name" placeholder="your name" class="box" required>
        <input type="email" name="email" placeholder="your email" class="box" required>
        <input type="number" name="number" placeholder="your number" class="box" required>
        <textarea name="message" class="box" placeholder="your message" required></textarea>
        <input type="submit" value="send message" class="btn">
    </form>
</section>

@include('footer')

<script src="{{ asset('js/script.js') }}"></script>