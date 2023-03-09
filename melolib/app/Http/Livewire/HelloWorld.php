<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class HelloWorld extends ModalComponent
{
    public int $counter = 0;
    public $listeners = [
        'childModalEvent' => 'setCounterValue',
    ];

    public function setCounterValue($count)
    {
        $this->counter = $count;
    }
    public function update()
    {
        $this->counter++;
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
