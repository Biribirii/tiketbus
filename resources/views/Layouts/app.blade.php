<!DOCTYPE html>
<html>
<head>
    <title>TIXpress</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #ff7e00, #ffcc00);
            min-height: 100vh;
        }

        .btn-red {
            background-color: #dc3545;
            color: white;
            border-radius: 50px;
        }

        .btn-red:hover {
            background-color: #c82333;
        }

        .readonly-input {
            background-color: #f1f1f1;
            color: #dc3545;
        }

        .card-custom {
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            color: #dc3545;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .note {
            font-size: 0.85rem;
            color: #dc3545;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-warning justify-content-between">
        <a class="navbar-brand font-weight-bold text-danger" href="#">TIXpress</a>
         <div class="flex space-x-2">
            <a href="{{ route('lokasi_bus') }}">
            <button type="button" class="bg-white text-orange-500 font-semibold px-3 py-1 rounded hover:bg-gray-100 shadow">
                Live Lokasi
            </button>
            </a>
            <a href="{{ route('pesanan') }}">
            <button type="button" class="bg-white text-orange-500 font-semibold px-3 py-1 rounded hover:bg-gray-100 shadow">
                Pesanan
            </button>
            </a>
            <a href="{{ route('akun.pengguna') }}">
            <button type="button" class="bg-white text-orange-500 font-semibold px-3 py-1 rounded hover:bg-gray-100 shadow">
                Account
            </button>
            </a>
        </div>
    </nav>

    <div class="container my-5">
        @yield('content')
    </div>

    @yield('scripts')
</body>
</html>
