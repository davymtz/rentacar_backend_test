<?php

use App\Http\Controllers\LocationsController;
use App\Models\Locations;
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

Route::get("locations", [LocationsController::class, "index"]);
Route::get("locations/{id}/autos_disponibles", [LocationsController::class, "autos_disponibles"]);
// Route::apiResources([
//     "autos" => AutosController::class,
//     "locations" => LocationsController::class
// ]);