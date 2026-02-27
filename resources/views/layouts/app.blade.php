<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    
    {{-- CSS File Link --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    {{-- Navbar --}}
    <nav class="navbar">
        <div class="logo">My App</div>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="#">About</a>
            <a href="{{ route('posts-index') }}">Posts</a>
        </div>
    </nav>

    {{-- Main Content --}}
    <div class="container">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="footer">
        <p>&copy; 2024 My App. All rights reserved.</p>
    </footer>
    
    {{-- JavaScript File Link --}}
    <script src="{{ asset('js/script.js') }}"></script>
    
    @stack('scripts')

</body>

</html>