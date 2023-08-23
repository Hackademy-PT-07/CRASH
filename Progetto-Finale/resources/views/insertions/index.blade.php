<x-main>
    <x-slot:title>Presto.it</x-slot:title>
    <x-navbar />
    <div class="container-fluid">
        <div class="row m-5">
            <div class="col-12 ">
              <h2>Tutti gli annunci</h2>
            </div>  

        @foreach($insertions as $insertion)
        <div class="col-12 col-md-3">
        
            <x-card :title="$insertion->title" :category="$insertion->category->name"
                :price="$insertion->price" :description="$insertion->description" :body="$insertion->body"
                :date="$insertion->created_at->diffForHumans()"
                :link="route('insertions.show', $insertion)" />
        
        </div>
        @endforeach
        </div>
        
    </div>  


    </x-main>
<x-footer />