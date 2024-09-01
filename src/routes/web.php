<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use ut\contacts\Http\Controllers\ContactsController;

Route::controller(ContactsController::class)->group(function () {
    Route::get('/contacts', 'index');
    Route::post('/contacts', 'send');
});