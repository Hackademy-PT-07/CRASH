<x-main>
    <div class="container my-5">
    @forelse($category->insertions as $insertion)
    
    <h4>Tutti gli annunci della categoria {{ $category->name }}</h4>
    <div class="row">
       <div class="col-12 col-md-3">
            <x-card :title="$insertion->title"
                :category="$insertion->category->name"
                :price="$insertion->price"
                :description="$insertion->description"
                :body="$insertion->body"
                :link="route('insertions.show', $insertion)"/>
       </div>
       @empty 
        <div class="row">
            <div class="col-8 mx-auto">
            <h2>Non ci sono annunci della categoria {{ $category->name}}</h2>
            <h3>Pubblicane uno: <a href="{{route('insertions.index')}}">Inserisci annuncio</a></h3>
        </div>
    </div>
        

        @endforelse
    </div>
</div>

</x-main>