@extends('layout.dashboardDIAN')

@section('dianSidebar')
@section('dianNavbar')

@section('dianMain')
<div class="grid grid-cols-6 gap-y-10 gap-x-10 py-16">
    <h1 class="col-span-6 text-3xl text-center text-blue-900 font-bold xl:text-6xl">Bienvenido,<br> Nombre Empresa</h1>
    <section
        class="col-start-2 col-span-4 grid grid-cols-6 border py-3 px-4 shadow-lg md:col-start-2 md:col-span-2 xl:py-10">
        <aside class="col-start-1 col-span-2 flex justify-center">
            <div class="icon py-3 px-3.5 rounded-full bg-gray-200 flex items-center justify-center xl:px-5 xl:py-4">
                <i class="fas fa-file-alt text-blue-700 text-xl xl:text-3xl"></i>
            </div>
        </aside>
        <p class="col-start-3 col-span-4 text-3xl font-bold flex items-end xl:text-5xl">200</p>
        <p class="col-start-3 col-span-4 text-sm opacity-50 font-bold">Facturas generadas por las empresas</p>
    </section>
    <section
        class="col-start-2 col-span-4 grid grid-cols-6 border py-3 px-4 shadow-lg md:col-start-4 md:col-span-2 xl:py-10">
        <aside class="col-start-1 col-span-2 flex justify-center">
            <div class="icon py-3 px-3.5 rounded-full bg-gray-200 flex items-center justify-center xl:px-5 xl:py-0">
                <i class="fas fa-file-alt text-blue-700 text-xl xl:text-3xl"></i>
            </div>
        </aside>
        <p class="col-start-3 col-span-4 text-3xl font-bold flex items-end xl:text-5xl">50</p>
        <p class="col-start-3 col-span-4 text-sm opacity-50 font-bold">Facturas generadas este mes</p>
    </section>
    <a href="/dashboard-dian/consultar"
        class="col-start-2 col-span-4 py-4 rounded-md text-center text-base bg-blue-600 text-white font-bold md:col-start-2 md:col-span-2">
        Consultar facturas
    </a>
    <a href="/dashboard-dian/listas"
        class="col-start-2 col-span-4 py-4 rounded-md text-center text-base bg-yellow-400 font-bold md:col-start-4 md:col-span-2">
        Lista de facturas
    </a>
</div>
@endsection
