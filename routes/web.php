<?php

use App\Models\Monsters;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/monsters', function () {
    $monsters = Monsters::all();
    return response($monsters, 200);
});

Route::get('/monsters/{id}', function ($id) {
    $monster = Monsters::find($id);
    if ($monster) {
        return response($monster, 200);
    } else {
        return response('Monster not found', 404);
    }
});
