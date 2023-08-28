<nav class="navbar navbar-expand-lg   border-bottom border-body background-green sticky-top" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-middle " href="{{ route('home') }}">Presto.it</a>
        <button class="navbar-toggler buttonColor" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">

        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active colorNavbarButton" aria-current="page"
                        href="{{ route('insertions.index') }}">Tutti gli
                        annunci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active colorNavbarButton" aria-current="page"
                        href="{{ route('insertions.create') }}">Inserisci
                        annuncio</a>
                </li>

                <li class="nav-item dropdown ">
                    <a class="nav-link active dropdown-toggle colorNavbarButton" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorie
                    </a>


                    <ul class="dropdown-menu dropDownMenuBg colorNavbar background-green text-white">
                        @foreach(App\Models\Category::all() as $category)
                        <li><a class="dropdown-item text-effect colorNavbarButton  text-white"
                                href="{{route('categoryShow', compact('category'))}}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @auth
                @if (Auth::user()->is_revisor)
                <li>
                    <form action="\revisor\home">
                        <button type="submit" class="btn buttonColor text-white">Revisione annunci</button>
                        <span class="position absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{App\Models\Insertions::toBeRevisionedCount()}}</span>
                    </form>


                </li>
                @endif
                @endauth
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
        <div class="nav-item dropdown dropdown-center mx-3 ">
            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-flag-fill"></i>
            </a>
            <ul class="dropdown-menu pl-5 ">
                <li><a class=" dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
</nav>