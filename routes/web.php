<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('', function () {
    //return view('welcome');
    return 'hhhh';
});
Route::get('/index', function () {
    return 'hello 黄杭';
});
Route::get('/test1/{id}', function ($id) {
    return "必须参数是:$id";
});
Route::get('/test2/{id?}', function ($id = '我就是个默认值') {
    return "加了问号的可参数是:$id";
});
Route::get('test3/{id}', function ($id) {
    return "单正则匹配$id..."; //约束的正则路由的参数
})->where('id', '\d+');
Route::get('test4/{name}/{age}', function ($n, $a) {
    return "多参数正则匹配$n----$a...";
})->where(['name' => '\w+', 'age' => '\d+']);
Route::get('test5/fn', [TestController::class, 'lst']);
Route::get('/test6/', function () {
    return "路由别名";
})->name('t6');
