<?php

namespace App\View\Components;

use App\Models\artist;
use App\Models\band;
use App\Models\genre;
use Illuminate\View\Component;

class Select extends Component
{
    public $name;
    public $label;
    public $options;

    public function __construct($name, $label)
    {
        $this->name = $name;
        $this->label = $label;
        if ($name == 'artist') {
            
            $artists = artist::all();
            $bands = band::all();
            $this->options = $artists->merge($bands);
        }elseif ($name == 'genre') {
            $this->options = genre::all();
        }
    }

    public function render()
    {
        
        return view('components.select');
    }
}
