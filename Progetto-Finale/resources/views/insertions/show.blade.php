<x-main>
    <x-slot:title>Annuncio</x-slot:title>

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
                <h5 class="card-title">{{$insertion->title}}</h5>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta veritatis,
                    voluptatibus similique odio iste minus cumque. Molestiae aut, alias consequuntur autem eos unde
                    numquam at quibusdam ullam qui dignissimos cupiditate?</p>

            </div>
        </div>
    </div>
    </div>

</x-main>


<!-- <div class="container mt-5">
        <div>
            <h2>{{$insertion->title}}</h2>
        </div>

        <div></div>
       
    </div> -->