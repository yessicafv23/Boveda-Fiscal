<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
    <link rel="stylesheet"
          href=" {{ asset('css/library/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/styleP.css') }}">
    <title>Document</title>
</head>
<body>
<div class="">
    <aside class="hidden sidebar bg-gray-50 xl:block  xl:fixed xl:border">
        @yield('dianSidebar')
        <a class="" href="#"><img class="px-8" src=" {{ asset('img/logo.png')}} " alt=""></a>
        <ul class="grid grid-cols-1 gap-y-16 text-center mt-10">
            <a class="py-2" href="/dashboard-dian"><i class="fas fa-home text-xl text-gray-400"></i></a>
            <a class="py-2" href="/dashboard-dian/consultar"><i class="fas fa-search-dollar text-xl text-gray-400"></i> </a>
            <a class="py-2" href="/dashboard-dian/listas"><i class="fas fa-table text-xl text-gray-400"></i></a>
        </ul>
    </aside>
    <aside class="navbar flex justify-between py-2 px-2 bg-gray-50 xl:absolute">
        @yield('dianNavbar')
        <div class="group flex justify-center items-center">
            <a class="px-1" href="#"><i class="fas fa-bars text-4xl xl:text-3xl"></i></a>
            <p class="px-1 hidden xl:inline xl:text-xl">Bienvenido, Funcionario Dian</p>
        </div>
        <a href="#"><i class="fas fa-user-circle text-4xl"></i></a>
    </aside>
    <main class="content xl:absolute">
        @yield('dianMain')
    </main>
</div>
</body>
</html>
