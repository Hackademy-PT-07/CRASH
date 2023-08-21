<x-main>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h2>{{ $insertionToCheck ? "Ecco l'annuncio da revisionare" : "Non ci sono annunci da revisionare"}}</h2>
            </div>
        </div>
    </div> 
    @if($insertionToCheck)
    <div class="container ">
        <div class="row">
            <div class="col-12 my-5 d-flex justify-content-center">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/900/400?grayscale" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/900/400?grayscale" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/900/400?grayscale" class="d-block w-100" alt="...">
                        </div>
                    </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div class="row">
    <div class="col-12 my-5 d-flex justify-content-center   ">
        <div class="card w-50 bg-transparent  text-white ">
            <div class="card-body w-100 rounded blurBackGround">
                <h3 class="card-title ">{{$insertionToCheck->title}} 
                    <p class="fs-6 mt-1">({{$insertionToCheck->category->name}})</p>
                </h3>
                <h4>{{ \App\Custom\Currency::formatEuro($insertionToCheck->price)}}</h4>
                <p class="card-text">{{$insertionToCheck->description}}</p>
            </div>
        </div>
    </div>
    </div>
    @endif

</x-main>