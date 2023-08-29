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
                        href="{{ route('insertions.index') }}">{{ __('ui.allInsertions')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active colorNavbarButton" aria-current="page"
                        href="{{ route('insertions.create') }}">{{ __('ui.addInsertion')}}</a>
                </li>

                <li class="nav-item dropdown ">
                    <a class="nav-link active dropdown-toggle colorNavbarButton" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('ui.categories')}}
                    </a>


                    <ul class="dropdown-menu dropDownMenuBg colorNavbar background-green text-white">
                        @foreach(App\Models\Category::all() as $category)
                        <li><a class="dropdown-item text-effect colorNavbarButton  text-white"
                                href="{{route('categoryShow', compact('category'))}}">{{__('ui.category_' . $category->id)}}</a></li>
                        @endforeach
                    </ul>
                </li>

                @auth
                @if (Auth::user()->is_revisor)
                <li>
                    <form action="\revisor\home">
                        <button type="submit" class="btn buttonColor text-white">{{ __('ui.insertionsToBeReview')}}</button>
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
                        <button type="submit" class="btn">{{ __('ui.logout')}}</button>
                    </form>
                </li>
            </ul>
            @else
            <a href="/login" class="btn buttonColor text-white m-1">{{ __('ui.logIn')}}</a>
            <a href="/register" class="btn buttonColor text-white">{{ __('ui.register')}}</a>
            @endauth

            <div class="btn-group">
                <button type="button" class="btn mx-1 buttonColor dropdown-toggle" data-bs-toggle="dropdown"
                    data-bs-display="static" aria-expanded="false">
                    <i class="bi bi-flag-fill  text-white"></i>
                </button>
                <ul class="dropdown-menu background-green border border-white dropdown-menu-start dropdown-menu-lg-end W-25">
                    <li class="dropdown-item">                    
                            <x-language lang="it" nation="it"/> 
                       
                    </li>
                    <li class="dropdown-item">
                        <x-language lang="en" nation="gb"/>
                    </li>
                    <li class="dropdown-item">
                        <x-language lang="es" nation="es"/>
                    </li>
                </ul>
            </div>

        </div>
</nav>