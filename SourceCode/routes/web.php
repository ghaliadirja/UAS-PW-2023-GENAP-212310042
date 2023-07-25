<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PhotoController;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'Home']);
Route::get('/AboutUs', [AboutController::class, 'About']);
Route::get('/Articles', [ArticlesController::class, 'Articles']);
Route::get('/Post', [ArticlesController::class, 'Post']);
Route::get('/ContactUs', [ContactController::class, 'Contact']);
Route::get('/Event', [EventController::class, 'Event']);
Route::get('/Card', [EventController::class, 'Card']);
Route::get('/MusicDivision', [DivisionController::class, 'Music']);
Route::get('/ArtDivision', [DivisionController::class, 'Art']);
Route::get('/PhotographyDivision', [DivisionController::class, 'Photography']);
Route::get('/DanceDivision', [DivisionController::class, 'Dance']);
Route::get('/TheaterDivision', [DivisionController::class, 'Theater']);
Route::get('/ChoirDivision', [DivisionController::class, 'Choir']);
Route::get('/Services', [ServicesController::class, 'Services']);

Route::get('/Photo', [PhotoController::class, 'Photo']);
Route::get('/page-post/{post}', 'PostController@show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});