<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Nexora Solutions')</title>

    <link rel="stylesheet" href="{{ asset('css/company.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8fafc;
            color: #1e293b;
        }

        a {
            text-decoration: none;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 8px;
            background: #2563eb;
            color: white;
            font-weight: bold;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        .section {
            padding: 70px 0;
        }
    </style>
</head>

<body>

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>