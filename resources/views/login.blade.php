<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login TIXpress</title>
    <style>
        /* Style sama seperti sebelumnya */
    </style>
</head>
<body>
    <a class="register-link" href="#">Registrasi</a>
    <div class="container">
        <h1><span>TIX</span>press 🚍</h1>
        @if ($errors->any())
            <div style="color:red;">{{ $errors->first() }}</div>
        @endif
        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
