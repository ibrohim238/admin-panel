<?php

use App\Http\Controllers\Admins\PanelController;
use App\Http\Controllers\Admins\UserController;

Route::get('/', PanelController::class)->name('panel');

Route::resource('user', UserController::class)->except('edit');