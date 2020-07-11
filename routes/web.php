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
    return view('/welcome');
});
Route::get('/kpdashboard', function(){
    return view ('kepalaperpus.dashboard');
});
Route::get('/kpanggotaguru', function(){
    return view ('kepalaperpus.anggotaguru');
});
Route::get('/kpanggotasiswa', function(){
    return view ('kepalaperpus.anggotasiswa');
});
Route::get('/kpbuku', function(){
    return view ('kepalaperpus.buku');
});
Route::get('/kpkategori', function(){
    return view ('kepalaperpus.kategori');
});
Route::get('/kppeminjaman', function(){
    return view ('kepalaperpus.peminjaman');
});
Route::get('/kppengembalian', function(){
    return view ('kepalaperpus.pengembalian');
});
Route::get('/kpdenda', function(){
    return view ('kepalaperpus.denda');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
