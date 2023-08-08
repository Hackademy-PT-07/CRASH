<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InsertionList extends Component
{
    public $insertions;

    protected $listeners = [
        'loadInsertions'
    ];

    public function mount()
    {
        $this->loadInsertions();
    }

    public function loadInsertions()
    {
        $this->insertions = \App\Models\Insertions::orderBy('created_at', 'DESC')->get();
    }
    public function render()
    {
        return view('livewire.insertion-list');
    }
}
