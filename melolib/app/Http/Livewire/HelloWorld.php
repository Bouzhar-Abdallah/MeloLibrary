<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class HelloWorld extends ModalComponent
{
    public int $counter = 0;

    public function update()
    {
        $this->counter++;
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
