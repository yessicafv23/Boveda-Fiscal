<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css')  }}">
    <link rel="stylesheet" href=" {{ asset('css/styleP.css')  }}">
    <title>Document</title>
</head>
<body>
<nav class="grid grid-cols-6 bg-gray-100">
    @yield('navbarRegisterLogin')
    <section class="col-start-3 col-span-2 p-2 md:flex md:justify-center">
        <img class="object-contain md:w-36 xl:w-36" src="{{ asset('img/LogoDian.png') }}" alt="">
    </section>
</nav>
<main class="grid grid-cols-6 py-20 px-6 font-Ubuntu md:py-16 xl:py-0 xl:px-0">
    <div class="col-span-6 xl:col-span-3 xl:py-24 xl:px-6">
        @yield('mainRegisterLogin')
    </div>
    <div class="hidden bg-gray-200 xl:block xl:col-start-4 xl:col-span-3 xl:p-16 xl:flex xl:items-center">
        <img src=" {{ asset('img/undraw_Site_stats_re_ejgy.svg') }} " alt="">
    </div>
</main>
</body>
</html>
