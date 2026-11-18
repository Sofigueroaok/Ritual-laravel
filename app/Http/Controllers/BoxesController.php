<?php

namespace App\Http\Controllers;

use App\Models\Box;

class BoxesController extends Controller
{
    public function index()
    {
        $boxes = Box::all();
        return view('boxes.index', compact('boxes'));
    }

    public function show(int $id)
    {
        $box = Box::findOrFail($id);
        return view('boxes.show', compact('box'));
    }
}