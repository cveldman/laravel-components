<?php

namespace Veldman\Components;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Veldman\Components\View\Components\Form;
use Veldman\Components\View\Components\Input;
use Veldman\Components\View\Components\Label;
use Veldman\Components\View\Components\Select;
use Veldman\Components\View\Components\Table;
use Veldman\Components\View\Components\Error;
use Veldman\Components\View\Components\TextArea;
use Veldman\Components\View\Components\Button;

class ComponentsServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'components');

        Blade::component('table', Table::class);
        Blade::component('form', Form::class);
        Blade::component('input', Input::class);
        Blade::component('select', Select::class);
        Blade::component('label', Label::class);
        Blade::component('error', Error::class);
        Blade::component('textarea', TextArea::class);
        Blade::component('button', Button::class);
    }
}