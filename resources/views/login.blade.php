@extends('layout.registerLogin')

@section('navbarRegisterLogin')


@section('mainRegisterLogin')
<h1 class="py-4 text-center text-2xl uppercase font-bold text-green-700 md:text-5xl md:font-normal md:mb-6">
    Iniciar Sesion</h1>
<form class="grid grid-cols-6 gap-y-2 py-4 md:mt-10 xl:col-start-1 xl:gap-y-10" action="">
    <div class="col-span-6 form__group relative mb-6 md:col-span-6 md:pr-2 md:col-start-2 md:col-end-6">
        <input class="border-0 border-b-2 bg-transparent w-full pt-2 text-1xl
            focus:border-0 focus:outline-none focus:border-b-2" type="text" required="">
        <label class="absolute top-0 left-0 text-1xl pointer-events-none duration-150 opacity-60">Usuario</label>
    </div>
    <div class="col-span-6 form__group relative mb-6 md:col-span-6 md:pr-2 md:col-start-2 md:col-end-6">
        <input class="border-0 border-b-2 bg-transparent w-full pt-2 text-1xl
            focus:border-0 focus:outline-none focus:border-b-2" type="text" required="">
        <label class="absolute top-0 left-0 text-1xl pointer-events-none duration-150 opacity-60">Contraseña</label>
    </div>
    <button class="col-span-6 py-2 text-2xl bg-blue-700 text-white rounded md:col-start-3 md:col-span-2" type="submit">Iniciar Sesión
    </button>
    <p class="col-span-6 text-center text-2xl text-gray-700 md">¿No tienes cuenta?</p>
    <button class="col-span-6 py-2 text-2xl bg-black text-white rounded md:col-start-3 md:col-span-2" type="submit"> Registrarse</button>
</form>
@endsection
