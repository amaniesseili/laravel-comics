<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>comics laravel</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
      @include('partials.header')
    </header>
    <main>
        {{-- @yield(comicsContent) --}}

    </main>
    <footer>
      @include('partials.footer')
    </footer>

</body>

</html>
