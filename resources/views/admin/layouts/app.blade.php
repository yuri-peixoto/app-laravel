<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title') - {{ config('app.name') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="container px-4 mx-auto">
        <header>
            <div class="sm:flex sm:justify-between sm:items-center">
                @yield('header')
            </div>
        </header>
        <div class="content">
            @yield('content')
        </div>
        <footer></footer>
    </section>
</body>
</html>
