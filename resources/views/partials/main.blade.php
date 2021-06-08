<main class="main">
    <h1>Homepage</h1>

    @if (! empty($comics ) )
        <h3>card</h3>

        <ul>
            @foreach ($comics as $comic )
                <li></li>
            @endforeach
        </ul>

    @else
        <p>Nessun film disponibile </p>
    @endif
</main>
