<div class="container my-5">
    <h4 class=" my-5 w-100 rounded d-flex justify-content-center">{{__('ui.allYourInsertions')}}</h4>
    <div class="row">
        @foreach($insertions as $insertion)
        <div class="col-12 col-md-3">
            <x-card :title="$insertion->title" :category="$insertion->category->name" :price="$insertion->price"
                :description="$insertion->description" :body="$insertion->body" :categoryid="$insertion->category->id"
                :link="route('insertions.show', $insertion)" :date="$insertion->created_at->diffForHumans()"
                :isAccepted="$insertion->is_accepted" />
        </div>

        @endforeach
    </div>
</div>