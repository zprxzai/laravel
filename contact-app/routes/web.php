<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  $html = "<h1Aplikasi konntak</h1>
  <div>
  <a href='/contact'>kontak</a>
  <a href='/contact/create'>kontak baru</a>
  <a href='/contacts/2'>Tampilkan Nama</a>
  <a href=/student/Zaidan'>Tampilkan Nama</a>
  </div>";
return $html;
});

Route::get('/contact', function () {
    return "<h1><marquee>HALO </h1></marquee>";
});
route::get('/contact/create', function () {
    return "tambah kontak baru";
});
route::get('/contact/{id}', function ($id) {
    return "tambah kontak baru dengan id" .$id;
});

route::get('/students/{name}', function ($name=null) {
    if($name){
        return "<h1>nama lengkap :</h1> " . $name;
}
else {
    return "nama lengkap belum diisi";
}
});
//bisa input angka
Route::get('/companies/{name?}', function($name=null) {
    if($name) {
        return "Nama Perusahaan: " . $name;
    } else {
        return "Nama Perusahaan Kosong";
    }
 });

//tidak bisa input angka
/*Route::get('/companies/{name?}', function($name=null) {
    if($name) {
        return "Nama Perusahaan: " . $name;
    } else {
        return "Nama Perusahaan Kosong";
    }
 })->where('name', '[a-zA-Z]+');*/

 
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/contacts', function() {
        return "<h1>Daftar Kontak</h1>";
    })->name('contacts.index');
});