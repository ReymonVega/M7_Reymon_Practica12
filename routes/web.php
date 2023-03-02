<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;


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

Route::get('/', function () {
return view('welcome');
})->name('entrada');

// Route::get('/', function () {
//     return 'Welcome';
// });

// Route::get('/hola', function () {
//     return 'Hola que tal perro?';
// });



// Route::prefix('adb')->group(function (){
//     Route::get('Clientes',[AdminController::class, 'Cliente']);
// });

Route::group(['middleware' => ['adb']], function() {
    Route::get('Clientes',[AdminController::class, 'Cliente'])->name('Clientes');
    Route::get('Facturacion',[AdminController::class, 'Facturacion'])->name('Facturaciones');
    Route::get('Contabilidad',[AdminController::class, 'Contabilidad'])->name('Contabilidades');
});