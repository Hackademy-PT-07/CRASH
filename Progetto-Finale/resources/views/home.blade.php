<x-main>
    <x-slot:title>Presto.it</x-slot:title>

    <header class="p-0">
        <img class="img-fluid" src="\images\header.jpg" alt="">
        <div class="container">
            <div class="row ">
                <div class="col-12">


                </div>
            </div>
        </div>

    </header>
    <x-navbar />

    <div class="container mt-4 ">
        <div class="my-5 text-center">


            <section class="container mt-5">
                <div class="my-5">
                    <h2>Tutti gli annunci</h2>
                </div>
                <div class="row mt-5">

                    @foreach($insertions as $insertion)
                    <div class="col-12 col-md-3">

                        <x-card :title="$insertion->title" :category="$insertion->category->name"
                            :price="$insertion->price" :description="$insertion->description" :body="$insertion->body"
                            :date="$insertion->created_at->diffForHumans()"
                            :link="route('insertions.show', $insertion)" />

                    </div>
                    @endforeach
                </div>
            </section>
            
</x-main>
<x-footer />