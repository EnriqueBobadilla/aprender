<?php

use Illuminate\Support\Facades\Route;


//sitio-personal.com =>welcome

//sitio-personal.com/contacto => contact

//sitio-personal.com/blog => blog

//sitio-personal.com/about => about


Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/blog', 'blog')->name('blog');
Route::view('/about', 'about')->name('about');
