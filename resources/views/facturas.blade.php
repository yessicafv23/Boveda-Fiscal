@extends('layout.dashboard')

@section('sidebar')
@section('navbar')
@section('main')
<form class="col-span-full grid grid-cols-12 gap-y-4 my-2 md:gap-x-4 md:gap-y-16 md:py-16 xl:gap-y-8" action="">
    <h1 class="col-span-full text-center text-3xl text-gray-700 md:text-5xl">Factura Electronica</h1>
    <input class="outline-none col-start-2 col-span-10 py-3 rounded-full text-center bg-gray-200 md:col-start-2 md:col-span-5" type="text" placeholder="NIT">
    <input class="outline-none col-start-2 col-span-10 py-3 rounded-full text-center bg-gray-200 md:col-start-7 md:col-span-5" type="text" placeholder="Razón social">
    <input class="outline-none col-start-2 col-span-10 py-3 rounded-full text-center bg-gray-200 md:col-start-2 md:col-span-5" type="text" placeholder="Dirección de la sede principal">
    <input class="outline-none col-start-2 col-span-10 py-3 rounded-full text-center bg-gray-200 md:col-start-7 md:col-span-5" type="text" placeholder="Representante legal">
    <input class="outline-none col-start-2 col-span-10 py-3 rounded-full text-center bg-gray-200 md:col-start-2 md:col-span-5" type="text" placeholder="Numero telefónico">
    <input class="outline-none col-start-2 col-span-10 py-3 rounded-full text-center bg-gray-200 md:col-start-7 md:col-span-5" type="text" placeholder="Correo Electrónico">
    <input class="outline-none col-start-2 col-span-10 py-3 rounded-full text-center bg-gray-200 md:col-start-5 md:col-span-4" type="text" placeholder="Sitio web">
    <button class="col-start-2 col-span-10 py-3 rounded-xl bg-blue-900 text-white md:col-start-5 md:col-span-4">Registrar Factura</button>
</form>
@endsection
