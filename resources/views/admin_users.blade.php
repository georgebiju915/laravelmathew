@include('admin_header')

<section class="users">
    <h1 class="title"> user accounts </h1>
    <div class="box-container">
        @foreach ($users as $user)
            <div class="box">
                <p> user id : <span>{{ $user->id }}</span> </p>
                <p> username : <span>{{ $user->name }}</span> </p>
                <p> email : <span>{{ $user->email }}</span> </p>
                <p> user type : <span style="color:{{ $user->user_type == 'admin' ? 'var(--orange)' : 'inherit' }}">{{ $user->user_type }}</span> </p>
                <a href="{{ url('admin_users/delete', $user->id) }}" onclick="return confirm('delete this user?');" class="delete-btn">delete user</a>
            </div>
        @endforeach
    </div>
</section>

<script src="{{ asset('js/admin_script.js') }}"></script>