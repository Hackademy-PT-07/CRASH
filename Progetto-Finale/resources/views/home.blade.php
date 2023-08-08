<x-main>

    <h1>Presto.it</h1>

    @auth
    <a href="">Inserisce annuncio</a>
    @else
    <a href="/login">Accedi</a>
    <a href="/register">Registrati</a>
    @endauth
    

</x-main>
