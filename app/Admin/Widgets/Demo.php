<?php

namespace App\Admin\Widgets;

use Illuminate\Contracts\Support\Renderable;
use Encore\Admin\Widgets\Widget;

class Demo extends Widget implements Renderable
{
    protected $view = 'widgets.demo';
        
    public function render()
    {
        return view($this->view)->render();
    }
}
