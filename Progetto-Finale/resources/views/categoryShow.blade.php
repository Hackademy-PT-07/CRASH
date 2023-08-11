<x-main>
    <div class="container text-center text-white my-5">
        <div class="row">
            <h4>Tutti gli annunci della categoria {{ $category->name }}</h4>
            @forelse($category->insertions as $insertion)
            <div class="col-12 col-md-3">
                <x-card :title="$insertion->title" :category="$insertion->category->name" :price="$insertion->price"
                    :description="$insertion->description" :body="$insertion->body" :date="$insertion->created_at->diffForHumans()"
                    :link="route('insertions.show', $insertion)" />
            </div>
            @empty
            <div class="col-8 mx-auto">
                <h2>Non ci sono annunci della categoria {{ $category->name}}</h2>
                <h3>Pubblicane uno: <a href="{{route('insertions.index')}}">Inserisci annuncio</a></h3>
            </div>
            @endforelse
        </div>
    </div>
</x-main>