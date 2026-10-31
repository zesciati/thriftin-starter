<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'ThriftIn')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class='bg-gray-50 text-gray-800'>
    <nav class="bg-white shadow px-6 py-4 flex gap-6">
        <a href="/" class="font-bold text-red-600">ThriftIn</a>
        <a href="{{ route('products.index') }}" class="font-bold text-red-600">Produk</a>
        <a href="/about" class="font-bold text-red-600">Tentang</a>
    </nav>

    <main class="max-w-4xl mx-auto p-6">
        @yield('content')
    </main>
</body>
</html>