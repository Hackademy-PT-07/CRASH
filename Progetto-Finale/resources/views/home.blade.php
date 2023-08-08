<x-main>
    <x-slot:title>Home</x-slot:title>
    
    <header><h1>Presto.it</h1></header>

     <div class="authBtns d-flex">
        @auth
        <a href="{{ route('insertions.index') }}" class="newAddBtn">Inserisci annuncio</a>
        @else
        <a href="/login" class="loginLinkBtn">Accedi</a>
        <a href="/register" class="registerLinkBtn">Registrati</a>
        @endauth
    </div>
     <div class="container mt-4">
        <div class="my-5 text-center">
            <h2>Categorie</h2>
        </div>
        <div class="row">
            <div class="col-6 col-md-3 text-center mb-5">
                <a href="">categoria 1</a>
            </div>
            <div class="col-6 col-md-3 text-center mb-5">
                <a href="">categoria 2</a>
            </div> 
            <div class="col-6 col-md-3 text-center mb-5">
                <a href="">categoria 3</a>
            </div> 
            <div class="col-6 col-md-3 text-center mb-5">
                <a href="">categoria 4</a>
            </div>
            <div class="col-6 col-md-3 text-center mb-5">
                <a href="">categoria 5</a>
            </div> 
            <div class="col-6 col-md-3 text-center mb-5">
                <a href="">categoria 6</a>
            </div>
            <div class="col-6 col-md-3 text-center mb-5">
                <a href="">categoria 7</a>
            </div> 
            <div class="col-6 col-md-3 text-center mb-5">
                <a href="">categoria 8</a>
            </div>
        </div>
     </div>

    <section class="container mt-5">
        <div class="my-5">
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
