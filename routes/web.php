<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.index');
})->name('index');


Route::get('/cover-letter', function () {
    return view('layout.sections.cover-letter');
})->name('cover-letter');


Route::get('/contact', function () {
    return view('layout.sections.contact');
})->name('contact');
