<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactSingleController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewrController;
use App\Http\Middleware\FisrtMiddlewareByMe;
use App\Http\Middleware\SecondMiddlewareByMe;
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
    return view('welcome');
});
// ->withoutMiddleware(FisrtMiddlewareByMe::class); # this only work if u aadd middleware in     protected $middlewareGroups = 'web' => [FisrtMiddlewareByMe::class]


// Route::get('user', function () {
//     return 'user page ';
//     #if use more than o ne middleware u must use [] an write name of middleware inside it
//     // })->middleware([SecondMiddlewareByMe::class,'myMiddlerare']);  # from kernel ===>  protected $routeMiddleware = ['myMiddlerare'=>FisrtMiddlewareByMe::class]
// })->middleware('myMiddlerare');


// u can assign more than one middleware in one route as bellow code



// for group middleware
// withoutr middleware


// Route::withoutMiddleware([FisrtMiddlewareByMe::class])->group(function () {
//     Route::get('1', function () {
//         return 'fisrt page with out middleware';
//     });
//     Route::get('2', function () {
//         return 'second page with out middleware';
//     });
// });


// // u can apply group of miidleware
// Route::get('page', function () {
//     return 'page  by admin
//      here';
// })->withoutMiddleware(FisrtMiddlewareByMe::class);;
// -==============================================================================================

// controller
// Route::get('home', [FirstController::class, 'home']);

// Route::get('user/{user}', [UserController::class, 'show']);
// Route::get('info', [UserController::class, 'index']);

// #group controller with routing
// Route::controller(UserController::class)->group(function () {
//     Route::get('fir/{name}', 'show');
//     Route::get('2', 'index');
// });





// Views
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('home', [HomeController::class, 'home'])->name('home');
Route::get('index', [ViewrController::class, 'about'])->name('index');
Route::get('book', [BookController::class, 'book'])->name('book');
Route::get('contact', ContactSingleController::class)->name('contact');


// Resource controller
// photos==> rerurn index method from ResourceController (by get method)
// photos by post method return store of photos


Route::resource('photos', ResourceController::class);


// for one photo /photos/{photos}
// ->only('show','index') u can choose any method u want
// for one photo /photos/{photos}

















// Route::fallback(function(){
//     redirect('/');
// });
