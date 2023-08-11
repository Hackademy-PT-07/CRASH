<div class="container text-white my-5">
    <h4 class="blurBackGround my-5 w-100 rounded d-flex justify-content-center">Annunci più recenti</h4>
    <div class="row">
        @foreach($insertions as $insertion)
        <div class="col-12 col-md-3">
            <x-card :title="$insertion->title" :category="$insertion->category->name" :price="$insertion->price"
                :description="$insertion->description" :body="$insertion->body"
                :link="route('insertions.show', $insertion)" :date="$insertion->created_at->diffForHumans()" />
        </div>

        @endforeach
    </div>
</div>