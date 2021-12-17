<?php

namespace Veldman\Components\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public $name;
    public $options;
    public $value;
    public $label;

    public function __construct($name, $options, $value = null, $label = null)
    {
        $this->name = $name;
        $this->options = $options;
        $this->value = old($name, $value);
        $this->label = ucfirst(str_replace("_", " ", $name));
    }

    public function render()
    {
        return view('components::components.select');
    }
}
