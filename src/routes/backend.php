<?php

use Illuminate\Support\Facades\Route;

Route::get('backend', 'Culture\Framework\Http\Backend\DashboardController@index');