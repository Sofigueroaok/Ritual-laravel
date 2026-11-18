<x-layout>
    <x-slot:title>Grimorio & Novedades — RITUAL</x-slot:title>

    <section class="section">
        <h1>Grimorio Botánico & Novedades</h1>
        <p>Guías de herbolaria, fases lunares y consejos para aprovechar cada elemento de tus boxes.</p>

        <div class="grid-boxes">
            @foreach ($posts as $post)
                <article class="card-ritual">
                    <div>
                        <span class="badge-category">{{ $post->categoria }}</span>
                        <h2>
                            <a href="{{ route('posts.show', $post->slug) }}">{{ $post->titulo }}</a>
                        </h2>
                        <p style="font-size: 0.85rem; color: var(--color-text-muted);">
                            Por {{ $post->autor }} | Publicado el {{ $post->created_at->format('d/m/Y') }}
                        </p>
                        <p>{{ $post->resumen }}</p>
                    </div>
                    <a href="{{ route('posts.show', $post->slug) }}" class="btn btn-primary">Leer artículo</a>
                </article>
            @endforeach
        </div>
    </section>
</x-layout>