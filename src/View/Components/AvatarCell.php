<?php

namespace Veldman\Components\View\Components;

use Illuminate\View\Component;

class AvatarCell extends Component
{
    public $src;

    public function __construct($src)
    {
        $this->src = $src;
    }

    public function render()
    {
        return view('components::components.avatar-cell');
    }
}
