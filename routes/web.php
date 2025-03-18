<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return "Ini adalah halaman home";
});
Route::get('/mall', function(){
    return "Ini adalah halaman Shopee Mall";
});
Route::get('/category', function(){
    return 'Ini adalah halaman Kategori Produk';
});
Route::get('/cart', function(){
    return 'Ini adalah halaman Keranjang';
});
Route::get('/checkout', function(){
    return 'Ini adalah halaman Transaksi';
});
Route::get('/payment', function(){
    return 'Ini adalah halaman Pembayaran';
});
Route::get('/buyer', function(){
    return 'ini adalah halaman Pengaturan Akun';
});
