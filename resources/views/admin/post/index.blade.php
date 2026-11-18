<x-layout>
    <x-slot:title>Administrar RITUAL</x-slot:title>

    <section class="section">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; margin-bottom: 1.5rem;">
            <h1>Panel de Administración Ritual</h1>
            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">+ Nueva Entrada</a>
        </div>

        <div class="card-ritual" style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left;">
                <thead>
                    <tr style="border-bottom: 1px solid var(--color-border);">
                        <th style="padding: 0.75rem;">ID</th>
                        <th style="padding: 0.75rem;">Título</th>
                        <th style="padding: 0.75rem;">Categoría</th>
                        <th style="padding: 0.75rem;">Autor</th>
                        <th style="padding: 0.75rem;">Fecha</th>
                        <th style="padding: 0.75rem;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr style="border-bottom: 1px solid var(--color-border);">
                            <td style="padding: 0.75rem;">{{ $post->id }}</td>
                            <td style="padding: 0.75rem;"><strong>{{ $post->titulo }}</strong></td>
                            <td style="padding: 0.75rem;"><span class="badge-category">{{ $post->categoria }}</span></td>
                            <td style="padding: 0.75rem;">{{ $post->autor }}</td>
                            <td style="padding: 0.75rem;">{{ $post->created_at->format('d/m/Y') }}</td>
                            <td style="padding: 0.75rem; display: flex; gap: 0.5rem; flex-wrap: wrap;">
                                <a href="{{ route('posts.show', $post->slug) }}" class="btn btn-outline-green">Ver</a>
                                <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-outline-green">Editar</a>

                                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST"
                                      onsubmit="return confirm('¿Estás segura de que querés eliminar «{{ $post->titulo }}»?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary" style="background-color: #7f1d1d; border-color: #991b1b;">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" style="padding: 1rem;">Todavia no hay novedades cargadas en el Grimorio.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
</x-layout>