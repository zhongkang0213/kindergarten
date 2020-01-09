<?php

namespace App\Admin\Controllers\Meal;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Models\Meal\WeekRecipes as MealWeekRecipes;

use Encore\Admin\Widgets\InfoBox;
use App\Admin\Widgets\Demo;

class WeekRecipesController extends AdminController
{
    protected $title = '一周食谱';
                     
    protected function grid()
    {
        $grid = new Grid(new MealWeekRecipes);
        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('名称'));
        $grid->column('计划时间', __('拼音'));

        $grid->actions(function ($actions) {
            $actions->disableDelete();
            $actions->disableEdit();
            $actions->disableView();
        });

        //$grid->disableCreateButton();
        $grid->disableRowSelector();
        $grid->disableColumnSelector();
        //$grid->disableTools();
        $grid->disableExport();

        return $grid;
    }

    protected function form()
    {
        $demo = new Demo;

        return $demo;
        //$infoBox = new InfoBox('New Users', 'users', 'aqua', '/admin/users', '1024');

        //return $infoBox;
        //$form = new Form(new MealWeekRecipes);

        //return $form;
    }

}
