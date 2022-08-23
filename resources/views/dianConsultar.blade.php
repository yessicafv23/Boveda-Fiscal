@extends('layout.dashboardDIAN')

@section('dianSidebar')
@section('dianNavbar')

@section('dianMain')
<div class="font-Ubuntu grid grid-cols-12 gap-y-4 my-10 md:gap-x-5">
    <h1 class="col-start-2 col-span-10 text-center text-4xl text-blue-900 my-5">Consultar facturas</h1>
    <input class="outline-none col-start-2 col-span-10 py-3 rounded-full text-center bg-gray-200 md:col-start-2 md:col-span-6" type="text" placeholder="NIT o Razón Social">
    <button class="col-start-2 col-span-10 py-3 rounded-xl bg-blue-900 text-white md:col-start-8 md:col-span-4">Buscar</button>
</div>
@endsection
