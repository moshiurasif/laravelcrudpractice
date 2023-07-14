<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentsController::class, 'onSelect']);
Route::get('/insert', function () {
    return view('insert');
});
Route::post('/insertData', [StudentsController::class, 'onInsert']);
Route::get('/update', function () {
    return view('update');
});
Route::post('/updateData', [StudentsController::class, 'onUpdate']);
Route::get('/delete', function () {
    return view('delete');
});
Route::post('/deleteData', [StudentsController::class, 'onDelete']);
