<?php

namespace App\Admin\Controllers\Storage;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Controllers\AdminController;
use App\Admin\Models\Storage\Supplier;


class SuppliesController extends AdminController
{
    protected $title = '供货商';

    public function grid() 
    {
        $grid = new Grid(new Supplier);

        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('名称'));
        $grid->column('address', __('地址'));
        $grid->column('phone', __('电话'));
        $grid->column('contact', __('联系人'));

        $grid->model()->where('school_id', $this->schoolId());

        $grid->disableExport();

        return $grid;
    }

    public function form()
    {
        $form = new Form(new Supplier);

        $form->hidden('school_id')->default($this->schoolId());

        $form->text('name', __('名称'))->required();
        $form->text('address', __('地址'))->required();
        $form->mobile('phone', __('电话'))->options(['mask' => '999 9999 9999'])
             ->required();
        $form->text('contact', __('联系人'))->required();

        return $form;
    }
}
