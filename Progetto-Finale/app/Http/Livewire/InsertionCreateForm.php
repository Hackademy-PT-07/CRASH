<?php

namespace App\Http\Livewire;

use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Livewire\Component;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class InsertionCreateForm extends Component
{
    use WithFileUploads;
    public $insertion;
    public $temporary_images;
    public $images = [];

    protected $messages = [
        'insertion.title.required' => 'Il campo nome del prodotto non può essere vuoto.',
        'insertion.category_id.required' => 'Il campo categoria del prodotto non può essere vuoto.',
        'insertion.price.required' => 'Il campo prezzo del prodotto non può essere vuoto.',
        'insertion.description.required' => 'Il campo descrizione del prodotto non può essere vuoto.',
        'temporary_images.*.image' => 'I file devono essere immagini',
        'temporary_images.*.max' => 'l\'immagine deve essere massimo di 4 Mb',
    ];

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:4096',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if(in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    protected function rules()
    {
        return [
            'insertion.title' => 'required',
            'insertion.category_id' => 'required',
            'insertion.price' => 'required',
            'insertion.description' => 'required',
            'temporary_images.*' => 'image|max:4096'
    
        ];
    }

    public function mount()
    {
        $this->newInsertion();
    }


    public function store()
    {   
        $this->validate();
        $this->insertion->user_id = auth()->user()->id;
        $this->insertion->save();
        
        if (count($this->images)) {
            foreach ($this->images as $image) {
               // $this->insertion->images()->create(['path' => $image->store('images', 'public')]);
                
                $newFileName = "insertions/{$this->insertion->id}";
                $newImage = $this->insertion->images()->create(['path' => $image->store($newFileName, 'public')]);

                dispatch(new ResizeImage($newImage->path, 300, 300));
                dispatch(new ResizeImage($newImage->path, 800, 400));

                dispatch(new GoogleVisionSafeSearch($newImage->id));
                dispatch(new GoogleVisionLabelImage($newImage->id));

                
            }

            File::deleteDirectory(storage_path('/app/livewire-tm'));
            
        }
        
        
        session()->flash('success', 'Annuncio creato correttamente, sarà pubblicato dopo la revisione.');
        $this->newInsertion();
        $this->emitTo('insertion-list', 'loadInsertions');
    
    }

    public function newInsertion()
    {
        $this->insertion = new \App\Models\Insertions;
        $this->images = [];
        $this->temporary_images = [];

    }

    public function render()
    {
        return view('livewire.insertion-create-form');
    }
}
