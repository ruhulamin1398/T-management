<?php
use App\Http\Controllers\TodoController;
use App\Http\Controllers\WalkController;
use App\Models\todo;
use Illuminate\Support\Facades\DB;
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


Route::resource('todos',TodoController::class);
Route::resource('walks',WalkController::class);

Route::get('/', function () {
    // return view('welcome');
});
Route::get('todos-types', function () {
    
   $types=   DB::table('todos')
            ->select('type')
            ->distinct()
            ->get();
            return $types;
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
