<?php

namespace App\Admin\Widgets;

use Illuminate\Contracts\Support\Renderable;
use Encore\Admin\Widgets\Widget;

class Iframe extends Widget implements Renderable
{
    protected $view = 'widgets.iframe';

    protected function variables()
    {
        return [
            'path' => $this->path,
            'params' => http_build_query($this->params),
        ];
    }

    public function render()
    {
        return view($this->view, $this->variables())->render();
    }
}

