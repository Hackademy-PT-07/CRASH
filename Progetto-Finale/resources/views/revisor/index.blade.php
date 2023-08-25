<x-main>
    <x-navbar />
    <div class="container h-100  my-4">
        <div class="row h-100 ">
            <div class="col-12 my-3">
                <h2>{{ $insertionToCheck ? "Ecco l'annuncio da revisionare:" : "Non ci sono annunci da revisionare"}}
                </h2>
            </div>
        </div>
    </div>
    @if($insertionToCheck)
    <div class="container my-5 rounded background-green text-white">
        <div class="row ">
            <div class="d-flex justify-content-between p-3">
                <h3 class="m-3">{{$insertionToCheck->title}}</h3>
                <p class="m-3 p-2 rounded categoryBadge text-white">{{$insertionToCheck->category->name}}</p>
            </div>

            <div class="col-12 my-5">
                <div id="carouselExampleInterval" class="carousel slide  mx-auto w-50  " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="https://picsum.photos/800/400?grayscale" class=" w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="https://picsum.photos/800/400?grayscale" class=" w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/800/400?grayscale" class=" w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12  mt-5 ms-5 me-5 ">
                <div class="pe-5 d-flex justify-content-between">
                    <h4>{{ \App\Custom\Currency::formatEuro($insertionToCheck->price)}}</h4>
                    <p class="pe-5">{{$insertionToCheck->created_at->diffForHumans()}}</p>
                </div>
                <p class="mt-2">{{$insertionToCheck->description}}</p>
            </div>
        </div>
        <div class="row mt-3 me-5 ms-5 mb-5 pb-5">
            <div class="col-12 col-md-6">
                <form action="{{route('revisor.accept_insertion', ['insertion'=>$insertionToCheck])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success">Accetta</button>
                </form>

            </div>
            <div class="col-12 col-md-6 text-end">
                <form action="{{route('revisor.reject_insertion', ['insertion'=>$insertionToCheck])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger">Rifiuta</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    @endif

    <x-footer />
</x-main>