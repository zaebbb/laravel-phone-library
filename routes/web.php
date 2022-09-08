<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home']);

Route::get('/search', [MainController::class, 'search']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/about', function () {
    return view('about');
});
