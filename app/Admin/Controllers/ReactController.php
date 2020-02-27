<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use App\Admin\Widgets\React;

class ReactController extends Controller
{
    public function index(Content $content)
    {
        return $content->body(new React([
            'path' => '',
            'params' => [],
        ]));
    }
}


