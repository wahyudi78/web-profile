<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\AboutController;
use App\Http\Controllers\Api\V1\PatchController;
use App\Http\Controllers\Api\v1\SkillController;
use App\Http\Controllers\Api\v1\SchoolController;
use App\Http\Controllers\Api\v1\ProjectController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;

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
Route::middleware('auth:sanctum')->prefix('v1')->group(function () {

    // resource API
    Route::apiResource('/about', AboutController::class);
    Route::apiResource('/project', ProjectController::class);
    Route::apiResource('/school', SchoolController::class);
    Route::apiResource('/skill', SkillController::class);

    // Patch API
    Route::namespace('App\Http\Controllers\Api\v1')->group(function(){
        Route::patch('/update-about/{about}', 'PatchController@PatchAbout');
    });

});

Route::prefix('auth')->group(function () {
    Route::post('/login', LoginController::class);
    Route::post('/logout', LogoutController::class)->middleware('auth:sanctum');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
