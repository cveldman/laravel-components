<?php

namespace Veldman\Components\View\Components;

use Illuminate\View\Component;

class ACell extends Component
{
    public $href;

    public function __construct($href)
    {
        $this->href = $href;
    }

    public function render()
    {
        return view('components::components.a-cell');
    }
}
