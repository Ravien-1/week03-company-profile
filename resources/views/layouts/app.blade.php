<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Nexora Solutions')</title>

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
            transition: 0.3s;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        .page-header {
            padding: 80px 0 40px;
            text-align: center;
            background: #eff6ff;
        }

        .page-header h1 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .page-header p {
            color: #64748b;
            font-size: 18px;
        }

        .section {
            padding: 70px 0;
        }

        footer {
            margin-top: 60px;
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