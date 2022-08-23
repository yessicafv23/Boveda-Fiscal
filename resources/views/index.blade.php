<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('css/styleP.css') }}">
    <link rel="stylesheet"
          href=" {{ asset('css/library/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
<nav class="grid grid-cols-5 bg-gray-100">
    <section class="col-span-2 p-2">
        <img class="object-contain xl:w-36 " src="{{ asset('img/LogoDian.png') }}" alt="">
    </section>
    <section class="nav__contact  col-span-3 flex items-center justify-end">
        <div class="nav__icon border rounded-full m-2 px-3 py-2 bg-blueProject-default">
            <i class="bi bi-envelope-fill text-white"></i>
        </div>
        <div class="nav__icon border rounded-full m-2 px-3 py-2 bg-greenProject-default">
            <i class="bi bi-telephone-fill"></i>
        </div>
    </section>
</nav>
<main
    class="grid grid-cols-4 font-Ubuntu py-20 text-gray-700 sm:grid-rows-2 md:gap-x-16 md:gap-y-10 md:auto-rows-max
    lg:auto-rows-fr xl:py-0 xl:grid-rows-4 xl:auto-rows-max xl:gap-x-0 xl:gap-y-0">
    <section
        class="main__section-h1 col-span-4 text-center px-6
        xl:col-start-1 xl:col-span-2 xl:row-start-1 xl:row-span-4 xl:flex xl:items-center">
        <h1 class="text-5xl font-bold md:text-6xl xl:text-white">
            Bienvenido al registro de facturas de la <br> DIAN
        </h1>
        <p class="text-2xl font-bold md:hidden">
            Para poder registrar las facturas debe presionar el botón a continuación:
        </p>
    </section>
    <section
        class="hidden text-2xl font-bold md:block md:col-start-1 md:col-span-4 md:row-start-2 md:text-center
        md:px-10 xl:col-start-3 xl:row-start-1 xl:pt-14">
        <p class="md:text-4xl xl:hidden">
            Para poder registrar las facturas debe presionar el botón de registrarse, o si ya está registrado inicia
            sesión:
        </p>
        <p class="hidden xl:block xl:text-4xl">
            Para poder registrar de las facturas debe presionar el botón de registrarse
        </p>
    </section>
    <section
        class="col-span-4 text-center md:row-start-2 md:col-start-1 md:col-span-2 md:flex md:flex-col md:items-end
        md:justify-end lg:pt-20 xl:col-start-3 xl:row-start-2 xl:justify-start xl:items-center xl:pt-0 xl:justify-center">
        <button
            class="rounded-full bg-blueProject-default text-white px-10 py-1 font-bold my-2 md:mr-10 md:text-2xl xl:mr-0 xl:text-3xl xl:px-10 xl:py-3">
            Registrarse
        </button>
    </section>
    <section
        class="col-span-4 text-center md:hidden xl:block xl:col-start-3 xl:col-span-2 xl:flex xl:items-end
        xl:justify-center xl:items-center">
        <p class="text-2xl font-bold xl:text-4xl">
            Si ya estas registrado:
        </p>
    </section>
    <section
        class="col-span-4 text-center md:row-start-2 md:col-start-3 md:col-span-2 md:flex md:flex-col md:items-start
        md:justify-end lg:pt-20 xl:col-start-3 xl:row-start-4 xl:justify-start xl:items-center xl:pt-0">
        <button
            class="rounded-full bg-greenProject-default text-white px-8 py-1 font-bold my-2 md:ml-10 md:text-2xl xl:ml-0 xl:text-3xl xl:px-10 xl:py-3">
            Iniciar Sesion
        </button>
    </section>
</main>
<footer class="grid grid-cols-5 bg-gray-200 py-2 sm:grid-cols-1 sm:py-4">
    <section class="col-span-2 bg-blue-700 rounded-full ml-1 flex items-center sm:hidden
                        sm:col-span-1">
        <img class="object-contain" src="{{ asset('img/gov.svg')}} " alt="">
    </section>
    <section class="hidden sm:block sm:flex sm:justify-center sm:grid sm:grid-cols-5">
        <div class="col-start-3">
            <img class="object-contain" src="{{ asset('img/LogoDian.png') }}" alt="">
        </div>
    </section>
    <section class="col-span-3 flex justify-end sm:justify-center my-2">
        <div class="footer__icon mx-2 px-2 py-1 rounded-full bg-white sm:mx-8 sm:px-4 sm:py-3">
            <i class="bi bi-twitter text-blue-500 sm:text-2xl"></i>
        </div>
        <div class="footer__icon flex items-center mx-2 px-3 py-1 rounded-full bg-white sm:mx-8 sm:px-6 sm:py-3">
            <i class="fab fa-facebook-f text-blue-500"></i>
        </div>
        <div class="footer__icon flex mx-2 px-2 py-1 rounded-full bg-white sm:mx-8 sm:px-4 sm:py-3">
            <i class="bi bi-instagram text-yellow-600 sm:text-2xl"></i>
        </div>
    </section>
    <section class="hidden sm:flex sm:justify-center">
        <p>©2021-DIAN | Derechos reservados</p>
    </section>
</footer>

</body>
</html>
