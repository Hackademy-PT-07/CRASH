<x-main>
    <x-slot:title>Annuncio</x-slot:title>
    
        <x-navbar />

    <div class="container-fluid">
            <div class="row ">
                <div class="col-12 mt-5">
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid ">
            <div class="row">
                <div class="col-12 text-center my-5">
                    <h3 class="card-title ">{{$insertion->title}}
                        <p class="fs-6 mt-1">({{$insertion->category->name}})</p>
                    </h3>
                    <h4>{{ \App\Custom\Currency::formatEuro($insertion->price)}}</h4>
                    <p class="card-text">{{$insertion->description}}</p>

                </div>
            </div>
        </div>
            </section>

</x-main>
<x-footer />
    
  