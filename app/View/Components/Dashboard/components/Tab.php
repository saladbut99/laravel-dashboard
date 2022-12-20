<?php

namespace App\View\Components\Content;

use Illuminate\View\Component;

class Tab extends Component
{

    public $products;
    public $delivered;
    public $pending;
    public $hold;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($products, $delivered, $pending, $hold)
    {
        $this->users = $products;
        $this->delivered = $delivered;
        $this->pending = $pending;
        $this->hold = $hold;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.content.title');
    }
}
