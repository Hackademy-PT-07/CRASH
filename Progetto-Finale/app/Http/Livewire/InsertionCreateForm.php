<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InsertionCreateForm extends Component
{
    public $insertion;

    protected $messages = [
        'insertion.title.required' => 'Il campo nome del prodotto non può essere vuoto.',
        'insertion.category_id.required' => 'Il campo categoria del prodotto non può essere vuoto.',
        'insertion.price.required' => 'Il campo prezzo del prodotto non può essere vuoto.',
        'insertion.description.required' => 'Il campo descrizione del prodotto non può essere vuoto.'
    ];

    protected function rules()
    {
        return [
            'insertion.title' => 'required',
            'insertion.category_id' => 'required',
            'insertion.price' => 'required',
            'insertion.description' => 'required',
    
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
