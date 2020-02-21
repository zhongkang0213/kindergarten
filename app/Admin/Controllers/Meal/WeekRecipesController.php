<?php

namespace App\Admin\Controllers\Meal;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;
use App\Admin\Models\Meal\WeekRecipes as MealWeekRecipes;
use App\Admin\Widgets\Iframe;

class WeekRecipesController extends AdminController
{
    protected $title = '一周食谱';

    public function edit($id, Content $content)
    {
        $iframe = new Iframe([
            'path' => "",
            'params' => ['plan_id' => $id],
        ]);

        return $content->body($iframe);
    }

    protected function grid()
    {
        $grid = new Grid(new MealWeekRecipes);
        $grid->column('id', __('ID'))->sortable();
        $grid->column('name', __('名称'));
        //$grid->column('计划时间', __('拼音'));

        $grid->actions(function ($actions) {
            $actions->disableDelete();
            //$actions->disableEdit();
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
        $form = new Form(new MealWeekRecipes);

        $form->text('name', __('名称'));

        return $form;
    }

}
