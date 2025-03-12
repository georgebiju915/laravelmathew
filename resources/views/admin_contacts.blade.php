@include('admin_header')

<section class="messages">
    <h1 class="title"> messages </h1>
    <div class="box-container">
        @foreach ($messages as $message)
            <div class="box">
                <p> user id : <span>{{ $message->user_id }}</span> </p>
                <p> name : <span>{{ $message->name }}</span> </p>
                <p> number : <span>{{ $message->number }}</span> </p>
                <p> email : <span>{{ $message->email }}</span> </p>
                <p> message : <span>{{ $message->message }}</span> </p>
                <a href="{{ url('admin_contacts?delete=' . $message->id) }}" onclick="return confirm('delete this message?');" class="delete-btn">delete message</a>
            </div>
        @endforeach
    </div>
</section>

<script src="{{ asset('js/admin_script.js') }}"></script>