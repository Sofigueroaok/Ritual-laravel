<x-layout>
    <x-slot:title>Catálogo de Boxes — RITUAL</x-slot:title>

    <section class="section">
        <h1>Catálogo de Boxes Botánicas</h1>
        <p>Elegí el ritual ideal para tu piel, tu cuerpo o tu cabello.</p>

        <div class="grid-boxes">
            @foreach ($boxes as $box)
                <article class="card-ritual">
                    <div>
                        <span class="badge-category">{{ $box->categoria }}</span>
                        <h3>{{ $box->nombre }}</h3>
                        <p>{{ $box->descripcion }}</p>
                    </div>

                    <div>
                        <div class="price-tag">${{ number_format($box->precio, 0, ',', '.') }}</div>
                        <a href="{{ route('boxes.show', $box->id) }}" class="btn btn-outline-green">
                            Ver ritual completo
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
</x-layout>