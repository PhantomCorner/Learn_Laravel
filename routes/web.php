<?php

use Illuminate\Support\Facades\Route;

Route::get('/{name}', function ($name) {
    return view('welcome')->with('name',$name);
});
