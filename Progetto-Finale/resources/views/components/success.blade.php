@if(session()->has('success'))
    <div class="bg-white">
        {{ session('success') }}
    </div>
@endif