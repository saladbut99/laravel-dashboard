<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Nav extends Component
{
  
    //set variables here to include for the constructor for sending data to a component
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.nav.nav');
    }
}
