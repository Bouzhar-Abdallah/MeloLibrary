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
            
            $this->options = artist::all();
            
        }elseif ($name == 'genre') {
            $this->options = genre::all();
        }elseif ($name == 'band') {
            $this->options = band::all();
            
        }
    }

    public function render()
    {
        /*  {{ dd($options) }} */
        return view('components.select');
    }
}
