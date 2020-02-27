<?php

namespace App\Admin\Widgets;

use Illuminate\Contracts\Support\Renderable;
use Encore\Admin\Widgets\Widget;

class React extends Widget implements Renderable
{
    protected $view = 'widgets.react';
        
    public function render()
    {
        return view($this->view)->render();
    }
}
