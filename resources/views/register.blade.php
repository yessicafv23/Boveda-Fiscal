@extends('layout.registerLogin')

@section('navbarRegisterLogin')
@section('mainRegisterLogin')
<h1 class="text-center text-2xl uppercase font-bold text-green-700 md:text-5xl md:font-normal md:mb-6">
    Registrarse</h1>
<p class="text-center text-gray-600 md:text-2xl xl:col-start-1 xl:py-6">
    Registre la empresa llenando cada uno de los campos, este con el fin de poder
    iniciar sesión en el sistema y registrar sus facturas
</p>
<form class="grid grid-cols-6 gap-y-2 py-4 md:mt-10 xl:col-start-1 xl:gap-y-10" action="">
    <div class="col-span-6 form__group relative mb-6 md:col-span-3 md:pr-2">
        <input class="border-0 border-b-2 bg-transparent w-full pt-2 text-1xl
            focus:border-0 focus:outline-none focus:border-b-2" type="text" required="">
        <label class="absolute top-0 left-0 text-1xl pointer-events-none duration-150 opacity-60">NIT</label>
    </div>
    <div class="col-span-6 form__group relative mb-6 md:col-span-3 md:pr-2">
        <input class="border-0 border-b-2 bg-transparent w-full pt-2 text-1xl
            focus:border-0 focus:outline-none focus:border-b-2" type="text" required="">
        <label class="absolute top-0 left-0 text-1xl pointer-events-none duration-150 opacity-60">Razón
            social</label>
    </div>
    <div class="col-span-6 form__group relative mb-6 md:col-span-3 md:pr-2">
        <input class="border-0 border-b-2 bg-transparent w-full pt-2 text-1xl
            focus:border-0 focus:outline-none focus:border-b-2" type="text" required="">
        <label class="absolute top-0 left-0 text-1xl pointer-events-none duration-150 opacity-60">Dirección</label>
    </div>
    <div class="col-span-6 form__group relative mb-6 md:col-span-3 md:pr-2">
        <input class="border-0 border-b-2 bg-transparent w-full pt-2 text-1xl
            focus:border-0 focus:outline-none focus:border-b-2" type="text" required="">
        <label class="absolute top-0 left-0 text-1xl pointer-events-none duration-150 opacity-60">Número
            telefónico</label>
    </div>
    <div class="col-span-6 form__group relative mb-4 md:col-span-3 md:pr-2">
        <input class="border-0 border-b-2 bg-transparent w-full pt-2 text-1xl
            focus:border-0 focus:outline-none focus:border-b-2" type="text" required="">
        <label class="absolute top-0 left-0 text-1xl pointer-events-none duration-150 opacity-60">Correo
            electrónico</label>
    </div>
    <button class="col-span-6 py-2 text-2xl bg-blue-700 text-white rounded md:col-span-3 md:row-start-4 xl:py-2"
            type="submit">Registrarse
    </button>
    <p class="hidden md:block md:row-start-4 md:text-1xl md:text-center md:m-auto">Si ya tienes cuenta:</p>
    <button class="col-span-6 py-2 text-2xl bg-black text-white rounded md:col-span-2 md:row-start-4 xl:py-2"
            type="submit">
        Iniciar Sesión
    </button>
</form>
@endsection
