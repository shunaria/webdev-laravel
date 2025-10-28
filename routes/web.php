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

Route::get('/blog', function () {
    $blog = NamaModel::all();
    return view('blog', ['blogs' => $blog]);
});

Route::get('/project', function () {
    $projects = Project::all();
    return view('project', ['projects' => $projects]);
});

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