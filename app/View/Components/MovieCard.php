<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MovieCard extends Component
{
    public $popularMovie;
    /**
     * Create a new component instance.
     */
    public function __construct($popularMovie)
    {
       $this->popularMovie = $popularMovie;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.movie-card');
    }
}
