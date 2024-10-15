<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Маршруты для веб-интерфейса
Route::get('/test1', function () {
    return 'Hello world';
});
//Перенаправление
Route::redirect('/test2', 'test1');
Route::permanentRedirect('/test3', 'test1');

//Маршрут представлений
Route::view('/test4', 'welcome', ['name' => 'John Doe']);

//Параметры маршрутов
Route::get('/test5/{id?}', function (string $id = null) {
    return $id;
});
Route::get('/test5/{id}/{text}', function (string $id, string $some) {
    return $id . ' ' . $some;
});
//Именованный маршрут
    Route::get('/test6', function () {
    return 'Именованный маршрут';
})->name('test6');

//Маршрут использующий контроллер
Route::get('/test7', [\App\Http\Controllers\TestController::class, 'index'])->name('test7');
Route::get('/test8/{id}', [\App\Http\Controllers\TestController::class, 'index2'])->name('test7');
