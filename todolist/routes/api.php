<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* Route for ItemController */

// All Items '/items' , efter the comma and pass it array[the controller we goin to use], now going to be specific function that we want this route to hit is "index"
// Get all
Route::get('/items', [ItemController::class, 'index']);
// prefix 
Route::prefix('/item')->group(function () {
    // Create
    Route::post('/store', [ItemController::class, 'store']);
    // Update
    Route::put('/{id}', [ItemController::class, 'update']);
    // Delete
    Route::delete('/{id}', [ItemController::class, 'destroy']);
});
