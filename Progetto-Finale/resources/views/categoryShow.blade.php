<x-main>
    <x-navbar />
    <div class="container text-center text-white my-5  rounded-3 ">
        <div class="row">
            <h4 class="my-3 p-2 background-green rounded-3">Tutti gli annunci della categoria {{$category->name }}</h4>
            @forelse($category->insertions as $insertion)
            <div class="col-12 col-md-3">
                <x-card :title="$insertion->title" :category="$insertion->category->name" :price="$insertion->price"
                    :description="$insertion->description" :body="$insertion->body"
                    :date="$insertion->created_at->diffForHumans()" :link="route('insertions.show', $insertion)"
                    :isAccepted="$insertion->is_accepted" />
            </div>
            @empty
            <div class="col-12 my-5 mx-auto background-green  rounded-3">
                <h2>Non ci sono annunci della categoria {{$category->name}}</h2>
                <h3>Pubblicane uno: <a href="{{route('insertions.create')}}">
                        <div class="btn buttonColor">Inseriscine uno</div>
                    </a></h3>
            </div>
            @endforelse
        </div>
    </div>
</x-main>