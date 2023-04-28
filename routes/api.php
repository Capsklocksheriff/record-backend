<?php

use App\Http\Controllers\Api\Auth\SigninController;
use App\Http\Controllers\Api\Auth\SignoutController;
use App\Http\Controllers\Api\Auth\SignupController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/example', function () {
    return response()->json(['message' => 'Hello, world!']);
});

Route::get('/requirements', 'App\Http\Controllers\RequirementController@index');

Route::get('/records', 'App\Http\Controllers\StudentRecordController@index');

Route::get('/students', 'App\Http\Controllers\StudentController@index');


// Route::middleware('json.response')->group(function () {
    Route::apiResource('auth/signup', SignupController::class);
    Route::apiResource('auth/signin', SigninController::class);

    Route::middleware('auth:sanctum')->group(function () {
        Route::apiResource('auth/signout', SignoutController::class);
        // Route::apiResource('games', GamesController::class)->only(['store', 'update', 'destroy']);
        // Route::apiResource('games.scores', ScoresController::class)->only(['store', 'update', 'destroy']);

        // Route::get('users/{user:username}', [UsersController::class, 'show']);
    });

    // Route::apiResource('games', GamesController::class)->only(['index', 'show']);
    // Route::apiResource('games.scores', ScoresController::class)->only(['index', 'show']);
// }
// )
;