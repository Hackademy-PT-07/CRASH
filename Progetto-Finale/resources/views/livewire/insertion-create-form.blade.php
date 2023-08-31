<div class="container mt-5  text-white background-green rounded">
    <h4 class="pt-3">Inserisci annuncio</h4>
    <x-success />
    <div class="row">
        <form wire:submit.prevent="store" class="py-3">
            <div class="row text-white ">
                <div class="mt-1 col-12 col-md-5">
                    <label for="title">Nome del prodotto</label>
                    <input type="text" class="form-control" wire:model="insertion.title">
                    @error('insertion.title') <p class="small rounded my-2 errorBackground text-danger">{{ $message }}
                    </p> @enderror
                </div>
                <div class="mt-1 col-12 col-md-4">
                    <label for="category_id">Categoria</label>
                    <select name="categories[]" id="category_id" class="form-control" wire:model="insertion.category_id"
                        value=" ">
                        <option value="">Scegli una categoria</option>
                        @foreach(App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('insertion.category_id') <p class="small rounded my-2 errorBackground text-danger">
                        {{ $message }}
                    </p> @enderror
                </div>
                <div class="mt-2 col-12 col-md-3">
                    <label for="price">Prezzo</label>
                    <input type="number" wire:model="insertion.price" class="form-control">
                    @error('insertion.price') <p class="small rounded my-2 errorBackground text-danger">{{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="mt-2 col-12">
                    <label for="description">Descrizione</label>
                    <textarea wire:model="insertion.description" class="form-control" rows="5"></textarea>
                    @error('insertion.description') <p class="small rounded my-2 errorBackground text-danger">
                        {{ $message }}
                    </p> @enderror
                </div>
                <div class="mb-3 mt-3">
                    <input wire:model="temporary_images" type="file" multiple
                        class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img">
                    @error('temporary_images.*')
                    <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>
                @if (!empty($images))
                <div class="row">
                    <div class="col-12">
                        <p>Photo preview:</p>
                        <div class="row  border-0 rounded  py-4">
                            @foreach ($images as $key => $image)
                            <div class="col my-3">
                                <div class="mx-auto shadow img-fluid d-flex justify-content-center rounded"
                                    placeholder="carica immagine">
                                    <img class="img-preview my-2 img-fluid rounded" src="{{$image->temporaryUrl()}}"
                                        alt="">
                                </div>
                                <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto"
                                    wire:click="removeImage({{$key}})">
                                    Cancella</button>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                <div class="mt-2 col-12">
                    <button type="submit" class="btn buttonColor  w-100">Salva annuncio</button>
                </div>
            </div>
        </form>

    </div>
</div>
</div>