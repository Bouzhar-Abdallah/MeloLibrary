<?php

namespace App\Http\Livewire;

use App\Models\artist;
use LivewireUI\Modal\ModalComponent;

class EditArtistModal extends ModalComponent
{
    public $name;
    public $artist;
    public function mount($id)
    {
        $this->name = $id;
        $this->artist = artist::find($id);
    }

    public function closeAndUpdateHelloWorld()
    {
        $this->closeModalWithEvents([
	        /* 'childModalEvent', // Emit global event
            HelloWorld::getName() => 'childModalEvent', // Emit event to specific Livewire component */
            HelloWorld::getName() => ['childModalEvent', [10]], // Emit event to specific Livewire component with a parameter            
        ]);
    }

    public function render()
    {
        return view('livewire.edit-artist-modal');
    }
}
