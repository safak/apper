<?php

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
})->name('index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'Backend\HomeController@index')->name('admin.home.index');
Route::get('/admin/features', 'Backend\FeaturesController@index')->name('admin.features.index');
Route::get('/admin/security', 'Backend\SecurityController@index')->name('admin.security.index');
Route::get('/admin/faq', 'Backend\FaqController@index')->name('admin.faq.index');
Route::get('/admin/faq/create', 'Backend\FaqController@create')->name('admin.faq.create');
Route::get('/admin/faq/{id}/edit', 'Backend\FaqController@edit')->name('admin.faq.edit');
Route::get('/admin/download', 'Backend\DownloadController@index')->name('admin.download.index');
Route::get('/admin/devices', 'Backend\DeviceController@index')->name('admin.devices.index');
Route::get('/admin/settings', 'Backend\HomeController@index')->name('admin.settings.index');
