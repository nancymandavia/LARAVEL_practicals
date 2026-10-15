<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Routes Demo')</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 850px; margin: 40px auto; padding: 0 18px; line-height: 1.6; color: #222; }
        nav { display: flex; flex-wrap: wrap; gap: 16px; padding: 12px 0; border-bottom: 1px solid #ddd; }
        a { color: #1769aa; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .card { background: #f5f7fa; border: 1px solid #e0e5eb; border-radius: 10px; padding: 18px; margin-top: 18px; }
        code { background: #eee; padding: 2px 5px; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>Laravel Routes & Wildcards Demo</h1>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('hello', ['name' => 'Nancy']) }}">Hello Nancy</a>
        <a href="{{ route('student', ['name' => 'Nancy', 'course' => 'BCA']) }}">Student Example</a>
        <a href="{{ route('category') }}">Default Category</a>
        <a href="{{ route('product', ['id' => 1]) }}">Product Example</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
