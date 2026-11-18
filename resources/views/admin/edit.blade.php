<x-layout>
    <x-slot:title>Editar Entrada — RITUAL</x-slot:title>

    <section class="section">
        <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-green" style="margin-bottom: 1.5rem;">
            ← Volver al panel
        </a>

        <div class="card-ritual">
            <h1>Editar entrada: {{ $post->titulo }}</h1>

            <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" style="display: grid; gap: 1.25rem; margin-top: 1.5rem;">
                @csrf
                @method('PUT')

                <div>
                    <label for="titulo"><strong>Título</strong></label><br>
                    <input type="text" id="titulo" name="titulo" value="{{ old('titulo', $post->titulo) }}" style="width: 100%; padding: 0.65rem; margin-top: 0.35rem;">
                    @error('titulo') <small style="color: #f87171;">{{ $message }}</small> @enderror
                </div>

                <div>
                    <label for="categoria"><strong>Categoría</strong></label><br>
                    <input type="text" id="categoria" name="categoria" value="{{ old('categoria', $post->categoria) }}" style="width: 100%; padding: 0.65rem; margin-top: 0.35rem;">
                    @error('categoria') <small style="color: #f87171;">{{ $message }}</small> @enderror
                </div>

                <div>
                    <label for="autor"><strong>Autor/a</strong></label><br>
                    <input type="text" id="autor" name="autor" value="{{ old('autor', $post->autor) }}" style="width: 100%; padding: 0.65rem; margin-top: 0.35rem;">
                    @error('autor') <small style="color: #f87171;">{{ $message }}</small> @enderror
                </div>

                <div>
                    <label for="resumen"><strong>Resumen / Bajada</strong></label><br>
                    <textarea id="resumen" name="resumen" rows="3" style="width: 100%; padding: 0.65rem; margin-top: 0.35rem;">{{ old('resumen', $post->resumen) }}</textarea>
                    @error('resumen') <small style="color: #f87171;">{{ $message }}</small> @enderror
                </div>

                <div>
                    <label for="contenido"><strong>Contenido completo</strong></label><br>
                    <textarea id="contenido" name="contenido" rows="7" style="width: 100%; padding: 0.65rem; margin-top: 0.35rem;">{{ old('contenido', $post->contenido) }}</textarea>
                    @error('contenido') <small style="color: #f87171;">{{ $message }}</small> @enderror
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </section>
</x-layout>