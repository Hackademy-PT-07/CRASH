<x-main>
    <x-slot:title>Presto.it</x-slot:title>

    <header class=" text-white">
        <div class="row ">
            <div class="col-12">
                <h1>Presto.it</h1>
            </div>
        </div>
    </header>


    <div class="container mt-4 text-white">
        <div class="my-5 text-center">


    <section class="container mt-5">
        <div class="my-5">
            <h2>Tutti gli annunci</h2>
        </div>
        <div class="row mt-5">
        @foreach($insertions as $insertion)    
            <x-card :title="$insertion->title"
                :category="$insertion->category->name"
                :price="$insertion->price"
                :description="$insertion->description"
                :body="$insertion->body"
                :link="route('insertions.show', $insertion)"/>
                @endforeach
        </div>    
    </section>
</x-main>
