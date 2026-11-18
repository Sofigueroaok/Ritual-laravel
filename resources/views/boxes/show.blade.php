<x-layout>
    <x-slot:title>{{ $post->titulo }} — RITUAL</x-slot:title>

    <section class="section">
        <a href="{{ route('posts.index') }}" class="btn btn-outline-green" style="margin-bottom: 1.5rem;">
            ← Volver al Grimorio
        </a>

        <article class="card-ritual">
            <div>
                <span class="badge-category">{{ $post->categoria }}</span>
                <h1>{{ $post->titulo }}</h1>
                <p style="font-size: 0.9rem; color: var(--color-text-muted); border-bottom: 1px solid var(--color-border); padding-bottom: 1rem;">
                    Escrito por <strong>{{ $post->autor }}</strong> el {{ $post->created_at->format('d/m/Y') }}
                </p>

                <p style="font-size: 1.15rem; color: var(--color-violet-light); margin-top: 1.25rem;">
                    {{ $post->resumen }}
                </p>

                <div style="margin-top: 1.5rem; line-height: 1.8;">
                    <p>{{ $post->contenido }}</p>
                </div>
            </div>
        </article>
    </section>
</x-layout>