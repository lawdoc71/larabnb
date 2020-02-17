<?php

use App\Bookable;
use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('bookables', function (Request $request) {
    return Bookable::all();
});

Route::get('bookables/{id}', function (Request $request, $id) {
    return Bookable::findOrFail($id);
});
