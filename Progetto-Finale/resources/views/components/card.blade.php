<div class="card">
    <img src="https://picsum.photos/200/100" class="card-img-top" alt="...">
    <div class="card-body">
        <h4 class="card-title">{{ $title }}</h4>
        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $price }}</h6>
        <p class="card-text">{{ $description }}</p>
        <div class="d-flex justify-content-between ">
            <a href="">{{ $category }}</a>
            <a href="{{ $link}}" class="btn btn-secondary">Vai all'annuncio</a>
        </div>
    </div>
</div>