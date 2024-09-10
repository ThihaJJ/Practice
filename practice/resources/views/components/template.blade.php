<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Page</title>
</head>
<body>
    <nav>
            <x-nav-com href='/'>home</x-nav-com>

            <x-nav-com href='/about'>about</x-nav-com>

            <x-nav-com href='/contact'>contact</x-nav-com>
    </nav>
        {{ $slot }}
</body>
<html>
