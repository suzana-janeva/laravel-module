<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Service Provider Directory')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <header class="p-4" role="banner">
        <h1 class="text-2xl">Service Provider Directory</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="{{ url('/service-providers') }}" class="hover:text-purple-300">Home</a></li>
            </ul>
        </nav>
    </header>

    <main class="container mx-auto p-4 min-h-screen">
        @yield('content')
    </main>

    <footer class="p-4 text-center" role="contentinfo">
        <p>&copy; 2025 Service Provider Directory</p>
    </footer>
</body>
</html>