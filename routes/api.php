<?php
use App\Http\Controllers\MenuController;
use Illuminate\Http\Request;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


    // Your routes here
  // Your editor or admin-specific routes go here

  Route::get('/menus', [MenuController::class, 'index']);
  Route::post('/menus', [MenuController::class, 'store']);

  Route::delete('/menus/{id}', [MenuController::class, 'destroy']);

  Route::get('/menus/{id}', [MenuController::class, 'show']);
  Route::put('/menus/{id}', [MenuController::class, 'update']);
//   Route::put('/dashbaord/{role}', [MenuController::class, 'update']);



Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/user', [AuthController::class, 'user']);
