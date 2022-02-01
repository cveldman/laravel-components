<?php

namespace Veldman\Components\View\Components;

use Illuminate\View\Component;

class Row extends Component
{
    public function __construct()
    {
    }

    public function render()
    {
        return view('components::components.row');
    }
}
