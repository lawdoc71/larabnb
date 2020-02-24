<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('bookables', 'Api\BookableController@index');
// Route::get('bookables/{id}', 'Api\BookableController@show');

Route::apiResource('bookables', 'Api\BookableController')->only(['index', 'show']);

Route::get('bookables/{bookable}/availability', 'Api\BookableAvailabilityController')
     ->name('bookables.availability.show');

Route::get('bookables/{bookable}/reviews', 'Api\BookableReviewController')->name('bookables.reviews.show');

Route::apiResource('reviews', 'Api\ReviewController')->only(['show', 'store']);
