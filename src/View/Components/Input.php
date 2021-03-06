<?php

namespace Veldman\Components\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $value;
    public $label;

    public function __construct($type, $name, $value = null, $label = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->value = old($name, $value);
        $this->label = $label == null ? ucfirst(str_replace("_", " ", $name)) : $label;
    }

    public function render()
    {
        return view('components::components.input');
    }
}
