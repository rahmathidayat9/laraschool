<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
    	return view('articles.index');
    }

    public function show($slug)
    {
    	return view('articles.show');
    }
}
