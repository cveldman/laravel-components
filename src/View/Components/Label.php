<?php

namespace Veldman\Components\View\Components;

use Illuminate\View\Component;

class Label extends Component
{
    public $for;
    public $label;

    public function __construct($for, $label = null)
    {
        $this->for = $for;
        $this->label = $label;
    }

    public function render()
    {
        return view('components::components.label');
    }
}
