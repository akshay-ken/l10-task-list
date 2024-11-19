<!DOCTYPE html>
<html>

    <head>
        <title>Laravel 10 Task list app</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
        @yield('styles')
    </head>

    <body class="container mx-auto mt-10 max-w-lg">
        <h1 class="mb-4 text-2xl">@yield('title')</h1>
        <div>
            @if (session()->has('success'))
                <div>{{ session('success') }}</div>
            @endif
            @yield('content')
        </div>
    </body>

</html>
