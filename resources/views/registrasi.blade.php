<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #f28500, #f8b500);
            color: white;
            text-align: center;
            flex-direction: column;
        }

        .logo {
            font-size: 2.5em;
            font-weight: bold;
        }

        .logo span {
            font-style: italic;
        }

        .btn-registrasi {
            margin-top: 20px;
            padding: 10px 25px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            background-color: white;
            color: orange;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-registrasi:hover {
            background-color: #f0f0f0;
        }

        .language-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="language-icon">🌐</div>
        <div class="logo">
            <span>TIX</span>press 🚆
        </div>
        <div>Registrasi</div>
        <form action="{{ route('login') }}" method="get">
            <button type="submit" class="btn-registrasi">Registrasi</button>
        </form>
    </div>
</body>
</html>
