<?php
use App\Models\Article;
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

Route::get('/create', function() {
    return view('create');
 });
 Route::post('/create',function() {
    Article::create([
        'title' => request('title'),
        'body' => request('body'),
        'description' => request('description'),
        'creator' => Auth::user()->id,
    ]);
 });

 Route::get('/unmain', function() {
    return view('unmain');
 });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
