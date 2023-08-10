<div class="container my-5">
   <h4>Annunci più recenti</h4>
    <div class="row">
        @foreach($insertions as $insertion)
       <div class="col-12 col-md-3">
            <x-card :title="$insertion->title"
                :category="$insertion->category->name"
                :price="$insertion->price"
                :description="$insertion->description"
                :body="$insertion->body"
                :link="route('insertions.show', $insertion)"/>
       </div>

        @endforeach
    </div>
</div>
