<?php

namespace Veldman\Components\View\Components;

use Illuminate\View\Component;

class TextArea extends Component
{
    public $name;
    public $value;
    public $label;

    public function __construct($name, $value = null, $label = null)
    {
        $this->name = $name;
        $this->value = old($name, $value);
        $this->label = ucfirst(str_replace("_", " ", $name));
    }

    public function render()
    {
        return view('components::components.textarea');
    }
}
