<?php

namespace Veldman\Components\View\Components;

use Illuminate\View\Component;

class Error extends Component
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('components::components.error');
    }
}
