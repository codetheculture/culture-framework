<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Culture\Framework\Http\Backend')->group(function () {
    Route::get('backend', 'DashboardController@index');
});