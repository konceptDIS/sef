<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
}) ->name('home');

Route::get('/about', function () {
    return view('about');
}) ->name('about');

Route::get('/gallery', function () {
    return view('gallery');
}) ->name('gallery');

Route::get('/donate', function () {
    return view('donate');
}) ->name('donate');

Route::get('/team', function () {
    return view('team');
}) ->name('team');

Route::get('/blog', function () {
    return view('blog');
}) ->name('blog');

Route::get('/blog-details', function () {
    return view('blog-details');
}) ->name('blog-details');

Route::get('/children', function () {
    return view('children');
}) ->name('children');

Route::get('/empowerment', function () {
    return view('empowerment');
}) ->name('empowerment');

Route::get('/civic', function () {
    return view('civic');
}) ->name('civic');

Route::get('/charity_ball', function () {
    return view('charity_ball');
}) ->name('charity_ball');

Route::get('/sallah_party', function () {
    return view('sallah_party');
}) ->name('sallah_party');

Route::get('/contact', function () {
    return view('contact');
}) ->name('contact');

Route::get('/health', function () {
    return view('health');
}) ->name('health');
