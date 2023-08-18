<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\TestamentoController;
use App\Http\Controllers\VersiculoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::get('/testamento', [TestamentoController::class, 'getAll']);
// Route::get('/testamento/{id}', [TestamentoController::class, 'get']);
// Route::post('/testamento', [TestamentoController::class, 'create']);
// Route::put('/testamento/{id}', [TestamentoController::class, 'update']);
// Route::delete('/testamento/{id}', [TestamentoController::class, 'delete']);

// Route::get('/livro', [LivroController::class, 'getAll']);
// Route::get('/livro/{id}', [LivroController::class, 'get']);
// Route::post('/livro', [LivroController::class, 'create']);
// Route::put('/livro/{id}', [LivroController::class, 'update']);
// Route::delete('/livro/{id}', [LivroController::class, 'delete']);

// Route::get('/versiculo', [VersiculoController::class, 'getAll']);
// Route::get('/versiculo/{id}', [VersiculoController::class, 'get']);
// Route::post('/versiculo', [VersiculoController::class, 'create']);
// Route::put('/versiculo/{id}', [VersiculoController::class, 'update']);
// Route::delete('/versiculo/{id}', [VersiculoController::class, 'delete']);

// Routes Testamento
// Route::apiResource('testamento', TestamentoController::class);
// Routes Livros
// Route::apiResource('livro', LivroController::class);
// Routes Versiculos
// Route::apiResource('versiculo', VersiculoController::class);

// Middleware
Route::group(['middleware' => ['auth:sanctum']], function() {
    // Routes
    Route::apiResources([
        'testamento' => TestamentoController::class,
        'livro' => LivroController::class,
        'versiculo' => VersiculoController::class
    ]);
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);