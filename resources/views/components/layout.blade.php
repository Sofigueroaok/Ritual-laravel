<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'RITUAL — Cosmética Botánica & Bienestar' }}</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body>

    <header class="site-header">
        <nav class="navbar container">
            <a href="{{ route('home') }}" class="brand-logo">✦ RITUAL ✦</a>
            <ul class="nav-links">

                <li><x-nav-link route="boxes.index">Boxes</x-nav-link></li>
                <li><x-nav-link route="posts.index"> Blog</x-nav-link></li>
                <li><x-nav-link route="admin.posts.index">Admin</x-nav-link></li>
                
            </ul>
        </nav>
    </header>

    <main class="container">
    @if (session()->has('feedback.message'))
        <div class="card-ritual" style="border-color: var(--color-sage); margin-top: 1.5rem; padding: 1rem 1.5rem;">
            <p style="margin: 0; color: var(--color-sage-light);">✦ {{ session('feedback.message') }}</p>
        </div>
    @endif

    {{ $slot }}
</main>

    <footer class="site-footer">
        <div class="container">
            <p>© 2026 RITUAL — Magia Botánica & Cuidado Personal</p>
        </div>
    </footer>

</body>
</html>