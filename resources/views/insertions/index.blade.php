<x-main>
    <x-slot:title>Presto.it</x-slot:title>
    <x-navbar />
    <div class="container-fluid">
        <div class="row m-5">
            <div class="col-12 ">
                <h2>Cerca annuncio</h2>
                <form action="{{ route('insertions.search') }}" method="GET" class="d-flex">
                    <input name="searched" class="form-control me-2" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn buttonColor" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>

            <div class="col-12 ">
                <h2>Tutti gli annunci</h2>
            </div>

            @forelse($insertions as $insertion)
            <div class="col-12 col-md-3 ">

                <x-card :title="$insertion->title" :category="$insertion->category->name" :price="$insertion->price"
                    :description="$insertion->description" :body="$insertion->body"
                    :date="$insertion->created_at->diffForHumans()" :link="route('insertions.show', $insertion)"
                    :isAccepted="$insertion->is_accepted" />

            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-warning py-3 shadow">
                    <p class="lead">Non ci sono annunci per questa ricerca</p>
                </div>
            </div>
            @endforelse
        </div>

    </div>


</x-main>
<x-footer />