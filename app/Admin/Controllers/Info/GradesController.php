<?php

namespace App\Admin\Controllers\Info;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Controllers\AdminController;
use App\Admin\Models\Info\Grades as InfoGrades;

class GradesController extends AdminController
{
    protected $title = '年级';

    protected function grid()
    {
        $grid = new Grid(new InfoGrades);
        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('名称'));
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('更新时间'));

        $grid->model()->where('school_id', $this->schoolId());

        return $grid;
    }

    protected function form()
    {
        $form = new Form(new InfoGrades);

        $form->hidden('school_id')->default($this->schoolId());

        $form->display('id', __('ID'));
        $form->text('name', __('名称'));

        return $form;
    }
}



