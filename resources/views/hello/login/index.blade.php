<h3>Login Page</h3>
<form action="/login" method="post">
    @csrf
    <input type="text" name="username" id="username" placeholder="Username">
    <input type="password" name="password" id="password">
    <button type="submit">Login</button>
</form>