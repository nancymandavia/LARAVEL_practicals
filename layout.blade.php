<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel Website')</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background: #f5f7fb; color: #263238; }
        header { background: #253b65; color: white; padding: 22px 7%; }
        .brand { font-size: 22px; font-weight: bold; margin: 0; }
        nav { display: flex; gap: 24px; margin-top: 14px; flex-wrap: wrap; }
        nav a { color: #fff; text-decoration: none; font-size: 15px; }
        nav a:hover { color: #b8d7ff; }
        main { width: min(850px, 90%); margin: 45px auto; background: white; padding: 38px; border-radius: 12px; box-shadow: 0 5px 22px #14213d12; min-height: 280px; }
        h1 { color: #253b65; margin-top: 0; }
        p { line-height: 1.8; color: #596579; }
        .welcome { background: #edf3ff; border-left: 4px solid #4569aa; padding: 18px; border-radius: 5px; }
        footer { text-align: center; padding: 20px; color: #778195; font-size: 13px; }
        .button { display: inline-block; background: #253b65; color: white; text-decoration: none; padding: 11px 17px; border-radius: 5px; margin-top: 10px; }
    </style>
</head>
<body>
    <header>
        <p class="brand">My Laravel Website</p>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>© {{ date('Y') }} My Laravel Website</footer>
</body>
</html>
