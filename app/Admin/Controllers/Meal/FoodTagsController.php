<?php

namespace App\Admin\Controllers\Meal;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Models\Meal\FoodTags as MealFoodTags;

class FoodTagsController extends AdminController
{
    protected $title = '标签';

    protected function grid()
    {
        $grid = new Grid(new MealFoodTags);
        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('名称'));
        $grid->column('created_at', __('创建时间'));
        $grid->column('updated_at', __('更新时间'));

        $grid->disableCreateButton();
        $grid->disableRowSelector();
        $grid->disableColumnSelector();
        //$grid->disableTools();
        $grid->disableExport();

        $grid->actions(function ($actions) {
            $actions->disableDelete();
            $actions->disableEdit();
            $actions->disableView();
        });

        return $grid;
    }

    protected function form()
    {
        $form = new Form(new MealFoodTags);

        $form->display('id', __("ID"));
        $form->text('name', __("名称"));

        return $form;
    }
}
