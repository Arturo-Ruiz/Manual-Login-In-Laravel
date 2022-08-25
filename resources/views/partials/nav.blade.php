<a href="/">Home</a>
@auth
    <a href="/dashboard">Dashboard</a>
    <form action="/logout" method="POST">
        @csrf
        <a href="#"
            onclick="this.closest('form').submit()"
        >Logout</a>
    </form>
@else
    <a href="/login">Login</a>
@endauth
