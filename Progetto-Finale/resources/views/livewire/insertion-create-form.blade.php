<div class="container mt-5">
   <h4>Inserisci annuncio</h4>
   <x-success/>
   <div class="row">
            <form wire:submit.prevent="store">
                <div class="row"> 
                    <div class="mt-2 col-12 col-md-5">
                        <label for="title">Nome del prodotto</label>
                        <input type="text" class="form-control" wire:model="insertion.title" >
                        @error('insertion.title') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-2 col-12 col-md-4">
                        <label for="category_id">Categoria</label>
                        <select name="categories[]" id="category_id" class="form-control" wire:model="insertion.category_id" value=" ">
                        <option value="" >Scegli una categoria</option>
                                @foreach(App\Models\Category::all() as $category) 
                                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                                @endforeach
                        </select>
                        @error('insertion.category_id') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-2 col-12 col-md-3">
                        <label for="price">Prezzo</label>
                        <input type="number" wire:model="insertion.price" class="form-control">
                        @error('insertion.price') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-2 col-12">
                        <label for="description">Descrizione breve</label>
                        <input type="text" wire:model="insertion.description" class="form-control">
                        @error('insertion.description') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-2 col-12">
                        <label for="body">Dettaglio</label>
                        <textarea wire:model="insertion.body" rows="4" class="form-control"></textarea>
                        @error('insertion.body') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-2 col-12">
                        <button type="submit" class="btn btn-secondary">Salva annuncio</button>
                    </div>
                </div>
            </form>
        
   </div>
</div>
