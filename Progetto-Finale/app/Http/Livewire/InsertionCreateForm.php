<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

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
        'temporary_images.*.max' => 'l\'immagine deve essere massimo di 1 Mb',
    ];

    protected function rules()
    {
        return [
            'insertion.title' => 'required',
            'insertion.category_id' => 'required',
            'insertion.price' => 'required',
            'insertion.description' => 'required',
            'temporary_images.*' => 'image|max:1024'
    
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

        session()->flash('success', 'Annuncio creato correttamente.');
        $this->newInsertion();
        $this->emitTo('insertion-list', 'loadInsertions');

    }

    public function newInsertion()
    {
        $this->insertion = new \App\Models\Insertions;

    }

    public function render()
    {
        return view('livewire.insertion-create-form');
    }
}
