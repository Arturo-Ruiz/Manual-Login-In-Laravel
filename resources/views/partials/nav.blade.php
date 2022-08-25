<a href="/">Home</a>
@auth
    <a href="/dashboard">Dashboard</a>
    <a href="#">Logout</a>
@else
    <a href="/login">Login</a>
@endauth
