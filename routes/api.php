<?php

use Facade\FlareClient\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\apibusinesses;

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

Route::get('/businesses',[apibusinesses::class,'index']);
Route::post('/business',[apibusinesses::class,'store'])->name("apilistingstore");
Route::put('/business/{id}',[apibusinesses::class,'update']);
Route::delete('/business/{id}',[apibusinesses::class,'destroy']);