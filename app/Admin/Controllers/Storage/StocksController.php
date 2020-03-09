<?php

namespace App\Admin\Controllers\Storage;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Models\Storage\Stock;

class StocksController extends AdminController
{
    protected $title = '库存';

    public function grid() 
    {
        $grid = new Grid(new Stock);

        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('名称'))->display(function() {
            return $this->name;
        });


        $grid->disableExport();

        return $grid;
    }

    public function form()
    {
        $form = new Form(new Supplier);

        $form->text('contact', __('采购人'));

        return $form;
    }
}
