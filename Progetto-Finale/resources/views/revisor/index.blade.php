<x-main>
    <x-navbar />
    <div class="container mt-4">
        <x-success />
        <x-error />
    </div>
    <div class="container h-100  my-4">
        <div class="row h-100 ">
            <div class="col-12 my-3">
                <h2>{{ $insertionToCheck ? __('ui.reviewInsertion')  : __('ui.noInsertionsToReview')}}
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
        </div>

        <div id="carouselExampleInterval" class="carousel slide my-5 w-100 " data-bs-ride="carousel">
            <div class="carousel-inner rounded w-100">

                @forelse ($insertionToCheck->images as $image)
                <div class="carousel-item  @if ($loop->first) active @endif " data-bs-interval="10000">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ $image->getUrl(800,400) }}" class=" w-100" alt="...">
                        </div>
                        <div class="col-md-4 border-end">
                            <h5 class="tc-accent mt-3">Tags</h5>
                            <div class="p-2">
                                @if ($image->labels)
                                @foreach ($image->labels as $label)
                                <p class="d-inline">{{ $label }}</p>
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <h5 class="tc-accent">Revisione Immagini</h5>
                                <p>Adulti: <span class="{{ $image->adult }}"></span></p>
                                <p>Satira: <span class="{{ $image->spoof }}"></span></p>
                                <p>Medicina: <span class="{{ $image->medical }}"></span></p>
                                <p>Violenza: <span class="{{ $image->violence }}"></span></p>
                                <p>Contenuto Razzista: <span class="{{ $image->racy }}"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="https://picsum.photos/800/400" class=" w-100" alt="...">
                </div>
                @endforelse
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
                    <button type="submit" class="btn btn-success">{{__('ui.accept' )}}</button>
                </form>

            </div>
            <div class="col-12 col-md-6 text-end">
                <form action="{{route('revisor.reject_insertion', ['insertion'=>$insertionToCheck])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger">{{__('ui.reject' )}}</button>
                </form>
            </div>
        </div>
    </div>
    @endif


</x-main>