<div class="card h-100 mb-5 bg-transparent">
    <img src="https://picsum.photos/200/100" class="card-img-top " alt="...">
    <div class="card-body   blurBackGround  text-white ">
        <h4 class="card-title">{{ $title }}</h4>
        <h6 class="card-subtitle mb-2  text-white ">{{ \App\Custom\Currency::formatEuro($price) }}</h6>
        <p class="card-text">{{ $description }}</p>
        <div class="d-flex justify-content-between ">
            <a href="" class="text-white">{{ $category }}</a>
            <a href="{{ $link }}" class="btn text-white buttonColor">Vai all'annuncio</a>
        </div>
        <div class="text-center">
            <p>{{$date}}</p>
        </div>
    </div>
</div>