<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// =========  REGISTRAR =========

Route::get('/register', function () {
   return view('register');
});

// ========= LOGIN =========

Route::get('/login', function () {
    return view('login');
});

// =========  DASHBOARD EMPRESA =========

Route::get('/dashboard', function () {
    return view('main');
});

Route::get('/dashboard/list', function () {
    return view('list');
});

Route::get('/dashboard/factura', function () {
    return view('facturas');
});

// ========= DASHBOARD DIAN =========

Route::get('/dashboard-dian', function () {
    return view('dianMain');
});

Route::get('/dashboard-dian/consultar', function () {
    return view('dianConsultar');
});

Route::get('/dashboard-dian/listas', function () {
    return view('dianList');
});
