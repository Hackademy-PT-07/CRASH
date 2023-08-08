<x-main>
    <x-slot:title>Home</x-slot:title>
    
    <header><h1>Presto.it</h1></header>

     <div class="authBtns d-flex">
        @auth
        <a href="" class="newAddBtn">Inserisci annuncio</a>
        @else
        <a href="/login" class="loginLinkBtn">Accedi</a>
        <a href="/register" class="registerLinkBtn">Registrati</a>
        @endauth
    </div>

    <section class="container">
        <div class="mt-4">
            <h2>Tutti gli annunci</h2>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-4 mb-3">
                <x-card/>
            </div>
            <div class="col-12 col-md-4 mb-3">
                Annuncio 1 
            </div>
            <div class="col-12 col-md-4 mb-3">
                Annuncio 2
            </div><div class="col-12 col-md-4 mb-3">
                Annuncio 3
            </div>
        </div>    
    </section>
</x-main>
