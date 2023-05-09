<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\ApiLoginController;
use App\Http\Controllers\InfoUserController;
use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;

Route::apiResource('questions', QuestionController::class);
Route::apiResource('member', InfoUserController::class);




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

Route::post('/login', [ApiLoginController::class, 'login']);
Route::post('/register', [ApiLoginController::class, 'register']);
// Route::post('/auth/register',[AuthController::class,'register']);
// Route::post('/auth/changepassword',[AuthController::class,'changepassword']);
// Route::post('/auth/login',[AuthController::class,'login']);
Route::middleware('auth:sanctum')->group(function () {

    Route::get('/tokens',[ApiLoginController::class, 'showTokens']);
    Route::post('/logout',[ApiLoginController::class, 'logout']);
    Route::post('/logout/all',[ApiLoginController::class, 'logoutAll']);
    Route::post('/logout/{tokenId}',[ApiLoginController::class, 'logoutById']);
    Route::get('/user',function(Request $request){
        return $request->user();
    });

});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::post('/auth/user',[AuthController::class,'user'])->middleware('auth:sanctum');
// Route::post('/auth/logout',[AuthController::class,'logout'])->middleware('auth:sanctum');

