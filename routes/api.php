<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

use App\Models\User;

Route::get('stats', function () {
    return [
        'series' => 200,
        'lessons' => 1300
    ];
});

Route::get('achievements', function () {
    $user = request()->user();
    return $user->achievements()->get();
})->middleware('auth:api');
