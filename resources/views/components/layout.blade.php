<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ciida</title>

    {{
        Vite::useBuildDirectory('vendor/ciida/build')
            ->withEntryPoints([
                'resources/css/app.css',
                'resources/js/app.js',
            ])
    }}

</head>
<body class="font-sans antialiased"
      x-data="pallete"
      x-cloak
      @keyup.down.window="console.log('down')">
    <div class="min-h-screen bg-gradient-to-r from-violet-500 to-fuchsia-500">
        {{ $slot }}
    </div>
</body>
</html>
