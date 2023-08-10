<div class="container mt-4">
    <div class="row">
        @forelse($category->announcements as $announcement)
        <div class="col-12 col-md-3">
            {{$announcement->title}}
        </div>
        @empty
        <p>non ci sono annunci per questa categoria</p>
        @endforelse
    </div>
</div>