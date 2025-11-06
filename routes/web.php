<?php

use Illuminate\Support\Facades\Route;
use App\Models\NamaModel;
use App\Models\Project;
use App\Models\Experience;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index']);

Route::get('/project', [App\Http\Controllers\ProjectController::class, 'index']);

Route::get('/experiences', function () {
    $experiences = Experience::all();
    return view('Experience', ['experiences' => $experiences]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::post('/contact', function () {
    // Handle form submission here
    return redirect('/contact')->with('success', 'Message sent successfully!');
});