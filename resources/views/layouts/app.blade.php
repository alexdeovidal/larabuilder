<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <title>@yield('title', 'Virtual Store')</title>
</head>
<body class="bg-gray-100">
    @include('components.header')
    <main class="container mx-auto my-8">
        @yield('content')
    </main>
    @include('components.footer')
</body>
</html>