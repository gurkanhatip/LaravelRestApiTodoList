<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('todo', 'TodoController@index'); // Tüm Görevleri getir

Route::get('completed_tasks', 'TodoController@completed_tasks'); // Sadece Tamamlanmış olan görevleri getir

Route::get('tasks', 'TodoController@uncompleted_tasks'); // Tamamlanmayan Görevleri Getir

Route::post('todo', 'TodoController@store'); // Yeni Görev Ekle

Route::put('todo/{todo}', 'TodoController@update'); // Görevi Tamamlat yada tamamlanan görevi geri al

Route::delete('todo/{todo}', 'TodoController@destroy'); // Görevi Sil
