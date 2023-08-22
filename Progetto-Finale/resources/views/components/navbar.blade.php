<nav class="navbar navbar-expand-lg w-100  border-bottom border-body colorNavbar sticky-top" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-middle" href="{{ route('home') }}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('insertions.index') }}">Inserisci
                        annuncio</a>
                </li>

                <li class="nav-item dropdown ">
                    <a class="nav-link active dropdown-toggle" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorie
                    </a>
                    

                    <ul class="dropdown-menu dropDownMenuBg">
                        @foreach(App\Models\Category::all() as $category)
                        <li><a class="dropdown-item"
                                href="{{route('categoryShow', compact('category'))}}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li>
                <form action="\revisor/home">
                <button type="submit" class="btn buttonColor text-white">Revisione annunci</button>
                        <span class="position absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"> {{App\Models\Insertions::toBeRevisionedCount()}}</span>
                </form>   
                
            
                </li>
                
            </ul>

            @auth
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn">Esci</button>
                    </form>
                </li>
            </ul>
            @else
            <a href="/login" class="btn buttonColor text-white m-1">Accedi</a>
            <a href="/register" class="btn buttonColor text-white">Registrati</a>
            @endauth
        </div>
    </div>
</nav>