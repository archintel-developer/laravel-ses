<?php


use Illuminate\Support\Facades\Route;

Route::prefix('/laravel-ses')->group(function () {
    //receive SNS notifications
    Route::post('notification/bounce', 'ArchintelDev\LaravelSes\Controllers\BounceController@bounce');
    Route::post('notification/delivery', 'ArchintelDev\LaravelSes\Controllers\DeliveryController@delivery');
    Route::post('notification/complaint', 'ArchintelDev\LaravelSes\Controllers\ComplaintController@complaint');

    //user tracking
    Route::get('beacon/{beaconIdentifier}', 'ArchintelDev\LaravelSes\Controllers\OpenController@open');
    Route::get('link/{linkId}', 'ArchintelDev\LaravelSes\Controllers\LinkController@click');

    //package api
    Route::get('api/has/bounced/{email}', 'ArchintelDev\LaravelSes\Controllers\BounceController@hasBounced');
    Route::get('api/has/complained/{email}', 'ArchintelDev\LaravelSes\Controllers\ComplaintController@hasComplained');
    Route::get('api/stats/batch/{name}', 'ArchintelDev\LaravelSes\Controllers\StatsController@statsForBatch');
    Route::get('api/stats/email/{email}', 'ArchintelDev\LaravelSes\Controllers\StatsController@statsForEmail');
});
