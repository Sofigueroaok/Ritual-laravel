<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    // --- VISTAS PÚBLICAS ---
    public function index()
    {
        $posts = Post::latest()->get();
        return view('post.index', compact('posts'));
    }

    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post.show', compact('post'));
    }

    // --- PANEL ADMIN  ---
    public function adminIndex()
    {
        $posts = Post::latest()->get();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo'    => 'required|min:5|max:255',
            'categoria' => 'required|max:100',
            'autor'     => 'required|max:100',
            'resumen'   => 'required|min:10',
            'contenido' => 'required|min:20',
        ]);

        $validated['slug'] = Str::slug($validated['titulo']) . '-' . uniqid();

        Post::create($validated);

        return redirect()
            ->route('admin.posts.index')
            ->with('feedback.message', 'La entrada "' . $validated['titulo'] . '" fue publicada con éxito.');
    }

    public function edit(int $id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, int $id)
    {
        $post = Post::findOrFail($id);

        $validated = $request->validate([
            'titulo'    => 'required|min:5|max:255',
            'categoria' => 'required|max:100',
            'autor'     => 'required|max:100',
            'resumen'   => 'required|min:10',
            'contenido' => 'required|min:20',
        ]);

        if ($post->titulo !== $validated['titulo']) {
            $validated['slug'] = Str::slug($validated['titulo']) . '-' . uniqid();
        }

        $post->update($validated);

        return redirect()
            ->route('admin.posts.index')
            ->with('feedback.message', 'La entrada "' . $post->titulo . '" fue actualizada.');
    }

    public function destroy(int $id)
    {
        $post = Post::findOrFail($id);
        $titulo = $post->titulo;
        $post->delete();

        return redirect()
            ->route('admin.posts.index')
            ->with('feedback.message', 'La entrada "' . $titulo . '" fue eliminada del Grimorio.');
    }
}