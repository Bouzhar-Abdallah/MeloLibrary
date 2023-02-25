<?php

namespace App\View\Components;

use App\Models\artist;
use App\Models\band;
use App\Models\genre;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminList extends Component
{
    /**
     * Create a new component instance.
     */
    public $options;
    public $name;
    public function __construct($name)
    {
        
        $this->name = $name;
        switch ($name) {
            case 'artist':
                $this->options = artist::withCount('songs')->get();
                

                break;
            case 'genre':
                $this->options = genre::withCount('songs')->get();
                break;
            case 'band':
                $this->options = band::withCount('songs')->get();
                break;
            case 'language':
                $this->options = Language::all();
                break;
            case 'writer':
                $this->options = Writer::all();
                break;
            default:
                $this->options = null;
        }
       
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        
        return view('components.adminList');
    }
}
