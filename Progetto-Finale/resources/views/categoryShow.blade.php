<x-main>
    <x-navbar />
    <div class="container text-center text-white my-5   rounded-3 ">
        <div class="row">
            <h4 class="my-3 p-2 background-green rounded-3">{{__('ui.allInsertionsfrom')}}
                "{{__('ui.category_' . $category->id)}}"</h4>
            <div class="col-12 col-md-8 mx-md-auto mb-3">
                <h2 class="text-dark">{{__('ui.searchInsertion')}}</h2>
                <form action="{{ route('insertions.search') }}" method="GET" class="d-flex">
                    <input name="searched" class="form-control me-2" type="search" placeholder="{{__('ui.search')}}"
                        aria-label="search">
                    <button class="btn buttonColor" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
        <div class="row">
            @forelse($category->insertions as $insertion)

            <div class="col-12 col-md-3">
                <x-card :title="$insertion->title" :category="$insertion->category->name" :price="$insertion->price"
                    :description="$insertion->description" :body="$insertion->body"
                    :categoryid="$insertion->category->id" :date="$insertion->created_at->diffForHumans()"
                    :link="route('insertions.show', $insertion)" :isAccepted="$insertion->is_accepted" />
            </div>

            @empty
            <div class="col-12 my-5 mx-auto background-green  rounded-3">
                <h2>{{__('ui.notInsertionsfor')}} "{{__('ui.category_' . $category->id)}}"</h2>
                <h3>{{__('ui.newforCategoryInsertion')}} <a href="{{route('insertions.create')}}">
                        <div class="btn buttonColor">{{__('ui.addInsertion')}}</div>
                    </a></h3>
            </div>
            @endforelse
        </div>
    </div>



</x-main>