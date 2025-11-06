<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NamaModel;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = NamaModel::with('user')->get();
        return view('blog', ['blogs' => $blogs]);
    }
}
