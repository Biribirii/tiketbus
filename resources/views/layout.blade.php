<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TIXpress</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Styles -->
    <style>
        body {
            font-family: sans-serif;
            background: linear-gradient(to right, #f57900, #ffc107);
            color: #333;
        }
        .container, .detail-container {
            margin: 2rem auto;
            background: white;
            padding: 2rem;
            border-radius: 15px;
            max-width: 900px;
        }
        .search-bar, .jadwal-list {
            margin-bottom: 2rem;
        }
        .card {
            background: #fff0e0;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1rem;
        }
        .badge {
            background-color: #ff9800;
            color: white;
            padding: 2px 8px;
            border-radius: 5px;
            font-size: 0.8rem;
        }
        button {
            background-color: #d32f2f;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
    </style>
</head>
<body class="min-h-screen">
    @yield('content')
</body>
</html>
