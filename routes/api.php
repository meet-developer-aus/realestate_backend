<?php
use App\Http\Controllers\MenuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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


    // Your routes here
  // Your editor or admin-specific routes go here

  //public routes of authentication
  Route::post('/login', [AuthController::class, 'login']);
  Route::post('/register', [AuthController::class, 'register']);

  //public routes of menu
  Route::get('/menus', [MenuController::class, 'index']);
  Route::get('/menus/{id}', [MenuController::class, 'show']);


  

//protected routes 
Route::middleware('auth:sanctum')->group( function () {

  //protected routes of authentication

  Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/user', [AuthController::class, 'user']);



  // protected routes of menu
  Route::post('/menus', [MenuController::class, 'store']);

  Route::delete('/menus/{id}', [MenuController::class, 'destroy']);

  Route::put('/menus/{id}', [MenuController::class, 'update']);
//   Route::put('/dashbaord/{role}', [MenuController::class, 'update']);

});





