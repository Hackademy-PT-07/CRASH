<div class="card my-3 border h-1075 border-dark">
    <div class="position-relative">
        @if($isAccepted === 0)
        <span class="position-absolute top-0 end-0 rejected rejected-color">rifiutato</span>
        @elseif($isAccepted === null)
        <span class="position-absolute top-0 end-0 toRevisioned review">da revisionare</span>
        @else
        <div class="hide"></div>
        @endif


        <img src="https://picsum.photos/200/100" class="card-img-top ">
    </div>


    <div class="card-body background-green  text-white ">
        <h4 class="card-title max-line ">{{ $title }}</h4>
        <h6 class="card-subtitle mb-2  text-white  ">{{ \App\Custom\Currency::formatEuro($price) }}</h6>
        <p class="card-text max-line   ">{{ $description }}</p>
        <div class="d-flex justify-content-center ">
            <a href="" class="text-white mb-3 max-line">{{__('ui.category_' . $categoryid)}}</a>

        </div>
        <div> <a href="{{ $link }}"
                class="btn d-flex justify-content-center text-white buttonColor">{{__('ui.showInsertion')}}</a>
        </div>
        <div class="text-center my-3">
            <p>{{$date}}</p>
        </div>
    </div>
</div>