<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\librosController;
use App\Http\Controllers\prestamosController;

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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

/* pruebas */
Route::get('/prueba', [librosController::class, 'prueba'])->name('prueba') ;
/* ------------------- */

/* Añade Libro desde el Formulario */
Route::post('/addBook', [librosController::class, 'addBooks'])->name('addBook') ;
/* -------------------------------- */

/* Route::get('/updateBook', [librosController::class, 'updateBook'] ) ->name('updateBooks'); 
    Route::get('/showFormUpdateBook', [librosController::class, 'showFormUpdateBook'] );
*/

/* Elimina libro seleccionado */
/* Route::get('/deleteBook', [librosController::class, 'destroyBook'] ); */
Route::get('/deleteBook/{id}', [librosController::class, 'destroyBooks']);
/* -------------------------------- */

/* Formulario para agregar un nuevo libro */
Route::get('/showFormBook', [librosController::class, 'showFormBook'] )->name("showFormBook");  
/* ---------------------------------------- */

/* Muestra la lista de libros */
Route::get('/mostrarLibros', [librosController::class, 'showAllBook'])->name('mostrarlibros');
/* -------------------------- */

/* Muestra formulario relleno con el libro que hemos seleccionado para modificar los datos */
Route::get('/updateBooksForm/{id}', [librosController::class, 'updateBooksForm'])->name('updateBooksForm');
/* ------------------------------ */

/* Actualizamos el libro con los datos nuevos que le hemos puesto */
Route::post('/updateBook', [librosController::class, 'updateBooks'])->name('updateBooks');
/* --------------------------- */

/* Boton de buscar */
Route::get('/search', [librosController::class, 'search'])->name('search');
/* ------------------------------- */

/* Vista del detalle de los libros */
Route::get('/viewDetails/{id}', [librosController::class, 'viewDetails']);
/* ----------------------------------- */

/* Ruta a prestamos */
Route::get('/mostrarPrestamo', [prestamosController::class, 'showAllLend'])->name('mostrarPrestamo');
/* ---------------------- */

/* Vista para añadir nuevo prestamo con el libro que hemos seleccionado */
Route::get('/newLend/{id}', [prestamosController::class, 'newLend']) ->name('newLend');

/* ----------------------------------- */
/* Vista para añadir nuevo prestamo */
Route::post('/addLend', [prestamosController::class, 'addLend']) ->name('addLend');

/* ----------------------------------- */
/* Vista del formulario para añadir eliminar prestamo desde todos los libros */
Route::get('/deleteLend/{id}', [prestamosController::class, 'deleteLend']) ->name('deleteLend');

/* ----------------------------------- */
/* Vista del formulario para añadir eliminar prestamo desde todos los prestamos*/
Route::get('/deleteLendForm/{id}', [prestamosController::class, 'deleteLendForm']) ->name('deleteLendForm');

/* ----------------------------------- */
/* Vista para añadir eliminar prestamo */
Route::post('/DeleteUpdateLends', [prestamosController::class, 'DeleteUpdateLends']) ->name('DeleteUpdateLends');

/* ----------------------------------- */

/* Vista del detalle de los libros */
Route::get('/viewDetailsLend/{id}', [prestamosController::class, 'viewDetailsLend']);
/* ----------------------------------- */
/* Boton de buscar por titulo en prestamos */
Route::get('/searchLendTittle', [prestamosController::class, 'searchLendTittle'])->name('searchLendTittle');
/* ------------------------------- */

/* Boton de buscar entre las fechas seleccionadas en prestamos */
Route::get('/searchLendDate', [prestamosController::class, 'searchLendDate'])->name('searchLendDate');
/* ------------------------------- */

/* Pruebas */
Route::get('/showPruebas', [prestamosController::class, 'showPruebas'])->name('showPruebas');
/* ------------------------------- */


    
});
