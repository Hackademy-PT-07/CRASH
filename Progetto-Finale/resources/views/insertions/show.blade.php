 <x-main>

     <x-slot:title>Annuncio</x-slot:title>

     <x-navbar />


     <div class="container">
         <div class="row">
             <div class="col-12"></div>
             <div class="col-12"></div>
             <div class="col-12"></div>
         </div>
     </div>


 </x-main>





 <!--     <div class="container my-3 showContainer text-white">
        <div class="row ">


            <div class="col-12 ">
                <div class="col-12 d-flex justify-content-between mt-5 background-green rounded p-3">
                    <h3 class="m-3">{{$insertion->title}}</h3>
                    <p class="m-3 p-2 rounded categoryBadge text-white">{{$insertion->category->name}}</p>
                </div>
                <div id="carouselExampleInterval" class="carousel slide mt-5 mx-auto w-75   " data-bs-ride="carousel">
                    <div class="carousel-inner rounded ">
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

        <div class="row mt-5 background-green rounded">

            <div class="col-12  m-5">
                <div class="pe-5 d-flex justify-content-between">
                    <h4>{{ \App\Custom\Currency::formatEuro($insertion->price)}}</h4>
                    <p class="pe-5">{{$insertion->created_at->diffForHumans()}}</p>
                </div>
                <p class="mt-2">{{$insertion->description}}</p>

            </div>
        </div>
    </div> -->