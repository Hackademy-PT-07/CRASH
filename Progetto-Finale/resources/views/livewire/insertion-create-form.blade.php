<div class="container mt-5">
   <h4>Inserisci annuncio</h4>
   <x-success/>
   <div class="row">
            <form wire:submit.prevent="store">
                <div class="row"> 
                    <div class="mt-2 col-12 col-md-5">
                        <label for="title">Nome del prodotto</label>
                        <input type="text" class="form-control" wire:model="insertion.title" >
                    </div>
                    <div class="mt-2 col-12 col-md-4">
                        <label for="category_id">Categoria</label>
                        <input type="text" wire:model="insertion.category_id" class="form-control">
                    </div>
                    <div class="mt-2 col-12 col-md-3">
                        <label for="price">Prezzo</label>
                        <input type="number" wire:model="insertion.price" class="form-control">
                    </div>
                    <div class="mt-2 col-12">
                        <label for="description">Descrizione</label>
                        <input type="text" wire:model="insertion.description" class="form-control">
                    </div>
                    <div class="mt-2 col-12">
                        <label for="body">Detaglio</label>
                        <textarea wire:model="insertion.body" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="mt-2 col-12">
                        <button type="submit" class="btn btn-secondary">Salva annuncio</button>
                    </div>
                </div>
            </form>
        
   </div>
</div>
