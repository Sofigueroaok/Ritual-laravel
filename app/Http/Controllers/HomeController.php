<?php

namespace App\Http\Controllers;

use App\Models\Box;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $boxesDestacadas = Box::take(3)->get();
        $ultimosPosts = Post::latest()->take(2)->get();

        return view('home', compact('boxesDestacadas', 'ultimosPosts'));
    }
}