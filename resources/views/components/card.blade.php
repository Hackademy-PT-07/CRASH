<div class="card my-3 border border-dark">
    <div class="position-relative">
        @if($isAccepted === 0)
        <span class="position-absolute top-0 end-0 rejected">rifiutato</span>
        @elseif($isAccepted === null)
        <span class="position-absolute top-0 end-0 toRevisioned">da revisionare</span>
        @else
        <div class="hide"></div>
        @endif


        <img src="https://picsum.photos/200/100" class="card-img-top ">
    </div>


    <div class="card-body background-green  text-white ">
        <h4 class="card-title">{{ $title }}</h4>
        <h6 class="card-subtitle mb-2  text-white ">{{ \App\Custom\Currency::formatEuro($price) }}</h6>
        <p class="card-text inline d-flex justify-content-center ">{{ $description }}</p>
        <div class="d-flex justify-content-center ">
            <a href="" class="text-white mb-3">{{ $category }}</a>

        </div>
        <div> <a href="{{ $link }}" class="btn d-flex justify-content-centertext-white buttonColor">Vai all'annuncio</a>
        </div>
        <div class="text-center my-3">
            <p>{{$date}}</p>
        </div>
    </div>
</div>