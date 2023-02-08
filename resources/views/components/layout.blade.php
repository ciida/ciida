<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ciida</title>

    @vite(['public/vendor/ciida/build/app.css', 'public/vendor/ciida/build/app.js'], config('vite.configs.default.build_path'))
{{--    @vite(['public/vendor/ciida/app.css', 'public/vendor/ciida/app.js'])--}}
{{--    <script src="{{ asset('c ciida/app.js') }}"></script>--}}
{{--    <link href="{{ asset('ciida/app.css') }}" rel="stylesheet" />--}}
</head>
<body class="font-sans antialiased" x-cloak>
    <div class="min-h-screen bg-gray-100">
        {{ $slot }}
    </div>
</body>
</html>
