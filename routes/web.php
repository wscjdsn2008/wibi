<?php


//use App\Http\Controllers\Admin\TestController as AdminTestController;
//use App\Http\Controllers\TestController;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
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
//博客首页放在一个单独的控制器中
Route::get('/', [IndexController::class,'index'])->name('index');
//为资源路由补充了一个修改博客状态的路由
Route::patch('blog/{id}', [BlogController::class,'status'])->name('blog.status');
Route::resource('blog', BlogController::class)->except(['index']);

//为用户单独定义路由，此处没有用资源路由。
//用户信息
Route::get('user', [UserController::class,'infoPage'])->name('user.info');
//更新用户信息
Route::put('user', [UserController::class,'update'])->name('user.infoUpdate');
//用户头像
Route::get('user/avatar', [UserController::class,'avatarPage'])->name('user.avatar');
//更新用户头像
Route::put('user/avatar', [UserController::class,'avatarUpdate'])->name('user.avatar.update');
//用户所有博客
Route::get('user/blog', [UserController::class,'blog'])->name('user.blog');
//评论
Route::post('blog/{id}/comment', [CommentController::class])->name('blog.comment');


// Route::get('/index', function () {
//     return 'hello 黄杭';
// });
// Route::get('/test1/{id}', function ($id) {
//     return "必须参数是:$id";
// });
// Route::get('/test2/{id?}', function ($id = '我就是个默认值') {
//     return "加了问号的可参数是:$id";
// });
// Route::get('test3/{id}', function ($id) {
//     return "单正则匹配$id..."; //约束的正则路由的参数
// })->where('id', '\d+');
// Route::get('test4/{name}/{age}', function ($n, $a) {
//     return "多参数正则匹配$n----$a...";
// })->where(['name' => '\w+', 'age' => '\d+']);
// Route::get('test5/fn', [TestController::class, 'lst']);
// Route::get('/test6/', function () {
//     return "路由别名";
// })->name('t6');

 //Route::get('/test',[AdminTestControlle::class,'test']);
// Route::get('add',[AdminTestControlle::class,'add']);
// Route::get('del',[AdminTestControlle::class,'del']);
// Route::get('mod',[AdminTestControlle::class,'mod']);
// Route::get('select',[AdminTestControlle::class,'select']);

// Route::get('user/{id}/profile/{name}', function ($id,$name) {
//     return route('user.profile',['id' => $id,'name'=>$name]);
      
// })->name('user.profile');
//Route::get('/test',[AdminTestController::class,'test']);

// Route::get('/welcome', function () {
  
//     return view('/welcome');
// });
// Route::get('/', function () {
//     dd('博客首页');
// })->name('index');
// Route::get('blog/{id}', function($id){
//     dd('博客详情,id是：'.$id);
// })->name('blog.show')->where(['id'=>'[0-9]+']);
// Route::get('blog/create', function(){
//     dd('添加博客的页面');
// })->name('blog.create');
// Route::post('blog', function(){
//     dd('提交新博客');
// })->name('blog.store');
// Route::get('blog/{id}/edit', function ($id) {
//     dd('修改博客页面,id是'.$id);
// })->name('blog.edit');

// Route::put('blog/{id}', function ($id) {
//     dd('提交博客修改，id是'.$id);
// })->name('blog.update');
// Route::delete('blog/{id}', function ($id) {
//     dd('删除博客,id:'.$id);
// })->name('blog.destroy');
// Route::patch('blog/{id}', function ($id) {
//     dd('改变状态的博客,id:'.$id);
// })->name('blog.status');
// Route::get('user', function () {
//     dd('修改个人信息页面');
// })->name('user.info');
// Route::post('user', function () {
//     dd('提交修改个人信息');
// })->name('user.update');
// Route::get('user/avatar', function () {
//     dd('修改个人头像页面');
// })->name('user.avatar');
// Route::patch('user/avatar', function () {
//     dd('提交修改个人头像');
// })->name('user.avatar.update');
// Route::get('user/blog', function () {
//     dd('我的所有博客');
// })->name('user.blog');


