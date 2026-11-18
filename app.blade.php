<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'NOVA Studio') | NOVA</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('styles')
</head>
<body>
    <header class="header">
        <div class="container nav">
            <a class="logo" href="{{ route('home') }}">NOVA<span>✳</span></a>
            <nav>
                <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                <a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
            </nav>
            <a class="nav-cta" href="{{ route('contact') }}">Let's talk ↗</a>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer">
        <div class="container footer-inner">
            <a class="logo" href="{{ route('home') }}">NOVA<span>✳</span></a>
            <p>Ideas grow when conversations begin.</p>
            <small>© {{ date('Y') }} NOVA Studio · Laravel Blade Demo</small>
        </div>
    </footer>
    @yield('scripts')
</body>
</html>
